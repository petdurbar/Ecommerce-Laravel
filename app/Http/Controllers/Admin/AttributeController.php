<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Attribute;
use App\Models\Admin\AttributeGroup;
use App\Models\Admin\ProductAttributeCategory;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $attribute = Attribute::all();

        return view('admin.attribute.index', compact('attribute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attribute_group = AttributeGroup::all();
        return view('admin.attribute.create', compact('attribute_group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreAttributeRequest $request)
    // {
    //     $req = $request->all();
    //     $req['name'] = strtolower($request->name);
    //     Attribute::create($req);
    //     return redirect()->route('attribute.index')->with('success', 'Attribute Added');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'attributename' => 'required|string',
            'attribute_value' => 'required|array',
        ]);

        $attributeGroup = AttributeGroup::create([
            'attributename' => $validatedData['attributename'],
        ]);

        foreach ($request->attribute_value as $value) {
            Attribute::create([
                'name' => $value,
                'attribute_group' => $attributeGroup->id,
            ]);
        }
        foreach ($request->pcategories as $catId) {
            ProductAttributeCategory::create([
                'category_id' => $catId,
                'attribute_group_id' => $attributeGroup->id,
            ]);
        }
        return redirect()->route('attribute.index')->with('success', 'Attribute Group Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {

        $attributegoroup = AttributeGroup::all();

        return view('admin.attribute.view', compact('attribute', 'attributegoroup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {

        $attribute_group = AttributeGroup::all();

        return view('admin.attribute.edit', compact('attribute', "attribute_group"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        $req = $request->all();
        $attribute->update($req);
        return redirect()->route('attribute.index')->with('success', 'Category Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('attribute.index')->with('success', 'Attribute Deleted');
    }

    public function fetchAttributeGroup($categoryId)
    {
        $parent_category = getParentcategory($categoryId);
        $attributeData = ProductAttributeCategory::where('category_id', $parent_category->id)->get();
        $attributeGroupIds = $attributeData->pluck('attribute_group_id');

        $attributeGroups = AttributeGroup::whereIn('id', $attributeGroupIds)->get(['id', 'attributename', 'include_image']);

        $formattedData = [];
        foreach ($attributeGroups as $group) {
            $formattedData[$group->attributename] = [
                'include_image' => $group->include_image,
                'attributes' => [],
            ];
        }

        $attributeValues = Attribute::whereIn('attribute_group', $attributeGroupIds)->get();

        foreach ($attributeValues as $attribute) {
            $attributeGroup = AttributeGroup::find($attribute->attribute_group);

            if ($attributeGroup) {
                $attributeGroupName = $attributeGroup->attributename;
                $attributeValueId = $attribute->id;
                $attributeValue = $attribute->name;

                $formattedData[$attributeGroupName]['attributes'][] = [
                    'id' => $attributeValueId,
                    'name' => $attributeValue,
                ];
            }
        }

        if (empty($formattedData)) {
            return response()->json([
                'attributeGroupIds' => $formattedData,
                'success' => false,
            ]);
        } else {
            return response()->json([
                'attributeGroupIds' => $formattedData,
                'success' => true,
            ]);
        }
    }

}
