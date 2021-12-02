<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $data = [
            "email" => $request->input('email'),
            "password" => $request->input('password')
        ];
        if ($request->check == 'check') {
            $check = true;
        }else{
            $check = false;
        }

        if (Auth::attempt($data,$check)) {
            return redirect()->route('show.home');
        }else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu sai!!!');
        }
    }

    public function showRegister()
    {
        return view('login.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công!');
    }

    public function logout()
    {
    
    }
}
