<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <!--title--> 
    <title>Job Hosting Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_jobhosting.css">
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
        <h1 class="title1">LET'S GET THE BEST MATCH <br> FOR YOU!</h1>
    </div>

    <div class="Right-Side-Image">
        <img class="image1" src="img/image1.png">
    </div>

    <div class="Right-Side-Facts">
        <ul class="facts">
            <li>State Actual and True Facts</li>
            <li>Use Simple Words</li>
            <li>Be Appealing</li>
        </ul>
    </div>

    <div class="Right-Side-Lines">
        <hr class="line1" color="black">
        <hr class="line2" color="black">
        <hr class="line3" color="black">
        <hr class="line4" color="black">
        <hr class="line5" color="black">
        <hr class="line6" color="black">
    </div>

    <div class="container">
        <div class="title">Job Hosting Form</div>
        <form action="inserting_jobs.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Job Title</span>
                    <br>
                    <input class="boxes" type="text-box" placeholder="Name Your Offering Job" name="title" required>
                </div>
                <div class="input-box">
                    <span class="details">Job Description</span>
                    <br>
                    <textarea class="boxes1" name="description" placeholder="Briefly Describe the Job" cols="30" rows="10" style="font-family: 'Georgia';"></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Job salary</span>
                    <br>
                    <input class="boxes" name="salary" type="text-box" placeholder="Salary" required>
                </div>
                <div class="input-box">
                    <span class="details">Required Experience and Skills</span>
                    <br>
                    <input class="boxes" name="exprience" type="text-box" placeholder="State What You are Looking For" required>
                </div>

                <div class="input-box">
                    <span class="details">Company Name</span>
                    <br>
                    <input class="boxes" name="name" type="text-box" placeholder="Company Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Website</span>
                    <br>
                    <input class="boxes" name="website" type="text-box" placeholder="Company Website" required>
                </div>
                <div class="input-box">
                    <span class="details">Company E-mail</span>
                    <br>
                    <input class="boxes" name="email" type="text-box" placeholder="Company E-mail" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Number</span>
                    <br>
                    <input class="boxes" name="number" type="text-box" placeholder="Company Number" required>
                </div>
                <div class="input-box">
                    <select name="jobtype" >
                        <option  name="online">online</option>
                        <option  name="top">top</option>
                        <option  name="trending">trending</option>
                        <option  name="highest">highest</option>
                        <option  name="local">local</option>
                        <option  name="overseas">overseas</option>
                        <option  name="parttime">parttime</option>
                    </select>
                </div>
                <div class="input-box">
                    <div class="button">
                        <input type="submit" value="Host My Job">
                    </div>
                </div>

                
            </div>
        </form>
    </div>

    <div class="Companies">
        <h3 class="company-heading">OVER 60 COMPANIES FOUND THEIR EMPLOYEES</h3>
    </div>   


    <footer class="footer_s">
        <div class="f_row">
            <div class="f_col">
                <ul>
                    <h3><b>Site map</b></h3>
                    <h5>
                        <div><a href="index1.html">Home</a></div>
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