<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\ProductPriceVariation;
use App\Models\Admin\ProductVariation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::get();

        return view('frontend.home.index', compact('products'));
    }


    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     $categoryIDs = Category::where('category_name', 'like', '%' . $query . '%')->pluck('id');

    //     $products = Product::whereIn('category_id', $categoryIDs)->get();

    //     $products = Product::whereIn('category_id', $categoryIDs)->get();

    //     return view('frontend.pages.search', compact('products'));
    // }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $productIDs = Product::where('product_name', 'like', '%' . $query . '%')->pluck('id');
        $categoryIDs = Category::where('category_name', 'like', '%' . $query . '%')->pluck('id');

            $products = Product::whereIn('id', $productIDs)
                            ->orWhereIn('category_id', $categoryIDs)
                            ->get();

        return view('frontend.pages.search', compact('products' , 'query'));
    }


    public function checkprice(Request $request)
    {
        $product = Product::where("id", $request->productid)->first();

        if ($product->variation) {
            $count = count($request->data);

            $variation = ProductVariation::where("product_id", $request->productid)
                ->whereIn("attribute_value_id", $request->data)
                ->groupBy("pvp_id")
                ->havingRaw('COUNT(pvp_id)=' . $count)
                ->pluck("pvp_id");
            if ($variation->count() > 0) {
                $productprice = ProductPriceVariation::where("id", $variation[0])->first();
                return response()->json([
                    'success' => true,
                    'message' => 'Product price variation found successfully.',
                    'data' => $productprice,
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Product price variation found successfully.',
                    'data' => (object) [],
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No product price variation found for the given criteria.',
                'data' => $product,
            ]);
        }
    }
}
