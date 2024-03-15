<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Mail\Contactmail;
use App\Models\Admin\About;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\HomeBanner;
use App\Models\Admin\Privacypolicy;
use App\Models\Admin\Product;
use App\Models\Admin\ProductAttributeCategory;
use App\Models\Admin\ProductAttributeSet;
use App\Models\Admin\SecondBanner;
use App\Models\Admin\Terms;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mail;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $a = $this->getsubcategories(3); //laptops and computers

        $categories = Category::where('parent_id', '0')->get();

        $desktopbanners = HomeBanner::where('mobileview', 0)->get();
        $mobileBanners = HomeBanner::where('mobileview', 1)->get();
        $products = Product::latest()->limit(8)->get();
        $subcategories = Product::whereIn('category_id', $a)->get();
        $secondbanners = SecondBanner::latest()->take(2)->get();

        // $blogs = Blog::orderBy("id", "desc")->paginate(20);

        return view('frontend.home.index', compact('categories', 'mobileBanners', 'desktopbanners', 'products', 'subcategories', 'secondbanners', ));
    }



    public function category()
    {

        $categories = Category::where('parent_id', '0')->get();
        return view('frontend.pages.allcategory', compact('categories'));
    }

    public function categoryproducts(Category $category)
    {

        // dd($category);

// dd($_GET);
            $attributeValues = $_GET['attribute'] ?? '';
            $minPrice = $_GET['min-price']?? '';
            $maxPrice = $_GET['max-price']?? '';



        $a = $this->getsubcategories($category->id);

        // dd($a);

        $b = $this->getchildcategories($category->id);

        // comment

        $sub = Category::whereIn('id', $a)->get();

        $data = Product::distinct()->whereIn('category_id', $a);
        $data = $data->leftJoin('product_price_variations', 'product_price_variations.product_id', '=', 'products.id');
        // $title = "laptops-computers";

        if ($minPrice && $maxPrice) {
            $data =  $data->whereBetween('product_price_variations.price', [$minPrice, $maxPrice])->orWhereBetween('product_price', [$minPrice, $maxPrice]);
        }

        $data = $data->select('products.*')->get();

        // dd($data);

        $attributeIds = ProductAttributeCategory::whereIn('category_id', $b)
            ->join('attribute_groups', 'product_attribute_categories.attribute_group_id', '=', 'attribute_groups.id')
            ->get();



        return view('frontend.pages.category-products', compact('attributeIds', 'data',));
    }



    public function usedPhone(Category $category)
    {

        // dd($category);

// dd($_GET);
            $attributeValues = $_GET['attribute'] ?? '';
            $minPrice = $_GET['min-price']?? '';
            $maxPrice = $_GET['max-price']?? '';



        $a = $this->getsubcategories($category->id);

        // dd($a);

        $b = $this->getchildcategories($category->id);

        // dd($b);

        // comment

        $sub = Category::whereIn('id', $a)->get();

        $data = Product::distinct()->whereIn('category_id', $a);
        $data = $data->leftJoin('product_price_variations', 'product_price_variations.product_id', '=', 'products.id');
        // $title = "Used Phones";

        if ($minPrice && $maxPrice) {
            $data =  $data->whereBetween('product_price_variations.price', [$minPrice, $maxPrice])->orWhereBetween('product_price', [$minPrice, $maxPrice]);
        }

        $data = $data->select('products.*')->get();

        // dd($data);

        $attributeIds = ProductAttributeCategory::whereIn('category_id', $b)
            ->join('attribute_groups', 'product_attribute_categories.attribute_group_id', '=', 'attribute_groups.id')
            ->get();



        return view('frontend.pages.usedPhone', compact( 'data', 'attributeIds'));
    }

    // public function latestProduct()
    // {
    //     $products = Product::latest()->limit(8)->get();
    //     return view('frontend.pages.category-products', compact('products'));

    // }

    public function latestProduct()
    {

        // dd($category);

// dd($_GET);
            $attributeValues = $_GET['attribute'] ?? '';
            $minPrice = $_GET['min-price']?? '';
            $maxPrice = $_GET['max-price']?? '';





        // comment


        $data = Product::distinct();
        $data = $data->leftJoin('product_price_variations', 'product_price_variations.product_id', '=', 'products.id');
// $title = "Latest Product";

        if ($minPrice && $maxPrice) {
            $data =  $data->whereBetween('product_price_variations.price', [$minPrice, $maxPrice])->orWhereBetween('product_price', [$minPrice, $maxPrice]);
        }

        $data = $data->select('products.*')->get();

        // dd($data);

        $attributeIds = ProductAttributeCategory::
            join('attribute_groups', 'product_attribute_categories.attribute_group_id', '=', 'attribute_groups.id')
            ->get();



        return view('frontend.pages.category-products', compact('attributeIds', 'data'));
    }




    public function location()
    {



        return view("frontend.location.index");
    }



    public function allproducts()
    {

        // $products = Product::latest()->limit(8)->get();

        $allproducts = Product::all();
        return view('frontend.pages.allproducts', compact('allproducts'));
    }

    public function productdetails(Product $product)
    {

        // $currenturls = url()->full();
        // return view('frontend.pages.product-details',compact('product','currenturls'));
        return view('frontend.pages.product-details', compact('product'));
    }

    public function aboutus()
    {
        // $home = Home::all()->first();
        $about = About::all()->first();
        // $serviceadmin = ServiceAdim::all();
        return view('frontend.about.index', compact('about'));
    }

    public function contact()
    {

        return view('frontend.contact.contact');
    }

    public function contactstore(StoreContactRequest $request)
    {

        $req = $request->all();

        $mailData = Contact::create($req);
        Mail::to('rubisha@softsaro.com')->send(new Contactmail($mailData));
        return redirect()->back()->with('success', 'Thank You!!');
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('frontend.faq.faq', compact('faqs'));
    }

    public function privacypolicy()
    {
        $privacy = Privacypolicy::first();

        return view('frontend.pages.privacypolicy', compact('privacy'));
    }

    public function termsandcondition()
    {
        $terms = Terms::first();

        return view('frontend.pages.terms', compact('terms'));
    }

    // blogs

    public function getblog()
    {
        $blogs = Blog::orderBy("id", "desc")->paginate(20);
        $title = "All Blogs";
        $message = "Blogs found";
        $searchterm = "";

        return view("frontend.blogs.blog", compact("blogs", "title", "message", "searchterm"));
    }

    public function single(Request $request, Blog $blog)
    {

        $allblogs = Blog::where('id', '!=', $blog->id)->paginate(4);
        $blog->views++;
        $blog->save();
        $slug = $blog->slug;
        $ip = $request->ip();

        $name = Auth::guard('customers')->user() ? Auth::guard('customers')->user()->name : 'Anonymous';
        $mailData = [

            'blog' => $blog,
            'name' => $name,
            'status' => "view",
        ];

        return view("frontend.blogs.singlepage", compact('blog', 'slug', 'allblogs'));
    }

    public function searchblog(Request $request)
    {
        $searchterm = $request->searchterm;
        // dd($searchterm);
        $title = "Search Blogs for ( " . $searchterm . ")";

        $blogs = Blog::where('title', 'like', '%' . $searchterm . '%')
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

    public function productdetailss()
    {

        return view('frontend.pages.productdetails');
    }

    public function checkout()
    {

        $item = \Cart::getContent()->first();
        // dd($item);

        return view("frontend.pages.checkout", compact("item"));
    }


    public function getsubcategories($category_id)
    {

        $categories = Category::where('parent_id', $category_id)->get();


        $subcategories = [$category_id];

        foreach ($categories as $category) {
            $subcategories[] = $category->id;
            $categorysecond = Category::where('parent_id', $category->id)->get();

            foreach ($categorysecond as $second) {
                $subcategories[] = $second->id;
            }
        }

        return $subcategories;
    }


    public function getchildcategories($category_id)
    {


        $categories = Category::where('id', $category_id)->first();

        if($categories==null){
            return null;
        }

        if ($categories->parent_id != 0) {

            return $this->getchildcategories($categories->parent_id);
        }

        return $categories;
    }
}
