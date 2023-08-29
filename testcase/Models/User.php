    <?php
    // Ket noi voi database
    class User
    {

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
                $sql = "SELECT * FROM `users` WHERE `name` LIKE '%$keyword%'";
                $sql_count = "SELECT COUNT(id) as total FROM users WHERE `name` LIKE '%$keyword%'";
            } else {
                $sql = "SELECT * FROM `users`";
                $sql_count = "SELECT COUNT(id) as total FROM users";
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
                'users' => $rows,
                'total_pages' => $total_pages
            ];
        }
    
        // lay chi tiet 1 du lieu   
        public static function find($id)
        {
            global $conn;
            $sql = "SELECT * FROM `users` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data)
        {
            global $conn;
            $name = $data['name'];
            $password = $data['password'];
            $email = $data['email'];
            $phone = $data['phone'];
             $image = '';

            // Kiểm tra xem đã tải lên ảnh hay chưa
            if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
                $uploadDir = ROOT_DIR . '/public/uploads/';
                $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
                move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadDir . $_FILES['IMAGE']['name']);
            }

            $sql = "INSERT INTO `users` (`name`, `password`, `email`,`phone`,`IMAGE`) 
            VALUES ('$name', '$password', '$email',$phone,'$image')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }

    // Cap nhat du lieu
public static function update($id, $data)
{
    global $conn;
    $name = $data['name'];
    $password = $data['password'];
    $email = $data['email'];
    $phone = $data['phone'];

    // Kiểm tra xem đã tải lên ảnh mới hay chưa
    if (isset($_FILES['IMAGE']) && is_uploaded_file($_FILES['IMAGE']['tmp_name'])) {
        // Đường dẫn thư mục tải lên
        $uploadDir = ROOT_DIR . '/public/uploads/';

        // Xóa ảnh cũ nếu có
        $sql = "SELECT `IMAGE` FROM `users` WHERE `id` = $id";
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
        $sql = "SELECT `IMAGE` FROM `users` WHERE `id` = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $image = $stmt->fetchColumn();
    }

    $sql = "UPDATE `users` SET `name` = :name, `password` = :password, `email` = :email, `phone` = :phone, `IMAGE` = :image WHERE `id` = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    return true;
}

        // Xoa du lieu
        public static function delete($id)
        {
            global $conn;
            $sql = "DELETE FROM `users` WHERE `id` = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }
