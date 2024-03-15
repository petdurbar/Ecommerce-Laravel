<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqequest;
use App\Models\Admin\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function __construct()
    {
       
        $this->middleware('admin');
    }
    public function index()
    {
        $faqs = Faq::latest()->paginate(9);
       
        return view("admin.faq.index", compact('faqs'));
    }

    public function create()
    {
        return view("admin.faq.create");
    }

    public function store(StoreFaqRequest $request)
    {
        Faq::create([
            'title' => $request->title,
            'description' => $request->description

        ]);
        return redirect()->route('faq.index')->with('success', 'Faq Added');
    }

    public function show(Faq $faq)
    {
        return view("admin.faq.view", compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view("admin.faq.edit", compact('faq'));
    }

    public function update(UpdateFaqequest  $request, Faq $faq)
    {
        $faq->update([
            'title' => $request->title,
            'description' => $request->description

        ]);
        return redirect()->route('faq.index')->with('success', 'Faq Edited');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success','faq delated');
    }
    
}
