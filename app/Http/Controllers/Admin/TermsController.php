<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTermsRequest;
use App\Models\Admin\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
       
        $terms=Terms::first();
    
        return view('admin.terms.index',compact('terms'));
    }

    public function show(string $id)
    {
        $terms = Terms::first();
        return view("admin.terms.view", compact('terms'));
    }

    public function edit(string $id)
    {
        $terms = Terms::first();
        return view("admin.terms.edit", compact('terms'));
    }
    public function update(UpdateTermsRequest $request, Terms $terms)
    {
        $terms =Terms::all()->first();
        $terms->update([
          
            'description' => $request->description,

        ]);
        return redirect()->route('termsandcondition.index')->with('success', 'successfully edited');
    }
}
