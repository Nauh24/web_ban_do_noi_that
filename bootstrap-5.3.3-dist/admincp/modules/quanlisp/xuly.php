<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$gia = $_POST['gia'];
$soluong = $_POST['soluong'];
//xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
$mota = $_POST['mota'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmucsanpham'];


if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_product(product_name, product_code, price, quantity, product_image, product_description, content, product_status, id_category) 
        VALUES ('$tensanpham','$masanpham','$gia','$soluong','$hinhanh','$mota','$noidung','$tinhtrang','$danhmuc')";
    $query = mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlisanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    if ($hinhanh != '') {
        $sql_sua = "UPDATE tbl_product SET product_name='$tensanpham', product_code='$masanpham', price='$gia', quantity='$soluong', product_image='$hinhanh', product_description='$mota', content='$noidung', product_status='$tinhtrang', id_category='$danhmuc' WHERE product_id='$_GET[idsanpham]'";
    } else {
        $sql_sua = "UPDATE tbl_product SET product_name='$tensanpham', product_code='$masanpham', price='$gia', quantity='$soluong', product_description='$mota', content='$noidung', product_status='$tinhtrang', id_category='$danhmuc' WHERE product_id='$_GET[idsanpham]'";
    }
    $query = mysqli_query($mysqli, $sql_sua);
    header('Location:../../index.php?action=quanlisanpham&query=them');
} else {
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_product WHERE product_id='$id'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    unlink('uploads/'.$row['product_image']);
    $sql_xoa = "DELETE FROM tbl_product WHERE product_id='$_GET[idsanpham]'";
    $query = mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlisanpham&query=them');
}