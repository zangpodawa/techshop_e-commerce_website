<?php
require_once "../config.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users where email='$email'";
    try {
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        // mysqli_close($connection);

        // echo "<pre>";
        // print_r($row);
        if ($row && password_verify($password, $row["password"])) {
            session_start();

            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["name"];
            $_SESSION["user_email"] = $row["email"];

            // header("Location: index.php");

            echo "Login success";
            exit;
        } else {
            echo "Your credentials do not match our records.";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}
