<!DOCTYPE html>
<?php
include('db_connect.php');
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontastic.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<div id="loader">
		<div id="text">&nbsp;</div>
	</div>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1 class="text-uppercase">Integration</h1>
                  </div>
                  <p>Integration between RTO police and insurance company in case of fatal accident case.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white" id="login-form">
              <div class="form d-flex align-items-center">
                <div class="content"><center><h2>Find insurance policy</h2></center><br><br>
                  <form id="login-form" method="post" action="select_policy.php">
                    <div class="form-group">
                      <input id="aadhar" type="text" name="aadhar" class="input-material">
                      <label for="aadhar" class="label-material">Aadhar Number</label>
                    </div>
                    <input type="submit" value="Find" class="btn btn-primary">
                  </form>
                  <small>Track your claim </small><a role="button" class="signup" id="registration-button" style="cursor: pointer">Click Here</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white" id="registration-form">
				<div class="form d-flex align-items-center">
					<div class="content"><h2>Find Your PRN for track status of insurance claim</h2></center><br><br>
						 <form id="login-form" method="post">
							<div class="form-group">
							  <input id="claim_id" type="text" name="claim_id" class="input-material">
							  <label for="claim_id" class="label-material">Claim ID</label>
							</div>
							<button class="btn btn-primary">Track</button>
						  </form>
							<small>To find insurance policy </small><a role="button" class="signup" id="login-button" style="cursor: pointer"> Click Here</a>
					</div>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/front.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function(){
			
			$("#loader").hide();
		});
	</script>
  </body>
</html>