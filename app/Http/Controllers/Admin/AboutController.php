<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $about = About::first();
        return view('admin.about.index', compact('about'));
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
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:200'],
            'image_1' => ['max:5000', 'image'],
            'image_2' => ['max:5000', 'image'],
            'description' => ['required', 'max:1000'],

        ]);

        $about = About::first();
        $imagePath_1 = handleUpload('image_1',$about);
        $imagePath_2 = handleUpload('image_2',$about);


        About::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'image_1' => (!empty($imagePath_1) ? $imagePath_1 : $about->image_1),
                'image_2' => (!empty($imagePath_2) ? $imagePath_2 : $about->image_2),
            ]
        );

        // dd('success');
        // return handleUpload('image');

        
        toastr()->success('About Updated Successfully!', 'Congrats');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
