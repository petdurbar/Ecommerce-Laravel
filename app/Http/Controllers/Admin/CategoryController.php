<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $parent_id = request('category') ?? 0;

        // if ($parent_id) {
        //     $breadcrumbs = $this->getParentCategory($parent_id);
        // } else {
        //     $breadcrumbs = [];
        // }

        $categories = Category::where('parent_id', $parent_id)->latest()->get();
        $params = $_GET;

        return view('admin.category.index', compact('categories', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_id = request('category') ?? 0;
        // if ($parent_id) {
        //     $breadcrumbs = $this->getParentCategory($parent_id);
        // } else {
        //     $breadcrumbs = [];
        // }

        return view('admin.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $image = $this->fileUpload($request, 'image');
        $req = $request->all();
        // dd($req);
        $req['parent_id'] = $request->parent_id ?? 0;

        $req['image'] = $image;
        $req['slug'] = Str::slug($request->category_name);

        Category::create($req);

        if ($request->parent_id) {
            return redirect()->route('category.index', ['category' => $request->parent_id])->with('success', 'Sub Category Added');
        } else {
            return redirect()->route('category.index')->with('success', 'Category Added');
        }

    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($request->file($name)) {
            $image = $request->file($name);
            $destinationPath = public_path() . '/images/category/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
        }
        return $imageName;
    }
    public function show(Category $category)
    {

        return view('admin.category.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $req = $request->all();
        if ($request->hasFile('image')) {
            $this->imageDelete($category->image);

            $image = $this->fileUpload($request, 'image');
        } else {
            $image = $category->image;
        }
        $req['image'] = $image;

        $req['slug'] = Str::slug($request->category_name);
        $category->update($req);

        if ($request->parent_id) {
            return redirect()->route('category.index', ['category' => $request->parent_id])->with('success', 'Sub Category Edited');
        } else {
            return redirect()->route('category.index')->with('success', 'Category Edited');
        }

    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('images/category/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
    }

    public function destroy(Category $category)
    {
        $this->imageDelete($category->image);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category Successfully Deleted');
    }
}
