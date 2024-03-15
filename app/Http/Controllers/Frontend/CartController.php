<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Attribute;
use App\Models\Admin\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()
    {
        $items = \Cart::getContent()->sort();


        return view('frontend.pages.cart', compact('items'));
    }
    public function storecart(Request $request)
    {
        $producatData = Product::findorfail($request->productid);

        // $decodedArray = $request->variationattribute;
        $decodedArray = json_decode($request->variationattribute, true);

        $attributename=Attribute::whereIn('id', $decodedArray)->pluck('name')->toArray();
        $nameofattribute='';
        if($attributename){
            $nameofattribute=implode( ',',$attributename);
        }

        $productid = $request->productid;
        if (!empty($decodedArray)) {
            // dd($decodedArray);
            $combinedAttributesString = $productid . '-' . implode('-', $decodedArray);
            // dd($combinedAttributesString);
        } else {
            $combinedAttributesString = $request->productid;
        }
        // dd(array(
        //     'id' => $combinedAttributesString,
        //     // 'id' => $request->product_id,
        //     'name' => $producatData->product_name,
        //     'price' => $request->producprice,
        //     'quantity' => $request->quantity,
        //     'attributes' => array(
        //         "image" => $producatData->featured_image,
        //         "attr" => $decodedArray,
        //     ),
        //     'associatedModel' => $producatData,
        // ));

        \Cart::add(array(
            'id' => $combinedAttributesString,
            // 'id' => $request->product_id,
            'name' => $producatData->product_name,
            'price' => $request->producprice,
            'quantity' => $request->quantity,
            'attributes' => array(
                "image" => $producatData->featured_image,
                "attr" => $decodedArray,
                "attributesname"=>$nameofattribute
            ),
            'associatedModel' => $producatData,
        ));
        $items = \Cart::getContent();
        // dd($items);
        return $items->count();
    }

    public function addCart(Product $product)
    {
        // $productData = Product::findorfail($product);
        // dd($product);
        if (!Auth::guard('customers')->user()) {

            return [
                'success' => false,
                'requiresAuth' => true,
                'message' => 'Please login to continue.',
            ];
        }
        \Cart::clear();
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            'attributes' => array(
                "image" => $product->product_image,
            ),
        ));

        $items = \Cart::getContent();
        return $items->count();
    }

    public function removeCart()
    {
        \Cart::clear();
        $items = \Cart::getContent();
        return view('frontend.components.cartData', compact('items'));
    }

    public function removeSingleCart($productid)
    {
        \Cart::remove($productid);
        $items = \Cart::getContent();
        $items_count = $items->count();
        return view('frontend.components.cartData', compact('items', 'items_count'));
    }

    public function addCount($productid)
    {
        // you may also want to update a product's quantity
        \Cart::update($productid, array(
            'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));
        $items = \Cart::getContent()->sort();
        return view('frontend.components.cartData', compact('items'));
    }

    public function subCount($productid)
    {
        // you may also want to update a product by reducing its quantity, you do this like so:
        \Cart::update($productid, array(
            'quantity' => -1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
        ));
        $items = \Cart::getContent()->sort();
        return view('frontend.components.cartData', compact('items'));
    }
}
