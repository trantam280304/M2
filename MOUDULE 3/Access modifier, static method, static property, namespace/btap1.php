<form action="" method="post">
<label for="name">Tên:</label>
    <input type="text" name="name" id="name"/><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"/><br>

    <label for="role">Vai trò:</label>
    <select name="role" id="role">
        <option value="1">Admin</option>
    </select><br>

    <input type="submit" value="Submit"/>
</form>
<?php
class User
{
    protected  $name;
    protected  $email;
    public  $role;
    public function getInfo()
    {
        return " Role: " . $this->role . "<br>" . " Tên: " . $this->name . "<br>" . " Email: " . $this->email;
    }
    public function Admin()
    {
        if ($this->role == 1) {
            return "Admin";
        } else if ($this->role == 2) {
            return "người dùng bình thường";
        } else {
            return "Chưa được cấp quyền";
        }
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setRole($_POST['role']);
    echo $user->getInfo();
    echo "<br>";
    echo "Người dùng này là: " . $user->Admin();
}
?>
<style>
    
    /* Áp dụng CSS cho các phần tử trong form */
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 80%;
        padding: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
