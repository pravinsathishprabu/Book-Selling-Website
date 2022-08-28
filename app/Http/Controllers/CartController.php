<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CartController extends Controller
{
    public function getcart(){
        if(Auth::check()){
            $get_cart = DB::table('payments')->where('user_id',Auth::user()->id)->get();
            return view('view',compact('get_cart'));
        }
        else{
            return back();
        }
    }
}
