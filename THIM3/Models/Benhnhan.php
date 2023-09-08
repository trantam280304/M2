<?php
// Ket noi voi database
class Benhnhan
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        if (isset($_GET['search']) && $_GET['search']) {
            $keyword = $_GET['search'];
            $sql = "SELECT benhnhans.*, benhnhans.TENBENHNHAN, benhnhans.PHONG
            FROM benhnhans
                    WHERE `TENBENHNHAN` LIKE '%$keyword%'OR `PHONG` LIKE '%$keyword%';";
        }else{
        $sql = "SELECT benhnhans.*, benhnhans.TENBENHNHAN, benhnhans.PHONG
        FROM benhnhans;";
        }
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `benhnhans` WHERE MABENHNHAN= $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $TENBENHNHAN = $data['TENBENHNHAN'];
        $PHONG = $data['PHONG'];
        $GIOITINH = $data['GIOITINH'];
        $TINHTRANG = $data['TINHTRANG'];
        $THONGTIN = $data['THONGTIN'];
        $NGAYNHAPVIEN = $data['NGAYNHAPVIEN'];

        $sql = "INSERT INTO `benhnhans` 
            ( `TENBENHNHAN`, `PHONG`, `GIOITINH`, `TINHTRANG`, `THONGTIN`,`NGAYNHAPVIEN`) 
            VALUES 
            ('$TENBENHNHAN','$PHONG','$GIOITINH','$TINHTRANG','$THONGTIN','$NGAYNHAPVIEN')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $TENBENHNHAN = $data['TENBENHNHAN'];
        $PHONG = $data['PHONG'];
        $GIOITINH = $data['GIOITINH'];
        $TINHTRANG = $data['TINHTRANG'];
        $THONGTIN = $data['THONGTIN'];
        $NGAYNHAPVIEN = $data['NGAYNHAPVIEN'];


        $sql = "UPDATE `benhnhans` SET `TENBENHNHAN` = '$TENBENHNHAN', `PHONG` = '$PHONG' , `GIOITINH` = '$GIOITINH', `TINHTRANG` = '$TINHTRANG', `THONGTIN` = '$THONGTIN',`NGAYNHAPVIEN` = '$NGAYNHAPVIEN' WHERE `MABENHNHAN` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM benhnhans WHERE MABENHNHAN = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}
