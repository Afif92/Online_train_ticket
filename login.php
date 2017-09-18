<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>

<title>Login</title>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.css" />
</head>
<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
<?php include 'navbar_fragment.php'; ?>

<center><h3>User Login</h3></center>
<hr />
<?php if(isset($_SESSION['user'])) { ?>
<p>Already logged in!</p>
<?php
}
else
{
	?> 

<table width="200" border="0" align="center">
<form id="form1" name="form1" method="post" action="login_script.php">
<tr>
<td>UserName:</td>
<td>
<input type="text" name="txtUser" required 1 id="txtUser" />
 
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="txtPassword" required 1 id="txtPassword" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="btnLogin" id="btnLogin" value="Login" class="btn"/>
 
</td>
</tr>
</form>
</table>

<?php
}
?>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>