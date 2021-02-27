<?php
    session_start();
    require_once "db/config.php";

?>
<div class="header">
    <div class="container">
        <div class="header-item">
            <div class="header_logo">
                <div class="header_logo-on">
                    <img src="<?php echo home ?>/asset/images/logo.png" alt="logo">
                </div>
            </div>
            <div class="header_title">
                <a href="/shopcax">Goodies</a>
            </div>
            <div class="header_cart">
                <div class="header_cart-search">
                    <form action="" method="post">
                        <input type="text" placeholder="Tìm kiêm" id="input-search">
                        <label class="header_cart-icon" id="search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>

                </div>

                <div class="header_cart-btn">
                    <h1 class="header_cart-icon">
                        <ion-icon name="cart-outline"></ion-icon>
                        <div class="header_cart-quantity">
                            <span>1</span>
                        </div>
                    </h1>
                </div>
                <div class="header_cart-user">
                    <h1 class="header_cart-icon">
                        <ion-icon name="person-outline" id="user"></ion-icon>
                    </h1>
                    <div class="header_cart-user_box" id="box_user">
                        <?php
                        if(isset($_SESSION['user'])){
                            $user = $_SESSION['user']->name;
                            echo "<span>Xin chào: $user</span> ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
