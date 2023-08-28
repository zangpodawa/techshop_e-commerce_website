<?php
session_start();
require_once "../config.php";
$user_id        = $_SESSION["user_id"];
$quantity       = $_POST["quantity"];
$product_id     = $_POST["product_id"];
$wishlist_id    = $_POST["wishlist_id"];

$cart_exist_sql     = "SELECT * FROM carts WHERE user_id=$user_id AND product_id=$product_id";
$cart_exist_result  = mysqli_query($connection, $cart_exist_sql);
$cart               = mysqli_fetch_assoc($cart_exist_result);

if ($cart) {
    $cart_id            = $cart['id'];
    $update_cart_sql    = "UPDATE carts SET quantity = quantity+$quantity WHERE id = $cart_id ";
    $result             = mysqli_query($connection, $update_cart_sql);
    // if ($result) {
    //     echo "Wishlist updated with new items";
    // }
} else {
    $add_new_cart_sql       = "INSERT INTO carts(product_id,quantity,user_id) VALUES($product_id,$quantity,$user_id)";
    $add_new_cart_result    = mysqli_query($connection, $add_new_cart_sql);
    // if ($add_new_cart_result) {
    //     echo "New items added to wishlist";
    // }
}

if (isset($wishlist_id)) {
    $remove_wishlist_sql = "DELETE FROM wishlists where user_id = $user_id AND  id= $wishlist_id";
    mysqli_query($connection, $remove_wishlist_sql);
}



