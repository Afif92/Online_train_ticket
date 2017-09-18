<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
    <a class="brand" href="#">
  
</a>
      



<div class="nav-collapse">
            <ul class="nav">
            <li class="divider-vertical"></li>
              <li><a href="home.php"><i class="icon-home icon-white" id="k-menu-icon"></i> Home</a></li>
              
			  <?php if(isset($_SESSION['user'])) { ?>
              <li class="divider-vertical"></li>
			  <li><a href="select.php"><i class="icon-wrench icon-white" id="k-menu-icon"></i> Book Ticket</a></li>
              <?php } ?>
			  
			  <?php if(isset($_SESSION['user'])) { ?>
              <li class="divider-vertical"></li>
			  <li><a href="show_booked1.php"><i class="icon-wrench icon-white" id="k-menu-icon"></i> Show My Ticket</a></li>
              <?php } ?>
              
              
			  <?php if(!isset($_SESSION['user'])) { ?>
               <li class="divider-vertical"></li>
			   <li><a href="sign_up.php"><i class="icon-user icon-white" id="k-menu-icon"></i> Register</a></li>
              <?php } ?>
              
			  <?php if(!isset($_SESSION['user'])) { ?>
              <li class="divider-vertical"></li>
			   <li><a href="login.php"><i class="icon-user icon-white" id="k-menu-icon"></i> login</a></li>
              <?php } ?>
			  
			  <li class="divider-vertical"></li>
			  
			   <li><a href="tp.html"><i class="icon-user icon-white" id="k-menu-icon"></i>Ticket Prices</a></li>
			   
              <li class="divider-vertical"></li>
			  
			   <li><a href="about_us.php"><i class="icon-user icon-white" id="k-menu-icon"></i>About us</a></li>
              <li class="divider-vertical"></li>
              <?php if(isset($_SESSION['user'])) { ?>
              <li><a href="logout.php"><i class="icon-user icon-white" id="k-menu-icon"></i> Log out</a></li>
              <li class="divider-vertical"></li>
              <?php } ?>
			  
            </ul>
          </div><!--/.nav-collapse --> 
</div>
</div>
</div>