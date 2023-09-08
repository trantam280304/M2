<?php
// function checktuoi($tuoi){
//     if($tuoi >= 18){
//         echo "Bạn đã đủ 18 tuổi";
//     } else {
//         //  được sử dụng để ném ra một ngoại lệ (exception) có thông báo lỗi "Bạn chưa đủ 18 tuổi".
//         throw new Exception('Bạn chưa đủ 18 tuổi');
//     }
// }
// try {
//     checktuoi(14);
// } catch (Exception $e){
//     echo $e->getMessage();
// } finally {
//     echo "<br>";
//     echo "Xử lý hoàn tất";
// }



function divide($a, $b) {
    try {
        if ($b == 0)
            throw new Exception("khong the chia cho 0 .");
        return $a / $b;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

echo divide(10, 2);
echo "<br>";
echo divide(10, 0); // khong the chia cho 0 .

?>