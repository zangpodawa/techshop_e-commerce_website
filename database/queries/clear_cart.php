<?php
session_start();

$user_id = $_SESSION["user_id"];
if (isset($_GET["cart_id"])) {
    require_once "../config.php";

    $cart_id = $_GET["cart_id"];
    $clear_cart_sql = "DELETE FROM carts where id = $cart_id ";
} else {
    $clear_cart_sql = "DELETE FROM carts where user_id = $user_id";
}

$clear_cart_result = mysqli_query($connection, $clear_cart_sql);
