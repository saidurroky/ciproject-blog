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
    <br > <br > <br > 
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <div class="alert alert-success">
        <h1>All product</h1>
      </div>
    
    <div class="col-md-12" style="height:350px">
        <div class="row">
            <?php 
                foreach ($viewproduct as $value) {
                 
            ?>
          <div class="col-md-3">
              <img src="<?php echo base_url();?><?php echo $value->image ;?>" height="100" width="100"><br>
              <strong>title:<?php echo $value->title ;?></strong><br>
               Price: <?php echo $value->price ;?><br>
               Name: <?php echo $value->name ;?><br>
               Email: <?php echo $value->email ;?><br>
               Phone: <?php echo $value->phone ;?><br>
               Description: <?php echo $value->description ;?>

          </div>
   <?php } ?>
       </div>
     </div>
     </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2><?php echo $viewhomecontent->title ;?></h2>
            <p><?php echo $viewhomecontent->content ;?></p>
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