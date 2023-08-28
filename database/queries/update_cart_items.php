<?php
session_start();
require_once "../config.php";

$user_id    = $_SESSION["user_id"];
$quantity   = $_POST["quantity"];
$cart_id    = $_POST["cart_id"];
$cart_sql   = "UPDATE carts SET quantity='$quantity' WHERE id=$cart_id AND user_id=$user_id";

$cart_result    = mysqli_query($connection, $cart_sql);
$output         = array();

if ($cart_result) {
    $output["message"] = "Successfully updated cart";
}

//set item in session for checkout only
$sql        = "SELECT carts.id as cart_id, carts.quantity,products.name,products.price,products.currency,products.images FROM carts JOIN products on carts.product_id = products.id where user_id = $user_id ";
$result     = mysqli_query($connection, $sql);

$cart_total = 0;
$carts      = array();

while ($cart_row = mysqli_fetch_assoc($result)) {
    $carts[]     = $cart_row;
    $cart_total += $cart_row['quantity'] * $cart_row['price'];
}

$_SESSION["cart_total"] = $cart_total;
$_SESSION["carts"]      = $carts;

if (isset($_POST["get_total"])) {
    $output["total"] = $cart_total;
}


echo json_encode($output);
