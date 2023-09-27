<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        
    }
    // hiển thị danh sách
    public function index(){
        return view('BaiController.list');
    }
    // laays ra 1 chuyen muc theo id (phương thức get)
    public function getCategory($id){
        return view('BaiController.edit');
    }
    // cập nhật 1 chuyên mục (phương thức post)
    public  function updateCategory($id){
      return 'Submit sua chuyen muc :' .$id;
    }
    // show form thêm dữ liệu 
    public function addCategory(){
        return view('BaiController.add');

    }
    // thêm dữ liệu vào chuyên mục (phương thức post)
    public function handleCategory(){
        return 'Submit them chuyen muc :' ;
    }
    // xóa dữ liệu (phương thức delete)
    public function deleteCategory($id){
        return 'Submit xoa chuyen muc :'.$id;

    }
}
?>