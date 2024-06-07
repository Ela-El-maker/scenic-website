<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PortfolioItemDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.portfolio-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.portfolio-item.create', compact('categories'));
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
                'title' => ['required', 'max:100'],
                'sub_title' => ['required', 'max:200'],
                'description' => ['required'],
                'category_id' => ['required', 'numeric'],
                'client' => ['max:200'],
                'website' => ['url'],
                'image_1' => ['required', 'image', 'max:5000'],
                'image_2' => ['required', 'image', 'max:5000'],
                'image_3' => ['required', 'image', 'max:5000'],
                'image_4' => ['required', 'image', 'max:5000'],
                'project_sub_title' => ['required', 'max:200'],
                'project_description' => ['required'],
                'project_sub_title_1' => ['required', 'max:200'],
                'project_description_1' => ['required'],
                
            ]
        );

        $imagePath = handleUpload('image');
        $imagePath_1 = handleUpload('image_1');
        $imagePath_2 = handleUpload('image_2');
        $imagePath_3 = handleUpload('image_3');
        $imagePath_4 = handleUpload('image_4');

        $portfolioItem = new PortfolioItem();

        
        $portfolioItem->title = $request->title;
        $portfolioItem->sub_title = $request->sub_title;
        $portfolioItem->description = $request->description;
        $portfolioItem->image = $imagePath;
        $portfolioItem->category_id = $request->category_id;
        $portfolioItem->client = $request->client;
        $portfolioItem->website = $request->website;
        $portfolioItem->project_sub_title = $request->project_sub_title;
        $portfolioItem->project_description = $request->project_description;
        $portfolioItem->image_1 = $imagePath_1;
        $portfolioItem->image_2 = $imagePath_2;
        $portfolioItem->image_3 = $imagePath_3;
        $portfolioItem->image_4 = $imagePath_4;
        $portfolioItem->project_sub_title_1 = $request->project_sub_title_1;
        $portfolioItem->project_description_1 = $request->project_description_1;


        $portfolioItem->save();


        toastr()->success('Portfolio Item Created Successfully!', 'Congrats');
        return redirect()->route('admin.portfolio-item.index');
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
        $categories = Category::all();
        $portfolioItems = PortfolioItem::findorfail($id);
        return view('admin.portfolio-item.edit', compact('categories','portfolioItems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate(
            [
                'image' => ['', 'image', 'max:5000'],
                'title' => ['required', 'max:100'],
                'sub_title' => ['required', 'max:200'],
                'description' => ['required'],
                'category_id' => ['required', 'numeric'],
                'client' => ['max:200'],
                'website' => ['url'],
                'image_1' => ['', 'image', 'max:5000'],
                'image_2' => ['', 'image', 'max:5000'],
                'image_3' => ['', 'image', 'max:5000'],
                'image_4' => ['', 'image', 'max:5000'],
                'project_sub_title' => ['required', 'max:200'],
                'project_description' => ['required'],
                'project_sub_title_1' => ['required', 'max:200'],
                'project_description_1' => ['required'],
                
            ]
        );

        $portfolioItem = PortfolioItem::findorfail($id);

        $imagePath = handleUpload('image', $portfolioItem);
        $imagePath_1 = handleUpload('image_1', $portfolioItem);
        $imagePath_2 = handleUpload('image_2', $portfolioItem);
        $imagePath_3 = handleUpload('image_3', $portfolioItem);
        $imagePath_4 = handleUpload('image_4', $portfolioItem);

        

        
        $portfolioItem->title = $request->title;
        $portfolioItem->sub_title = $request->sub_title;
        $portfolioItem->description = $request->description;
        $portfolioItem->image = (!empty($imagePath) ? $imagePath : $portfolioItem->image);
        $portfolioItem->category_id = $request->category_id;
        $portfolioItem->client = $request->client;
        $portfolioItem->website = $request->website;
        $portfolioItem->project_sub_title = $request->project_sub_title;
        $portfolioItem->project_description = $request->project_description;
        $portfolioItem->image_1 = (!empty($imagePath_1) ? $imagePath_1 : $portfolioItem->image_1);
        $portfolioItem->image_2 = (!empty($imagePath_2) ? $imagePath_2 : $portfolioItem->image_2);
        $portfolioItem->image_3 = (!empty($imagePath_3) ? $imagePath_3 : $portfolioItem->image_3);
        $portfolioItem->image_4 = (!empty($imagePath_4) ? $imagePath_4 : $portfolioItem->image_4);
        $portfolioItem->project_sub_title_1 = $request->project_sub_title_1;
        $portfolioItem->project_description_1 = $request->project_description_1;


        $portfolioItem->save();


        toastr()->success('Portfolio Item Updated Successfully!', 'Congrats');
        return redirect()->route('admin.portfolio-item.index');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $portfolioItem = PortfolioItem::findorfail($id);
        deleteFileIfExists($portfolioItem->image);
        deleteFileIfExists($portfolioItem->image_1);
        deleteFileIfExists($portfolioItem->image_2);
        deleteFileIfExists($portfolioItem->image_3);
        deleteFileIfExists($portfolioItem->image_4);

        $portfolioItem->delete();
    }
}
