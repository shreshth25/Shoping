<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->input();
            if(Auth::attempt(['email' => $data->email, 'password' => $data->password]))
            {
                return view('admin.dashboard');
            }
            else
            {
                return view('admin.login')->with('error','Invalid username or password');
            }
        }
        return view('admin.login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            $request->validate([
                "name" => $request->name,
                "password" => $request->password,
                "email" =>$request->email,
            ]);
            try
            {
                $formData = [
                    "name" =>$request->name??"",
                    "password"=>Hash::make($request->password)??"",
                    "email"=>$request->email??"",
                ];
                User::create($formData);
                return view('admin.login')->with('success','Good to go');
            }
            catch(Exception $e)
            {
                return view('admin.register')->with('error','Invalid username or password');
            }
        }
        return view('admin.register');
    }
}
