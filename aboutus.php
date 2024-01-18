<?php session_start();?>
<?php include ('config.php');?>
<!DOCTYPE html>
<html >
<head>
    <!--title--> 
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <button class="nav_points"><a class="a" href ="index1.php"> Home</a></button>
            <button class="nav_points"><a class="a" href ="contact_us_form.php"> Contact Us</a></button>
            <button class="nav_points"><a class="a" href ="aboutus.php"> About Us</a></button>
        </ul>
    </div>


    <!--Editing area-->

    <body>
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h1>ABOUT US</h1>
                    </div>
                    <div class="content">
                        <h3>
                            This is a little paragraph
                        </h3>
                        <p>
                            Our website provides facility to the Job Seeker to search for various jobs as per his/her qualification.<br>
                            Here Job Seeker can register himself on the web portal and create his profile,<br>
                            along with his educational information.<br>
                            Job Seekers can search for various jobs and apply for the job.<br>
                            We also are also designed for the various employer who are required to recruit employees in <br>
                            their organization.<br>
                            The employer can register himself/herself on the web portal and then <br>
                            he/she can upload information about <br>
                            various job vacancies in their organization.<br>
                            Employees can view the applications of Job Seeker and send calls later to the job seekers.  <br>
                        </p>
                        <div class="button"><br>
                            <a href="">Read more</a>
                        </div>
                    </div>
                    <div class="image-section">
                        <img src="img/career1.jpg">
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </body><br>

    <!--end-->

    <footer class="footer_s">
        <div class="f_row">
            <div class="f_col">
                <ul>
                    <h3><b>Site map</b></h3>
                    <h5>
                        <div><a href="#">Home</a></div>
                        <div><a href="#">Over seas jobs</a></div>
                        <div><a href="#">Local jobs</a></div>
                        <div><a href="#">Online jobs</a></div>
                        <div><a href="#">Part time jobs</a></div>
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