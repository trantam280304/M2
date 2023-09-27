<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{   
    // Phần hiển thị chung
    public function index(Request $request)
    {
        // Phân trang và tìm kiếm
        $brands = Brand::paginate(3);
        if (isset($request->keyword)) {
            $keyword = $request->keyword;
            $brands = Brand::where('name', 'like', "%$keyword%")
                ->paginate();
        }

        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    // Xử lý thêm thì phải có Request
    public function store(Request $request)
    {
        $brands = new Brand();
        $brands->name = $request->name;
        $brands->description = $request->description;

        // Xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extension = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extension;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $brands->image = $path;
        }
        $brands->save();

        return redirect()->route('brand.index');
    }
    // Chỉnh sửa
    public function edit($id)
    {
        $brands = Brand::find($id);
        return view('brands.edit', compact('brands'));
    }

    public function update(Request $request, $id)
    {
        $brands = Brand::find($id);
        $brands->name = $request->name;
        $brands->description = $request->description;

        // Xử lý ảnh
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extension = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extension;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $brands->image = $path;
        }
        $brands->save();
        return redirect()->route('brand.index');
    }

    // Xóa
    public function destroy($id)
    {
        $brands = Brand::find($id);
        $brands->delete();

        return redirect()->route('brand.index');
    }

    // Xem
    public function show($id)
    {
        $brands = Brand::find($id);
        return view('brands.show', compact('brands'));
    }
}
    