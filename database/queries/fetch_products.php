<?php

$search_term = $_GET["search_term"] ? $_GET["search_term"] : "";
$category_id = isset($_GET["category_id"]) ? $_GET["category_id"] : (isset($category_id) ? $category_id : null);
$product_sql = "SELECT * FROM products where name like '%$search_term%'";
if ($category_id) {
    $product_sql .= " AND category_id=$category_id";
}
$product_result = mysqli_query($connection, $product_sql);

$products = array();
while ($pr_row = mysqli_fetch_assoc($product_result)) {
    $products[] = $pr_row;
}


