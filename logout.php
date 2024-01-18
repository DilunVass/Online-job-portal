<?php
    session_start();
    
    if(isset($_POST["logoff"])) {
    session_destroy();
        header("Location:login_select.html");
    }
    else {
        header("Location:jobseeker_dashb.php");
    }
?>