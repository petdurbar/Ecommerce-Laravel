<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSoftsaro_BannerRequest;
use App\Http\Requests\UpdateSoftsaro_BannerRequest;
use App\Models\Softsaro_Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $banners = Softsaro_Banner::latest()->get();
        return view("admin.sliders.index", compact("banners"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.sliders.create");
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
    public function store(StoreSoftsaro_BannerRequest $request)
    {
        $banner_image = $this->fileUpload($request, 'banner_image');
        $req = $request->all();
        $req['banner_image'] = $banner_image;
        $req['slug'] = Str::slug($request->title);
        Softsaro_Banner::create($req);
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
    public function edit(Softsaro_Banner $banner)
    {
        return view("admin.sliders.edit", compact("banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftsaro_BannerRequest $request, Softsaro_Banner $banner)
    {
        // dd($banner);
        if ($request->hasFile('banner_image')) {
            $this->imageDelete($banner->banner_image);
            $banner_img = $this->fileUpload($request, 'banner_image');
        } else {
            $banner_img = $banner->banner_image;
        }

        $req = $request->all();
        $req['banner_image'] = $banner_img;
        $req['slug'] = Str::slug($request->title);
        $banner->update($req);

        return redirect()->route('banner.index')->with('success', 'Banner Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Softsaro_Banner $banner)
    {
        $this->imageDelete($banner->banner_image);
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner Deleted');
    }
}
