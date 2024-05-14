<?php
$sql = "SELECT * FROM tbl_category ORDER BY number_category DESC";
$query = mysqli_query($mysqli, $sql);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlidanhmucsp/xuly.php">
        <tr>
            <td>ID</td>
            <td>Tên danh mục</td>
            <td>Quản lý</td>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name_category'] ?></td>
                <td><a href="index.php?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_category'] ?>">Sửa</a>
                    | <a href="modules/quanlidanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_category'] ?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>

    </form>

</table>