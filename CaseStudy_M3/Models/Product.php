<?php
// Ket noi voi database
class Product
{
    // lay ta ca du lieu

    public static function all()
    {
        global $conn;
        // phân trang và tìm kiếm
        $record_per_page = 3;
        global $conn;

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current_page - 1) * $record_per_page;

        if (isset($_GET['search'])) {
            $keyword = $_GET['search'];
            $sql = "SELECT products.*, categories.name AS category_name, brands.name AS brand_name
                    FROM products
                    JOIN categories ON products.category_id = categories.id
                    JOIN brands ON products.brand_id = brands.id
                    WHERE products.name LIKE '%$keyword%' OR brands.name LIKE '%$keyword%'";

            $sql_count = "SELECT COUNT(products.id) as total
                          FROM products 
                          JOIN categories ON products.category_id = categories.id
                          JOIN brands ON products.brand_id = brands.id
                          WHERE products.name LIKE '%$keyword%'";
        } else {
            $sql = "SELECT products.*, categories.name AS category_name, brands.name AS brand_name
                    FROM products
                    JOIN categories ON products.category_id = categories.id
                    JOIN brands ON products.brand_id = brands.id";

            $sql_count = "SELECT COUNT(products.id) as total
                          FROM products
                          JOIN categories ON products.category_id = categories.id
                          JOIN brands ON products.brand_id = brands.id";
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
            'products' => $rows,
            'total_pages' => $total_pages
        ];
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `products` WHERE id = $id";

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
        $price = $data['price'];
        $quantity = $data['quantity'];
        $status = $data['status'];
        $category_id  = $data['category_id'];
        $brand_id = $data['brand_id'];


        $image = '';

        // Kiểm tra xem đã tải lên ảnh hay chưa
        if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
            $uploadDir = ROOT_DIR . '/public/uploads/';
            $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
            move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadDir . $_FILES['IMAGE']['name']);
        }

        $sql = "INSERT INTO `products`
        (`name`, `price`, `quantity`, `category_id`, `brand_id`, `status`, `IMAGE`)
        VALUES
        ('$name', '$price', '$quantity', '$category_id', '$brand_id', '$status', '$image')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }
    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $name = $data['name'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $status = $data['status'];
        $category_id  = $data['category_id'];
        $brand_id = $data['brand_id'];

        // Kiểm tra xem đã tải lên ảnh mới hay chưa
        if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
            $uploadDir = ROOT_DIR . '/public/uploads/';

            // Xóa ảnh cũ nếu có
            $sql = "SELECT `IMAGE` FROM `products` WHERE `id` = $id";
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
            $sql = "SELECT `IMAGE` FROM `products` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image = $stmt->fetchColumn();
        }



        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price' ,
         `quantity` = '$quantity',`category_id` = '$category_id', `brand_id` = '$brand_id' , `status` = '$status',`IMAGE` = '$image'
             WHERE `id` = '$id' ";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }
    // Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM products WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
