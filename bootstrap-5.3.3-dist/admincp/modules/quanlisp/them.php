<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form-container {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-container p {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .form-container table {
            width: 100%;
        }
        .form-container td {
            padding: 10px;
        }
        .form-container input[type="text"], .form-container textarea, .form-container select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #1E90FF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #104E8B;
        }
    </style>
</head>

<body>
<div class="form-container">
<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlisp/xuly.php" enctype="multipart/form-data">
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="masanpham"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea rows="10" name="mota" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea rows="10" name="noidung" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmucsanpham">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_category DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
          <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
</form>
  
</table>
</div>
</body>

</html>