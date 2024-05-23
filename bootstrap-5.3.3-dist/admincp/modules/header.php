<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>
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
    </style>
</head>

<body>
    <div class="header">
        <a href="index.php?dangxuat=1">Đăng xuất <?php if(isset($_SESSION['dangnhap'])){
            echo $_SESSION['dangnhap'];   
        }
        ?>
        </a>
    </div>
</body>