<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServiceSpecificDataTable;
use App\Http\Controllers\Controller;
use App\Models\ServiceSpecific;
use Illuminate\Http\Request;

class ServiceSpecificController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceSpecificDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.service-specific.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.service-specific.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'image' => ['required', 'image', 'max:5000'],
                'video' =>  ['max:50000', 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime'], // Adjust max size and allowed mime types as necessary
                'image_1' => ['required', 'image', 'max:5000'],
                'image_2' => ['required', 'image', 'max:5000'],
                'image_3' => ['required', 'image', 'max:5000'],
                'image_4' => ['required', 'image', 'max:5000'],


            ]
        );

        $imagePath = handleUpload('image');
        $videoPath = handleUpload('video');
        $imagePath_1 = handleUpload('image_1');
        $imagePath_2 = handleUpload('image_2');
        $imagePath_3 = handleUpload('image_3');
        $imagePath_4 = handleUpload('image_4');

        $theService = new ServiceSpecific();



        $theService->image = $imagePath;
        $theService->video = $videoPath;
        $theService->image_1 = $imagePath_1;
        $theService->image_2 = $imagePath_2;
        $theService->image_3 = $imagePath_3;
        $theService->image_4 = $imagePath_4;



        $theService->save();


        toastr()->success('Service Created Successfully!', 'Congrats');
        return redirect()->route('admin.service-specific.index');
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
        $serviceSpecify = ServiceSpecific::findorfail($id);
        return view('admin.portfolio-item.edit', compact('serviceSpecify'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'image' => ['required', 'image', 'max:5000'],
                'video' =>  ['max:50000', 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime'], // Adjust max size and allowed mime types as necessary
                'image_1' => ['required', 'image', 'max:5000'],
                'image_2' => ['required', 'image', 'max:5000'],
                'image_3' => ['required', 'image', 'max:5000'],
                'image_4' => ['required', 'image', 'max:5000'],


            ]
        );
        
        $theService = ServiceSpecific::findorfail($id);

        $imagePath = handleUpload('image',$theService);
        $videoPath = handleUpload('video',$theService);
        $imagePath_1 = handleUpload('image_1',$theService);
        $imagePath_2 = handleUpload('image_2',$theService);
        $imagePath_3 = handleUpload('image_3',$theService);
        $imagePath_4 = handleUpload('image_4',$theService);

        



        $theService->image = (!empty($imagePath) ? $imagePath : $theService->image);
        $theService->video = (!empty($videoPath) ? $videoPath : $theService->video);
        $theService->image_1 = (!empty($imagePath_1) ? $imagePath_1 : $theService->image_1);
        $theService->image_2 = (!empty($imagePath_2) ? $imagePath_2 : $theService->image_2);
        $theService->image_3 = (!empty($imagePath_3) ? $imagePath_3 : $theService->image_3);
        $theService->image_4 = (!empty($imagePath_4) ? $imagePath_4 : $theService->image_4);



        $theService->save();


        toastr()->success('Service Updated Successfully!', 'Congrats');
        return redirect()->route('admin.service-specific.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $theService = ServiceSpecific::findorfail($id);
        deleteFileIfExists($theService->image);
        deleteFileIfExists($theService->video);
        deleteFileIfExists($theService->image_1);
        deleteFileIfExists($theService->image_2);
        deleteFileIfExists($theService->image_3);
        deleteFileIfExists($theService->image_4);
        $theService->delete();
    }
}
