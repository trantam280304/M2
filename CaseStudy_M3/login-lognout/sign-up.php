
<?php
// Thay đổi các thông số kết nối dựa trên cấu hình của bạn
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'du_an_m3';

// Kết nối tới cơ sở dữ liệu
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối cơ sở dữ liệu thành công:";
    // echo '<script>window.location.href = "login.php";</script>';
} catch (PDOException $e) {
    echo "Lỗi kết nối cơ sở dữ liệu:" . $e->getMessage();
}

// Thêm dữ liệu vào cơ sở dữ liệu
if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Kiểm tra sự tồn tại của dữ liệu
    $checkSql = "SELECT * FROM taikhoanmatkhau WHERE email = :email";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bindParam(':email', $email);
    $checkStmt->execute();

    if ($checkStmt->rowCount() > 0) {
        echo "Email đã tồn tại";
    } else {
    }
    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO `taikhoanmatkhau` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    // echo '<pre>';
    // print_r($sql);
    // echo '</pre>';
    // die();
    // Thực thi câu lệnh SQL
    try {
        $conn->exec($sql);
        echo "Dữ liệu được chèn thành công";
        header("Location: sign-in.php");
        exit;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
// Đóng kết nối
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/CaseStudy_M3/public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost/CaseStudy_M3/public/assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="http://localhost/CaseStudy_M3/public/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="http://localhost/CaseStudy_M3/public/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="http://localhost/CaseStudy_M3/public/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
       
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('http://localhost/CaseStudy_M3/public/assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button"href="http://localhost/CaseStudy_M3/login-lognout/sign-in.php" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="http://localhost/CaseStudy_M3/login-lognout/sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="http://localhost/CaseStudy_M3/public/assets/js/core/popper.min.js"></script>
  <script src="http://localhost/CaseStudy_M3/public/assets/js/core/bootstrap.min.js"></script>
  <script src="http://localhost/CaseStudy_M3/public/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="http://localhost/CaseStudy_M3/public/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="http://localhost/CaseStudy_M3/public/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>