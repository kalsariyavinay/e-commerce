<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Requests\StoresubcategoryRequest;
use App\Http\Requests\UpdatesubcategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function index()
    {
        $subcategory=Subcategory::all();
        return view('admin.subcategory.index',compact('subcategory'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $category=Category::all();
            return view('admin.subcategory.create',compact('category'));
        }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new Subcategory();
        $subcategory->subcategory = $request->subcategory;
        $subcategory->category = $request->category;
        $subcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->subcategory)).'-'.Str::random(12);
        if($request->has('logo')){
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/subcategory/');
            $image->move($destinationPath, $name);
            $subcategory->logo = 'uploads/subcategory/'.$name;
        }
        $subcategory->save();
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

        {
            $data=Subcategory::find($id);
            $category=Category::all();
            return view('admin.subcategory.edit',compact('category'),['data'=>$data ]);
        
        }  
        
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubcategoryRequest  $request
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->subcategory = $request->subcategory;
        $subcategory->category = $request->category;
        $subcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->subcategory)).'-'.Str::random(12);
        if($request->has('logo')){
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/subcategory/');
            $image->move($destinationPath, $name);
            $subcategory->logo = 'uploads/subcategory/'.$name;
        }
        $subcategory->save();
        return redirect()->route('subcategory.index');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */

     public function delete($id)
        {
            $subcategory=Subcategory::find($id);
            $subcategory->delete();
            return back();
        }
   
}
