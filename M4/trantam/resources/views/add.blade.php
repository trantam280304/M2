<!DOCTYPE html>
<html>

<head>
    <title>Đăng Ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"],
        .login-link {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
            text-decoration: none;
            display: inline-block;
        }

        button[type="submit"]:hover,
        .login-link:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="get" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Tên đăng nhập:</label>
                <input type="text" name="name" id="name" >
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" >
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" id="password"    >
                @error('password')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Đăng ký</button>
            <a href="/login" class="login-link">Quay lại</a>
        </form>
    </div>
</body>

</html>