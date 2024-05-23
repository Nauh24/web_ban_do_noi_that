<?php
$sql_sua_sp = "SELECT * FROM tbl_product WHERE product_id='$_GET[idsanpham]'";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
$row_sua_sp = mysqli_fetch_array($query_sua_sp);
?>
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
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
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

        .form-container input[type="text"],
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-container input[type="file"] {
            border: none;
        }

        .form-container img {
            margin-top: 10px;
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
    <p>Sửa sản phẩm</p>
    <form method="POST" action="modules/quanlisp/xuly.php?idsanpham=<?php echo $row_sua_sp['product_id'] ?>" enctype="multipart/form-data">
        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row_sua_sp['product_name'] ?>" name="tensanpham"></td>
            </tr>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row_sua_sp['product_code'] ?>" name="masanpham"></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="text" value="<?php echo $row_sua_sp['price'] ?>" name="gia"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" value="<?php echo $row_sua_sp['quantity'] ?>" name="soluong"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"><img src="modules/quanlisp/uploads/<?php echo $row_sua_sp['product_image'] ?>" height="80" width="80"></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><textarea name="mota" cols="21" rows="10"><?php echo $row_sua_sp['product_description'] ?></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea name="noidung" cols="21" rows="10"><?php echo $row_sua_sp['content'] ?></textarea></td>
            </tr>
            <tr>
                <td>Danh mục sản phẩm</td>
                <td>
                    <select name="danhmucsanpham">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_category DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_category'] == $row_sua_sp['id_category']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($row_sua_sp['product_status'] == 0) {
                        ?>
                            <option selected value="0">Ẩn</option>
                            <option value="1">Kích hoạt</option>
                        <?php
                        } else {
                        ?>
                            <option selected value="1">Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>