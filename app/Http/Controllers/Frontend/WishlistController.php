<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductPriceVariation;
use App\Models\Admin\ProductVariation;
use App\Models\Frontend\WishList;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('customers');
    }


    public function addToWishlist($productId)
    {
        if (auth()->guard('customers')->check()) {
            $customerId = auth()->guard('customers')->user()->id;

            Wishlist::create([
                'user_id' => $customerId,
                'product_id' => $productId,
            ]);
        }

        return back();

    }




    public function wishlist(Request $request)
    {
        // $wishlist = [
        //     [

        //         'image' => 'path/to/image1.jpg',
        //         'product_name' => 'Product 1',
        //         'price' => 50.00,

        //         'rating'=>4
        //     ],
        //     [

        //         'image' => 'path/to/image2.jpg',
        //         'product_name' => 'Product 2',
        //         'price' => 30.00,

        //         'rating'=>3
        //     ],

        // ];
        // $wishlist=[];

        $wishlist = WishList::join('products', 'products.id', '=', 'wish_lists.product_id')->get();

        // dd($wishlist);

        // if ($wishlist->variation) {
        //     $count = count($request->data);

        //     $variation = ProductVariation::where("product_id", $request->productid)
        //         ->whereIn("attribute_value_id", $request->data)
        //         ->groupBy("pvp_id")
        //         ->havingRaw('COUNT(pvp_id)=' . $count)
        //         ->pluck("pvp_id");
        //     if ($variation->count() > 0) {
        //         $productprice = ProductPriceVariation::where("id", $variation[0])->first();
        //         return response()->json([
        //             'success' => true,
        //             'message' => 'Product price variation found successfully.',
        //             'data' => $productprice,
        //         ]);
        //     } else {
        //         return response()->json([
        //             'success' => true,
        //             'message' => 'Product price variation found successfully.',
        //             'data' => (object) [],
        //         ]);
        //     }
        // } else {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'No product price variation found for the given criteria.',
        //         'data' => $wishlist,
        //     ]);
        // }

        return view('frontend.pages.wishlist',compact('wishlist'));


    }


    public function deleteWishlist($productId)
    {
        $wishlist = Wishlist::where('product_id', $productId)->first();

        if (!$wishlist) {
            return redirect()->route('index')->with('error', 'Wishlist item not found');
        }

        $wishlist->delete();

        return redirect()->route('index')->with('success', 'Wishlist item deleted successfully');
    }





}
