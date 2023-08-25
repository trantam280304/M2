<?php include '../includes/header.php' ?>






<head>
 
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
    }

    .card {
      width: 300px;
      height: 200px;
      perspective: 1000px;
      margin: 20px;
    }

    .face {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      transition: transform 0.6s ease;
    }

    .face1 {
      background-color: #f3f3f3;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .face2 {
      transform: rotateY(180deg);
      background-color: #eaeaea;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card:hover .face1 {
      transform: rotateY(180deg);
    }

    .card:hover .face2 {
      transform: rotateY(0deg);
    }

    .content {
      text-align: center;
    }

    h3 {
      font-size: 18px;
      margin-top: 10px;
    }

    p {
      font-size: 14px;
      line-height: 1.5;
    }
  </style>
</head>

<body>


  <div class="container">
    <div class="card">
      <div class="face face1">
        <div class="content">
          <i class="fas fa-tint"></i> <i class="fas fa-tshirt"></i>
          </i>
          <h3>Nước giặt quần áo</h3>

        </div>

      </div>
      <div class="face face2">
        <div class="content">
          <p> Bạn biết không, việc giặt giũ quần áo mỗi ngày cũng giúp chúng ta bảo vệ sức khỏe trước sự tấn công của các loại vi khuẩn có hại đấy. Hãy cùng shop TT áp dụng những bí quyết giặt giũ thông minh không chỉ giúp cho quần áo sạch thơm mà còn khử trùng quần áo cho cả nhà nhé!</p>

        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <i class="fas fa-sink"></i>

          </i>
          <h3>Rửa chén</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Nước rửa bát là sản phẩm có chứa xà phòng được dùng để vệ sinh chén đĩa. Công thức chứa nhiều chất tạo bọt có tác dụng làm bong và hòa tan vết bẩn, dầu mỡ giúp chén đĩa trở nên sáng bóng và sạch sẽ</p>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="face face1">
        <div class="content">
          <i class="fas fa-tag"></i> <!-- Biểu tượng "tag" -->
          <i class="fas fa-percent"></i> <!-- Biểu tượng "giảm giá" -->
          <h3>Sale</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Hiện nay bên shop mình sản phẩm bán chạy nhất là nước rửa chén hương quế</p>

        </div>
      </div>
    </div>
  </div>
    <?php include '../includes/footer.php' ?>