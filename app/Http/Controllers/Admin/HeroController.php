<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use File;


class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
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
            'title' => ['required','max:200'],
            'sub_title' => ['required', 'max:300'],
            'btn_text' => ['', 'max:100'],
            'btn_url' => ['', 'max:100'],
            'video' =>  ['max:50000', 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime'] // Adjust max size and allowed mime types as necessary
        ]);

        // dd($request)->all();


$hero = Hero::first();

        if ($request->hasFile('video')) {

            // Check for an existing Hero entry and delete the old video if it exists


if ($hero && File::exists(public_path($hero->video))) {
    File::delete(public_path($hero->video));
}

            $video = $request->file('video');
            $videoName = rand() . $video->getClientOriginalName();
            $video->move(public_path('/uploads'), $videoName);
        
            $videoPath = "/uploads/" . $videoName;
            
           // dd($videoPath);
        }
        
        Hero::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'btn_text' => $request->btn_text,
                'btn_url' => $request->btn_url,
                'video' => isset($videoPath) ? $videoPath : $hero->video, // Save video path instead of image
            ]
        );
        
        // dd('success');
        toastr()->success('Updated Successfully!','Congrats');
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
