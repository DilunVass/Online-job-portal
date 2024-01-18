<?php
  session_start();
  $userName = "";
  if(isset($_SESSION["userName"])) { 
    $userName = $_SESSION["userName"]; 
  }
  else {// Not logged in
    header("Location:login_select.php"); //Redirect to the login page
  }
?>
<?php include ('config.php');?>
<!DOCTYPE html>
<html>
  <head>
    <!--title-->
    <title>Home page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
    <script src="js/jobseeker_dash.js"></script>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/style_jobseeker_dash.css" />
    <link 
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <header class="header_s">
      <div class="h_row">
        <div class="h_col">
          <ul>
            <img src="img/logo.png" width="170px" height="60px" />
          </ul>
        </div>

        <div class="h_col">
          <ul>
            <div class="search">
              <form>
                <input type="text" placeholder="Search.." name="" />
              </form>
            </div>
          </ul>
        </div>

        <div class="h_col">
          <ul>
            <div class="h_buttons">
            <?php 
                if(isset($_SESSION["userName"])){
                  echo "<button><a href='#'>Job seeker</a></button>";
                }
                else if(isset($_SESSION["userIntro"])){
                  echo "<button><a href='#'>Job introducer</a></button>";
                }
                else if(isset($_SESSION["userStaff"])){
                  echo "<button><a href='#'>Staff</a></button>";
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
        <button class="nav_points">
          <a class="a" href="google.com"> Home</a>
        </button>
        <button class="nav_points">
          <a class="a" href="contact_us_form.php"> Contact Us</a>
        </button>
        <button class="nav_points"><a class="a" href="aboutus.php"> About Us</a></button>
      </ul>
    </div>
    
  <center><h1>Hello <?php echo $userName ?></h1></center>
  <center>
  <form method="post" action="logout.php">
      <input class="logout" name="logoff"  type="submit" value="Log off"/>
  </form>
  </center>
<!-----job yo have applied------->

<h3 class= "applied_job_heading">Jobs you have applied</h3>
    
    <?php 
      $sql1= "SELECT * FROM applied_jobs WHERE appli_username = '$userName'";
        if($result1=$conn->query($sql1)){
        if($result1->num_rows > 0){
          echo ("<table style='width:40%' >");
          echo ("<tr>");
            echo ("<th> Application ID</th>");
            echo ("<th> Applied company</th>");
            
          echo ("</tr>");
        while($row = $result1->fetch_assoc()){
          echo ("<tr>");
          echo ("<td>". $row['appli_ID']. "</td>");
          echo ("<td>" . $row['appli_cname'] . "</td>");
          
          echo ("</tr>");
        }
          echo ("</table>");
        }else{
          echo "no results";
        }
        }
        else{
          echo "Error:". $conn->error;
        }

    ?>

<br>
    <div class="container">
      <div class="main-content-1">
        <div class="line-1">
          
          
        </div>
        <div id="main-tabs-1">
          <ul>
            <li><a href="#tabs-1" id="tab1">Inbox</a></li>
            <li><a href="#tabs-2" id="tab2">Important</a></li>
          </ul>
          <div id="tabs-1">
            <h4>Topic</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                inventore sint! A, dolore error. Rem repellat fuga maxime iure
                nulla ipsam molestiae quas praesentium accusamus quia fugiat,
                voluptatibus vel voluptatum.
              </p>
              <span class="fa fa-star"></span>
            </div>
            <h4>Topic</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                inventore sint! A, dolore error. Rem repellat fuga maxime iure
                nulla ipsam molestiae quas praesentium accusamus quia fugiat,
                voluptatibus vel voluptatum.
              </p>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
          <div id="tabs-2">
            <h4>Topic</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                inventore sint! A, dolore error. Rem repellat fuga maxime iure
                nulla ipsam molestiae quas praesentium accusamus quia fugiat,
                voluptatibus vel voluptatum.
              </p>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="main-content-2">
        <div class="card-container">
          <div class="line-2">
            
            
          </div>
          <div class="line-3">
            
            
          </div>
        </div>
      </div>
    </div>

    <!--Editing area-->

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
              <div>
                This is a little paragraph.This is a little paragraph.This is a
                little paragraph.
              </div>
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
