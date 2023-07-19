<style>
   form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f6f6f6;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
}

input[type="text"],
input[type="number"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}
</style>


<form action="" method="post">
    <label>Lượng tiền đầu tư ban đầu</label>
    <br>
    <input type="text" name="bandau" id="bandau">
    <br>
    <label>Lãi suất năm</label>
    <br>
    <input type="number" name="laisuat" id="laisuat">
    <br>
    <label> Số năm đầu tư</label>
    <br>
    <input type="number" name="sonam" id="sonam">
    <br>
    <br>
    <input type="submit" value="Calculate" />
</form>
<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $lgtien =  $_POST["bandau"];
            $laisuat = $_POST["laisuat"];
            $sonam = $_POST["sonam"];
            $gtr_tuong_lai = 0;
            for ($i = 1; $i <= $sonam; $i++) {
                $gtr_tuong_lai = $lgtien+($lgtien*$laisuat);
            }
        
            echo 'Giá trị tương lai sau ' . $sonam . ' năm là: ' . $gtr_tuong_lai;
        }
        ?>