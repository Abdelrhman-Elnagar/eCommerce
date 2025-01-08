<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories=Category::all();
        return view('admin.category.category',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // dd($request);
        $picture = $request->file('picture') ?
            $request->file('picture')->store('public/admin/uploads/Category')
            : 'public/admin/uploads/default/default-image.jpeg';
        try {
            $validate = $request->validated();

            $category = new Category();
            $category->name =['ar' => $request->name_ar, 'en' => $request->name_en];
            $category->description =['ar' => $request->description_ar, 'en' => $request->description_en];
            $category->picture = $picture;
            $category->slug = $request->slug;
            // dd($category);
            $category->showen = $request->showen ? 1 : 0;
            $category->offer = $request->offer ? 1 : 0;
            $category->save();

            toastr()->success(trans('dashb.success_save'), trans('dashb.success'), ['timeout' => 500]);

            return to_route('category.index');
        } catch (\Exception $e) {
            return back()->withErrors(['error_catch' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $Category)
    {

        return view ('admin.category.category_show',compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
