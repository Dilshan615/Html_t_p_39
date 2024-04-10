<?php
include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];

$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
$n = $rs->num_rows;

if ($n == 1) {
    echo ("success");
} else {
    echo ("Invalid Username or Password.");
}
