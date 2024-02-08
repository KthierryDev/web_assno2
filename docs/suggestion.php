<?php  
session_start();
require "connection.php";


if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $delete = "DELETE FROM `suggest` WHERE id='$id' ";
    $query = mysqli_query($conn, $delete);

    if($query){
        echo '<script> alert("Successfully Deleted");</script>';
        
    }
    else{
        echo '<script> alert("Deletion Failed");</script>';
        
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

  <title>Guarder-client</title>

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
            <a href="https://mail.google.com/mail/u/0/#inbox" class="contact_link3">
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
                CLIENT SUGGESTIONS
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">

                <li class="nav-item">
                  <a class="nav-link" href="admin.php">DASHBOARD</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="suggestion.php">View Suggestions</a>
                </li>

                           
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

<h1 style="text-align:center;">Suggestions given by our Clients</h1>
<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>FULL NAME</th>
            <th>EMAL</th>
            <th>TELEPHONE</th>
            <th>MESSAGE</th>
            <th colspan="1">ACTION</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    $data =mysqli_query($conn,"SELECT * FROM suggest");
    while($array = mysqli_fetch_array($data)){   
    ?>

        <tr>
            <td> <?php echo $no; ?>  </td>
            <td> <?php echo $array['1']; ?>  </td>
            <td> <?php echo $array['2']; ?>  </td>
            <td> <?php echo $array['3']; ?>  </td>
            <td> <?php echo $array['4']; ?>  </td>
          
            <td> <button class="btn-primary"> <a href="suggestion.php?delete=<?php echo $array[0];?>" value="delete" style="color: white;">DELETE</button> </td>
        </tr>
        <?php 
        $no++;
    }
        ?>
    </tbody>

</table>
<style>
    table{
        border-radius: 10px;
        margin-left: 5rem;
        margin-top: 3rem;
        background-color:#272829 ;
        margin-bottom: 4rem;
    }
    td{
        
        padding: 5px;
        text-align: center;
        color: white;
    }
    th{
        color: white;
        background-color: #161616;
        text-align: center;
    }
</style>

  <!-- end team section -->

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