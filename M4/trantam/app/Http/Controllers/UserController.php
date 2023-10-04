<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

          $validated = $request->validate(
            [
                'name' => ['required'],
                'password' => ['required'],

            ],
            [
                'name.required' => 'Không được để trống',
                'password.required' => 'Không được để trống',

            ]
        );
        $user = User::where('name', $request->input('name'))->first();
        
        // Xác minh thông tin đăng nhập (đơn giản hóa cho mục đích ví dụ)
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Lưu trạng thái đăng nhập vào Session
            Session::put('user', $user);
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Đăng nhập thất bại');
        }
    }

    public function logout()
    {
        // Xóa thông tin đăng nhập khỏi Session
        Session::forget('user');
        return redirect('/login');
    }

    public function add()
    {
        return view('add');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login');
    }
}