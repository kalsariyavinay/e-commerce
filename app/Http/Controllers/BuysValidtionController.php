<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuysValidtionController extends Controller

{
    // Create Form
    public function createbuys(Request $request) {
        return view('shoppages.buynow');
      }
      // Store Form data in database
      public function buys(Request $request) {
          // Form validation
          $this->validate($request, [
              'amount' => 'required',
              'firstname' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'productinfo'=>'required',
              'surl'=>'required',
              'furl'=>'required',
              'service_provider'=>'required',
              'message' => 'required'
           ]);
          //  Store data in database
          Buys::create($request->all());
          return back()->with('success', 'Your form has been submitted.');
      }
      
    }