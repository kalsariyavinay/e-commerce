<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class ProductsController extends Controller
{

    public function index()
    {
        $products=Products::all();
        return view('admin.product.index',compact('products'));
    }


    public function create()
        {
            $category=Category::all();
            $subcategory=Subcategory::all();
            $subsubcategory=Subsubcategory::all();
            return view('admin.product.create',compact('category','subcategory','subsubcategory'));
        }



    public function store(Request $request)
        {
            $products = new Products();
            if($request->has('logo')){
                $image = $request->file('logo');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/product/');
                $image->move($destinationPath, $name);
                $products->logo = 'uploads/product/'.$name;
            }
            $products->product = $request->product;
            $products->category = $request->category;
            $products->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->product)).'-'.Str::random(12);
            $products->subcate_id = $request->subcate_id;
            $products->subsubcate_id = $request->subsubcate_id;
            $products->price = $request->price;
            $products->save();
            return redirect()->route('product.index');
        }

    function edit($id)
        {
            $data=Products::find($id);
            $category=Category::all();
            $subcategory=Subcategory::all();
            $subsubcategory=Subsubcategory::all();
            return view('admin.product.edit',compact('category','subcategory','subsubcategory'),['data'=>$data ]);
        }


    public function update(Request $request, $id)
    {
        $products=Products::find($id);
        $products->product = $request->product;
        $products->price = $request->price;
        if($request->has('logo')){
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/product/');
            $image->move($destinationPath, $name);
            $products->logo = 'uploads/product/'.$name;
        }

        $products->category = $request->category;
        $products->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->product)).'-'.Str::random(12);
        $products->subcate_id = $request->subcate_id;
        $products->subsubcate_id = $request->subsubcate_id;
        $products->save();
        return redirect()->route('product.index');
    }

    public function show(Products $products)
        {
    
        }

    
    public function delete($id)
    {
        $products=Products::find($id);
        $products->delete();
        return back();
    }


    public function status_update($id,$status)
    {
        $products=Products::find($id);
        $products->is_published = $status;
        $products->save();
        return back();
    }
    
}

