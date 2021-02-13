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
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                return redirect()->back()->with('success','Good to go');
            }
            else
            {
                return redirect()->back()->with('error','Invalid username or password');
            }
        }
        return view('admin.login');
    }

    public function register(Request $request)
    {

        if($request->isMethod('post'))
        {
            $request->validate([
                'name' => 'required | min:6 | max: 20',
                'email' => 'required|unique:users',
                'password' => 'required| min:4| max:7 |confirmed',
                'password_confirmation' => 'required| min:4'
            ]);
            try
            {
                $formData = [
                    "name" =>$request->name??"",
                    "password"=>Hash::make($request->password)??"",
                    "email"=>$request->email??"",
                ];
                User::create($formData);
                return view('admin.login',['success','Good to go']);
            }
            catch(Exception $e)
            {
                return redirect()->back()->with('error',$e->getMessage());
            }
        }
        return view('admin.register');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
