<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_admin WHERE username='$tendangnhap' AND admin_password='$matkhau'";
    $query = mysqli_query($mysqli, $sql);
    $num_rows = mysqli_num_rows($query);
    if ($num_rows == 0) {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng")</script>';
        header('Location:login.php');
    } else {
        $_SESSION['dangnhap'] = $tendangnhap;
        header('Location:index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style>
        .wrapper {
            width: 100%;
            margin: 0 auto;
        }

        table {
            width: 400px;
            margin: 0 auto;
        }

        td {
            padding: 10px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ccc;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            height: 100vh;
            padding-top: 100px;
            overflow: hidden;
        }

        .login-form {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px #000;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        

        .login-form {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px #000;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <td colspan="2" style="text-align: center; font-size: 20px;">Đăng nhập Admin</td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td><input type="text" name="tendangnhap" size="30"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="matkhau" size="30"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>
        </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>