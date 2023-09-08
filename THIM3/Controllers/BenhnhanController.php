<?php
require_once 'Models/Benhnhan.php';
class BenhnhanController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Benhnhan::all();
        // Truyen data xuong view
        require_once 'Views/benhnhans/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'Views/benhnhans/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Benhnhan::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=benhnhan&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Benhnhan::find($id);
        // Truyen xuong view
        require_once 'Views/benhnhans/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Benhnhan::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=benhnhan&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Benhnhan::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=benhnhan&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Benhnhan::find($id);

        // Truyen xuong view
        require_once 'Views/benhnhans/show.php';
    }
}