<?php
$user = "Tien";
$password = "123456";

if ($_POST["username"] == $user && $_POST["password"] == $password) {
    echo "Welcome " . $_POST["username"] . '!';
} else
    echo "Bye!";
