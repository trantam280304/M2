<!DOCTYPE html>
<html>
<body>

<h2>THÊM NHÂN VIÊN</h2>

<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <label>Name:</label><br>
  <input type="text"  name="name" value=""><br>
  <label>Email:</label><br>
  <input type="text" name="email" value="" ><br>
  <label>Password:</label><br>
  <input type="password" name="password" value="" ><br><br>
  <label>Image:</label><br>
  <input type="file" name="image" value="" ><br><br>
  <input type="submit" value="THÊM MỚI">
  <a href="{{ route('user.index') }}" class="btn-back">QUAY LẠI</a>
</form>

</body>
</html>
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
    input[type="password"] {
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
    .btn-back {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .btn-back:hover {
        background-color: #0056b3;
    }
</style>
