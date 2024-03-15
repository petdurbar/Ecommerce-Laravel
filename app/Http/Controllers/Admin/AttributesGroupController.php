<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeGroup;
use App\Http\Requests\UpdateAttributeGroup;
use App\Models\Softsaro_AttributesGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AttributesGroupController extends Controller
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
        $attributeGroups = Softsaro_AttributesGroup::latest()->get();

        return view('admin.attributegroups.index', compact("attributeGroups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attributegroups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeGroup $request)
    {
        $attributegroup = $request->all();
        $attributegroup["slug"] = Str::slug($request->attribute_group_name);
        Softsaro_AttributesGroup::create($attributegroup);
        return redirect()->route('attributegroups.index')->with('success', 'Attribute Group created successfully.');
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
    public function edit(Softsaro_AttributesGroup $attributegroup)
    {
        // dd($attributegroup);
        return view('admin.attributegroups.edit', compact("attributegroup"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeGroup $request, Softsaro_AttributesGroup $attributegroup)
    {
        $input = $request->all();
        $input["slug"] = Str::slug($request->attribute_group_name);
        $attributegroup->update($input);
        return redirect()->route('attributegroups.index')->with('success', 'Attribute Group updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Softsaro_AttributesGroup $attributegroup)
    {
        $attributegroup->delete();
        return redirect()->route('attributegroups.index')->with('success', 'Attribute Group deleted successfully.');
    }
}
