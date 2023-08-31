<form action="index.php?action=store" method="post" class="custom-form">
    <label class="form-label">Email</label>
    <select name="user_id" class="form-control">
        <?php foreach ($items as $r) : ?>
            <option value="<?php echo $r['id']; ?>"><?php echo $r['email']; ?></option>
        <?php endforeach; ?>
    </select>
    <label class="form-label">Tiêu đề:</label>
    <input type="text" name="title" class="form-input"> <br>
    <label class="form-label">Nội dung:</label>
    <input type="text" name="content" class="form-input"> <br></br>

    <input type="submit" value="Thêm" class="submit-button">
</form>
<style>
    .custom-form {
  width: 300px;
  margin: 20px;
}

.form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.form-control {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #45a049;
}
</style>