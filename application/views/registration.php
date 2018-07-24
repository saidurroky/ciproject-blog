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
          <li><a href="<?php echo base_url();?>welcome/aboutus.php">About us</a></li>
          <li><a href="<?php echo base_url();?>welcome/registration.php">Registration</a></li>
          <li><a href="<?php echo base_url();?>welcome/login.php">Login</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

   <br/><br/> <br/>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
          <h2>User Registration</h2>
          <hr />
         <h2 style="color:green"> <?php if($this->session->flashdata('reg_success')): ?>

            <?php echo $this->session->flashdata('reg_success');?>

          <?php endif ;?></h2>
          <form class="form-horizontal" method="post" action="<?php echo base_url();?>My_controller/user_information">
            <div class="form-group">
              <label class="control-label col-sm-2" for="firstname" >Firstname:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required>
                <input type="hidden" class="form-control"  name="type" value="<?php echo 'user'; ?>">
                <input type="hidden" class="form-control"  name="status" value="<?php echo '1'; ?>">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="middlename">Middlename:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="middlename"  name="middlename" placeholder="Enter middlename">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lastname">Lastname:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="Enter lastname">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="address">Address:</label>
              <div class="col-sm-6">
                <textarea class="form-control"  name="address" rows="3" id="address"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email" >Email:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="password" >Password:</label>
              <div class="col-sm-6"> 
                <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password" required>
              </div>
            </div>
            
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success">Registration</button>
              </div>
            </div>
          </form> 
         
        </div>
        
      </div>

      <hr>

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