<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FeedbacksDataTable;
use App\Http\Controllers\Controller;
use App\Models\Feedbacks;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FeedbacksDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.feedback-section.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.feedback-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'max:100'],
            'avatar' => ['required', 'image', 'max:5000'],
            'position' => ['required', 'max:100'],
            'testimony' => ['required', 'max:500'],
        ]);
        $avatarPath = handleUpload('avatar');

        $testimonials = new Feedbacks();
        $testimonials->name = $request->name;
        $testimonials->avatar = $avatarPath;
        $testimonials->position = $request->position;
        $testimonials->testimony = $request->testimony;
        $testimonials->save();

        toastr()->success('Feedbacks Created Successfully', 'Congrats');
        return redirect()->route('admin.feedback-section.index');
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
        $feedbacks = Feedbacks::findorfail($id);
        return view('admin.feedback-section.edit', compact('feedbacks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $request->validate([
            'name' => ['required', 'max:100'],
            'avatar' => ['', 'image', 'max:5000'],
            'position' => ['required', 'max:100'],
            'testimony' => ['required', 'max:500'],
        ]);
        $testimonials = Feedbacks::findorfail($id);
        $avatarPath = handleUpload('avatar',$testimonials);

        
        $testimonials->name = $request->name;
        $testimonials->avatar = (!empty($avatarPath) ? $avatarPath : $testimonials->avatar);
        $testimonials->position = $request->position;
        $testimonials->testimony = $request->testimony;
        $testimonials->save();

        toastr()->success('Feedbacks Updated Successfully', 'Congrats');
        return redirect()->route('admin.feedback-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $feedbacks = Feedbacks::findorfail($id);
        $feedbacks->delete();
    }
}
