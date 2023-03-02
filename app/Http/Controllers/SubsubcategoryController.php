<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Subsubcategory;
use App\Http\Requests\StoresubsubcategoryRequest;
use App\Http\Requests\UpdatesubsubcategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SubsubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        {
            $subsubcategory=Subsubcategory::all();
            return view('admin.subsubcategory.index',compact('subsubcategory'));
    
        }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $category=Category::all();
            $subcategory=Subcategory::all();
            return view('admin.subsubcategory.create',compact('category','subcategory'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresubsubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subsubcategory = new Subsubcategory();
        $subsubcategory->category = $request->category;
        $subsubcategory->subcategory = $request->subcategory;
        $subsubcategory->subsubcategory = $request->subsubcategory;
        $subsubcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->subsubcategory)).'-'.Str::random(12);
        $subsubcategory->save();
        return redirect()->route('subsubcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subsubcategory  $subsubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subsubcategory $subsubcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subsubcategory  $subsubcategory
     * @return \Illuminate\Http\Response
     */

     function edit($id)
        {
            $data=Subsubcategory::find($id);
            $category=Category::all();
            $subcategory=Subcategory::all();
            return view('admin.subsubcategory.edit',compact('category','subcategory'),['data'=>$data ]);
        }


    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubsubcategoryRequest  $request
     * @param  \App\Models\subsubcategory  $subsubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subsubcategory=Subsubcategory::find($id);
        $subsubcategory->category = $request->category;
        $subsubcategory->subcategory = $request->subcategory;
        $subsubcategory->subsubcategory = $request->subsubcategory;
        $subsubcategory->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->subsubcategory)).'-'.Str::random(12);
        $subsubcategory->save();
        return redirect()->route('subsubcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subsubcategory  $subsubcategory
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $subsubcategory=Subsubcategory::find($id);
        $subsubcategory->delete();
        return back();
    }
}
