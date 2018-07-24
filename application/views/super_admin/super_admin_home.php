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

          <li><a href="<?php echo base_url();?>welcome/registration.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;View Site</a></li>
          <li><a href="<?php echo base_url();?>User_login_controller/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
          
        </ul>
        
       
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
		
		  <br /><br />
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <div class="alert alert-success">
          <h4>welcome 
            <?php echo $this->session->userdata('firstname'); ?>
            <?php echo $this->session->userdata('middlename'); ?>
            <?php echo $this->session->userdata('lastname'); ?>

          </h4>
        </div>
      </div>
    </div>
    
     <div class="container">
      <!-- Example row of columns -->
      <h3>All user Information:total user <?php echo count ($alluseradmin); ?></h3>
      <div class="row">
        
        <div class="col-md-8">
          <table border="1" class="table table-hover">
              <tr class="success">
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th>User Status</th>
                  <th>Action</th>

              </tr>
              <?php 
                foreach ($alluseradmin as $value) {
                  
              ?>
               <tr>
                  <td><?php echo $value->firstname ;?>&nbsp<?php echo $value->middlename ;?>&nbsp<?php echo $value->lastname ;?></td>
                  <td><?php echo $value->email ;?></td>
                  <td><?php echo $value->type ;?></td>
                  <td>
                      <?php if($value->status == 1){ ?>

                      <div class="label label-success">
                          <strong>Active</stromg>
                      </div>

                       <?php }elseif($value->status == 0){ ?>

                        <div class="label label-success">
                          <strong>Inactive</stromg>
                      </div>

                      <?php } ?>
                  </td>
                  <td><a href="<?php echo base_url();?>super_admin/edit_post_information/<?php echo $value->user_id ;?>">Edit</a></td>
                  
              </tr>
              <?php } ?>
          </table><br><br><br><br><br>
          <h1>Delete User Post</h1>
           <div class="col-md-12">
          <table border="1" class="table table-hover">
              <tr class="success">
                  <th>title</th>
                  <th>price</th>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>image</th>
                  <th>action</th>
              </tr>
              <?php 
                foreach ($show_post as $value) {
                  
              ?>
               <tr>
                  <td><?php echo $value->title ;?></td>
                  <td><?php echo $value->price ;?></td>
                  <td><?php echo $value->name ;?></td>
                  <td><?php echo $value->email ;?></td>
                  <td><?php echo $value->phone ;?></td>
                  <td><img src="<?php echo base_url();?><?php echo $value->image ;?>" height="100" width="100"></td>
                  <td><a href="<?php echo base_url();?>super_admin/deleteuserpostinfo/<?php echo $value->user_id ;?>">Delete</a></td>
              </tr>
              <?php } ?>
          </table>
       </div>
      </div>

      <hr>
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