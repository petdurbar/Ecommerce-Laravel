<?php

use App\Models\Admin\About;
use App\Models\Admin\Attribute;
use App\Models\Admin\AttributeGroup;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Admin\OtherSetting;
use App\Models\Admin\ProductPriceVariation;
use App\Models\Admin\ProductVariation;

function getCategories($parent_id)
{
    return Category::where('parent_id', $parent_id)->get();
}
function getAttributes($attributegroupid)
{
    return Attribute::where('attribute_group', $attributegroupid)->get();
}

function getCategoriesForMenu($parent_id)
{
    return Category::where('parent_id', $parent_id)->orderBy('category_order', 'ASC')->get();
}

function getCategory()
{
    return Category::where('parent_id', '0')->get();
}

function totalCartQuantity()
{
    $items = \Cart::getContent();

    return $items->count();
}

function getCartAttributes($attributeid)
{
    // dd($attributeid);
    return Attribute::where('id', $attributeid)->first();
}

function getOtherSetting()
{
    $otherData = OtherSetting::where('id', 1)->first();
    return $otherData;
}

function getProductVariationData($product_id)
{
$data = ProductPriceVariation::where('product_id', $product_id)->pluck('price')->toArray();

$min = min($data);
$max= max($data);

return ['minimum'=>$min, 'maximum'=>$max];

}


function getProductattributegroup($product_id)
{

$attributes=ProductVariation::where('product_id', $product_id)->get();


$groups=[];

foreach($attributes as $attribute){
    $groups[$attribute->attribute_id][]=$attribute->attribute_value_id;

}

return $groups;
}

function getattributesgroupName($attribute_id){
    $name = AttributeGroup::where('id', $attribute_id)->first();

    return $name;
}

function getAttributeValue($attribute_id)
{
    return Attribute::where('id', $attribute_id)->first();
}



function getAttribute($attribute)
{

    return Attribute::where('attribute_group', $attribute->attribute_group_id)->get();

}

function getParentcategory($category_id)
{
    $categories = Category::where('id', $category_id)->first();

    if ($categories->parent_id != 0) {

        return getParentcategory($categories->parent_id);
    }

    return $categories;
}

function getProductVariation($pvp_id)
{
    return ProductVariation::where('pvp_id', $pvp_id)->pluck('attribute_value_id')->toArray();
}

function getblogs()
{
    return Blog::get();
}


function getabouts()
{
    return About::get();
}
