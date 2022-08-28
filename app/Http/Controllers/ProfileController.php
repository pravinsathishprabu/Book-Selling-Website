<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
        $get_user = DB::table('users')->where('id',Auth::user()->id)->get();
        return view('view',compact('get_user'));
    }
}
