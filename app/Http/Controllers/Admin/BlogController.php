<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->paginate(4);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/images/blogs/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function store(StoreBlogRequest $request)
    {
        $blog_img = $this->fileUpload($request, 'featured_image');

        $req = $request->all();

        $req['slug'] = Str::slug($request->title);
        $req['status'] = 1;
        $req['featured_image'] = $blog_img;
        Blog::create($req);

        return redirect()->route('blogs.index')->with('success', 'Blog Added');
    }


    public function show(Blog $blog)
    {
        return view('admin.blogs.view',compact("blog"));
    }


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact("blog"));
    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('images/blogs/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }


    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if ($request->hasFile('featured_image')) {
            $this->imageDelete($blog->featured_image);

            $blog_img = $this->fileUpload($request, 'featured_image');
        } else {
            $blog_img = $blog->featured_image;
        }

        $req = $request->all();
        $req['featured_image'] = $blog_img;
        $req['slug'] = Str::slug($request->title);
        $blog->update($req);

        return redirect()->route('blogs.index')->with('success', 'Blog Edited');
    }

    public function destroy(Blog $blog)
    {
        $this->imageDelete($blog->featured_image);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog Successfully Deleted');
    }
}


