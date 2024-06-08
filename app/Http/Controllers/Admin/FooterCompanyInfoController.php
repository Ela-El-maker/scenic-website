<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterCompanyInfoDataTable;

use App\Http\Controllers\Controller;
use App\Models\FooterCompanyInfo;

use Illuminate\Http\Request;

class FooterCompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterCompanyInfoDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.footer-company-info.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.footer-company-info.create');
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

        $footerItem = new FooterCompanyInfo();

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Company Created Successfully!', 'Congrats');
        return redirect()->route('admin.footer-company.index');
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
        $footerCompany = FooterCompanyInfo::findorfail($id);
        return view('admin.footer-company-info.edit', compact('footerCompany'));
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

        $footerItem =  FooterCompanyInfo::findorfail($id);

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Company Updated Successfully!', 'Congrats');
        return redirect()->route('admin.footer-company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $footerCompany = FooterCompanyInfo::findorfail($id);
        $footerCompany->delete();
    }
}
