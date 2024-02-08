<!----------------------------------------registration------------------------------------------>
<?php
require "connection.php";
 
if(isset($_POST["signup"])){
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM register WHERE username = '$username' OR email = '$email'");

    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Username OR Password Has Already Taken?');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO register VALUES('','$username','$email','$password','$confirmpassword')";
            mysqli_query($conn,$query);
            echo "<script> alert('Registration Successfully!');</script>";

        }
        else{
            echo "<script> alert('Password Does Not Match?');</script>";
        }
    }
    
}

?>




<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Guarder-Admin</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                MUSANZE, RWANDA
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +250 729 437 494
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                ug2322070@ines.ac.rw
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                Administration-Signup-portal
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Services </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="guard.php"> Guards </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cv.php">OUR CV</a>
                </li>
               
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <div class="regisform" style="display: flexbox;">

    <form action="" method="post" style="margin-left:30rem;margin-top:3rem;display: inline-flex;background-color:grey;border-radius:10px;" >
        <div  class="form-group" style="width:30rem;">
            <input type="hidden" name="id">           

            <label for="username" style="color: black;margin-left:12rem;">USERNAME</label>
            <input type="text" name="username" style="width:30rem;border-radius:6px;border-style:none;" required> <br>

            <label for="emal" style="color: black;margin-left:12rem;">EMAIL</label>
            <input type="text" name="email" style="width:30rem;border-radius:6px;border-style:none;" required>

            <label for="username" style="color: black;margin-left:12rem;">PASSWORD</label>
            <input type="password" name="password" style="width:30rem;border-radius:6px;border-style:none;" required> <br>

            <label for="confirmpass" style="color: black;margin-left:12rem;">CONFIRM PASSWORD</label>
            <input type="text" name="confirmpassword" style="width:30rem;border-radius:6px;border-style:none;" required>
            <button type="submit" name="signup" class="btn -btn-primary" style="background-color: white;margin-left:12rem;margin-top:3rem;">SIGNUP</button> <br>

            <p style="margin-left:10rem;text-decoration: none;color:grey;">Already Have An Account? </p><a href="login.php" style="text-decoration: none;margin-left:13rem;color:gold;">LOGIN</a>
        </div>
    </form>
</div>










  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="index.php">
              <span>
                Guarder
              </span>
            </a>
            <p>
              The Pain Is a symbol of that you are a human nonetheless, the Guarder is always by your side.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link:
            </h5>
            <ul>
              <li>
                <a href="">
                  ug2322070@ines.ac.rw, Connect
                </a>
              </li>
              <li>
                <a href="">
                ug2322493@ines.ac.rw, Connect
                </a>
              </li>
              <li>
                <a href="">
                ug2322520@ines.ac.rw, Connect
                </a>
              </li>
              <li>
                <a href="">
                ug2219106@ines.ac.rw, Connect
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                MUSANZE, RWANDA
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +250 729 437 494
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                ug2322070@ines.ac.rw
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="currentYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Katabarwa Thierry's Group</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>