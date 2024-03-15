<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Admin\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $banners = HomeBanner::latest()->get();
        return view('admin.sliders.index', compact('banners'));
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/images/banner/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function imageDelete($product)
    {
        $filePath = $product->banner_image;
        $destinationPath = public_path('images/banner/');
        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $banner_image = $this->fileUpload($request, 'banner_image');
        $req = $request->all();
        $req['banner_image'] = $banner_image;
        $req['slug'] = Str::slug($request->banner_name);
        HomeBanner::create($req);
        return redirect()->route('banner.index')->with('success', 'Banner Added');
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
    public function edit(HomeBanner $banner)
    {
        // dd($banner);
        return view('admin.sliders.edit', compact('banner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, HomeBanner $banner)
    {
        if ($request->hasFile('banner_image')) {
            $this->imageDelete($banner);
            $myfeatured_image = $this->fileUpload($request, 'banner_image');
        } else {
            $myfeatured_image = $banner->banner_image;
        }
        $banner->update([
            'banner_name' => $request->banner_name,
            'banner_order' => $request->banner_order,
            'slug' => Str::slug($request->banner_name),
            'banner_image' => $myfeatured_image,
            'banner_link' => $request->banner_link,
            'mobileview' => $request->mobileview,

        ]);
        return redirect()->route('banner.index')->with('success', 'Banner Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeBanner $banner)
    {
        $this->imageDelete($banner);
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner Deleted');

    }
}
