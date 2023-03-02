<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
class CategoryController extends Controller
{
    
    public function index()
    {
        $categorys=Category::all();
        return view('admin.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(12);
        if($request->has('banner')){
            $image = $request->file('banner');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/category');
            $image->move($destinationPath, $name);
            $category->banner = 'uploads/category/'.$name;
        }
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(12);
        if($request->has('banner')){
            if (File::exists($category->old_image)) {
                File::delete(public_path($category->old_image));
            }
            $image = $request->file('banner');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/category');
            $image->move($destinationPath, $name);
            $category->banner = 'uploads/category/'.$name;
        }
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return back();
    }

    public function status_update($id,$status)
    {
        $category=Category::find($id);
        $category->is_published = $status;
        $category->save();
        return back();
    }

}
