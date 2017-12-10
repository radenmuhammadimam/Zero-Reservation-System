<?php include 'config/db.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Zero Reservation - Login Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <!-- bootstrap select -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css"  rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Zero Reservation</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="#">Login</a></li>
            <li><a href="#">Registrasi</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="registrasi.php">Registrasi</a></li>
          </ul>
          </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
        <div class="text-center container-fluid">
          <div class="row">
            
            <div class=" col-md-8">
              <img class="imglogo" src="img/logo.png" alt="" width="50%" height="50%">
            </div>
            <div class="col-md-4">
              <small>Type your username & password</small>
              <br>
              <form class="loginform" method="POST" action="loginauth.php">
                <div class="form-group">
                  <label for="username" class="cols-sm-2 control-label">Username</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label">Password</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Login">
                </div>
                
              </form>
            </div>
            
          </div>
        </div>
        <div class="container-fluid">
          <?php
          include 'layout/viewjadwalpenerbangan.php';
          ?>
        </div>
        <footer class="container-fluid bg-4 text-center">
          <div class="centerfooter">
            <p>Copyright ZeroInside</p>
          </div>
        </footer>
      </body>
      <script src="plugins/jquery/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!-- Select Plugin Js -->
      <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
      <script src="js/jquery.js"></script>
    </html>