<?php

require 'config.php';

$name = $_POST["Name"];
$email = $_POST["email"];
$country = $_POST["Country"];
$contact_no = $_POST["ContactNo"];
$message = $_POST["Message"];

$query = "INSERT INTO contact_us(cont_name,cont_email,cont_country,cont_contact_no,cont_message) 
VALUES 
('$name','$email','$country','$contact_no','$message')";

if($conn->query($query))
    {
        echo("<script> alert('Successfully submitted');</script>");
    }

    else
    {
        echo("Error!");
    }

$conn->close();

?>