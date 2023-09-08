<?php
    // Ket noi voi database
    class Brand {
        // lay ta ca du lieu
        public static function all()
        {
            // phân trang và tìm kiếm
            $record_per_page = 3;
            global $conn;
        
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $record_per_page;
        
            if (isset($_GET['search'])) {
                $keyword = $_GET['search'];
                $sql = "SELECT * FROM `brands` WHERE `name` LIKE '%$keyword%'";
                $sql_count = "SELECT COUNT(id) as total FROM brands WHERE `name` LIKE '%$keyword%'";
            } else {
                $sql = "SELECT * FROM `brands`";
                $sql_count = "SELECT COUNT(id) as total FROM brands";
            }
        
            $stmt_count = $conn->query($sql_count);
            $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
            $row_count = $stmt_count->fetch();
            $total_records = $row_count['total'];
            $total_pages = ceil($total_records / $record_per_page);
        
            $sql .= " LIMIT $record_per_page OFFSET $offset";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
        
            // Trả về cho Controller
            return [
                'brands' => $rows,
                'total_pages' => $total_pages
            ];
        }
        
        //
        public static function create(){
            global $conn;

            $sql = "SELECT * FROM `brands`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            return $rows;
        }
        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `brands` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            $name = $data['name'];
            $sql = "INSERT INTO `brands` 
            (`name`) 
            VALUES 
            ('$name')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $name = $data['name'];
            $sql = "UPDATE `brands` SET `name` = '$name' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM brands WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }