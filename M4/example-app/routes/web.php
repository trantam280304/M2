<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
// bai1
// Route::get('login', function () {
//     return view('bai1.login');
//     // echo "xin chào mọi người"
// });
// Route::post('/login', function (Illuminate\Http\Request $request) {
//     $username = $request->username;
//     $password = $request->password;

//     if ($username == 'admin'
//         && $password == 'admin') {
//         return view('bai1.welcome_admin');
//     }
//     return view('bai1.no_welcome');
// });

//bai2
// Route::get('product' , function(){
//     return view ('bai2.product');
// });
// Route::post('/product' , function  (Illuminate\Http\Request $request) {
//     $product = $request->product;
//     $price = $request->price;
//     $percent = $request->percent;
//     $amount = $price * $percent * 0.1;
//     return view('bai2.display', compact([ 'amount', 'product', 'price', 'percent']));
// });

// 5 Phương thức cần nhớ get, post , put , patch , delete
// truyền tham số bắt buuoojc
// Route::get(
//     '/users/{id}',
//     function ($id) {
//         echo 'Used ID : ' . $id;
//     }
// );

// truyền nhiều tham số bắt buộc

// bai *1
// Route::get('/soA/{soA}/soB/{soB}', function ($soA, $soB) {
//     $tich = $soA * $soB;
//     // Trả về kết quả tính toán
//     return "Tích của $soA và $soB là: $tich";
// });

// bai*2
// Route::get('/soA/{soA?}/soB/{soB?}', function ($soA = null, $soB = null) {
//     if ($soA !== null && $soB !== null) {
//         $tong = $soA + $soB;
//         return "Tổng của $soA và $soB là: $tong";
//     } elseif ($soA !== null) {
//         return "Không tồn tại số B";
//     } elseif ($soB !== null) {
//         return "Không tồn tại số A";
//     } else {
//         return "Không tồn tại số A và số B";
//     }
// });

// thuc hanh 2
// Route::get('/', function () {
//     return view('thuchanh.thuchanh2');
// });
// Route::get('/time-zone', function (\Illuminate\Http\Request $request) {
//     if (isset($request->location)) {
//         $location = $request->location;
//         $todayDate = Carbon::now($location)->format('Y-m-d h:i:s');
//         echo 'Múi giờ bạn chọn ' . $location . ' hiện tại đang là: ' . $todayDate;
//     }
// });

// thuc hanh 3

// Route::prefix('tasks')->group(function () {
//     Route::get('/', function () {
//         echo "Hiển thị danh sách task";
//     });

//     Route::get('/create', function () {
//         // Hiển thị Form tạo mới
//     });

//     Route::post('/store', function () {
//         // Xử lý lưu dữ liệu tạo mới task thông qua phương thức POST từ form
//     });

//     Route::get('/{id}', function () {
//         // Hiển thị thông tin chi tiết task có mã định danh id
//     });

//     Route::get('{id}/edit', function () {
//         // Hiển thị Form chỉnh sửa thông tin task
//     });

//     Route::post('{id}/update', function () {
//         // Sử lý cập nhật task
//     });

//     Route::get('/{id}/delete', function () {
//         // Xóa task
//     });

// });
// Route::get('/', function () {
//     return view('thuchanh.thuchanh3');
// });
// bai 3
// Route::get('/', function () {
//     return view('bai3.display');
// });

// Route::post('/', function (Request $request) {
//     $key = $request->input('key');
//     $english = [
//         'hello' => 'xin chào',
//         'goodbye' => 'tạm biệt',
//         'love' => 'yêu'
//     ];
//     foreach ($english as $key1 => $value) {
//         if ($key === $key1) {
//             $kq = $value;
//             break;
//         } else {
//             $kq = 'không có trong từ điển';
//         }
//     }
//     return view('bai3.kq', compact(['kq']));
// });

//Client routes
// học controller
// Route::prefix('categories')->group(function () {

//     // danh sach chuyen muc
//     Route::get('/', [CategoriesController::class, 'index'])->name('BaiController.list');

//     // lay chi tiet 1 chuyen muc (ap dung show form)
//     Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('BaiController.edit');

//     // xu ly update
//     Route::get('/edit/{id}', [CategoriesController::class, 'updateCategory']);

//     // hien thi form add du lieu
//     Route::get('/add', [CategoriesController::class,'addCategory'])->name('BaiController.add');

//     // xu ly them
//     Route::post('/add', [CategoriesController::class,'handleAddCategory']);

//     // xoa chuyen muc
//    Route::delete('/delete/{id}',[CategoriesController::class,'delteCategory'])->name('BaiController.delete');
// });

// Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

// Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');

// Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

// Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/tam', function () {
    
    //thỏa mãn thì tiếp tục return
    })->middleware('checkemail');

 
