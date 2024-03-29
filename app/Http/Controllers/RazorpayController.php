<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\User;
use App\Http\Requests\StoreRazorpayRequest;
use App\Http\Requests\UpdateRazorpayRequest;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
class RazorpayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('package.viewdetails');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function store(Request $request)
    {
        $input = $request->all();
        $user = Auth::user()->id;
        $api = new Api (('rzp_test_o57CRAhIBRlsrN'),('RBBN6yubMO1ytXfuWpPxOvB6'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        
        if(count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $payment = Payment::create([
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount']/100,
                    'status' => $response['status'],
                    'json_response' => json_encode((array)$response)
                ]);

            } catch(Exceptio $e) {
                return $e->getMessage();
                Session::put('error',$e->getMessage());
            }
        }
        Session::put('success',('Payment Successful'));
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRazorpayRequest  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Razorpay  $razorpay
     * @return \Illuminate\Http\Response
     */
    public function show(Razorpay $razorpay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Razorpay  $razorpay
     * @return \Illuminate\Http\Response
     */
    public function edit(Razorpay $razorpay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRazorpayRequest  $request
     * @param  \App\Models\Razorpay  $razorpay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRazorpayRequest $request, Razorpay $razorpay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Razorpay  $razorpay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Razorpay $razorpay)
    {
        //
    }
}
