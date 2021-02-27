<?php
    require_once "./db/config.php";
    $item = "select id,name,img,prices from products";
    $qr = $sql->query($item);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include_once './header.php';
?>
<div class="main">
    <div class="container">
        <div class="main_banner">
            <img src="./asset/images/banner-top.png" alt="banner">
        </div>
        <div class="main_shipping">
            <div class="main_shipping-item">
                <ion-icon name="flash-outline"></ion-icon>
                <div>
                    <h5>Hỗ trợ ship COD toàn quốc</h5>
                    <span>Thanh toán khi nhận hàng</span>
                </div>
            </div>
            <div class="main_shipping-item">
                <ion-icon name="reload-outline"></ion-icon>
                <div>
                    <h5>Cam kết chất lượng</h5>
                    <span>Bảo hành 1:1 nếu có lỗi sản xuất
                    </span>
                </div>
            </div>
            <div class="main_shipping-item">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <div>
                    <h5>Phiên bản giới hạn
                    </h5>
                    <span>Sản phẩm độc quyền của Tủ đồ PewPew</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main_items container">
        <div class="main_categorys">
            <div class="main_categorys-title">
                <h3>Loại áo</h3>
                <ul class="main_categorys-items">
                    <li class="active"><a href="" >Tất cả</a></li>
                    <li ><a href="" >T-shrit</a></li>
                    <li><a href="">Quẩn đùi</a></li>
                    <li><a href="">Hoodie</a></li>
                    <li><a href="">Móc khóa</a></li>
                    <li><a href="">Mũ lưỡi trai</a></li>
                </ul>
            </div>
            <div class="main_categorys-title">
                <h3>Màu sắc</h3>
                <ul class="main_categorys-color">
                    <li><a href="" style="background-color: red;"></a></li>
                    <li><a href="" style="background-color: blue;"></a></li>
                    <li><a href="" style="background-color: orange;"></a></li>
                    <li><a href="" style="background-color: green;"></a></li>
                    <li><a href="" style="background-color: blue;"></a></li>
                    <li><a href="" style="background-color: red;"></a></li>
                    <li><a href="" style="background-color: blue;"></a></li>
                    <li><a href="" style="background-color: orange;"></a></li>
                    <li><a href="" style="background-color: green;"></a></li>
                    <li><a href="" style="background-color: blue;"></a></li>

                </ul>
            </div>
        </div>
        <div class="main_products">
            <div class="main_products-title">
                <h3 >Danh sách sản phẩm</h3>
                <span>Có 30 sản phẩm</span>
            </div>
            <div class="main_products-items">
                <?php while ($ps = mysqli_fetch_object($qr)){ ?>
                <a class="main_products-link" href="?post=<?php echo $ps->id ?>">
                    <div class="main_products-link_image">
                        <img src="<?php echo $ps->img ?>" alt="<?php echo $ps->name ?>">
                    </div>
                    <div class="main_products-link_title">
                        <span><?php echo $ps->name ?></span>
                    </div>
                    <div class="main_products-link_price">
                        <span><?php echo number_format($ps->prices) . 'đ'; ?></span>

                    </div>
                </a>
                <?php }?>

            </div>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="./asset/js/scrip.js"></script>
</body>
</html>
