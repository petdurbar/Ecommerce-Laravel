<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondBannerRequest;
use App\Http\Requests\UpdateSecondBannerRequest;
use App\Models\Admin\SecondBanner;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SecondBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secondbanners = SecondBanner::latest()->get();
        return view('admin.secondbanner.index', compact('secondbanners'));
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
        return view('admin.secondbanner.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSecondBannerRequest $request)
    {
        $banner_image = $this->fileUpload($request, 'banner_image');
        $req = $request->all();
        $req['banner_image'] = $banner_image;
        $req['slug'] = Str::slug($request->banner_name);
        SecondBanner::create($req);
        return redirect()->route('secondbanner.index')->with('success', 'Banner Added');
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
    public function edit(SecondBanner $secondbanner)
    {
        // dd($secondbanner);
        return view('admin.secondbanner.edit', compact('secondbanner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSecondBannerRequest $request, SecondBanner $secondbanner)
    {
        if ($request->hasFile('banner_image')) {
            $this->imageDelete($secondbanner);
            $myfeatured_image = $this->fileUpload($request, 'banner_image');
        } else {
            $myfeatured_image = $secondbanner->banner_image;
        }
        $secondbanner->update([
            'banner_name' => $request->banner_name,
            'banner_order' => $request->banner_order,
            'slug' => Str::slug($request->banner_name),
            'banner_image' => $myfeatured_image,
            'banner_link' => $request->banner_link,
            'mobileview' => $request->mobileview,

        ]);
        return redirect()->route('secondbanner.index')->with('success', 'Banner Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SecondBanner $secondbanner)
    {
        $this->imageDelete($secondbanner);
        $secondbanner->delete();
        return redirect()->route('secondbanner.index')->with('success', 'Banner Deleted');

    }
}
