<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <!--title--> 
    <title>Job Finding Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_jobapply.css">
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

    <!--Editing area-->

    <div class="Right-Side-Content">
        <h1 class="title1">SUCESS STORIES WHO ALREADY <br> FOUND THEIR DREAM JOB</h1>
    </div>

    <div class="Right-Side-Images"> 
            <img class="image1" src="img/jobapply/P1.png">         
            <img class="image2" src="img/jobapply/P2.png">          
            <img class="image3" src="img/jobapply/P3.png">          
            <img class="image4" src="img/jobapply/P4.png">          
            <img class="image5" src="img/jobapply/P5.png">          
            <img class="image6" src="img/jobapply/P6.png">          
            <img class="image7" src="img/jobapply/P7.png">    
    </div>

    <div class="Right-Side-Lines">
        <hr class="line1" color="black">
        <hr class="line2" color="black">
        <hr class="line3" color="black">
        <hr class="line4" color="black">
        <hr class="line5" color="black">
        <hr class="line6" color="black">
        <hr class="line7" color="black">
        <hr class="line8" color="black">
    </div>

    <div class="Image-Slider">

    </div>

    <div class="container">
        <div class="title">Job Applying Form</div>
        <form action="insert_appli_jobs.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details" >Full Name</span>
                    <br>
                    <input class="boxes" name="fullname" type="text-box" placeholder="Your Full Name" required>
                </div><div class="input-box">
                    <span class="details" >Username</span>
                    <br>
                    <input class="boxes" name="username" type="text-box" placeholder="Your Full Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Age</span>
                    <br>
                    <input class="boxes" name="age" type="text-box" placeholder="Your Age" required>
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <br>
                    <input class="boxes1" name="contact1" type="text-box" placeholder="Your Mobile Phone Number 1" required>
                    <br>
                    <input class="boxes1" name="contact2" type="text-box" placeholder="Your Mobile Phone Number 2" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <br>
                    <input class="boxes" name="email" type="text-box" placeholder="Your Work Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <br>
                    <input class="boxes2" name="addrl1" type="text-box" placeholder="House Number, Address Line 1" required>
                    <br>
                    <input class="boxes2" name="addrl2" type="text-box" placeholder="Address Line 2" required>
                    <br>
                    <input class="boxes2" name="city" type="text-box" placeholder="City" required>
                    <br>
                    <input class="boxes2" name="district" type="text-box" placeholder="District" required>
                    <br>
                    <input class="boxes2" name="postalcode" type="text-box" placeholder="Zip COde" required>
                    <br>
                    <input class="boxes2" name="province" type="text-box" placeholder="Province" required>
                    <br>
                    <input class="boxes2" name="country" type="text-box" placeholder="Country" required>
                </div>
                
                <span class="details">Applying company</span><br>
                <?php $jobType = $_GET['id']; ?>

                <select name="jobType" >
                        <option  ><?php echo $jobType ?></option>
                    </select>
                
                <br>
                <span class="details">Upload Your CV</span>
                <br>
                    <div class="File-Upload-Button">
                        <input type="file" id="myFile" name="Upload CV">
                    </div>   

                    <div class="button">
                        <input type="submit" value="Apply My Job">
                    </div>
                </div>
            </div>
        </form>
    </div>

    

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