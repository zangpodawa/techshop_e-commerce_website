<?php
require "../config.php";
$search_term = isset($_GET["search_term"]) ? $_GET["search_term"] : "";
$product_sql = "SELECT name as label, category_id FROM products where name like '%$search_term%' ";
$product_result = mysqli_query($connection, $product_sql);

$products = array();
while ($pr_row = mysqli_fetch_assoc($product_result)) {
    $products[] = $pr_row;
}


echo json_encode($products);
