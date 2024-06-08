<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterSupportDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterSupport;
use Illuminate\Http\Request;

class FooterSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterSupportDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.footer-support.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.footer-support.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'name' => ['required', 'max:100'],
                'url' => ['required', 'url'],
                
            ]
        );

        $footerItem = new FooterSupport();

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Support Created Successfully!', 'Congrats');
        return redirect()->route('admin.footer-support.index');
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
        $footerSupport = FooterSupport::findorfail($id);
        return view('admin.footer-support.edit', compact('footerSupport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'name' => ['required', 'max:100'],
                'url' => ['required', 'url'],
                
            ]
        );

        $footerItem =  FooterSupport::findorfail($id);

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Support Updated Successfully!', 'Congrats');
        return redirect()->route('admin.footer-support.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $footerProducts = FooterSupport::findorfail($id);
        $footerProducts->delete();
    }
}
