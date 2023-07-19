<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    form {
        margin: 20px auto;
        width: 70%;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    input[type="text"] {
        width: 60%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
    }

    h2 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    h3 {
        font-size: 24px;
        margin-top: 20px;
        color: #4CAF50;
    }

    table {
        margin-top: 20px;
        border-collapse: collapse;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: #fff;
    }

    td {
        font-size: 18px;
    }
</style>
</style>
<body>
    <form method="POST">
        <h2> Từ điển Anh - Việt </h2>
        <input type="text" name="sot" placeholder="nhap tu can tim" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
</body>

</html>
<?php
$tu_dien = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính",
    "car" => "xe may",

];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $timTu = $_POST['sot'];
    $can_tim=0;
    foreach ($tu_dien as $word => $tu_dien) {
        if($word == $timTu){
            echo "<h3>Từ :".$word."</h3>";
            echo "<table>";
            echo "<tr><td><strong>Nghĩa của từ:</strong></td><td>" . $tu_dien . "</td></tr>";
            echo "</table>";
        $flag = 1;
            break;
     }
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $searchWord = $_POST["sot"];
//     $flag = 0;
//     foreach ($tu_dien as $word => $description) {
//         if ($word == $searchWord) {
//             echo "<h3>Từ: " . $word . "</h3>";
//             echo "<table>";
//             echo "<tr><td><strong>Nghĩa của từ:</strong></td><td>" . $description . "</td></tr>";
//             echo "</table>";
//             $flag = 1;
//             break;
//         }
//     }

//     if ($flag == 0) {
//         echo "Không tìm thấy từ cần tra.";
//     }
// }   
