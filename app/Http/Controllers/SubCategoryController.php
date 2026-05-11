<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index',['sub_categories' => SubCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.create',['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255|unique:sub_categories,name',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required',
        ], [

            'name.unique'   => 'This name already exist',
            'category_id.required' => 'Please select category',
            'image'       => 'select an image',
            'description' => 'enter the description',

        ]);

        SubCategory::saveSubCategory($request);
        return back()->with('message','SubCategory Info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.sub-category.edit',
            [
                'sub_category'=>$subCategory,
                'categories' => Category::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255|unique:sub_categories,name',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required',
        ], [

            'name.unique'   => 'This name already exist',
            'category_id.required' => 'Please select category',
            'image'       => 'select an image',
            'description' => 'enter the description',

        ]);

        SubCategory::updateSubCategory($request,$id);
        return redirect('/sub-category')->with('message','SubCategory info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('message','SubCategory info deleted successfully.');
    }
}
