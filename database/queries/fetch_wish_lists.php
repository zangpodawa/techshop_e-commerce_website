<?php

session_start();
$user_id = $_SESSION["user_id"];
$wishlist_sql = "SELECT wishlists.id as wishlist_id, products.id as product_id, wishlists.quantity,products.name,products.price,products.currency,products.images FROM wishlists JOIN products on wishlists.product_id = products.id where user_id = $user_id ";


$wishlist_result = mysqli_query($connection, $wishlist_sql);

$wishlists = array();
while ($wl_row = mysqli_fetch_assoc($wishlist_result)) {
    $wishlists[] = $wl_row;
}


