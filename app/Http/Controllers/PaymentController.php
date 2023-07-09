<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;


use Razorpay\Api\Api;
use Session;

class PaymentController extends Controller
{
    //

    public function index(){
        return view('payment.index');
    }

    public function success(){
        return view('payment.success');
    }
  
    
    
    public function store(Request $request){
        
        $name = $request['Name'];
        $amount = $request['Amount'];
        $Email = $request['Email'];
        
        $api = new Api('mnbbfftgvvg', 'fvfgtvwwr');
        $order = $api->order->create(array('receipt' => '123', 'amount' => $amount*100, 'currency' => 'INR'));
        $orderId = $order['id'];

        $user_pay = new Payment();
        $user_pay->Name=$name;
        $user_pay->Amount=$amount;
        $user_pay->Email=$Email;
        $user_pay->payment_id=$orderId;
        $user_pay->save();

        
        Session::put('order_id',$orderId);
        Session::put('amount',$amount);
        
        echo "store successfully";
        
        return redirect()->back();

    }

    public function paycheck(Request $request){
        $data = $request->all();
        // echo $data;
        $user = Payment::where('payment_id',$data['razorpay_order_id']);
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_order_id'];
        $user->save();
        return redirect('/payment.success');

    }
    
    
    //  public function store(Request $request)
    // {
        //     $input = $request->all();
        
        //     $api = new Api("PLAESE_PASTE_YOUR_PRIVATE_KEY_HERE", "PASTE_YOUR_SECRET_KEY_HERE");
        
        //     $payment = $api->payment->fetch($input['razorpay_payment_id']);
        
        //     if(count($input)  && !empty($input['razorpay_payment_id'])) {
            //         try {
                //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
    //         } catch (Exception $e) {
    //             return  $e->getMessage();
    //             Session::put('error',$e->getMessage());
    //             return redirect()->back();
    //         }
    //     }
          
    //     Session::put('success', 'Payment successful');
    //     return redirect()->back();
    // }

}