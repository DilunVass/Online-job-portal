<?php require_once 'config.php';?>

<?php 
    if(isset($_POST['login'])){
        $user = mysqli_real_escape_string($conn,$_POST['user']);
        $password = mysqli_real_escape_string($conn,$_POST['pass']);

        $query = "SELECT * FROM admin WHERE a_username = '{$user}' AND a_password ='{$password}'";

        $result_set = mysqli_query($conn,$query);

        if($result_set && mysqli_num_rows($result_set)>0){
            
            session_start();
            $_SESSION["userStaff"] = $user;
            
            if(isset($_SESSION["userStaff"])){
                header("Location:staff_dashb.php");
            }
        }else{
            header("Location:login.html ");
        }
    }
    
?>
