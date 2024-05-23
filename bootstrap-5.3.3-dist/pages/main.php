<?php


// Query to get all categories
$sql_danhmuc = "SELECT * FROM tbl_category";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<head <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>
<body>
<div class="my_main_banner">
    <div class="row">
        <div class="col-md-6 p-0 d-flex align-items-center justify-content-center bg-primary text-white">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <h1>Nâng tầm không gian - Tạo nên đẳng cấp</h1>
                <p>Khám phá không gian sống mới mẻ và sang trọng với những thiết kế nội thất đương đại, nâng tầm
                    không gian sống của bạn.</p>
                <a href="#" class="btn btn-light mb-4">Mua sắm ngay</a>
                <div class="row text-center mt-4">
                    <div class="col">
                        <h3>15.000+</h3>
                        <p>Sản phẩm đa dạng</p>
                    </div>
                    <div class="col">
                        <h3>10+</h3>
                        <p>Hệ thống cửa hàng</p>
                    </div>
                    <div class="col">
                        <h3>2020+</h3>
                        <p>Giải thưởng</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 p-0 bg-primary">
            <img src="images/banner_imp.webp" alt="Banner" class="img-fluid w-100">
        </div>
    </div>
</div>
<section class="featured_products">
    <div class="container">
        <h2>Sản phẩm mới nhất</h2>
        <div class="row">
            <?php
            $sql_new_product = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 4";
            $query_new_product = mysqli_query($mysqli, $sql_new_product);
            while ($row_new_product = mysqli_fetch_array($query_new_product)) {
            ?>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="admincp/modules/quanlisp/uploads/<?php echo $row_new_product['product_image'] ?>" alt="Product" class="img-fluid">
                        <h3><?php echo $row_new_product['product_name'] ?></h3>
                        <p><?php echo number_format($row_new_product['price']) ?>₫</p>
                        <button class="btn btn-primary">Thêm vào giỏ</button>
                    </div>
                </div>
            <?php
            }
            ?>
            
        </div>
    </div>
</section>
<section class="collection">
    <ul class="container">
        <h2 class="block-title position-relative text-center bold mb-3">
            <a title="Bộ sưu tập">Bộ sưu tập</a>
        </h2>

        <ul class="tabs tabs-title tab-pc tabtitle ajax clearfix d-flex list-unstyled mb-md-4 mb-3">
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <li class="tab-title-item tab_cate px-4 mb-md-2">
                    <a href="index.php?id_category=<?php echo $row_danhmuc['id_category'] ?>" class="tab-title-link"><?php echo $row_danhmuc['name_category'] ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="row">
            <?php
            if (isset($_GET['id_category'])) {
                $id_category = $_GET['id_category'];
                $sql_sanpham = "SELECT * FROM tbl_product WHERE id_category='$id_category'";
            } else {
                $sql_sanpham = "SELECT * FROM tbl_product";
            }
            $query_sanpham = mysqli_query($mysqli, $sql_sanpham);
            while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
            ?>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="admincp/modules/quanlisp/uploads/<?php echo $row_sanpham['product_image'] ?>" alt="Product 1" class="img-fluid">
                        <h3><?php echo $row_sanpham['product_name'] ?></h3>
                        <p><?php echo number_format($row_sanpham['price']) ?>₫</p>
                        <button class="btn btn-primary">Thêm vào giỏ</button>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-dark">Xem thêm</a>
        </div>
    </ul>
</section>

<section class="bottom-banner">
    <div class="container">
        <img src="images/m2-banner.webp" alt="Banner" class="img-fluid" class="image-darken">
        <div class="banner-text">
            <h1>NGUỒN CẢM HỨNG VÔ TẬN</h1>
            <h2>Khám phá nội thất thiết kế đương đại mang đến cảm giác thoải mái, sang trọng. Cá nhân hoá trong từng
                sản phẩm phù hợp với mọi không gian sống.</h2>
        </div>
    </div>
</section>

