<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Admin\Attribute;
use App\Models\Admin\Product;
use App\Models\Admin\ProductNonVariation;
use App\Models\Admin\ProductPriceVariation;
use App\Models\Admin\ProductVariation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function fileUpload(Request $request, $name)
    // {
    //     $imageName = '';
    //     if ($image = $request->file($name)) {
    //         $destinationPath = public_path() . '/uploads/';
    //         $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
    //         $image->move($destinationPath, $imageName);
    //         $image = $imageName;
    //     }
    //     return $imageName;
    // }
    public function fileUpload(Request $request, $image, $name)
    {
        $imageName = '';
        if ($image) {
            $destinationPath = public_path() . '/uploads/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('uploads/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }

    public function saveVariations(Request $request)
    {
        // dd($request->all());
        $validated = $this->validate($request, [
            'product_name' => 'required|unique:products,product_name',
            'description' => 'required',
            'specification' => 'required',
            'category_id' => 'required'

        ]);
        // return $validated;
        // return response()->json(['error' => $validated]);



        $allData = $request->except('attr', 'quantity', 'price', 'sku', 'images',);
        $image = $request->file('featured_image');
        $featured_image = $this->fileUpload($request, $image, 'featured_image');
        $allData['featured_image'] = $featured_image;
        $allData['variation'] = $request->variation == 'Yes' ? 1 : 0;
        $allData['slug'] = Str::slug($request->product_name);
        $product = Product::create($allData);



        if ($request->variation == 'Yes') {

            foreach ($request->price as $key => $price) {
                // dd($request->images[$key]);
                $image = $request->file('images')[$key] ?? null;

                $img = $this->fileUpload($request, $image, 'images');


                $pvp = ProductPriceVariation::create([
                    'quantity' => $request->quantity[$key] ?? null,
                    'price' => $price,
                    'product_id' => $product->id,
                    'sku' => $request->sku[$key] ?? null,
                    'available' => 1,
                    'image' => $img
                ]);

                foreach ($request->attr as $k => $v) {
                    // foreach ($v as $in => $val) {
                    $attributeGroupId = Attribute::where('id', $v[$key] ?? 0)->first();
                    // $img = $this->fileUpload($request, $image, 'images');
                    // dd($img);
                    ProductVariation::create([
                        'product_id' => $product->id,
                        'pvp_id' => $pvp->id,
                        'attribute_value_id' => $v[$key] ?? null,
                        'attribute_id' => $attributeGroupId->attribute_group,
                        // 'image' => $img,
                    ]);
                    // }
                }
            }
        }
        return response()->json(['success' => true]);
    }



    public function updateVariations(Request $request, $product_id)
    {
        // dd($request->all());
        $validated = $this->validate($request, [
            'product_name' => 'required|unique:products,product_name,' . $product_id,
            'description' => 'required',
            'specification' => 'required',
            'category_id' => 'required'

        ]);

        $product = Product::findOrFail($product_id);
        // dd($product);

        $allData = $request->except('attr', 'quantity', 'price', 'sku', 'images',);
        $image = $request->file('featured_image');
        $featured_image = $this->fileUpload($request, $image, 'featured_image');
        if ($featured_image) {
            if ($product->featured_image) {
                $this->imageDelete($product->featured_image);
            }
            $allData['featured_image'] = $featured_image;
        }
        $allData['variation'] = $request->variation == 'Yes' ? 1 : 0;
        $allData['slug'] = Str::slug($request->product_name);


        $product->update($allData);
        if ($request->variation == 'No') {
           ProductVariation::where('product_id', $product_id)->delete();
           $old_variation_datas = ProductPriceVariation::where('product_id', $product_id)->get();
            foreach ($old_variation_datas as $varia) {
                $this->imageDelete($varia->image);
                $pvariation = ProductPriceVariation::findOrFail($varia->id)->delete();
            }
        }

        if ($product->variation == 1) {
            // for old data
            $old_datas = ProductPriceVariation::where('product_id', $product_id)->get();
            foreach ($old_datas as $k => $variation) {
                $pvariation = ProductPriceVariation::findOrFail($variation->id);
                ProductVariation::where('pvp_id', $variation->id)->delete();
                if ($request->old_price[$variation->id] ?? '') {

                    $dataToUpdate = [
                        'quantity' => $request->old_quantity[$variation->id] ?? null,
                        'price' => $request->old_price[$variation->id] ?? null,
                        'sku' => $request->old_sku[$variation->id] ?? null,
                    ];
                    $image = $request->file('old_images')[$variation->id] ?? null;
                    if ($image) {
                        if ($variation->image) {
                            $this->imageDelete($variation->image);
                        }
                        $img = $this->fileUpload($request, $image, 'images');
                        $dataToUpdate['image'] = $img;
                    }

                    $pvariation->update($dataToUpdate);
                    foreach ($request->old_attr[$variation->id] as $v) {
                        $attributeGroupId = Attribute::where('id', $v ?? 0)->first();
                        ProductVariation::create([
                            'product_id' => $product->id,
                            'pvp_id' => $pvariation->id ?? null,
                            'attribute_value_id' => $v ?? null,
                            'attribute_id' => $attributeGroupId->attribute_group,
                        ]);
                    }
                } else {
                    if ($variation->image) {
                        $this->imageDelete($variation->image);
                    }

                    $pvariation->delete();
                }
            }


            // for new data
            if ($request->price) {
                foreach ($request->price as $key => $price) {
                    $image = $request->file('images')[$key] ?? null;
                    $img = $this->fileUpload($request, $image, 'images');

                    $dataToUpdate = [
                        'quantity' => $request->quantity[$key] ?? null,
                        'price' => $price,
                        'product_id' => $product->id,
                        'sku' => $request->sku[$key] ?? null,
                        'available' => 1,
                        'image' => $img
                    ];
                    $pvp = ProductPriceVariation::create($dataToUpdate);

                    foreach ($request->attr as $k => $v) {
                        $attributeGroupId = Attribute::where('id', $v[$key] ?? 0)->first();
                        ProductVariation::create([
                            'product_id' => $product->id,
                            'pvp_id' => $pvp->id ?? null,
                            'attribute_value_id' => $v[$key] ?? null,
                            'attribute_id' => $attributeGroupId->attribute_group,
                        ]);
                    }
                }
            }
        }
        return response()->json(['success' => true]);
    }


}
