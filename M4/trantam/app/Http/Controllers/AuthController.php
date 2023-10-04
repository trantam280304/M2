<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Xác minh thông tin đăng nhập (đơn giản hóa cho mục đích ví dụ)
        if ($request->input('username') === 'user' && $request->input('password') === '123') {
            // Lưu trạng thái đăng nhập vào Session
            Session::put('user', 'user1');
            // Flash thông báo chào mừng
            session()->flash('message', 'Xin chào, ' . Session::get('user') . '!');
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Đăng nhập thất bại');
        }
    }
    
    // public function cart()
    // {
    //     if (session()->has('user')) {
    //         return view('cart');
    //     } else {
    //         return redirect('/login')->with('error', 'Vui lòng đăng nhập để truy cập vào giỏ hàng.');
    //     }
    // } 

    public function logout()
    {
        // Xóa thông tin đăng nhập khỏi Session
        Session::forget('user');
        return redirect('/login');
    }

    public function regenerateSession()
    {
        // Tạo lại ID của phiên
        Session::regenerate();
        return redirect('/cart');
    }
}