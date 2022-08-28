<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\Validator;
use Session;


class LoginController extends Controller
{
    public function auth(Request $req)
    {
       $rules = [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required','min:8']
            ];

         $customMessages = [
            'required' => 'The :attribute field is required.',
            'name.regex:/^[a-zA-Z]+$/u' => "The :attribute field is invalid",
            'email.email'             =>    "The :attribute :input format should be example@example.com/.in/.edu/.org....",
           'password.min:8'=> "The :attribute should be 8 characters long"
        ];
        
        //$validate =  $this->validate($req, $rules, $customMessages);
        $validate =  Validator::make($req->all(),$rules,$customMessages);
        if($validate->fails()){
            return redirect('/error')->withInput()->withErrors($validate->messages());
        }
        else{

        $email = $req->input('email');
        $password = $req->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/home');
        }
        else{
            return back()->withErrors(['Invalid Credentials!']);
        }
    }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}