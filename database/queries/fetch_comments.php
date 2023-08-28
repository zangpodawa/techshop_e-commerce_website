<?php

session_start();
require_once '../config.php';

$product_id = $_GET["product_id"];
$comments_sql = "SELECT comments.id, comments.comment_description, comments.created_at,users.name FROM comments JOIN users on users.id=comments.user_id where product_id=$product_id ORDER by comments.created_at DESC ";

$comments_result = mysqli_query($connection, $comments_sql);

$comments = array();
while ($cm_row = mysqli_fetch_assoc($comments_result)) {
    $comments[] = $cm_row;
}

echo json_encode($comments);
