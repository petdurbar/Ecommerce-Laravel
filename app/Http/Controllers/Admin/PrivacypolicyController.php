<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePrivacypolicyRequest;
use App\Models\Admin\Privacypolicy;
use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $privacy=Privacypolicy::first();
        return view('admin.privacypolicy.index',compact('privacy'));
    }

    public function show(string $id)
    {
        $privacy = Privacypolicy::first();
        return view("admin.privacypolicy.view", compact('privacy'));
    }

    public function edit(string $id)
    {
        $privacy = Privacypolicy::first();
        return view("admin.privacypolicy.edit", compact('privacy'));
    }
    public function update(UpdatePrivacypolicyRequest $request, Privacypolicy $privacy)
    {
        $privacy = Privacypolicy::all()->first();
        $privacy->update([

            'description' => $request->description,

        ]);
        return redirect()->route('privacy-policy.index')->with('success', 'successfully edited');
    }
}
