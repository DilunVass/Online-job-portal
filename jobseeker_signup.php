<?php

require 'config.php';

$name = $_POST["FullName"];
$username = $_POST["Username"];
$email = $_POST["email"];
$conta = $_POST["ContactNo"];
$pass = $_POST["password"];


$query = "INSERT INTO job_seeker(js_email,js_username,js_name,js_password,js_contact_no) 
VALUES 
('$email','$username','$name','$pass','$conta')";


if($conn->query($query)){
    echo"<br>Job seeker credentials are correct";
    header("location:login_select.html");
}else{
    echo"<br>Job seeker credentials are incorrect";
}

$conn->close();
?>