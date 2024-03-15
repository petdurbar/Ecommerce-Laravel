<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSoftsaro_CategoryRequest;
use App\Http\Requests\UpdateSoftsaro_CategoryRequest;
use App\Models\Softsaro_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    function getParentCategory($parent_id,$breadcrumb=[])
    {
        $parent= Softsaro_Category::where('id', $parent_id )->first();
        array_push($breadcrumb, $parent);
        if($parent->parent_id != 0 ){
            return  $this->getParentCategory($parent->parent_id,$breadcrumb);
        }
        // dd($parent);
        return array_reverse($breadcrumb);
        ;
    }

    public function index()
    {
        $parent_id = request('category') ?? 0;

        if($parent_id){
            $breadcrumbs=$this->getParentCategory($parent_id);
       }else{
           $breadcrumbs=[];
       }


        $categories = Softsaro_Category::where('parent_id', $parent_id)->latest()->paginate(15);
        $params = $_GET;

        return view("admin.categories.index", compact('categories', 'params','breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_id = request('category') ?? 0;
        if($parent_id){
             $breadcrumbs=$this->getParentCategory($parent_id);
        }else{
            $breadcrumbs=[];
        }

        return view('admin.categories.create',compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSoftsaro_CategoryRequest $request)
    {
        $req = $request->all();
        // dd($request);
        $req['slug'] = Str::slug($request->categoryname);
        $req['parent_id'] = $request->parent_id ?? 0;
        Softsaro_Category::create($req);

        if ($request->parent_id) {
            return redirect()->route('category.index', ['category' => $request->parent_id])->with('success', 'Sub Category Added');
        } else {
            return redirect()->route('category.index')->with('success', 'Category Added');
        }
        // return redirect()->route('category.index')->with('success', 'Category Added');

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
    public function edit(Softsaro_Category $category)
    {
        $parent_id = $category->parent_id ?? 0;
        if($parent_id){
             $breadcrumbs=$this->getParentCategory($parent_id);
        }else{
            $breadcrumbs=[];
        }

        return view('admin.categories.edit', compact('category','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftsaro_CategoryRequest $request, Softsaro_Category $category)
    {
        $req = $request->all();
        // dd($request->parent_id);
        $req['slug'] = Str::slug($request->categoryname);
        $category->update($req);

        // return redirect()->route('category.index')->with('success', 'Category Edited');
        if ($request->parent_id) {
            return redirect()->route('category.index', ['category' => $request->parent_id])->with('success', 'Sub Category Edited');
        } else {
            return redirect()->route('category.index')->with('success', 'Category Edited');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Softsaro_Category $category)
    {
        // dd($request->parent_id);
        $category->delete();

        if ($request->parent_id) {
            return redirect()->route('category.index', ['category' => $request->parent_id])->with('success', 'Sub Category Deleted');
        } else {
            return redirect()->route('category.index')->with('success', 'Category Deleted');
        }
    }
}
