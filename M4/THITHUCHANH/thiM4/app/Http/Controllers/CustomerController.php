<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    // Phần hiển thị chung
    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        // Phân trang và tìm kiếm
        $customers = Customer::paginate(5);
        if (isset($request->keyword)) {
            $keyword = $request->keyword;
            $customers = Customer::where('name', 'like', "%$keyword%")
                ->paginate();
        }
        // thông báo
        $successMessage = '';
        if ($request->session()->has('successMessage')) {
            $successMessage = $request->session()->get('successMessage');
        } elseif ($request->session()->has('successMessage1')) {
            $successMessage = $request->session()->get('successMessage1');
        } elseif ($request->session()->has('successMessage2')) {
            $successMessage = $request->session()->get('successMessage2');
        }
        return view('customer.index', compact('customers', 'successMessage'));
    }
    public function create()
    {
        $customers = Customer::get();
        return view('customer.create', compact('customers'));
    }
    public function store(CustomerRequest $request)
    {

        $customers = new Customer();
        $customers->list = $request->list;
        $customers->date_time = $request->date_time;
        $customers->price = $request->price;
        $customers->note = $request->note;
        $customers->save();
        $request->session()->flash('successMessage', 'Thêm thành công');
        return redirect()->route('customer.index');
    }
    // Chỉnh sửa
    public function edit($id)
    {
        $customers = Customer::find($id);

        return view('customer.edit', compact('customers'));
    }
    public function update(CustomerRequest $request, $id)
    {
        $customers = Customer::find($id);

        $customers->list = $request->list;
        $customers->date_time = $request->date_time;
        $customers->price = $request->price;
        $customers->note  = $request->note;

        $customers->save();
        $request->session()->flash('successMessage1', 'Cập nhật thành công');
        return redirect()->route('customer.index');
    }
    public function destroy(Request $request, $id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        $request->session()->flash('successMessage2', 'Xóa thành công');
        return redirect()->route('customer.index');
    }
}
