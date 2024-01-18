<?php session_start();?>

<!DOCTYPE html>
<html >
<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_home.css">
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
            <button class="nav_points"><a class="a" href ="index1.html"> Home</a></button>
            <button class="nav_points"><a class="a" href ="contact_us_form.php"> Contact Us</a></button>
            <button class="nav_points"><a class="a" href ="aboutus.php"> About Us</a></button>
        </ul>
    </div>
    
    <div class="slideshow1">
        <div class="images_slide">
        <figure>
            <img class="slide1_img" src="img/slide1_img1.jpg">
                <div class="slider_image_text">
                    <h2>Welcome !</h2>
                </div>
            <img class="slide1_img" src="img/slide1_img2.jpg">
            <img class="slide1_img" src="img/slide1_img3.jpg">
            <img class="slide1_img" src="img/slide1_img4.jpeg">
        </figure>
        </div>

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

    <!---trending jobs part-->
    <h2><center>Trending jobs</center></h2>

    <section class="home_trending">
        <div class="home_trending_card">
            <h3>Comapany 1</h3>
            <img src="img/jobs_image.jpg" width="250px">
            <h4>Job 1</h4>
            <h5>job category</h5>
            <button><a href="www.google.com">Apply</a></button>
        </div>

        <div class="home_trending_card">
            <h3>Comapany 2</h3>
            <img src="img/jobs_image.jpg" width="250px">
            <h4>Job 2</h4>
            <h5>job category</h5>
            <button><a href="#">Apply</a></button>
        </div>

        <div class="home_trending_card">
            <h3>Comapany 3</h3>
            <img src="img/jobs_image.jpg" width="250px">
            <h4>Job 3</h4>
            <h5>job category</h5>
            <button><a href="#">Apply</a></button>
        </div> 

        <div class="home_trending_card">
            <h3>Comapany 3</h3>
            <img src="img/jobs_image.jpg" width="250px">
            <h4>Job 3</h4>
            <h5>job category</h5>
            <button><a href="#">Apply</a></button>
        </div> 

        <div class="home_trending_card">
            <h3>Comapany 3</h3>
            <img src="img/jobs_image.jpg" width="250px">
            <h4>Job 3</h4>
            <h5>job category</h5>
            <button><a href="#">Apply</a></button>
        </div> 
    </section>

    <!---top employees part-->
    <h2><center>Top employees</center></h2>

    <center>
        <div class="top_employees">
            <img src="img/amazon.png" alt="" width="200px">
            <img src="img/apple.png" alt="" width="130px">
            <img src="img/cmacgm.png" alt="" width="130px">
            <img src="img/uber.png" alt="" width="180px">
            <img src="img/microsoft.png" alt="" width="200px">
            <img src="img/pearson.png" alt="" width="200px">
        </div>  
    </center>  

    <!---why us part-->
    <h2><center>Why us?</center></h2>
    <section class="whyus">
        <div class="whyus_sub1">
            <h1>65890</h1>
            <h4>Already employed</h4>
        </div>

        <div class="whyus_sub1">
            <h1>549000+</h1>
            <h4>Job applicats</h4>
        </div>

        <div class="whyus_sub1">
            <h1>2504</h1>
            <h4>Companies</h4>
        </div>

        <div class="whyus_sub1">
            <h1>65890</h1>
            <h4>Matches made</h4>
        </div>
    </section>

    <!---ebd of body editing part-->
    <footer class="footer_s">
        <div class="f_row">
            <div class="f_col">
                <ul>
                    <h3><b>Site map</b></h3>
                    <h5>
                        <div><a href="#">Home</a></div>
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