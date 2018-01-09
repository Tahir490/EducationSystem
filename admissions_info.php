<?php
session_start();
if(!$_SESSION['email']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Education System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" name="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
	<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="admissions_info.js"></script>
	<link href="admin.css" rel="stylesheet" type="text/css" />
	<link href="admissions_info.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse" navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SCHOOL MANAGEMENT SYSTEM</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
	  
        <li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Change your password</a></li>
            
            <li><a href="contact.php">Help</a></li> 
          </ul>
		<li><a href="index.php"><span class="glyphicon glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="logout_user.php"><span class="glyphicon glyphicon glyphicon-off"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

	
	<h1 class="heading3">Admission Notice</h1>
	<div class="right">
	<h4>
  <p>1. Read the instructions very carefully</p>
  <p>2. Fill out the form carefully and according to the given instructions</p>
  <p>3. No more than one form is acceptable for one discipline</p>
  <p>4. Use separate form for separate discipline</p>
  <p>5. In case of any assistance, please contact to the concerned authorities</p> 
  </h4>
	</div>
	
	<div id="dropdown2" class="dropdown">
			 <button class="btn btn-danger btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Select your desired discipline here<span class="caret"></span>
			 </button>
			 <ul class="dropdown-menu" >
			 	<li ><a href="mcs_form.php" >MCS</a></li>
				<li ><a href="cs_form.php" >BSCS</a></li>
				<li ><a href="it_form.php">BSIT</a></li>
			 </ul>
			 </div>
				
		
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>

	
	
	