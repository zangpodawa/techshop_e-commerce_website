<?php

$id = $_GET["id"];
$product_sql = "SELECT * FROM products where id=$id";
$product_result = mysqli_query($connection, $product_sql);

$product = mysqli_fetch_assoc($product_result);

