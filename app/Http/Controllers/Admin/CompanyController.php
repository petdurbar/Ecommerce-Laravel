<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTermsandPolicy;
use App\Http\Requests\UpdateTermsandPolicy;
use App\Models\Softsaro_termsandpolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $companies = Softsaro_termsandpolicy::all();
        // return view('admin.company.index');
        return view('admin.company.index', compact('companies'));
    }
    public function create()
    {
        return view('admin.company.create');
    }
    public function store(StoreTermsandPolicy $request)
    {
        Softsaro_termsandpolicy::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->categoryname),

            // 'email' => $request->email,
            // 'phone_number' => $request->phone_number,
            // 'address' => $request->address,

        ]);
        return redirect()->route('company.index')->with('success', 'Page Successfully Added');
    }
    public function edit(Softsaro_termsandpolicy $company)
    {
        // dd($company);
        return view('admin..company.edit', compact('company'));
    }

    public function update(UpdateTermsandPolicy $request, Softsaro_termsandpolicy $company)
    {
        $company->update([
            // 'title' => $request->title,
            // 'email' => $request->email,
            // 'phone_number' => $request->phone_number,
            // 'address' => $request->address,
            'description' => $request->description,

        ]);
        return redirect()->route('company.index')->with('success', " Successfully Edited.");
    }

    public function destroy(Softsaro_termsandpolicy $company)
    {

        $company->delete();
        return redirect()->route('company.index')->with('success', 'Successfully Deleted');
    }
}
