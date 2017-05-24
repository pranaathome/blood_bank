<!DOCTYPE html>
<?php
    include 'modul/users/connect.php';
    if($_SESSION['status'] == "user"){
        $id = $_SESSION['id'];
        $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$id'");
        $result = mysqli_fetch_array($query);
    }
?>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Blood-Bank is your Assistant </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="resources/css/creative.min.css" rel="stylesheet">
 
</head>
<body id="page-top">
	
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            	<a class="navbar-left" href="#page-top"><img id="navbar-logo page-scroll" src="resources/img/logo.png" /> </a>
            </div>

       		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Member Area</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Welcome To the Blood-Bank</h1>
                <hr>
                <p>Your Blood Donation Assistant</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
    	<div class="container" id="login">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="modul/users/login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<label for="username"> Username </label>
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-left">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Ingat Saya</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6" id="login-btn">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Login">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Lupa Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p id="sign-up"> Belum punya akun? <a href="#" data-toggle="modal" data-target="#myModal"> Daftar </a> </p>
	<!-- Large modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    	<div class="modal-dialog modal-lg">
        	<div class="modal-content">
            	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    	×</button>
                	<h4 class="modal-title" id="myModalLabel">
                    Registrasi</h4>
            	</div>
            	<div class="modal-body">
                	<div class="row">
                    	<div class="col-md-13" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        	<!-- Tab panes -->
                            	<div class="tab-pane" id="Registration">
                                	<form role="form" class="form-horizontal" method="post" action="modul/users/register.php" enctype="multipart/form-data">
                                	<div class="form-group">
                                    	<label for="email" class="col-sm-2 control-label">
                                        	Nama</label>
                                    	<div class="col-sm-10">
                                        	<div class="row">
                                            	<div class="col-md-12">
                                                	<input type="text" class="form-control" placeholder="Name" name="name" />
                                            	</div>
                                        	</div>
                                    	</div>
                                	</div>
                                	<div class="form-group">
                                    	<label for="email" class="col-sm-2 control-label">
                                        	Email</label>
                                    	<div class="col-sm-10">
                                        	<input type="email" class="form-control" id="email" placeholder="Email" name="email" />
                                    	</div>
                                	</div>
                                	<div class="form-group">
                                    	<label for="mobile" class="col-sm-2 control-label">
                                        	Username</label>
                                    	<div class="col-sm-10">
                                        	<input type="text" class="form-control" id="username" placeholder="Username" name="username" />
                                    	</div>
                                	</div>
                                	<div class="form-group">
                                    	<label for="password" class="col-sm-2 control-label">
                                        	Password</label>
                                    	<div class="col-sm-10">
                                        	<input type="password" class="form-control" id="password" placeholder="Password" name="password" />
                                    	</div>
                                	</div>
                                    <div class="form-group text-left">
                                        <input type="checkbox" tabindex="3" class="" name="status" value="1" id="remember">
                                        <label for="post">Pendonor</label>
                                    </div>
                                    <div class="form-group text-left">
                                        <input type="checkbox" tabindex="3" class="" name="status" value="2" id="remember">
                                        <label for="post">Penyelenggara</label>
                                    </div>
                                	<div class="row">
                                    	<div class="col-sm-2">
                                    	</div>
                                    	<div class="col-sm-10">
                                        	<button type="submit" class="btn btn-primary btn-sm">
                                            	Simpan</button>
                                    	</div>
                                	</div>
                                	</form>
                            	</div>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>

    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">@Kelompok 4 - BloodBank Team</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>085659181814</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:jems.p14@gmail.com">jems.p14@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>



	<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="resources/js/creative.min.js"></script>
    <!-- Login JavaScript -->
    <script src="resources/js/login.js"></script>

	</body>
</html>