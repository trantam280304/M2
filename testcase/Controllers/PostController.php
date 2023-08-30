<?php
require_once 'Models/User.php';
require_once 'Models/Post.php';

class PostController
{
    // Hien thi danh sach records => table
    public function index()
    {
        $data = Post::all();
        $items = $data['posts'];
        // phân trang
        $total_pages = $data['total_pages'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        // $successMessage = '';    

        // if (isset($_GET['success']) && $_GET['success'] == 1) {
        //     $successMessage = 'Thêm thành công!';
        // }

        // if (isset($_GET['delete_success']) && $_GET['delete_success'] == 1) {
        //     $successMessage = 'Xóa thành công!';
        // }
        // if (isset($_GET['success']) && $_GET['success'] == 2) {
        //     $successMessage = 'Cập nhật thành công!';
        // }
        require_once 'Views/posts/index.php';
    }

    
    // Hien thi form them moi
    public function create()
    {
        $users = User::all();
        require_once 'Views/posts/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = $_POST;
        $successMessage = '';

        if (Post::store($data)) {
            $successMessage = 'Thêm thành công!';
            $redirectUrl = "index.php?controller=post&action=index&success=1";
            header("Location: $redirectUrl");
            exit();
        } else {
            $errorMessage = 'Thêm thất bại!';
            require_once 'Views/posts/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $users = User::all();

        $row = Post::find($id);
        // Truyen xuong view
        require_once 'Views/posts/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Post::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=post&action=index&success=2");
    }
    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Post::delete($id);
        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=post&action=index&delete_success=1");
        exit();
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $row = Post::find($id);

        // Truyen xuong view
        require_once 'Views/posts/show.php';
    }
}