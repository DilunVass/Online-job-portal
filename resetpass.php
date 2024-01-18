<?php
require 'config.php';

$type = $_POST["type"];
$username = $_POST["username"];
$newpass = $_POST["newpass"];

if($type == "jobintroducer"){
    $sql1 = "UPDATE job_introducer SET c_password = '$newpass' WHERE c_username = '$username'";
    if($conn-> query($sql1)){
        echo "<script>alert('Password changed Successfully!')</script>";
    }
    else{
        echo "Oops! Error While Changing Password";
    }
}
else if($type == "jobseeker"){
    $sql2 = "UPDATE job_seeker SET js_password = '$newpass' WHERE js_username = '$username'";
    if($conn-> query($sql2)){
        echo "<script>alert('Password changed Successfully!')</script>";
    }
    else{
        echo "Oops! Error While Changing Password";
    }
}
else if($type == "staff"){
    $sql3 = "UPDATE admin SET a_password = '$newpass' WHERE a_username = '$username'";
    if($conn-> query($sql3)){
        echo "<script>alert('Password changed Successfully!')</script>";
    }
    else{
        echo "Oops! Error While Changing Password";
    }
}
?>