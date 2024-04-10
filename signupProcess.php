<?php
include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];

$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' OR `mobile`='" . $mobile . "'");
$n = $rs->num_rows;

if ($n > 0) {
    echo ("User with the same Email Address or same Mobile Number already exists.");
} else {

    Database::iud("INSERT INTO `user`
        (`fname`,`lname`,`email`,`password`,`mobile`) VALUES 
        ('" . $fname . "','" . $lname . "','" . $email . "','" . $password . "','" . $mobile . "')");

    echo ("success");
}
