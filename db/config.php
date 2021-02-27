<?php
define('home','http://localhost:2001/shopcax/');
define('DB_name',"gsm");
define('DB_user',"root");
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

$sql = new mysqli(DB_HOST,DB_user,DB_PASSWORD,DB_name);

if($sql->connect_error){
    die('connect fail' . $sql->connect_error);
}