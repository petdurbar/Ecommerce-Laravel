<?php
// SEO Section

use App\Models\Softsaro_Attribute;
use App\Models\Softsaro_Blog;
use App\Models\Softsaro_Category;
use App\Models\Softsaro_Product;
use App\Models\Softsaro_Product_Attribute;
use App\Models\Softsaro_wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use function Laravel\Prompts\search;

function getPhoneNumber()
{
    return  9779813519344;
}
function getCategories($parent_id)
{
    return Softsaro_Category::where('parent_id', $parent_id)
        ->where("featured", 1)->orderBy('category_order', 'ASC')->limit(14)->get();
}

function getProduct($productid)
{
    return Softsaro_Product::where('id', $productid)->first();
}
function getWishlist($productid)
{
    return Softsaro_wishlist::where('productid', $productid)
        ->where('userid', Auth::guard('softsaro__users')->user()->id)
        ->first();
}


function getCartAttributes($attributeid)
{
    // dd($attributeid);
    return Softsaro_Attribute::where('id', $attributeid)->first();
}
function getAttributes($attributegroupid)
{
    return Softsaro_Attribute::where('attribute_group_id', $attributegroupid)->get();
}

function showAttributes($attributegroupid, $product_id)
{
    // dd(Softsaro_Product_Attribute::where('attribute_group_id', $attributegroupid)
    //     ->where("product_id",$product_id)->get());
    // return Softsaro_Product_Attribute::where('attribute_group_id', $attributegroupid)
    // ->where("product_id",$product_id)->get();

    return Softsaro_Product_Attribute::join("softsaro__attributes", "softsaro__attributes.id", "=", "softsaro__product__attributes.attribute_id")
        ->select('softsaro__attributes.attribute_name','softsaro__attributes.id')
        ->where('softsaro__product__attributes.attribute_group_id', $attributegroupid)
        ->where("product_id", $product_id)
        ->get();
}

function totalCartQuantity()
{
    $items = \Cart::getContent();

    return $items->count();
}

function getMetas($segment1, $segment2)
{
    if ($segment1 === 'blog') {
        return Softsaro_Blog::where('slug', $segment2)->first();
    }

    if ($segment1 === 'product') {
        $aaa = Softsaro_Product::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $aaa->product_name,
            'description' => $aaa->description,
            'featured_image' => $aaa->featured_image,
        ];
        // dd($aaa);
        return $meta;
    }

    if ($segment1 === 'category') {
        $category = Softsaro_Category::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $category->categoryname,
            'description' => "Category",
            'featured_image' => "tagphoto.PNG",
        ];
        // dd($aaa);
        return $meta;
    }

    if ($segment1 === 'blogs') {
        $meta = (object) [
            'title' => "Blogs",
            'description' => "Blogs of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'cart') {
        $meta = (object) [
            'title' => "Cart",
            'description' => "Cart of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'wishlist') {
        $meta = (object) [
            'title' => "Wishlist",
            'description' => "Wishlist of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === '/') {
        $meta = (object) [
            'title' => "Home",
            'description' => "Homepage of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'thankyou') {
        $meta = (object) [
            'title' => "ThankYou",
            'description' => "ThankYou Page of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'products') {
        // $product = Request::input('s');
        if (Request::input('categoryname')) {
            $catslug = Request::input('categoryname');
            $categoryname = Softsaro_Category::where('slug', $catslug)->first();

            $meta = (object) [
                'title' => $categoryname->categoryname,
                'description' => "Homepage of investfornepal",
                'featured_image' => "tagphoto.PNG",
            ];
            return $meta;
        }

        $meta = (object) [
            'title' => "Search Product",
            'description' => "Homepage of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'search') {

        $product = Request::input('search-term');

        $meta = (object) [
            'title' => $product,
            'description' => "Homepage of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'shop') {
        $meta = (object) [
            'title' => "Shop",
            'description' => "Shop of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }


    if ($segment1 === 'services') {
        $meta = (object) [
            'title' => "Services",
            'description' => "Services of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'onlineprograms') {
        $meta = (object) [
            'title' => "Online Programs",
            'description' => "Online Programs of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'search' && $segment2 === 'blog') {
        $searchterm = request('searchterm');
        $meta = (object) [
            'title' => $searchterm,
            'description' => $searchterm,
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }
    if ($segment1 === 'affilateform' || $segment1 === 'affilate') {
        $meta = (object) [
            'title' => "Affilate",
            'description' => "Affilate of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'checkout') {
        $meta = (object) [
            'title' => "Checkout",
            'description' => "checkout of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'newarrival') {
        $meta = (object) [
            'title' => "New Arrival",
            'description' => "New Arrival of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'popularproducts') {
        $meta = (object) [
            'title' => "Popular Product",
            'description' => "Popular Product of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'termsandcondition') {
        $meta = (object) [
            'title' => "Terms and Condition",
            'description' => "Terms and Condition of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }

    if ($segment1 === 'privacypolicy') {
        $meta = (object) [
            'title' => "Privacy Policy",
            'description' => "Privacy Policy of investfornepal",
            'featured_image' => "tagphoto.PNG",
        ];
        return $meta;
    }


    // if ($segment1 === 'propertytype') {

    //     $fav=FavIcon::first();

    //     $cat= Category::where('slug', $segment2)->first();
    //     $meta = (object) [
    //         'title' => $cat->categoryname,
    //         'description' => $cat->categoryname,
    //         'featured_image' => $fav->icon,
    //     ];
    //     return $meta;
    // }
}
