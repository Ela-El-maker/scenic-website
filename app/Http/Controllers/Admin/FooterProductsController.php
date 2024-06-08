<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterProductsDataTable;

use App\Http\Controllers\Controller;
use App\Models\FooterProducts;

use Illuminate\Http\Request;

class FooterProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterProductsDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.footer-products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.footer-products.create');
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

        $footerItem = new FooterProducts();

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Products Created Successfully!', 'Congrats');
        return redirect()->route('admin.footer-products.index');
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
        $footerProducts = FooterProducts::findorfail($id);
        return view('admin.footer-products.edit', compact('footerProducts'));
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

        $footerItem =  FooterProducts::findorfail($id);

        
        $footerItem->name = $request->name;
        $footerItem->url = $request->url;
        

        $footerItem->save();


        toastr()->success('Footer Useful Updated Successfully!', 'Congrats');
        return redirect()->route('admin.footer-products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $footerProducts = FooterProducts::findorfail($id);
        $footerProducts->delete();
    }
}
