<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterSocialDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterSocial;
use Illuminate\Http\Request;

class FooterSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterSocialDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.footer-social.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.footer-social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate(
            [
                'icon' => ['required'],
                'url' => ['required', 'url'],
                
            ]
        );

        $footerItem = new FooterSocial();

        
        $footerItem->icon = $request->icon;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Social Created Successfully!', 'Congrats');
        return redirect()->route('admin.footer-social.index');
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
        $footerEdit = FooterSocial::findorfail($id);
        return view('admin.footer-social.edit', compact('footerEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'icon' => ['required'],
                'url' => ['required', 'url'],
                
            ]
        );

        $footerItem =  FooterSocial::findorfail($id);

        
        $footerItem->icon = $request->icon;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Social Updated Successfully!', 'Congrats');
        return redirect()->route('admin.footer-social.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $footerItem = FooterSocial::findorfail($id);
        $footerItem-> delete();
    }
}
