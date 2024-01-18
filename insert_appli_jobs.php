<?php
    require 'config.php';

    $c_name = $_POST["jobType"];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $age = $_POST["age"];
    $contact1 = $_POST["contact1"];
    $contact2 = $_POST["contact2"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $sql =  "INSERT INTO applied_jobs (appli_cname,appli_fullname,appli_age,appli_contact1,appli_contact2,appli_email,appli_city,appli_country,appli_username) 
    VALUES
    ('$c_name','$fullname','$age','$contact1','$contact2','$email','$city','$country','$username')";
    if($conn->query($sql)){
        header('location: jobseeker_dashb.php');
    }
?>