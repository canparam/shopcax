<?php
require_once '../../db/config.php';
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../');
}

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
    <link rel="stylesheet" href="<?php echo home ?>/asset/css/style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include_once '../../header.php';
?>
<div class="main">
    <div class="container">
        <div class="user_action">
            <div class="user_action-add">
                <a href="../post.php">ADD NEW</a>
            </div>
        </div>
        <div class="user">
            <h2>Tổng quan</h2>
            <div class="user_all">
                <div class="user_all-box">
                    <h4>Tổng sản phẩm</h4>
                    <span>
                        <?php
                            $qSp = $sql->query("select COUNT(*) as sl from products");
                            $sp = mysqli_fetch_object($qSp);
                            echo $sp->sl;

                        ?>
                    </span>
                </div>
                <div class="user_all-box">
                    <h4>Oders</h4>
                    <span>10</span>
                </div>
                <div class="user_all-box">
                    3
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="<?php echo home ?>/asset/js/scrip.js"></script>
</body>
</html>
