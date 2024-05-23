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
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
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
        <p>Thêm danh mục sản phẩm</p>
        <form method="POST" action="modules/quanlidanhmucsp/xuly.php">
            <table>
                <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" name="tendanhmuc"></td>
                </tr>
          
                <tr>
                    <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>