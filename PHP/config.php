<?php

$server = "localhost";
$username = "root";
$password = "123456";
$database = "HMS";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
} ?>