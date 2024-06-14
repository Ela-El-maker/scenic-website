<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProjectsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProjectsDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
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
                'total_number' => ['required', 'integer'],
                'icon' => ['required', ''],
                
            ]
        );

        $projectItem = new Projects();

        
        $projectItem->name = $request->name;
        $projectItem->url = $request->url;
        $projectItem->total_number = $request->total_number;
        $projectItem->icon = $request->icon;
        

        $projectItem->save();


        toastr()->success('Project Item Created Successfully!', 'Congrats');
        return redirect()->route('admin.project.index');
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
        $projectEdit = Projects::findorfail($id);
        return view('admin.projects.edit', compact('projectEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $request->validate(
            [
                'name' => ['required', 'max:100'],
                'url' => ['required', 'url'],
                'total_number' => ['required', 'integer'],
                'icon' => ['required', ''],
                
            ]
        );

        $projectItem = Projects::findorfail($id);

        
        $projectItem->name = $request->name;
        $projectItem->url = $request->url;
        $projectItem->total_number = $request->total_number;
        $projectItem->icon = $request->icon;
        

        $projectItem->save();


        toastr()->success('Project Item Created Successfully!', 'Congrats');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $projectItem = Projects::findorfail($id);
        $projectItem ->delete();
    }
}
