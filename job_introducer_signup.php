<?php

require 'config.php';

$cname = $_POST["c_name"];
$username = $_POST["username"];
$email = $_POST["email"];
$conta = $_POST["contact_no"];
$pass = $_POST["password"];
$add = $_POST["address"];


$query = "INSERT INTO job_introducer(c_username, c_name, c_contact_no, c_email, c_password, c_address)
VALUES
('$username','$cname','$conta','$email','$pass','$add')";


if($conn->query($query)){
    echo"<br>Job introducer are correct";
    header("location:login_select.html");
}else{
    echo"<br>Job introducer are incorrect";
}

$conn->close();
?>