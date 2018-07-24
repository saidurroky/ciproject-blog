<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to codeigniter project</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo base_url();?>Welcome/aboutus.php">About us</a></li>
          <li><a href="<?php echo base_url();?>welcome/registration.php">Registration</a></li>
          <li><a href="<?php echo base_url();?>welcome/login.php">Login</a></li>
          
        </ul>
        
       
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<br><br><br><br><br>
  <h2 style="color:green"> <?php if($this->session->flashdata('pro_success')): ?>

            <?php echo $this->session->flashdata('pro_success');?>

          <?php endif ;?></h2>
    <div class="container">
      <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
              <form class="form-signin" method="post" action="<?php echo base_url();?>user_login_controller/login_information/">
                  <h2 class="form-signin-heading">Please sign in</h2><br>
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus><br>
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
          </div>
          <div class="col-md-4">

          </div>
      </div>
      

    </div> <br><!-- /container -->
    <div class="container">
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>