<!DOCTYPE html>
<html>

<head>
    <style> 
        .button-group {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-back {
            display: inline-block;
            padding: 8px 10px;
            background-color: #999;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-back:hover {
            background-color: #999;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 90%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #4CAF50;
        }

        input[type="submit"] {
            display: block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Thêm chi tiêu</h2>
    <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Danh mục:</label><br>
        <input type="text" name="list" value=""><br>
        @error('list')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label>Ngày:</label><br>
        <input type="date" name="date_time" value=""><br>
        @error('date_time')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label>Số tiền:</label><br>
        <input type="number" name="price" value=""><br>
        @error('price')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label>Ghi chú:</label><br>
        <textarea name="note" rows="4" cols="50"></textarea>
        @error('note')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <br><br>
        <div class="button-group">
            <input type="submit" value="Thêm mới">
            <a href="{{ route('customer.index') }}" class="btn-back btn">Quay lại</a>
        </div>
    </form>
</body>

</html>