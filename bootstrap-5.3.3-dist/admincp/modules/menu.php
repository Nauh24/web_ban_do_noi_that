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
        .header {
            background-color: #1E90FF; 
            color: white;
            padding: 10px;
            text-align: right;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }
        .admincp_list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex; /* Thêm dòng này để làm cho menu nằm ngang */
            background-color: #1E90FF; /* Thay đổi màu nền của menu thành màu xanh da trời */
        }
        .admincp_list li {
            margin-right: 10px; /* Thêm dòng này để tạo khoảng cách giữa các mục */
        }
        .admincp_list li a {
            display: block;
            color: #fff; /* Thay đổi màu chữ của menu thành màu trắng */
            padding: 8px 16px;
            text-decoration: none;
        }
        .admincp_list li a:hover {
            background-color: #104E8B; /* Thay đổi màu nền khi di chuột qua */
            color: #fff;
        }
    </style>
</head>

<body>
    <ul class="admincp_list">
        <li><a href="index.php?action=quanlidanhmucsanpham&query=them">Quản lí danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlisanpham&query=them">Quản lí sản phẩm</a></li>
    </ul>
</body>

</html>