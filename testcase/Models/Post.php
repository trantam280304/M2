<?php
// Ket noi voi database
class Post
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
            $sql = "SELECT users.email, posts.*
                FROM users
                JOIN posts ON users.id = posts.user_id
                WHERE users.email LIKE '%$keyword%'";
            $sql_count = "SELECT COUNT(posts.id) as total
                FROM users
                JOIN posts ON users.id = posts.user_id
                WHERE users.email LIKE '%$keyword%'";
        } else {
            $sql = "SELECT users.email, posts.*
                FROM users
                JOIN posts ON users.id = posts.user_id";
            $sql_count = "SELECT COUNT(posts.id) as total
                FROM users
                JOIN posts ON users.id = posts.user_id";
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
            'posts' => $rows,
            'total_pages' => $total_pages
        ];
    }
    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT users.email, posts.*
        FROM users
        JOIN posts ON users.id = posts.user_id Where posts.id =$id ";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $user_id = $data['user_id'];
        $title = $data['title'];
        $content = $data['content'];
        $sql = "INSERT INTO `posts`
            ( `user_id`, `title` , `content`)
            VALUES
            ('$user_id','$title' , '$content')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }
    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $user_id = $data['user_id'];
        $title = $data['title'];
        $content = $data['content'];
        $sql = "UPDATE `posts` SET `user_id` = '$user_id', `title` = '$title' , `content` = '$content'
             WHERE `id` = '$id' ";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }
    // Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM posts WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
