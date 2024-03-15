<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Softsaro_Attribute;
use App\Models\Softsaro_AttributesGroup;
use App\Models\Softsaro_Category;
use App\Models\Softsaro_Product;
use App\Models\Softsaro_Product_Attribute;
use App\Models\Softsaro_Product_Category;
use App\Models\Softsaro_ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Softsaro_Product::latest()->paginate(5);

        return view("admin.products.index", compact("data",));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributegroups = Softsaro_AttributesGroup::latest()->get();

        return view("admin.products.create", compact("attributegroups"));
    }


    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request);
        $selectedAttributes = $request->input('attributes');
        $allcat = $request->category;
        $product_img = $this->fileUpload($request, 'featured_image');
        $video_file = $this->fileUpload($request, 'video');

        $req = $request->all();
        // dd($request);
        $req['slug'] = Str::slug($request->product_name);
        $req['featured_image'] = $product_img;
        // $req['category_id'] = $request->category;
        $req['video'] = $video_file;
        $add_product = Softsaro_Product::create($req);

        if ($add_product->id) {
            foreach ($allcat as $key => $value) {
                Softsaro_Product_Category::create([
                    'product_id' => $add_product->id,
                    'category_id' => $value,

                ]);
                // dd($value);
            }
        }
        if ($selectedAttributes) {
            foreach ($selectedAttributes as $attributegroupID => $attributeItems) {
                foreach ($attributeItems as $attributeItemID) {
                    // Create a new ProductAttribute record for each selected attribute item.
                    Softsaro_Product_Attribute::create([
                        'product_id' => $add_product->id,
                        'attribute_group_id' => $attributegroupID,
                        'attribute_id' => $attributeItemID,
                    ]);
                }
            }
        }



        // $add_product = Softsaro_Product::create([
        //     'product_name' => $request->product_name,
        //     'product_order' => $request->product_order,
        //     'cutoff_price' => $request->cutoff_price,
        //     'commission' => $request->commission,
        //     'product_price' => $request->product_price,
        //     'description' => $request->description,
        //     'slug' => Str::slug($request->product_name),
        //     'featured' => $request->featured ?? 0,
        //     'category_id' => $request->category,
        //     'mrp_price' => $request->mrp_price,
        //     'commission_result' => $request->commission_result,
        //     'margin' => $request->margin,
        //     'featured_image' => $product_img,
        // ]);

        // if ($add_product->id) {
        //     foreach ($checkboxValues as $categoryId) {
        //         Softsaro_Product_Category::create([
        //             'product_id' => $add_product->id,
        //             'category_id' => $categoryId,
        //         ]);
        //     }
        // }

        return redirect()->route('myimage', $add_product->id)->with('success', 'Product Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Softsaro_Product $product)
    {
        $productImages = Softsaro_ProductImages::where('product_id', $product->id)->get();

        // $attributeItems = Softsaro_Product_Attribute::join("softsaro__attributes_groups", "softsaro__attributes_groups.id", "=", "softsaro__product__attributes.attribute_group_id")
        // ->select("softsaro__attributes_groups.*","softsaro__product__attributes.*")
        //     ->where("product_id", $product->id)
        //     ->distinct()
        //     ->get();

        $attributeItems = Softsaro_Product_Attribute::join("softsaro__attributes_groups", "softsaro__attributes_groups.id", "=", "softsaro__product__attributes.attribute_group_id")
            ->select('softsaro__product__attributes.attribute_group_id', 'softsaro__attributes_groups.attribute_group_name')
            ->where('product_id', $product->id)
            ->distinct()
            ->get();
        // dd($attributeItems);

        $productcategories = Softsaro_Product_Category::where("product_id", $product->id)->get();


        return view('admin.products.show', compact('product', "attributeItems", 'productImages', "productcategories"));
    }

    public function productImage(Request $request)
    {
        $image = $request->file("file");
        $destinationPath = public_path('uploads');
        $imageName = date('YmdHis') . '_' . $image->getClientOriginalName();
        $image->move($destinationPath, $imageName);
        $myfeatured_image = $this->fileUpload($request, 'images');
        Softsaro_ProductImages::create([
            'product_id' => $request->product_id,
            'images' => $imageName,
        ]);

        // return redirect()->route('myimage',$request->product_id)->with('success', 'Images Added');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Softsaro_Product $product)
    {
        $attributegroups = Softsaro_AttributesGroup::latest()->get();

        $attributeItem = Softsaro_Product_Attribute::where("product_id", $product->id)->pluck("attribute_id")->toArray();

        $productcategory = Softsaro_Product_Category::where("product_id", $product->id)->get();

        return view("admin.products.edit", compact('product', "attributeItem", 'productcategory', 'attributegroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Softsaro_Product $product)
    {
        // dd($request);
        $checkboxValues = $request->subcategory_ids;
        $selectedAttributes = $request->input('attributes');


        if ($request->hasFile('featured_image')) {
            $this->imageDelete($product->featured_image);
            $myfeatured_image = $this->fileUpload($request, 'featured_image');
        } else {
            $myfeatured_image = $product->featured_image;
        }
        if ($request->hasFile('video')) {
            $this->imageDelete($product->video);
            $product_video = $this->fileUpload($request, 'video');
        } else {
            $product_video = $product->video;
        }

        $req = $request->all();
        // dd($request);
        $req['featured_image'] = $myfeatured_image;
        $req['slug'] = Str::slug($request->product_name);
        // $req['category_id'] = $request->subcategory_ids;
        $req['video'] = $product_video;
        $product->update($req);

        // $product->update([
        //     'product_name' => $request->product_name,
        //     'product_order' => $request->product_order,
        //     'product_price' => $request->product_price,
        //     'description' => $request->description,
        //     'slug' => Str::slug($request->product_name),
        //     'featured' => $request->featured ?? 0,
        //     'category_id' => $request->subcategory_ids,
        //     'featured_image' => $myfeatured_image,
        // ]);

        // dd($checkboxValues);
        if ($checkboxValues) {
            Softsaro_Product_Category::where('product_id', $product->id)->delete();
            // DB::table('product_categories')->where('product_id', $product->id)->delete();
            foreach ($checkboxValues as $key => $value) {
                Softsaro_Product_Category::create([
                    'product_id' => $product->id,
                    'category_id' => $value,
                ]);
            }
        }
        if ($selectedAttributes) {
            Softsaro_Product_Attribute::where('product_id', $product->id)->delete();

            foreach ($selectedAttributes as $attributegroupID => $attributeItems) {
                foreach ($attributeItems as $attributeItemID) {
                    // Create a new ProductAttribute record for each selected attribute item.
                    Softsaro_Product_Attribute::create([
                        'product_id' => $product->id,
                        'attribute_group_id' => $attributegroupID,
                        'attribute_id' => $attributeItemID,
                    ]);
                }
            }
        }

        return redirect()->route('product.index')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Softsaro_Product $product)
    {
        Softsaro_Product_Category::where('product_id', $product->id)->delete();
        Softsaro_Product_Attribute::where('product_id', $product->id)->delete();


        $this->imageDelete($product->featured_image);
        if ($product->video) {
            $this->imageDelete($product->video);
        }

        $propertyImages = Softsaro_ProductImages::where('product_id', $product->id)->get();

        if (!$propertyImages->isEmpty()) {
            foreach ($propertyImages as $image) {
                $this->imageDelete($image->images);
            }
            $propertyImages->each->delete();
        }
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product Successfully Deleted');
    }

    public function imagecreate(Softsaro_Product $product)
    {
        $productImages = Softsaro_ProductImages::where('product_id', $product->id)->get();
        return view('admin.products.images.addimage', compact('product', 'productImages'));
    }

    public function deleteImage(Request $request, Softsaro_ProductImages $img)
    {
        $product = $img->product_id;
        $img->delete();
        $this->imageDelete($img->images);
        if ($request->filefrom == "insidedropzone") {
            return redirect()->route('myimage', $product)->with('success', 'Image Successfully Deleted');
        }
        if ($request->filefrom == "insideshow") {

            return redirect()->route('product.show', $product)->with('success', 'Image Successfully Deleted');
        }
    }
}
