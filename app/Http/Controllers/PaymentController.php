<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use DB;

class PaymentController extends Controller
{
    //rzp_test_Miky1kbKFDHLgs

    //Pw2FNZvlNLOyVTCohOIXxnNe

    public function payment(Request $request){
        $user_id = $request->uid;
        $book_id = $request->bid;
        $rate = $request->rate;
        $name = $request->bname;
        $image = $request->image;
        $pdf = $request->pdf;
        $payment_done = '1';

        $api = new Api('rzp_test_Miky1kbKFDHLgs','Pw2FNZvlNLOyVTCohOIXxnNe');
        $order = $api->order->create(array('receipt' =>'123', 'amount' => $rate * 100,'currency' => 'INR' ));
        $orderId = $order['id'];

         $insert = [
                'user_id'=>$user_id,
                'amount'=>$rate,
                'book_id'=>$book_id,
                'book_name'=>$name,
                'book_image'=>$image,
                'pdf'=>$pdf,
                'payment_id'=>$orderId,
                'payment_done'=>$payment_done,
            ];
            DB::table('payments')->insert($insert);
            //Session::put('amount',$rate);
        return redirect('cart');
    }
}
