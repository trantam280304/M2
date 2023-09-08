<?php
require_once 'models/Customer.php';
class CustomerController{
    // Hien thi danh sach records => table
    public function index(){
        $data = Customer::all();
        // Truyen data xuong view
        $items = $data['customers'];
        // phân trang
        $total_pages = $data['total_pages'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'THÊM THÀNH CÔNG!';
        }
        else if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage1 = 'CẬP NHẬT THÀNH CÔNG!';
        }
        else if (isset($_GET['success']) && $_GET['success'] == 3) {
            $successMessage2 = 'XÓA THÀNH CÔNG!';
        }
        require_once 'views/customers/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'views/customers/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = $_POST;
        $successMessage = '';

        if (Customer::store($data)) {
            $successMessage = 'Thêm thành công!';
            echo '<script>window.location.href = "index.php?controller=customer&action=index&success=1";</script>';
            exit();
        } else {
            $errorMessage = 'Thêm thất bại!';
            require_once 'Views/customers/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Customer::find($id);
        // Truyen xuong view
        require_once 'views/customers/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        $data = $_POST;
        if (Customer::update($id, $data)) {
            // Chuyen huong ve trang danh sach
            echo '<script>window.location.href = "index.php?controller=customer&action=index&success=2";</script>';
            exit();
        } else {
            // Truyen loi xuong view
            $row = Customer::find($id);
            require_once 'views/customers/edit.php';
        }
    }
    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Customer::delete($id);
        // Chuyển hướng về trang danh sách
        echo '<script>window.location.href = "index.php?controller=customer&action=index&success=3";</script>';        exit();
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Customer::find($id);

        // Truyen xuong view
        require_once 'views/customers/show.php';
    }
}