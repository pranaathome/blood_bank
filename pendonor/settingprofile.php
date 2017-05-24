<!DOCTYPE html>
<?php
  include '../modul/users/connect.php';
  
  if($_SESSION['status'] == "nouser"){
    header('Location:/bloodbank/index.php');
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
    <nav class="navbar navbar-default navbar-fixed-top affix" role="navigation" style="margin-bottom: 0" id="page-content-wrapper">
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
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="../modul/users/logoutprocess.php">Log Out</a></li>
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
        <div class="row" id="user_profile">
            <div id="user_profile_title">
              <h1> B - Profile </h1>
            </div>
          <div class="panel-body">
            <div class="row" id="user_profile_row">
              <div class="col-md-3 col-lg-3"  id="photo_pack" align="center">
                <img alt="User Pic" src="../resources/img/Doctor.jpg" class="avatar img-circle img-thumbnail" alt="avatar"> 
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block well well-sm">
              </div>
              <div class=" col-md-9 col-lg-9"> 
                <table class="table table-user-information">
                  <tbody>
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $row['username']?></td>
                      </tr>
                      <tr>
                        <td>Nama:</td>
                        <td><?php echo $row['name']?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $row['email']?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['sex']?></td>
                      </tr>
                        <tr>
                        <td>Alamat:</td>
                        <td><?php echo $row['address']?></td>
                      </tr>
                      <tr>
                        <td>Golongan Darah:</td>
                        <td><?php echo $row['blood_type']?></td>
                      </tr>
                        <td>Rhesus:</td>
                        <td><?php echo $row['rhesus']?></td>
                      <tr>
                        <td>No. HP/Telp:</td>
                        <td><?php echo $row['phone_number']?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            <div>
              <span class="pull-right">
                  <a href="#" id="change_profile" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ganti Profile</a>
              </span>
            </div>

          </div>
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ganti Profile</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" action="/bloodbank/modul/users/updategeneral.php" method="POST">
            <div class="form-group">
              <label class="col-lg-3 control-label">Nama:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="newname" value="<?php echo $row['name']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" type="email" name="newemail" value="<?php echo $row['email']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Alamat:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="newaddress" value="<?php echo $row['address']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">No.Telp/HP:</label>
              <div class="col-lg-8">
                <input class="form-control" type="number" name="newphone" value="<?php echo $row['phone_number']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Jenis Kelamin:</label>
              <div class="col-lg-8">
                <input type="radio" name="newgender" value="Laki-Laki"> Laki-Laki
                <input type="radio" name="newgender" value="Perempuan"> Perempuan
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Rhesus:</label>
              <div class="col-lg-8">
                <input type="radio" name="newrhesus" value="Positif (+)"> Positif (+)<br>
                <input type="radio" name="newrhesus" value="Negatif (-)"> Negatif (-)
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Golongan Darah:</label>
              <div class="col-lg-8">
                <div class="ui-select">
                  <select id="user_time_zone" class="form-control">
                    <option>Pilih Salah Satu</option>
                    <option type="text" name="newblood" value="A">A</option>
                    <option name="newblood" value="B">B</option>
                    <option name="newblood" value="O">O</option>
                    <option name="newblood" value="AB">AB</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Username:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="newUser" value="<?php echo $row['username']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div class="col-md-8">
                <input class="form-control" id="txtPassword" name="newPass" type="password" value="<?php echo $row['password']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input class="form-control" id="txtConfirmPassword" type="password" value="" onkeyup="checkPass(); return false;">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <button class="btn btn-primary pull-right" type="submit">Ganti!</button>
              </div>
            </div>
        </form>
        </div>
      </div>
      
    </div>
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