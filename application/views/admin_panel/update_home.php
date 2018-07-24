<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to user admin page</title>

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
          <li class="active"><a href="<?php echo base_url();?>Admin_controller/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Settings <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>Admin_controller/setting_home_content"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set Home Content</a></li>
                  <li><a href="<?php echo base_url();?>Admin_controller/setting_about_us"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;About Us</a></li>
                 
                </ul>
              </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>Admin_controller/view_home_content"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View Home Content</a></li>
                  <li><a href="<?php echo base_url();?>Admin_controller/view_about_us"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View About Us</a></li>
                 
                </ul>
              </li>

          <li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;View Site</a></li>
          <li><a href="<?php echo base_url();?>User_login_controller/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
          
        </ul>
        
       
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
		
		  <br /><br />

    < <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>Update About Us</h2>
          <hr />
          
          <form class="form-horizontal" method="post" action="<?php echo base_url();?>Admin_controller/update_home">
            <div class="form-group">
              <label class="control-label col-sm-2" for="title" >Title:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $edithomecontent->title ;?>">
                <input type="hidden" class="form-control" name="home_id" value="<?php echo $edithomecontent->home_id ;?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="content">About Us Content:</label>
              <div class="col-sm-10">
                <textarea class="form-control"  name="content" rows="3" id="content" > <?php echo $edithomecontent->content ;?> </textarea>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-primary">Update</button>
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