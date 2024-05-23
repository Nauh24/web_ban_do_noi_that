<?php
$sql = "SELECT tbl_product.*, tbl_category.name_category FROM tbl_product INNER JOIN tbl_category ON tbl_product.id_category = tbl_category.id_category ORDER BY tbl_product.product_id DESC";
$query = mysqli_query($mysqli, $sql);
?>
<p style="font-weight: bold;">Danh sách sản phẩm</p>
<input type="text" id="search" placeholder="Tìm kiếm sản phẩm...">
<table border="2" width="100%" style="border-collapse: collapse;">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Danh mục</td>
        <td>Mô tả</td>
        <td>Nội dung</td>
        <td>Tình trạng</td>
        <td>Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><img src="modules/quanlisp/uploads/<?php echo $row['product_image'] ?>" height="100" width="100"></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['name_category'] ?></td>
            <td><?php echo $row['product_description'] ?></td>
            <td><?php echo $row['content'] ?></td>
            <td><?php if ($row['product_status'] == 1) {
                    echo 'Kích hoạt';
                } else {
                    echo 'Ẩn';
                } ?></td>
            <td><a href="index.php?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['product_id'] ?>">Sửa</a>
                | <a href="modules/quanlisp/xuly.php?idsanpham=<?php echo $row['product_id'] ?>" class="delete-button">Xóa</a></td>
        </tr>
    <?php
    }
    ?>

</table>


<style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        /* Thay đổi font chữ */
        background-color: #fafafa;
        /* Màu nền cho bảng */

    }

    th,
    td {
        border: 3px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
    background-color: #4CAF50;
    color: white;
    text-transform: uppercase; /* Chuyển đổi chữ hoa */
    font-weight: bold; /* Làm đậm chữ */
}

    tr:hover {
        /* Thêm hiệu ứng hover cho hàng */
        background-color: #ddd;
    }

    a {
        /* Định dạng liên kết */
        color: #333;
        text-decoration: none;
    }

    a:hover {
        color: #4CAF50;
    }

    td a {
        /* Định dạng liên kết trong ô */
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
        border: 2px solid #333;
        /* Thêm khung */
    }

    td a:hover {
        background-color: #45a049;
        border-color: #4CAF50;
        /* Thay đổi màu khung khi hover */
    }
    .delete-button {
    color: red;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('table tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>


