<!DOCTYPE html>
<html>
<head>
    <style>
        h2 {
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        .form-control-file {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Sửa nhân viên</h2>

    <form action="<?php echo route('user.update', $user->id) ?>" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name" value="{{$user->name}}">
        <br>

        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" name="email" value="{{$user->email}}">
        <br>

        <label for="password">Password:</label>
        <br>
        <input type="password" id="password" name="password" value="{{$user->password}}">
        <br>

        <label for="image">Image:</label>
        <br>
        <input type="file" class="form-control-file" id="image" name="image">
        <br>
        <img src="{{ asset($user->image) ?? asset('public/images/' . old('image', $user->image)) }}" width="90px" height="90px" id="blah1" alt="">
        <br><br>
        <input type="submit" value="SỬA">
    </form>
</body>
</html>