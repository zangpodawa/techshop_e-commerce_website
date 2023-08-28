<?php
session_start();
require_once "../config.php";
$user_id = $_SESSION["user_id"];
$id = $_GET["id"];
$wishlist_sql = "DELETE FROM wishlists where user_id = $user_id AND id = $id";



$wishlist_result = mysqli_query($connection, $wishlist_sql);

if ($wishlist_result) {
    echo "Success";
}

