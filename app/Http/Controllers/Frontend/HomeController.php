<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Softsaro_Banner;
use App\Models\Softsaro_BillingInfo;
use App\Models\Softsaro_Blog;
use App\Models\Softsaro_Category;
use App\Models\Softsaro_Commission;
use App\Models\Softsaro_order;
use App\Models\Softsaro_OrderItems;
use App\Models\Softsaro_Product;
use App\Models\Softsaro_Product_Attribute;
use App\Models\Softsaro_ProductImages;
use App\Models\Softsaro_termsandpolicy;
use App\Models\Softsaro_User;
use App\Models\Softsaro_wishlist;
use Illuminate\Auth\Events\Validated;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Softsaro_Banner::orderby('banner_order')->get();

        $featuredproducts = Softsaro_Product::where('featured', 1)->orderby('product_order')->limit(5)->get();

        $products = Softsaro_Product::orderBy('id', 'desc')->limit(5)->get();


        // $products = Softsaro_Product::orderby('product_order')->get();

        $blogs = Softsaro_Blog::orderBy('id', 'desc')->limit(3)->get();

        return view("frontend.homepage.index", compact("slider", "products", "featuredproducts", "blogs"));
    }

    public function getblog()
    {
        $blogs = Softsaro_Blog::orderBy("id", "desc")->paginate(20);
        $title = "All Blogs";
        $message = "Blogs found";
        $searchterm = "";

        return view("frontend.blogs.blog", compact("blogs", "title", "message", "searchterm"));
    }

    public function searchblog(Request $request)
    {
        $searchterm = $request->searchterm;
        // dd($searchterm);
        $title = "Search Blogs for ( " . $searchterm . ")";

        $blogs = Softsaro_Blog::where('title', 'like', '%' . $searchterm . '%')
            ->orWhere('description', 'like', '%' . $searchterm . '%')
            ->paginate(20);
        if (!$blogs->isEmpty()) {
            $message = "Blogs found";
            return view("frontend.blogs.blog", compact("blogs", "title", "message", "searchterm"));
        } else {
            $message = "No blogs found";
            return view("frontend.blogs.blog", compact("blogs", "title", "message", "searchterm"));
        }
    }

    public function single(Request $request, Softsaro_Blog $blog)
    {
        // dd($blog);
        $ip = $request->ip();

        $currentUserLocation = Location::get($ip);
        $allblogs = Softsaro_Blog::where('id', '!=', $blog->id)->paginate(4);
        $blog->views++;
        $blog->save();
        $slug = $blog->slug;
        return view("frontend.blogs.singlepage", compact('blog', 'slug', 'allblogs', 'currentUserLocation'));
    }

    public function singlepage(Request $request, Softsaro_Product $product)
    {
        if (request('scifn')) {
            $value = request('scifn');
            Cookie::queue('scifn', $value, 120);
        }

        $cookieValue = request()->cookie('scifn');
        // dd($cookieValue);
        $productImage = Softsaro_ProductImages::where("product_id", $product->id)->get();

        $attributeItems = Softsaro_Product_Attribute::join("softsaro__attributes_groups", "softsaro__attributes_groups.id", "=", "softsaro__product__attributes.attribute_group_id")
            ->select('softsaro__product__attributes.attribute_group_id', 'softsaro__attributes_groups.attribute_group_name')
            ->where('product_id', $product->id)
            ->distinct()
            ->get();

        // $cart = Cart::content();
        return view("frontend.singlepage.index", compact("product", "productImage", "attributeItems"));
    }

    public function services()
    {
        return view("frontend.services.service");
    }

    public function onlineprograms()
    {
        return view("frontend.onlineprograms.onlineprograms");
    }

    public function products()
    {
        $products = Softsaro_Product::paginate(20);
        $title = "All Products";
        $params = $_GET;
        return view("frontend.allproductpage.allproduct", compact("products", "params", "title"));
    }

    public function wishlist()
    {
        $products = Softsaro_wishlist::join('softsaro__products', 'softsaro_wishlists.productid', '=', 'softsaro__products.id')
            ->where('softsaro_wishlists.userid', Auth::guard('softsaro__users')->user()->id)
            ->select('softsaro_wishlists.*', 'softsaro__products.*')
            ->get();
        // $products = Softsaro_Product::get();
        $title = "Wishlist";
        return view("frontend.categorysinglepage.list", compact("title", "products"));
    }

    public function addwishlist(Softsaro_Product $product)
    {
        if (!Auth::guard('softsaro__users')->user()) {

            return [
                'success' => false,
                'requiresAuth' => true,
                'message' => 'Please login to continue.'
            ];
        }
        $check = Softsaro_wishlist::where('productid', $product->id)
            ->where('userid', Auth::guard('softsaro__users')->user()->id)
            ->first();
        if ($check) {
            return [
                'success' => false,
                'cartsaved' => true,
                'message' => 'Product already added in Wishlist.'
            ];
        }


        Softsaro_wishlist::create([
            'productid' => $product->id,
            'userid' => Auth::guard('softsaro__users')->user()->id,
        ]);
        // return redirect()->route('login')->with('success', 'Successfully Registered');
    }
    //remove wishlist
    public function removewishlist(Softsaro_Product $product)
    {
        $deletewish = Softsaro_wishlist::where('productid', $product->id)
            ->where('userid', Auth::guard('softsaro__users')->user()->id)
            ->first();

        $deletewish->delete();
    }

    public function affilate()
    {
        return view("frontend.affilate.notmember");
    }

    public function checkout()
    {
        $items = \Cart::getContent()->sort();
        if (Auth::guard('softsaro__users')->user()) {
            $users = Softsaro_User::where("id", Auth::guard('softsaro__users')->user()->id)->first();
            return view("frontend.cart.checkout", compact("items", "users"));
        }
        $users = "";
        return view("frontend.cart.checkout", compact("items", "users"));
    }


    public function orderExists($numberOfDigits)
    {
        $min = pow(10, $numberOfDigits - 1);
        $max = pow(10, $numberOfDigits) - 1;
        $random_number = rand($min, $max);
        $random_check = Softsaro_order::where('order_id', $random_number)->first();
        if ($random_check) {
            return $this->orderExists($numberOfDigits);
        }
        return $random_number;
    }

    public function checkoutpay(Request $request)
    {
        $sumprice = \Cart::getSubTotal();
        $totalamount = $sumprice + $request->delivery_charge_;

        if ($request->order_from == "valleyout") {
            if ($request->paymentmethod == "Cash-On-Delivery") {

                return back()->with("poperror", "Currently Cash ON Delivery Not Availabel Outside Valley.");
            }
        }

        $items = \Cart::getContent();
        if ($items->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is Empty');
        }
        if ($totalamount != $request->alltotalamount) {
            abort(404);
        }
        // $sumprice = \Cart::getSubTotal();

        $ordernum = $this->orderExists(8);
        $orderid = "order_" . $ordernum;
        if (Auth::guard('softsaro__users')->user()) {
            $userid = Auth::guard('softsaro__users')->user()->id;
        } else {
            $userid = "0";
        }
        $ordertable = Softsaro_order::create([
            'user_id' => $userid,
            'order_id' => $orderid,
            'items' => $items->count(),
            'amount' => $totalamount,
            'payment_method' => $request->paymentmethod,
            'payment_status' => "PENDING",
            'order_status' => "PROCESSING",
            'view_status' => 0,
            'order_from' => $request->order_from,
            'delivery_charge' => $request->delivery_charge_,
        ]);

        foreach ($items as $item) {
            $product = Softsaro_Product::where("id", $item->id)->first();
            $product->product_stock -= $item->quantity;
            $product->save();
            $incentive_commission[] = $product->incentive_commission_amount * $item->quantity;
            $affilate_commission[] = $product->affiliate_commission_amount * $item->quantity;

            $orderitem = Softsaro_OrderItems::create([
                'order_id' => $ordertable->id,
                'product_id' => $product->id,
                'quantity' => $item->quantity,
                'product_price' => $product->product_price,
                'incentive_amount' => $product->incentive_commission_amount,
                'affiliate_amount' => $product->affiliate_commission_amount,
            ]);
        }




        if ($request->paymentmethod == "Cash-On-Delivery") {
            \Cart::clear();
        }
        if ($request->paymethod == "Khalti") {
            $amount = $totalamount;
            $customer_name = $request->billing_name;
            $customer_email = $request->billing_email;
            $customer_phone = $request->billing_phonenumber;

            $configs = [
                "return_url" => route("thanks", $ordertable->order_id),
                "website_url" => "http://127.0.0.1:8000/",
                "amount" =>  10 * 100,
                // "amount" =>  $amount * 100,
                "purchase_order_id" => $ordertable->order_id,
                "purchase_order_name" => $ordertable->order_id,
                "customer_info" => [
                    "name" => $customer_name,
                    "email" => $customer_email,
                    "phone" => $customer_phone
                ]
            ];
            $json_configs = json_encode($configs);
            $curl = curl_init();
            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => 'https://khalti.com/api/v2/epayment/initiate/',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $json_configs,
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Key live_secret_key_ab40f549e6e0435a906acc45a8c3fde9',
                        'Content-Type: application/json',
                    ),
                )
            );
            $response = curl_exec($curl);

            curl_close($curl);
            dd($response, $curl);

            if ($response == true) {
                $data = json_decode($response);
                return redirect($data->payment_url);
            }
        }
    }

    public function affilateform()
    {
        $userinfo = Auth::guard('softsaro__users')->user();
        // dd($user);
        return view("frontend.affilate.affilateform", compact("userinfo"));
    }

    public function latestproduct()
    {
        // $products = Softsaro_Product::get();
        $products = Softsaro_Product::orderBy('id', 'desc')->paginate(20);
        $title = "Latest Products";
        $params = $_GET;
        return view("frontend.allproductpage.allproduct", compact("title", "params", "products"));
    }

    public function popularproducts()
    {
        $products = Softsaro_Product::paginate(20);
        $title = "Popular Products";
        $params = $_GET;
        return view("frontend.allproductpage.allproduct", compact("title", "params", "products"));
    }

    public function categorysearch(Softsaro_Category $category)
    {
        // dd($category);
        $products = Softsaro_Product::join("softsaro__product__categories", "softsaro__products.id", "=", "softsaro__product__categories.product_id")
            ->where("softsaro__product__categories.category_id", $category->id)
            ->paginate(20);


        // $products = Softsaro_Product::where("category_id", $category->id)->paginate(20);
        $title = $category->categoryname;
        $params = $_GET;
        return view("frontend.allproductpage.allproduct", compact("title", "params", "products"));
        // $cat=Softsaro_Category
        // $products = Softsaro_Product::get();
        // $title = "Popular Products";
        // return view("frontend.allproductpage.allproduct", compact("title", "products"));
    }

    public function termsandcondition()
    {
        $termspolicy = Softsaro_termsandpolicy::where('id', 1)->first();

        // dd($terms);
        return view('frontend.termsandpolicy.termandpolicy', compact('termspolicy'));
    }
    public function privacypolicy()
    {
        $termspolicy = Softsaro_termsandpolicy::where('id', 2)->first();

        // dd($terms);
        return view('frontend.termsandpolicy.termandpolicy', compact('termspolicy'));
    }

    public function autocomplete(Request $request)
    {
        $query = $request->input('term');
        $products = Softsaro_Product::where('product_name', 'LIKE', "%$query%")->limit(10)->get();
        $filteredProducts = $products->map(function ($product) {
            return [
                'product_name' => $product->product_name,
                'product_slug' => $product->slug,
            ];
        });
        return response()->json($filteredProducts);
    }

    public function productsearch(Request $request)
    {
        $query = $request->input('search-term');
        $products = Softsaro_Product::where('product_name', 'LIKE', "%$query%")->paginate(20);
        // $title = $category->categoryname;
        $title = "Search Products for (" . $query . ")";
        $params = $_GET;
        return view("frontend.allproductpage.allproduct", compact("title", "params", "products"));
        // return view("frontend.categorysinglepage.list", compact("title", "products"));

    }

    public function filtersearch(Request $request)
    {
        $minPrice = $request->input('min-price');
        $maxPrice = $request->input('max-price');
        $catslug = $request->input('categoryname');
        // dd(request('categoryname'));

        $category = Softsaro_Category::where("slug", $catslug)->first();
        if ($catslug) {
            $title = $category->categoryname;
            $products = Softsaro_Product::where("category_id", $category->id)
                ->whereBetween('product_price', [$minPrice, $maxPrice])->paginate(20);
            $params = $_GET;
        } else {
            $title = "Search Products";
            $products = Softsaro_Product::whereBetween('product_price', [$minPrice, $maxPrice])->paginate(20);
            $params = $_GET;
        }


        return view("frontend.allproductpage.allproduct", compact("title", 'params', "products"));

        // $query = $request->input('product-name');
        // $products = Softsaro_Product::where('product_name', 'LIKE', "%$query%")->get();

        // $title = "Search Products";
        // return view("frontend.allproductpage.allproduct", compact("title", "products"));


    }
}
