<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Phần hiển thị chung
    public function index(Request $request)
    {
        // Phân trang và tìm kiếm
        $users = User::paginate(2);
        if ($request->has('keyword')) {
            $keyword = $request->keyword;
            $users = User::where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->paginate();
        }

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    // Xử lý thêm thì phải có Request
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        // Xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extension = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extension;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }

        $user->save();
        Session::flash('success', 'Thêm người dùng thành công!');

        return redirect()->route('user.index');
    }

    // Chỉnh sửa
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        // Xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extension = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extension;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $user->image = $path;
        }

        $user->save();
        Session::flash('success', 'Cập nhật người dùng thành công!');

        return redirect()->route('user.index');
    }

    // Xóa
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('success', 'Xóa người dùng thành công!');

        return redirect()->route('user.index');
    }

    // Xem
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
}