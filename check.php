<?php require_once 'config.php';?>

<?php 
    if(isset($_POST['login'])){
        $user = mysqli_real_escape_string($conn,$_POST['user']);
        $password = mysqli_real_escape_string($conn,$_POST['pass']);

        $query = "SELECT * FROM job_seeker WHERE js_username = '{$user}' AND js_password ='{$password}'";

        $result_set = mysqli_query($conn,$query);

        if($result_set && mysqli_num_rows($result_set)>0){
            
            session_start();
            $_SESSION["userName"] = $user;
            
            if(isset($_SESSION["userName"])){
                header("Location:jobseeker_dashb.php");
            }
        }else{
            header("Location:login.html ");
        }
    }
    
?>

