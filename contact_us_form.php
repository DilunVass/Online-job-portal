<?php include ('config.php');?>
<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <!--title--> 
    <title>Contact US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_contact_us.css">
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
            <button class="nav_points"><a class="a" href="google.com"> Home</a></button>
            <button class="nav_points"><a class="a" href="contact_us_form.php"> Contact Us</a></button>
            <button class="nav_points"><a class="a" href="aboutus.php"> About Us</a></button>
        </ul>
    </div>

    <!--Editing area-->
    <!--Contact Us Page (Begins)-->
    <body>
        <form action="contact_us.php" method="post">
            <div class="contact-form">
                <h1>CONTACT US</h1>
                <div class="txtb">
                    <label>Name :</label>
                    <input type="text" name="Name" placeholder="Enter Your Name" required>
                </div>
    
                <div class="txtb">
                    <label>Email :</label>
                    <input type="email" name="email" placeholder="Enter Your E-mail" required>
                </div>
    
                <div class="txtb">
                    <label>Country :</label>
                    <input type="text" name="Country" placeholder="Enter Your Country" required>
                </div>
    
                <div class="txtb">
                    <label>Contact No :</label>
                    <input type="text" name="ContactNo" placeholder="Enter Your Phone Number" required>
                </div>
    
                <div class="txtb">
                    <label> Message :</label>
                    <textarea name="Message" required></textarea>
                </div>
                <div class="btn">
                    <input class="btn" type="submit" value="Submit">
                </div>
                
            </div>
        </form>
     
    </body><br>
    <br>
    
    <!--Contact Us Page (Ends)-->

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