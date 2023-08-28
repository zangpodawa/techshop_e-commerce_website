<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once '../config.php';

    $name                   = $_POST["name"];
    $email                  = $_POST["email"];
    $password               = $_POST["password"];
    $confirm_password       = $_POST["confirm_password"];
    $accept_all_terms       = $_POST["accept_all_terms"];

    $email_regex = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

    if (!trim($name) || !trim($email) || !trim($password) || !trim($confirm_password)) {
        echo "Please provide all information";
        exit;
    }

    if (!preg_match($email_regex, $email)) {
        echo "Email address is not valid";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Password & confirm password do not match";
        exit;
    }

    if ($accept_all_terms !== "true") {
        echo "You need to accept all terms & condition";
        exit;
    }

    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email','$password')";
    try {
        if (mysqli_query($connection, $sql)) {
            echo "Registered";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
