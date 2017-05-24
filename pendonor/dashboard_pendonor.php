<!DOCTYPE html>
<?php
  include '../modul/users/connect.php';
  
  if($_SESSION['status'] == "nouser"){
    header('Location:login.php');
  }
  else{
      $id = $_SESSION['id2'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$id'");
  $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
  }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pendonor | Blood-Bank</title>

  <!-- Responsive Screen -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap Core -->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awsome -->
  <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../resources/css/custom.css">
  <!-- Date and Time -->
  <script src="../resources/js/custom.js"></script>
    <!-- JQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container body">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0" id="page-content-wrapper">
        <div class="container-fluid">
        <!-- For better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <div class="nav navbar-nav navbar-right">
              </div>
            </button>
              <a class="navbar-brand">
                <img src="../resources/img/bloodbank2.png">
                <h1>BloodBank</h1>
              </a>
              <a href="#menu-toggle" class="sidebar-trigger" id="menu-toggle">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
              </a>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span> 
                        <strong>Account</strong>
                      <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/bloodbank/modul/users/logoutprocess.php">Log Out</a></li>
                      </ul>
                  </div>
              </ul>
          </div>
        </div>
    </nav>
    <!-- END of Navigation Bar -->
    <div class="wrapper">
    <!-- SIDE BAR START -->
      <div class="sidebar-wrapper">
        <!-- Side Bar userpic -->
          <figure class="profile-userpic">
            <img src="../resources/img/header.jpg" class="img-responsive" alt="Your Photo">
          </figure>
        <!-- End of Side Bar userpic -->
        <!-- SIDEBAR USER TITLE -->
          <div class="profile-usertitle">
            <div id="profile-usertitle-name">
              <p><?php echo $row['name']?></p>
            </div>
            <div id="profile-usertitle-job">
              <p> Pendonor | Point-ku: <a>0</a> </p>
            </div>
          </div>
          <div class="sidebar-menu" role="menu">
            <li>
              <a href="dashboard_pendonor.php"> Dashboard </a>
            </li>
            <li>
              <a> B-Donor </a>
            </li>
            <li>
              <a> B-History </a>
            </li>
            <li>
              <a href="settingprofile.php"> B-Profile </a>
            </li>
          </div>  
        <!-- END SIDEBAR USER TITLE -->
      </div>
    <!-- SIDE BAR END -->
  <section id="page-keeper">
    <!-- Body of the Web -->
    <div id="page-content-wrapper">
      <div class="container">
      <!-- Header image -->
        <div class="header-title content-header-media hidden-xs">
          <div class="header-section">
            <h1> Blood Donation System </h1>
          </div>
          <img src="../resources/img/help.jpg" alt="header image" class="animation-pulseSlow">
        </div>
        <div class="information-marquee">
          <marquee><p class="marquee"> This is your pesonal Blood Donation System </p></marquee>
        </div>
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-bloodbank">
              <div class="inner">
                <h3>User List</h3>

                <p>User Management</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-bloodbank">
              <div class="inner">
                <h3>Event List</h3>

                <p>Event Management</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
              <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-bloodbank">
              <div class="inner">
                <h3>Stock Update</h3>

                <p>Blood Stock Management</p>
              </div>
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-bloodbank">
              <div class="inner">
                <h3>Point Gift</h3>

                <p>For the Donators</p>
              </div>
              <div class="icon">
                <i class="fa fa-gift"></i>
              </div>
              <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      <!-- /.row -->
      </div>
      </div>
    </div>
  </section>
  </div>



<!-- JavaScript for Date and Time -->
  <script type="text/javascript">window.onload = date_time('date_time');</script>
<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });
    </script>
</body>  
</html>