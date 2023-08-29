<?php
require_once 'Models/Category.php';
class CategoryController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $data = Category::all();
        $items = $data['categories'];
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
        require_once 'Views/categories/index.php';
    }
    // Hien thi form them moi
    public function create()
    {
        require_once 'Views/categories/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = $_POST;
        $successMessage = '';

        if (Category::store($data)) {
            $successMessage = 'Thêm thành công!';
            $redirectUrl = "index.php?controller=category&action=index&success=1";
            header("Location: $redirectUrl");
            exit();
        } else {
            $errorMessage = 'Thêm thất bại!';
            require_once 'Views/categories/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $row = Category::find($id);
        // Truyen xuong view
        require_once 'Views/categories/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        $data = $_POST;
        if (Category::update($id, $data)) {
            // Chuyen huong ve trang danh sach
            $redirectUrl = "index.php?controller=category&action=index&success=2";
            echo "<script>window.location.href='$redirectUrl';</script>";
            exit();
        } else {
            // Truyen loi xuong view
            $row = Category::find($id);
            require_once 'views/categories/edit.php';
        }
    }
    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Category::delete($id);
        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=category&action=index&delete_success=1");
        exit();
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = Category::find($id);

        // Truyen xuong view
        require_once 'Views/categories/show.php';
    }
}
