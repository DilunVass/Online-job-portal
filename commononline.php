<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/slyle_common_jobs.css">
    <link rel="stylesheet" href="style/style_commom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include ('config.php');?>
</head>
<body>
    <header class="header_s">
        <div class="h_row">
            <div class="h_col">
                <ul>
                    <img src="img/logo.png" width="170px" height="60px">
                </ul>
            </div>

            <div class="h_col">
                <ul>
                    <div class="search">
                        <form>
                            <input type="text" placeholder="Search.." name="">
                        </form>
                    </div>
                </ul>
            </div>

            <div class="h_col">
                <ul>
                    <div class="h_buttons">
                        <?php 
                            if(isset($_SESSION["userName"])){
                                echo "<button><a href='jobseeker_dashb.php'>Job seeker</a></button>";
                            }
                            else if(isset($_SESSION["userIntro"])){
                                echo "<button><a href='jobintroducer_dashb.php'>Job introducer</a></button>";
                            }
                            else if(isset($_SESSION["userStaff"])){
                                echo "<button><a href='staff_dashb.php'>Staff</a></button>";
                            }
                            else{
                                echo "<button><a href='login_select.html'>Login</a></button>";
                                echo "<button><a href='sign_up_page.html'>Sign Up</a></button>";
                            }
                        ?>
                    </div>
                </ul>
            </div>
        </div>
    </header>


    <div class="nav_main">
        <ul>
            <button class="nav_points"><a class="a" href ="index1.html"> Home</a></button>
            <button class="nav_points"><a class="a" href ="contact_us_form.php"> Contact Us</a></button>
            <button class="nav_points"><a class="a" href ="aboutus.php"> About Us</a></button>
        </ul>
    </div>
    
   

    <div class="nav_jobs">
        <center>
        <ul class="nav_list">
            <button class="nav_p"><a href ="overseasjob.php"> Over seas jobs</a></button>
            <button class="nav_p"><a href ="localjob.php"> Local Jobs </a></button>
            <button class="nav_p"><a href ="topjob.php"> Top Jobs </a></button>    
            <button class="nav_p"><a href ="trendjob.php"> Trending jobs </a></button>
            <button class="nav_p"><a href ="highjob.php"> Highest paying </a></button>
            <button class="nav_p"><a href ="onlinejob.php"> Online jobs </a></button>
            <button class="nav_p"><a href ="parttime.php"> Part time jobs </a></button>
        </ul>
        </center>
    </div>

    <!---body editing part-->

    <?php
        if(isset($_GET['id'])){
            $jobID = $_GET['id'];
            $sql = "SELECT * FROM onlinejobs WHERE online_ID = '$jobID'";
            $result = mysqli_query($conn,$sql);

            $row = mysqli_fetch_assoc($result);

            $title = $row['online_title'];
            $salary = $row['online_salary'];
            $company_name = $row['online_company'];
            $description = $row['online_descrip'];
            $img = $row['online_img'];
        }
    ?>
    <!---apply jobs part-->
    <h2><center>Apply job</center></h2>

    <section class="topjobs_box1">
            <div class="topjobs_box1_sub">
                <h3><?php echo $title ?></h3>

                <h4 >Salary : <span>Rs <?php echo $salary ?></span></h4>
                <h4 >Available vacanccies: <span>3</span></h4>
                <h4 >Company name: <span ><?php echo $company_name ?></span></h4>
                <img src='<?php echo $img ?>' ><br>
                <h4>Descripton</h4>
                <p><?php echo $description ?></p>
                <button class="top_wind_mini_bt"><a href='Jobapply.php?id=<?php echo $row['online_company'] ?>'>Apply</a></button>
            </div>
        </section>
	
    

    <!---end of body editing part-->
    <footer class="footer_s">
        <div class="f_row">
            <div class="f_col">
                <ul>
                    <h3><b>Site map</b></h3>
                    <h5>
                        <div><a href="index1.php">Home</a></div>
                        <div><a href="overseasjob.php">Over seas jobs</a></div>
                        <div><a href="localjob.php">Local jobs</a></div>
                        <div><a href="onlinejob.php">Online jobs</a></div>
                        <div><a href="parttime.php">Part time jobs</a></div>
                    </h5>
                </ul>
            </div>

            <div class="f_col">
                <ul>
                    <h3><b>Legal</b></h3>
                    <h5>
                        <div><a href="#">Legal</a></div>
                        <div><a href="#">Terms</a></div>
                    </h5>
                </ul>
            </div>

            <div class="f_col">
                <ul>
                    <h3><b>About us</b></h3>
                    <h5>
                        <div>This is a little paragraph.This is a little paragraph.This is a little paragraph.</div>
                    </h5>
                </ul>
            </div>

            <div class="f_col">
                <ul>
                    <h3><b>Contact us</b></h3>
                    <h5>
                        <div>Tel no: +94XXXXXXX</div>
                        <div>E-mail: jobs@gamil.com</div>
                        <div>Fax: XXXXXX</div>
                        <div>Address: 43/3 jobs avenue</div>
                    </h5>
                </ul>
            </div>

            
        </div>
        
    </footer>

    <div class="social_buttons">
        <center>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </center>
    </div>
</body>
</html>