<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\OtherSetting;
use Illuminate\Http\Request;

class OtherSettingController extends Controller
{
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
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function setting()
    {
        $setting = OtherSetting::first();
        return view('admin.others.index', compact('setting'));
    }

    public function settingdetails(Request $request)
    {
        // dd($request);
        $setting = OtherSetting::where("id", 1)->first();
        $setting->update([
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,

        ]);
        return redirect()->back()->with('success', 'Details Successully updated');
    }

    public function deliverycharge(Request $request)
    {

        $setting = OtherSetting::where("id", 1)->first();
        $setting->update([
            'delivery_insidevalley' => $request->delivery_insidevalley,
            'delivery_outsidevalley' => $request->delivery_outsidevalley,
            'tax' => $request->tax,

        ]);

        return redirect()->back()->with('success', 'Details Successully updated');

    }
}
