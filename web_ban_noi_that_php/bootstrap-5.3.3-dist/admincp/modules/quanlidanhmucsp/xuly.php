<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO tbl_category(name_category, number_category) VALUES ('$tenloaisp','$thutu')";
    $query = mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    $sql_update = "UPDATE tbl_category SET name_category='$tenloaisp', number_category='$thutu' WHERE id_category='$_GET[iddanhmuc]'";
    $query_update = mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
} else {
    $sql_xoa = "DELETE FROM tbl_category WHERE id_category='$_GET[iddanhmuc]'";
    $query_xoa = mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
}

?>