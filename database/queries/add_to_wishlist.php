<?php
session_start();
require_once "../config.php";
$user_id = $_SESSION["user_id"];
$quantity = $_POST["quantity"];
$product_id = $_POST["product_id"];
$wishlist_exist_sql = "SELECT * FROM wishlists WHERE user_id=$user_id AND product_id=$product_id";
$wishlist_exist_result = mysqli_query($connection, $wishlist_exist_sql);
$wishlist = mysqli_fetch_assoc($wishlist_exist_result);
if ($wishlist) {
    $wishlist_id = $wishlist['id'];
    $update_wishlist_sql = "UPDATE wishlists SET quantity = quantity+$quantity WHERE id = $wishlist_id ";
    $result = mysqli_query($connection, $update_wishlist_sql);
    if ($result) {

        echo "Wishlist updated with new items";
    }
} else {
    $add_new_wishlist_sql = "INSERT INTO wishlists(product_id,quantity,user_id) VALUES($product_id,$quantity,$user_id)";
    $add_new_wishlist_result = mysqli_query($connection, $add_new_wishlist_sql);
    if ($add_new_wishlist_result) {

        echo "New items added to wishlist";
    }
}
