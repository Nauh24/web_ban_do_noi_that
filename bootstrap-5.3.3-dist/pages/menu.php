<?php
    // Connect to your database
    include('admincp/config/config.php');

    // Query to get all categories
    $sql_danhmuc = "SELECT * FROM tbl_category";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<div class="main_menu">
    <div class="container py-3"> <!--căn giữa-->
        <div class="row">
            <div class="col-md-3">
                <img src="images/logo.png" alt="logo" width="70%">
            </div>
            <div class="col-md-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?quanly=gioithieu">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php?quanly=sanpham" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <?php
                                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                    ?>
                                    <a class="dropdown-item" href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></a>
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?quanly=blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-flex justify-content-end">
                    <a href="http://localhost/web_ban_do_noi_that/bootstrap-5.3.3-dist/admincp/login.php" class="btn btn-primary mr-3">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="index.php?quanly=giohang" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>