<?php

$sql = "SELECT * FROM categories";

$result = mysqli_query($connection, $sql);
$categories = array();
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}


