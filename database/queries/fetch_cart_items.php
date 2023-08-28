<?php
session_start();
if (isset($_GET["total"])) {
    require_once "../config.php";
}

$user_id = $_SESSION["user_id"];
$cart_sql = "SELECT carts.id as cart_id, carts.quantity,products.name,products.price,products.currency,products.images FROM carts JOIN products on carts.product_id = products.id where user_id = $user_id ";

$cart_result = mysqli_query($connection, $cart_sql);

$carts = array();
$cart_total = 0;
while ($cart_row = mysqli_fetch_assoc($cart_result)) {
    $carts[] = $cart_row;
    $cart_total += $cart_row['quantity'] * $cart_row['price'];
}
$_SESSION["cart_total"] = $cart_total;
$_SESSION["carts"] = $carts;

if (isset($_GET["total"])) {
    echo $cart_total;
}

