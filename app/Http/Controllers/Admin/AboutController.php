<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
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
        $about = About::first();
        return view("admin.about.view", compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        $about = About::all()->first();
        return view("admin.about.edit", compact('about'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about = About::all()->first();

        if ($request->hasFile('aboutherosection_image')) {
            $this->imageDelete($about->aboutherosection_image);
            $aboutherosection_image = $this->fileUpload($request, 'aboutherosection_image');
        } else {
            $aboutherosection_image = $about->aboutherosection_image;
        }

        if ($request->hasFile('aboutsecondsection_image')) {
            $this->imageDelete($about->aboutsecondsection_image);
            $aboutsecondsection_image = $this->fileUpload($request, 'aboutsecondsection_image');
        } else {
            $aboutsecondsection_image = $about->aboutsecondsection_image;
        }
        $about->update([
            'aboutherosection_description' => $request->aboutherosection_description,
            'aboutsecondsection_description' => $request->aboutsecondsection_description,
            'aboutherosection_image' => $aboutherosection_image,
            'aboutsecondsection_image' => $aboutsecondsection_image,

        ]);
        return redirect()->route('other-pages.index')->with('success', 'successfully edited');
    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('uploads/');
        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
