<?php
require_once '../db/config.php';
session_start();
if (isset($_POST['login_submit'])) {
    $user_login = $_POST['user_login'];
    $pass_login = $_POST['pass_login'];
    if (empty($user_login) || empty($pass_login)) {
        $error = "Không được để trống";
    } else {
        $lgquery = "SELECT user.id,user.name, password('$pass_login') from user where name = '$user_login'
                    AND password = PASSWORD('$pass_login')";
        $query = $sql->query($lgquery);
        if(mysqli_num_rows($query) == 1){
                $sess = mysqli_fetch_object($query);
                 $_SESSION["user"] = $sess;
                 header('location: ../');

        }else{
            $qrfail = "Sai tên đăng nhập hoặc mật khẩu";
        }
    }

}
if(isset($_SESSION['user'])){
  header('location: ./home');
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
include_once '../header.php';
?>

<div class="main">

    <div class="main_form">
        <h2>Chào mừng bạn quay trở lại!
            <ion-icon name="storefront-outline"></ion-icon>
        </h2>
        <div class="main_account">
            <div class="main_account-login" id="login">
                <form action="" method="post">
                    <div class="main_account-input">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" id="username" name="user_login">
                        <?php echo isset($error) ? "<span style='color: red;
                        font-weight: bold;margin-top: 5px; display: block'> $error </span> " : "" ?>
                    </div>
                    <div class="main_account-input">
                        <label for="username">Password</label>
                        <input type="password" placeholder="Password" id="Password" name="pass_login">
                        <?php echo isset($error) ? "<span style='color: red;
                        font-weight: bold;margin-top: 5px; display: block'> $error </span> " : "" ?>
                    </div>
                    <div style="margin: 10px 0">
                        <?php echo isset($qrfail) ? "<span style='color: red;
                        font-weight: bold;margin-top: 5px; display: block'> $qrfail </span> " : "" ?>
                    </div>

                    <div class="btn">
                        <button type="submit" name="login_submit">Đăng nhập</button>
                    </div>
                    <div style="margin-top: 10px;">
                        <span>Bạn chưa có tài khoản? <span id="reg">Đăng kí</span></span>
                    </div>
                </form>
            </div>
            <div class="main_account-reg">
                <form action="" method="post" id="form-reg">
                    <div class="main_account-input">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" id="username">
                    </div>
                    <div class="main_account-input">
                        <label for="username">Password</label>
                        <input type="password" placeholder="Password" id="Password">
                    </div>
                    <div class="main_account-input">
                        <label for="Email">Email</label>
                        <input type="email" placeholder="Email" id="Email">
                    </div>
                    <div class="main_account-input">
                        <label for="phone">Số điện thoại</label>
                        <input type="phone" placeholder="Số điện thoại" id="phone">
                    </div>
                    <div class="btn">
                        <button type="submit">Đăng kí</button>
                    </div>
                    <div style="margin-top: 10px;">
                        <span>Bạn đã có tài khoản? <span id="btn-login">Đăng nhập</span></span>
                    </div>
                </form>
            </div>
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
