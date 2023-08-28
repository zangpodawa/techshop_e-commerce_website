<?php
session_start();
require "../config.php";
$user_id = $_SESSION["user_id"];
$quantity = $_POST["quantity"];
$wishlist_id = $_POST["wishlist_id"];
$wishlist_sql = "UPDATE wishlists SET quantity='$quantity' WHERE id=$wishlist_id AND user_id=$user_id";

$wishlist_result = mysqli_query($connection, $wishlist_sql);


if ($wishlist_result) {
    echo "Success";
}
