<?php
$sql = "SELECT * FROM tbl_category ORDER BY number_category DESC";
$query = mysqli_query($mysqli, $sql);
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

        .table-container {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .table-container p {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .table-container a {
            color: #1E90FF;
            text-decoration: none;
        }

        .table-container a:hover {
            color: #104E8B;
        }

        .delete-link {
            color: red !important;
        }

        .delete-link:hover {
            color: darkred !important;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <p>Danh sách danh mục sản phẩm</p>
        <table>
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
                            | <a class="delete-link" href="modules/quanlidanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_category'] ?>">Xóa</a></td>
                    </tr>
                <?php
                }
                ?>

            </form>

        </table>
    </div>
</body>

</html>