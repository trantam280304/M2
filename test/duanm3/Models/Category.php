<?php
    // Ket noi voi database
    class Category {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `categories`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `categories` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            $name = $data['name'];
            $description = $data['description'];
            $image = '';

            // Kiểm tra xem đã tải lên ảnh hay chưa
            if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
                $uploadDir = ROOT_DIR . '/public/uploads/';
                $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
                move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadDir . $_FILES['IMAGE']['name']);
            }
            
            $sql = "INSERT INTO `categories` (`name`, `description`, `IMAGE`) VALUES ('$name', '$description', '$image')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update($id, $data){
            global $conn;
            $name = $data['name'];
            $description = $data['description'];

            // Kiểm tra xem đã tải lên ảnh mới hay chưa
            if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
                $uploadDir = ROOT_DIR . '/public/uploads/';

                // Xóa ảnh cũ nếu có
                $sql = "SELECT `IMAGE` FROM `categories` WHERE `id` = $id";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $oldImage = $stmt->fetchColumn();

                if ($oldImage && file_exists($uploadDir . $oldImage)) {
                    unlink($uploadDir . $oldImage);
                }

                // Di chuyển ảnh mới vào thư mục đích
                $newImage = $uploadDir . $_FILES['IMAGE']['name'];
                move_uploaded_file($_FILES['IMAGE']['tmp_name'], $newImage);
                $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
            } else {
                // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
                $sql = "SELECT `IMAGE` FROM `categories` WHERE `id` = $id";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $image = $stmt->fetchColumn();
            }

            $sql = "UPDATE `categories` SET `name` = '$name', `description` = '$description', `IMAGE` = '$image' WHERE `id` = $id";
            // Thực hiện truy vấn
            $conn->exec($sql);
            return true;
        }

        // Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM `categories` WHERE `id` = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }
?>