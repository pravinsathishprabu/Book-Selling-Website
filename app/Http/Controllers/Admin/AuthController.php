<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Admin;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Session;

class AuthController extends Controller
{
    public function Auth(Request $req)
    {
        $id = $req->input('id');
        $password = $req->input('password');

        if (Auth::guard('admin')->attempt(['Admin_id'=>$id,'password'=>$password])) {
            $admin = Admin::where('Admin_id',$id)->first();
            Auth::login($admin);
            return redirect('admin/add');
        }
        else{
            return back()->withErrors(['Invalid Credentials!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('admin/login');
    }
}


