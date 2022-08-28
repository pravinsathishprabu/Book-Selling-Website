<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        $rules = [
            'name' => ['required','string','regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed','min:8']
            ];

         $customMessages = [
            'required' => 'The :attribute field is required.',
            'name.regex:/^[a-zA-Z]+$/u' => "The :attribute field is invalid",
            'email.email'             =>    "The :attribute :input format should be example@example.com/.in/.edu/.org....",
           'email.unique'           =>   "The :attribute :input is taken. Please use another email address",
           'password.confirmed' => "The :attribute does not match",
           'password.min:8'=> "The :attribute should be 8 characters long"
        ];
        
        //$validate =  $this->validate($req, $rules, $customMessages);
        $validate =  Validator::make($req->all(),$rules,$customMessages);
        if($validate->fails()){
            return redirect('/error')->withInput()->withErrors($validate->messages());
        }
        else{
            $user = User::create([
            'name'=>$req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
            Auth::login($user);
            return redirect('/home');
        }

        
}
}
