<?php

session_start();
require_once '../config.php';

$product_id                 = $_POST["product_id"];
$comment_description        = $_POST["comment_description"];
$user_id                    = $_SESSION["user_id"];

$new_comment_sql            = "INSERT INTO comments(product_id,user_id,comment_description) VALUES($product_id,$user_id,'$comment_description')";
$add_new_wishlist_result    = mysqli_query($connection, $new_comment_sql);
if ($add_new_wishlist_result) {
    echo "Comment posted";
}
