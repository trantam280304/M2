<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #666;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn-back {
            display: inline-block;
            padding: 8px 12px;
            background-color: #999;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-back:hover {
            background-color: #999;
        }
    </style>
    </style>
</head>

<body>
    <h2>Sửa chi tiêu</h2>
    <form action="<?php echo route('customer.update', $customers->id) ?>" method="POST">
        @csrf
        @method('PUT')
        <label for="list">Tên danh mục:</label>
        <br>
        <input type="text" id="list" name="list" value="{{$customers->list}}">
        <br>
        <label for="date_time">Ngày:</label>
        <br>
        <input type="date" id="date_time" name="date_time" value="{{$customers->date_time}}">
        <br>
        <label for="price">Giá:</label>
        <br>
        <input type="number" id="price" name="price" value="{{$customers->price}}">
        <br>
        <label for="note">Ghi chú:</label>
        <br>
        <textarea id="note" name="note" rows="4" cols="50">{{$customers->note}}</textarea>
        <br><br>
        <div class="button-group">
            <input type="submit" value="LƯU">
            <a href="{{ route('customer.index') }}" class="btn-back btn">Quay lại</a>
        </div>
    </form>
</body>

</html>