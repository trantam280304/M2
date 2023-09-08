<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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

<body class="g-sidenav-show  bg-gray-200">
<!-- sidebar -->
<?php
include_once 'includes/sidebar.php';
?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
   <?php include_once 'includes/header.php'  ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">


    <?php
// Ket noi voi DB
require_once 'db.php';
// Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra

/*
index.php?controller=product&action=index
index.php?controller=product&action=create
index.php?controller=product&action=edit&id=5
index.php?controller=product&action=show&id=5

index.php?controller=customer&action=index
*/
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'product';
switch ($controller) {
    case 'category':
        require_once 'Controllers/CategoryController.php';
        $objController = new CategoryController();
        break;
    case 'brand':
        require_once 'Controllers/BrandController.php';
        $objController = new BrandController();
        break;
    case 'customer':
        require_once 'controllers/CustomerController.php';
        $objController = new CustomerController();
        break;
    case 'product':
        require_once 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'show':
        $objController->show();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}
?>

    <!-- footer -->
    <?php
    include_once 'includes/footer.php';
    ?>
    
    </div>
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