<section class="section-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/tu_ke_tvi_go.webp" alt="Product 1" class="img-fluid">
                    <h3>Tủ kệ tivi gỗ</h3>
                    <p>2.490.000₫</p>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/den_pha_le.webp" alt="Product 2" class="img-fluid">
                    <h3>Đèn chùm Rosemas</h3>
                    <p>33.490.000₫</p>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="images/noi_that_phong_khach.webp" alt="Interior 1" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="images/noi_that_phong_bep.webp" alt="Interior 2" class="img-fluid">
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/ban_an_coastal.webp" alt="Product 1" class="img-fluid">
                    <h3>Bàn ăn coastal</h3>
                    <p>3.000.000₫</p>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="images/ghe_albert_coffee.webp" alt="Product 2" class="img-fluid">
                    <h3>Ghế albert coffee</h3>
                    <p>8.220.000₫</p>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Đánh giá của khách hàng</h2>
                <p>Hơn 1.000 khách hàng đã hài lòng về dịch vụ và sản phẩm của chúng tôi</p>
            </div>
            <div class="col-md-6">
                <img src="images/anh_review.jpg" alt="Review Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- đánh giá của khách hàng -->
                <div id="reviewCarousel" class="owl-carousel owl-theme">
                    <div class="item">
                        <h2>Đặng Hoàng Phúc</h2>
                        <p>"Sản phẩm được thiết kế chi tiết, nhiều mẫu mã và đặc biệt nhân viên tư vấn nhiệt tình.
                            Tôi rất hài lòng với trải nghiệm tại đây!"</p>
                        <p>- Giáo viên</p>
                    </div>
                    <div class="item">
                        <h2>Nguyễn Lan Hương</h2>
                        <p>"Sau khi được bạn bè giới thiệu, tôi đã đến tham khảo và hoàn toàn bất ngờ với các sản
                            phẩm nội thất của Lifi Decor. Không chỉ đẹp và sang."</p>
                        <p>- Bác sĩ</p>
                    </div>
                    <div class="item">
                        <h2>Nguyễn Thị Linh</h2>
                        <p>"Sản phẩm ở đây rất chất lượng. Tôi sẽ tiếp tục mua tiếp"</p>
                        <p>- Giáo viên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Blog chia sẻ</h2>
                <p>Những tin tức mới nhất từ chúng tôi</p>
            </div>
            <div class="col-md-4">
                <img src="images/bo-tri-phong-lam-viec-tai-nha-26-min.webp" alt="Blog 1" class="img-fluid">
                <h3>Cách Bố Trí Phòng Làm Việc Tại Nhà Đơn Giản Dễ Làm Nhất</h3>
                <p>Phòng làm việc giờ đây đã trở thành không gian quan trọng trong ngôi nhà. Nhưng bố trí phòng làm việc tại nhà sao cho thật thuận tiện, bắt mắt và khoa học thì...</p>
                <button class="btn btn-primary">Đọc thêm</button>
            </div>
            <div class="col-md-4">
                <img src="images/kich-thuoc-giuong-tre-em-10-min.webp" alt="Blog 2" class="img-fluid">
                <h3>Bật Mí Kích Thước Giường Trẻ Em Đảm Bảo An Toàn Tuyệt Đối</h3>
                <p>Hiện nay, khi tìm giường cho con trẻ các bậc phụ huynh cũng cần quan tâm về kích thước giường trẻ em cho từng bé trong gia đình. Bởi điều này sẽ ảnh hưởng trực tiếp...</p>
                <button class="btn btn-primary">Đọc thêm</button>
            </div>
            <div class="col-md-4">
                <img src="images/ban-lam-viec-xoay-360-do-13-min.webp" alt="Blog 3" class="img-fluid">
                <h3>5+ mẫu bàn làm việc xoay 360 độ linh hoạt thông minh nhất</h3>
                <p>Sự tiện dụng, thoải mái và thông minh luôn được đặt lên hàng đầu trong xã hội ngày nay. Vì vậy, những món đồ nội thất mang lại sự tiện nghi và không quá đắt đỏ...</p>
                <button class="btn btn-primary">Đọc thêm</button>
            </div>
        </div>
    </div>
</section>

</body>