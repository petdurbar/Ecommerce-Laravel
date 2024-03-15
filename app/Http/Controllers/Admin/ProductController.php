<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AttributeGroup;
use App\Models\Admin\Product;
use App\Models\Admin\ProductAttributeCategory;
use App\Models\Admin\ProductNonVariation;
use App\Models\Admin\ProductPriceVariation;
use App\Models\Admin\ProductVariation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(Request $request)
    {

        $data = Product::all();


        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        $selectedCats = $request->input('pcategories', []);
        // dd($selectedCats);
        $attributeData = ProductAttributeCategory::whereIn('category_id', $selectedCats)->get();

        $attributeGroupIds = [];

        foreach ($attributeData as $data) {
            $attributeGroupIds[] = $data->attribute_group_id;
        }

        return view('admin.products.create', compact('attributeGroupIds'));
    }
    /**
     * Store a newly created resource in storage.
     */
    // join('users', 'user_id', '=', 'users.id')


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        $nonvariation = ProductNonVariation::where('product_id', $product->id)->first();
        $variation = ProductVariation::where('product_id', $product->id)->get();

        return view('admin.products.show', compact('product', 'variation', 'nonvariation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id);
        $product_price_variations = ProductPriceVariation::where('product_id',$id)->get();
        $parent_category = getParentcategory($product->category_id);
        $attributeData = ProductAttributeCategory::where('category_id', $parent_category->id)->pluck('attribute_group_id');

        $attributeGroups = AttributeGroup::select('*','id as attribute_group_id')->whereIn('id', $attributeData)->get();
        return view('admin.products.edit', compact('product','product_price_variations','attributeGroups'));
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
    public function imageDelete($filePath)
    {

        if($filePath){

            $destinationPath = public_path('uploads/');

            if (file_exists($destinationPath . $filePath)) {
                unlink($destinationPath . $filePath);
            }
        }

    }
    public function destroy(Product $product)
    {

        $variattionImage = ProductVariation::where('product_id', $product->id)->get();
        $this->imageDelete($product->featured_image);

        foreach ($variattionImage as $variationimage) {

            $this->imageDelete($variationimage->image);
        }
        ProductVariation::where('product_id', $product->id)->get();

        ProductNonVariation::where('product_id', $product->id)->delete();
        ProductPriceVariation::where('product_id', $product->id)->delete();




        // foreach ($imageFilenames as $imageFilename) {
        //     if ($imageFilename) {
        //         $imagePath = public_path('/uploads/' . $imageFilename);

        //         if (file_exists($imagePath)) {
        //             unlink($imagePath);
        //         }
        //     }
        // }

        $product->delete();

        return redirect()->back();
    }
}
