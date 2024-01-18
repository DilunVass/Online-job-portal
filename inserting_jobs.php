<?php
    require 'config.php';

    $title = $_POST["title"];
    $jobtype = $_POST["jobtype"];
    $description = $_POST["description"];
    $salary = $_POST["salary"];
    $name = $_POST["name"];
    $website = $_POST["website"];
    $email = $_POST["email"];
    $number = $_POST["number"];

    if($jobtype == "top"){
        $sql1 = "INSERT INTO topjobs (top_company,top_title,top_salary,top_descrip,top_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql1)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "trending"){
        $sql2 = "INSERT INTO trendjobs (trend_company,trend_title,trend_salary,trend_descrip,trend_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql2)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "highest"){
        $sql3 = "INSERT INTO highestjobs (high_company,high_title,high_salary,high_descrip,high_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql3)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "local"){
        $sql4 = "INSERT INTO localjobs (local_company,local_title,local_salary,local_descrip,local_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql4)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "parttime"){
        $sql5 = "INSERT INTO parttimejobs (part_company,part_title,part_salary,part_descrip,part_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql5)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "online"){
        $sql6 = "INSERT INTO onlinejobs (online_company,online_title,online_salary,online_descrip,online_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql6)){
            header('location: jobintroducer_dashb.php');
        }
    }
    else if($jobtype == "overseas"){
        $sql7 = "INSERT INTO overseasjobs (overseas_company,overseas_title,overseas_salary,overseas_descrip,overseas_email) 
        VALUES
        ('$name','$title','$salary','$description','$email')";
        if($conn->query($sql7)){
            header('location: jobintroducer_dashb.php');
        }
    }

    $conn->close();
?>