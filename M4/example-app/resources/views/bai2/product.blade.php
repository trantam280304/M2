<!DOCTYPE html>
<html>
<head>
  <title>Tính chiết khấu</title>
</head>
<body>
  <h1>Tính chiết khấu</h1>
  <form id="discount-form" action="/product" method="post">
    @csrf
    <div class="form-group">
      <label for="product-description">Mô tả của sản phẩm:</label>
      <input type="text" id="product-description" name="product" required>
    </div>
    <div class="form-group">
      <label for="list-price">Giá niêm yết của sản phẩm:</label>
      <input type="number" id="list-price" name="price" required>
    </div>
    <div class="form-group">
      <label for="discount-percent">Tỷ lệ chiết khấu (%):</label>
      <input type="number" id="discount-percent" name="percent" required>
    </div>
    <button type="submit">Tính chiết khấu</button>
  </form>
</body>
</html>