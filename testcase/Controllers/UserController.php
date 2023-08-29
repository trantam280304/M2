<?php
require_once 'Models/User.php';
class UserController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $data = User::all();
        $items = $data['users'];
        // phân trang
        $total_pages = $data['total_pages'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $successMessage = '';

        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'Thêm thành công!';
        }

        if (isset($_GET['delete_success']) && $_GET['delete_success'] == 1) {
            $successMessage = 'Xóa thành công!';
        }
        if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage = 'Cập nhật thành công!';
        }
        require_once 'Views/users/index.php';
    }
    // Hien thi form them moi
    public function create()
    {
        require_once 'Views/users/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = $_POST;
        $successMessage = '';

        if (User::store($data)) {
            $successMessage = 'Thêm thành công!';
            $redirectUrl = "index.php?controller=user&action=index&success=1";
            header("Location: $redirectUrl");
            exit();
        } else {
            $errorMessage = 'Thêm thất bại!';
            require_once 'Views/users/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $row = User::find($id);
        // Truyen xuong view
        require_once 'Views/users/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        $data = $_POST;
        if (User::update($id, $data)) {
            // Chuyen huong ve trang danh sach
            $redirectUrl = "index.php?controller=user&action=index&success=2";
            echo "<script>window.location.href='$redirectUrl';</script>";
            exit();
        } else {
            // Truyen loi xuong view
            $row = User::find($id);
            require_once 'Views/users/edit.php';
        }
    }
    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        User::delete($id);
        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=user&action=index&delete_success=1");
        exit();
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = User::find($id);

        // Truyen xuong view
        require_once 'Views/users/show.php';
    }
}
