<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Models\Category;
use File;

class HomeController extends Controller

{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    public function index(){
        $categorys=Category::where('is_published',1)->get();
        $products=Products::where('is_published',1)->get();
        return view('index',compact('categorys','products'));
    }

    public function mobile(){
        return view('category.mobile');
    }

    public function fashion(){
        return view('category.fashion');
    }

    public function kitchen(){
        return view('category.kitchen');
    }

    public function address(){
        return view('userdata.address');
    }

    public function sidebar(){
        return view('profile.sidebar');
    }

    public function myaccount(){
        return view('userdata.myaccount');
    }

    public function purchase(){
        return view('userdata.purchase');
    }

    public function wishlist(){
        return view('userdata.wishlist');
    }

    // public function buynow($id)
    // {
    //     $package=Package::find($id);
    //     session()->put('packageid', $id);
    //     return view('package.buynow',compact('package'));

    // }

    public function buynow($id){
        $categorys=Category::where('is_published',1)->get();
        $products=Products::where('is_published',1)->find($id);
        return view('shoppages.buynow',compact('categorys','products'));
    }

    public function checkout(){
        $categorys=Category::where('is_published',1)->get();
        $products=Products::where('is_published',1)->get();
        return view('shoppages.checkout',compact('categorys','products'));
    }
    
    public function contact(){
        return view('shoppages.contact');
    }

    public function shopgrid(){
        $categorys=Category::where('is_published',1)->get();
        return view('shoppages.shopgrid',compact('categorys'));
    }
    
    public function shopdetails($id){
        $categorys=Category::where('is_published',1)->get();
        $products=Products::where('is_published',1)->where('slug',$id)->get();
        return view('shoppages.shopdetails',compact('categorys', 'products'));
    }


    public function products($subcateid){
        $subcategory=Subcategory::where('slug',$subcateid)->first();
        $products=Products::where('is_published',1)->where('subcate_id', $subcategory->id)->get();
        return view('shoppages.products',compact('products'));
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function get_subcategory_ajax(Request $request){
          $subcategory = Subcategory::where('category',$request->cat_id)->get();
          return response()->json($subcategory, 200);
    }

    public function get_subsubcategory_ajax(Request $request){
        $subsubcategory = Subsubcategory::where('subcategory',$request->sub_id)->get();
        return response()->json($subsubcategory, 200);
    }

    public function logout(){
      Auth::logout();
    }
}

