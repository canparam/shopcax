<?php
require_once '../db/config.php';
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../');
}
$path = "../asset/images/";
if (isset($_POST['push'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $id_auth = $_SESSION['user']->id;
    $category = $_POST['category'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $image = $_FILES['image'];
    if (!empty($title) || !empty($price)) {
        $fname = "./asset/images/" . $image["name"];
        move_uploaded_file($image['tmp_name'], $path . $image["name"]);
        $post = "INSERT INTO products (name, des, img, color_id, size_id, prices, category_id, user_id) 
            VALUES ('$title', '$content', '$fname', $color, $size, $price, $category, $id_auth);";
        if($sql->query($post)){
           header("location: ./home");
        }else{
            echo $sql->error;
        }
    }
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
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
include_once '../header.php';
?>
<div class="main">
    <div class="container">
        <div class="post">
            <h1>Thêm sản phẩm mới</h1>
            <form action="" method="post" class="post_form" enctype="multipart/form-data">
                <div class="post_form-left">
                    <div class="post_form-title">
                        <input type="text" placeholder="Tên sản phẩm" name="title">
                    </div>
                    <div class="post_form-content">
                        <h3>Ảnh sản phẩm</h3>
                        <input type="file" name="image">
                    </div>
                    <div class="post_form-content">
                        <textarea name="content" id="content"></textarea>
                        <script>CKEDITOR.replace('content');</script>
                    </div>
                </div>
                <div class="post_form-right">
                    <div class="post_form-category">
                        <h3>Danh mục</h3>
                        <select class="cb" name="category">
                            <option value="1">Áo thun</option>
                        </select>
                    </div>
                    <div class="post_form-category">
                        <h3>Size</h3>
                        <select class="cb" name="size">
                            <option value="1">M</option>
                        </select>
                    </div>
                    <div class="post_form-category">
                        <h3>Size</h3>
                        <select class="cb" name="color">
                            <option value="1">Đen</option>
                            <option value="2">Tắng</option>

                        </select>
                    </div>
                    <div class="post_form-category">
                        <h3>Giá</h3>
                        <input type="text" placeholder="Giá bán" name="price">
                    </div>
                </div>
                <div>
                    <button class="btn" type="submit" name="push">Đăng bài</button>

                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="<?php echo home ?>/asset/js/scrip.js"></script>
</body>
</html>
