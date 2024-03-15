<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeGroupRequest;
use App\Models\Admin\Attribute;
use App\Models\Admin\AttributeGroup;
use Illuminate\Http\Request;

class AttributeGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $attribute_group = AttributeGroup::paginate(5);
        $sub_group = Attribute::join('attribute_groups', 'attribute_groups.id', '=', 'attributes.attribute_group')
        ->select('attributes.*')
        ->get();
        return view('admin.attributegroup.index', compact('attribute_group', 'sub_group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attributegroup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeGroupRequest $request)
    {
        $req = $request->all();
        AttributeGroup::create($req);
        return redirect()->route('attributegroup.index')->with('success', 'Attributegroup Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeGroup $attributegroup)
    {


        return view('admin.attributegroup.view', compact('attributegroup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeGroup $attributegroup)
    {
        $attributegroup->delete();
        return redirect()->route('attributegroup.index')->with('success', 'Attributegroup Deleted');
    }
}
