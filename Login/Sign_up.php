<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="sign_up.css">
  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    <style type="text/css">
    html,body {
    margin: 0;
    height: 100%; 
    }
    .back-image1 {
      background-image: url("sign_up.jpg");
  height: 100vh;
  width: 100%;
  opacity: 0.75;
    background-position: center;
  background-repeat: no-repeat;
  background-size: 100%;
    }
    @media only screen and (max-width: 700px) {
    .form_signup {
      position: absolute;
      left: 0vh;
    top: 0vh;
    }
    .back-image1 {
      background-size: 300%;   
    }
}
</style>

    <title>Explore</title>
  </head>
  <body>
    <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
    <div class="container-fluid back-image1">
      <div class="row justify-content-center">
        <div class="animated fadeIn">
        <div class="col-12 col-md-4 col-sm-6 form_signup">
        <form class="login_form" method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
          <div class="form-group">
            <label class="mname">Name</label>
            <input type="text" name="myname" class="form-control" id="myname" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="rnum">Roll number</label>
            <input type="text" name="roll_number" class="form-control" id="roll_number" placeholder="Roll-number">
          </div>
          <div class="form-group">
            <label class="uname">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="UserName">
          </div>
          <div class="form-group">
            <label class="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="pass">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label class="pass">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
          </div>
          <button onclick="return regformhash(this.form,
                                   this.form.myname,
                                   this.form.roll_number,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirm_password);" class="btn btn-success btn-block">Sign Up</button>
        </form>
      <a href="index.php"><button class="btn btn-info btn-block">Go Back</button></a>
      </div>
    </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>