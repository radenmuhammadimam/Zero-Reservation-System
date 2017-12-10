<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>Zero Reservation - Registrasi</title>
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
            <a class="navbar-brand" href="login.php">Zero Reservation</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="index.php">Home</a></li> -->
              <!-- <li><a href="#">Login</a></li>
              <li><a href="#">Registrasi</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php">Login</a></li>
              <li class="active"><a href="registrasi.php">Registrasi</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

<div class=" container-fluid text-center col-md-8 col-md-offset-2">
  <h2>Registrasi Customer</h2>
  <form id="form_advanced_validation" class="loginform" method="POST" action="insertcustomer.php">
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Card Identity (Passport/Kartu Pelajar/KTP)</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="number" class="form-control" name="noktp" id="username" min="0"  required placeholder="Enter your Card Identity"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username" min="3" max="15" placeholder="Enter your Username"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input id="pwd" type="password" class="form-control" name="password" id="password" min="6" max="25" required placeholder="Enter your Password"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" oninput="check(this)" id="password" min="6" max="25" required placeholder="Reenter your Password"/>
                </div>
              </div>
            </div>
            <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('pwd').value) {
                            input.setCustomValidity('Password Must be Matching.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                    }
                </script>
             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="username" min="3" max="25" required  placeholder="Enter your name"/>
                </div>
              </div>
            </div>
             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Address</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="address" id="username" min="3" max="25" required  placeholder="Enter your address"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Age</label>
              <div class="cols-sm-10">
                <div class="input-group date">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-link" aria-hidden="true"></i></span>
                  <input type="number" class="form-control" name="age" id="username" required min="0" max="100"  placeholder="Enter your age"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Gender</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-leaf" aria-hidden="true"></i></span>
                  <select class="input-group" name="gender" required>
                    <option value="">----Select Gender---</option>
                    <option value="L">Male</option>
                    <option value="P">Female</option>
                  </select>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Phone Number</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="notel" id="username" required min="0" placeholder="Enter your phone number"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Registrasi">
            </div>
            
          </form>
</div>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</html>