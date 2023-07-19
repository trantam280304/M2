<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <style>

    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="">
            <div class="user-box">
                <input type="text" name="username" id="username">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password">
                <label>Password</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Sign in" />
            </a>
            <link rel="stylesheet" type="text/css" href="main.css">
            <ul class="wrapper">
                <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="fab fa-facebook-f"></i></span>
                </li>
                <li class="icon twitter">
                    <span class="tooltip">Twitter</span>
                    <span><i class="fab fa-twitter"></i></span>
                </li>
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <span><i class="fab fa-instagram"></i></span>
                </li>
                <li class="icon github">
                    <span class="tooltip">Github</span>
                    <span><i class="fab fa-github"></i></span>
                </li>
                <li class="icon youtube">
                    <span class="tooltip">Youtube</span>
                    <span><i class="fab fa-youtube"></i></span>
                </li>
            </ul>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if ($username === "trantam" && $password === "123123") {
                echo "<h3><span style='color:White'>Chào mừng " . $username . " đến với website</span></h3>";
            } else {
                echo "<h3><span style='color:red'>Login Error</span></h3>";
            }
        }
        ?>
    </div>
</body>

</html>