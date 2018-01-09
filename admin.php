<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>

<!DOCTYPE html>
<head>
<title>Education System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" name="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript"src="admin.js" ></script>
<link href="admin.css" rel="stylesheet" type="text/css" />


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADMIN PANEL</a>
    </div>
    <div>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="user_msgs.php"><span class="glyphicon glyphicon glyphicon-comment"></span> View Messages</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon glyphicon-home"></span> Home Page</a></li>
          </ul>
        <li><a href="logout.php"><span class="glyphicon glyphicon glyphicon-off"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
		<div class="well">
		
		<div class="responsive-table">
		<table class="table table-bordered">
		<tr class="danger">
		<th><h1>Students</h1></th>
		<th><h1>Courses</h1></th>
		<th><h1>Faculty</h1></th>
		<th><h1>Employees</h1></th>
		</tr>
	<tr class="danger">
	<td>
		<div class="dropdown">
			 <button class="btn btn-success btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 MCS <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
				<li class="dropdown-header"><b>Insert Students</b></li>
			 	<li><a href="#mcs_morning" data-toggle="modal">MCS MORNING</a></li>
				<li><a href="#mcs_evening_A" data-toggle="modal">MCS EVENING A</a></li>
				<li><a href="#mcs_evening_B" data-toggle="modal">MCS EVENING B</a></li>
				<li><a href="#mcs_weekend" data-toggle="modal">MCS WEEKEND</a></li>
				<li class="divider"></li>
				<li class="dropdown-header"><b>View Students</b></li>
				<li><a href="mcs_morn.php" >MCS MORNING</a></li>
				<li><a href="mcs_eve_a.php">MCS EVENING A</a></li>
				<li><a href="mcs_eve_b.php">MCS EVENING B</a></li>
				<li><a href="mcs_weekend.php">MCS WEEKEND</a></li>
				<li><a href="mcs_admission.php">MCS ADMISSIONS</a></li>
			</ul>
		</div>
	</td>
	<td>
			<div class="dropdown">
		 <button class="btn btn-success btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 MCS <span class="caret"></span></button>
			 <ul class="dropdown-menu">
			 <li><a href="#mcs_course" data-toggle="modal">Insert Courses</a></li>
			 <li class="divider"></li>
			 <li><a href="mcs_course.php" >View Courses</a></li>
			 </ul>
			 </div>
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-success btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 PERMANENT <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#per_fec" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="per_fec.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-success btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 ACADEMIC <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#acad_emp" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="acad_emp.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	</tr>
			 <br />
	<tr class="danger">
	<td>
			 <div class="dropdown">
			 <button class="btn btn-danger btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 BSCS <span class="caret"></span>
			 </button>
			 <ul class="dropdown-menu">
			 <li class="dropdown-header"><b>Insert Students</b></li>
			 	<li><a href="#cs_morning" data-toggle="modal">BSCS MORNING</a></li>
				<li><a href="#cs_evening_A" data-toggle="modal">BSCS EVENING A</a></li>
			 	<li><a href="#cs_evening_B" data-toggle="modal">BSCS EVENING B</a></li>
				<li><a href="#cs_weekend" data-toggle="modal">BSCS WEEKEND</a></li>
				<li class="divider"></li>
				<li class="dropdown-header"><b>View Students</b></li>
				<li><a href="cs_morn.php" >BSCS MORNING</a></li>
				<li><a href="cs_eve_a.php">BSCS EVENING A</a></li>
				<li><a href="cs_eve_b.php">BSCS EVENING B</a></li>
				<li><a href="cs_weekend.php">BSCS WEEKEND</a></li>
				<li><a href="bscs_admission.php">BSCS ADMISSIONS</a></li>
			 </ul>
			 </div>
	</td>
	<td>
		
			 <div class="dropdown">
		 <button class="btn btn-danger btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 BSCS <span class="caret"></span></button>
			 <ul class="dropdown-menu">
			 <li><a href="#cs_course" data-toggle="modal">Insert Courses</a></li>
			 <li class="divider"></li>
			 <li><a href="cs_course.php" >View Courses</a></li>
			 </ul>
			 </div>
			 
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-danger btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 VISITING <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#vis_fec" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="vis_fec.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-danger btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 ADMINISTRATIVE <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#admin_emp" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="admin_emp.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	</tr>
			 <br />
	<tr class="danger">
	<td>
			 <div class="dropdown">
			 <button class="btn btn-primary btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 BSIT <span class="caret"></span>
			 </button>
			 <ul class="dropdown-menu">
			 <li class="dropdown-header"><b>Insert Students</b></li>
			 	<li><a href="#it_morning" data-toggle="modal">BSIT MORNING</a></li>
				<li><a href="#it_evening_A" data-toggle="modal">BSIT EVENING A</a></li>
			 	<li><a href="#it_evening_B" data-toggle="modal">BSIT EVENING B</a></li>
				<li><a href="#it_weekend" data-toggle="modal">BSIT Weekend</a></li>
				<li class="divider"></li>
				<li class="dropdown-header"><b>View Students</b></li>
				<li><a href="it_morn.php" >BSIT MORNING</a></li>
				<li><a href="it_eve_a.php">BSIT EVENING A</a></li>
				<li><a href="it_eve_b.php">BSIT EVENING B</a></li>
				<li><a href="it_weekend.php">BSIT Weekend</a></li>
				<li><a href="bsit_admissions.php">BSIT ADMISSIONS</a></li>
			 </ul>
			
			 </div>
	</td>
	<td>
		
			 <div class="dropdown">
		 <button class="btn btn-primary btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 BSIT <span class="caret"></span></button>
			 <ul class="dropdown-menu">
			 <li><a href="#it_course" data-toggle="modal">Insert Courses</a></li>
			 <li class="divider"></li>
			 <li><a href="it_course.php" >View Courses</a></li>
			 </ul>
			 </div>
			 
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-primary btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 INTERNS <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#int_fec" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="int_fec.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	<td>
			<div class="dropdown">
			 <button class="btn btn-primary btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">
			 CLERICAL <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 <li><a href="#cler_emp" data-toggle="modal">Insert</a></li>
			 <li class="divider"></li>
			 <li><a href="clerk_emp.php" >View</a></li>
			 </ul>
			 </div>
	</td>
	</tr>
	 </table>
	 
		</div>
		</div>
		</div>
		
		
		
		
<div class="modal fade" id="mcs_morning" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		
		<form method="post" action="" enctype="multipart/form-data">
		<center>
			<div><h2 class="heading">MCS MORNING</h2></div>
		</center>
  <div class="form-group">
    <label for="name">Student Name:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno">Roll No:</label>
    <input type="text" name="roll" class="form-control" id="rollno" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="img">Student Picture:</label>
    <input type="file" name="image" class="form-control" id="img"  required>
	
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" name="cnic" class="form-control" id="cnic" placeholder="Example:00000-0000000-0" maxlength="15" required>
  </div>
  <div class="form-group">
    <label for="add">Address:</label>
    <input type="text" name="add" class="form-control" id="add" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct">Contact:</label>
    <input type="text" name="cntct" class="form-control" id="cntct" placeholder="Example:068-1234567 or 0300-1234567" maxlength="12"required>
  </div>
  <div class="form-group">
    <label for="session">Session:</label>
    <input type="text" name="session" class="form-control" id="session" placeholder="Example:2011-2015" maxlength="9" required>
  </div>
  <div class="form-group">
    <label for="fname">Father Name:</label>
    <input type="text" name="fname" class="form-control" id="fname" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct">Father Contact:</label>
    <input type="text" name="fcntct" class="form-control" id="fcntct" placeholder="Example:068-1234567 or 0300-1234567" maxlength="9" required>
  </div>
  <div class="form-group">
    <label for="nat">Nationality:</label>
    <input type="text" name="nat" class="form-control" id="nat" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig">Religion:</label>
    <input type="text" name="relig" class="form-control" id="relig" placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="mcs_evening_A" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">MCS EVENING A</h2></div>
		</center>
  <div class="form-group">
    <label for="name1">Student Name:</label>
    <input type="text" class="form-control" name="name1" id="name1" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno1">Roll No:</label>
    <input type="text" name="roll1" class="form-control" id="rollno1" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic1">CNIC:</label>
    <input type="text" name="cnic1" class="form-control" id="cnic1" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add1">Address:</label>
    <input type="text" name="add1" class="form-control" id="add1" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct1">Contact:</label>
    <input type="text" name="cntct1" class="form-control" id="cntct1" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session1">Session:</label>
    <input type="text" name="session1" class="form-control" maxlength="9" id="session1" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname1">Father Name:</label>
    <input type="text" name="fname1" class="form-control" id="fname1" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct1">Father Contact:</label>
    <input type="text" name="fcntct1" class="form-control" id="fcntct1" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
   <div class="form-group">
    <label for="nat1">Nationality:</label>
    <input type="text" name="nat1" class="form-control" id="nat1" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig1">Religion:</label>
    <input type="text" name="relig1" class="form-control" id="relig1"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn1" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="mcs_evening_B" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">MCS EVENING B</h2></div>
		</center>
  <div class="form-group">
    <label for="name2">Student Name:</label>
    <input type="text" class="form-control" name="name2" id="name2" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno2">Roll No:</label>
    <input type="text" name="roll2" class="form-control" id="rollno2" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic2">CNIC:</label>
    <input type="text" name="cnic2" class="form-control" id="cnic2" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add2">Address:</label>
    <input type="text" name="add2" class="form-control" id="add2" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct2">Contact:</label>
    <input type="text" name="cntct2" class="form-control" id="cntct2" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
   <div class="form-group">
    <label for="session2">Session:</label>
    <input type="text" name="session2" class="form-control" id="session2" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname2">Father Name:</label>
    <input type="text" name="fname2" class="form-control" id="fname2" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct2">Father Contact:</label>
    <input type="text" name="fcntct2" class="form-control" id="fcntct2" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat2">Nationality:</label>
    <input type="text" name="nat2" class="form-control" id="nat2" placeholder="Example:Pakistani" required>
  </div>
   <div class="form-group">
    <label for="relig2">Religion:</label>
    <input type="text" name="relig2" class="form-control" id="relig2"  placeholder="Example:Islam" required>
  </div>
  <button type="submit" name="btn2" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="mcs_weekend" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">MCS WEEKEND</h2></div>
		</center>
  <div class="form-group">
    <label for="name3">Student Name:</label>
    <input type="text" class="form-control" name="name3" id="name3" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno3">Roll No:</label>
    <input type="text" name="roll3" class="form-control" id="rollno3" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic3">CNIC:</label>
    <input type="text" name="cnic3" class="form-control" id="cnic3" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add3">Address:</label>
    <input type="text" name="add3" class="form-control" id="add3" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct3">Contact:</label>
    <input type="text" name="cntct3" class="form-control" id="cntct3" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session3">Session:</label>
    <input type="text" name="session3" class="form-control" id="session3" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname3">Father Name:</label>
    <input type="text" name="fname3" class="form-control" id="fname3" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct3">Father Contact:</label>
    <input type="text" name="fcntct3" class="form-control" id="fcntct3" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat3">Nationality:</label>
    <input type="text" name="nat3" class="form-control" id="nat3" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig3">Religion:</label>
    <input type="text" name="relig3" class="form-control" id="relig3"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn3" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cs_morning" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">BSCS MORNING</h2></div>
		</center>
  <div class="form-group">
    <label for="name11">Student Name:</label>
    <input type="text" class="form-control" name="name11" id="name11" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno11">Roll No:</label>
    <input type="text" name="roll11" class="form-control" id="rollno11" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic11">CNIC:</label>
    <input type="text" name="cnic11" class="form-control" id="cnic11" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add11">Address:</label>
    <input type="text" name="add11" class="form-control" id="add11" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct11">Contact:</label>
    <input type="text" name="cntct11" class="form-control" id="cntct11" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session11">Session:</label>
    <input type="text" name="session11" class="form-control" id="session11" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname11">Father Name:</label>
    <input type="text" name="fname11" class="form-control" id="fname11" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct11">Father Contact:</label>
    <input type="text" name="fcntct11" class="form-control" id="fcntct11" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat11">Nationality:</label>
    <input type="text" name="nat11" class="form-control" id="nat11" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig11">Religion:</label>
    <input type="text" name="relig11" class="form-control" id="relig11"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn11" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cs_evening_A" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">BSCS EVENING A</h2></div>
		</center>
  <div class="form-group">
    <label for="name12">Student Name:</label>
    <input type="text" class="form-control" name="name12" id="name12" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno12">Roll No:</label>
    <input type="text" name="roll12" class="form-control" id="rollno12" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic12">CNIC:</label>
    <input type="text" name="cnic12" class="form-control" id="cnic12" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add12">Address:</label>
    <input type="text" name="add12" class="form-control" id="add12" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct12">Contact:</label>
    <input type="text" name="cntct12" class="form-control" id="cntct12" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session12">Session:</label>
    <input type="text" name="session12" class="form-control" id="session12" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname12">Father Name:</label>
    <input type="text" name="fname12" class="form-control" id="fname12" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct12">Father Contact:</label>
    <input type="text" name="fcntct12" class="form-control" id="fcntct12" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat12">Nationality:</label>
    <input type="text" name="nat12" class="form-control" id="nat12" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig12">Religion:</label>
    <input type="text" name="relig12" class="form-control" id="relig12"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn12" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cs_evening_B" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">BSCS EVENING B</h2></div>
		</center>
  <div class="form-group">
    <label for="name13">Student Name:</label>
    <input type="text" class="form-control" name="name13" id="name13" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno13">Roll No:</label>
    <input type="text" name="roll13" class="form-control" id="rollno13" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic13">CNIC:</label>
    <input type="text" name="cnic13" class="form-control" id="cnic13" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add13">Address:</label>
    <input type="text" name="add13" class="form-control" id="add13" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct13">Contact:</label>
    <input type="text" name="cntct13" class="form-control" id="cntct13" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session13">Session:</label>
    <input type="text" name="session13" class="form-control" id="session13" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname13">Father Name:</label>
    <input type="text" name="fname13" class="form-control" id="fname13" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct13">Father Contact:</label>
    <input type="text" name="fcntct13" class="form-control" id="fcntct13" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat13">Nationality:</label>
    <input type="text" name="nat13" class="form-control" id="nat13" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig13">Religion:</label>
    <input type="text" name="relig13" class="form-control" id="relig13"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn13" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cs_weekend" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">BSCS WEEKEND</h2></div>
		</center>
  <div class="form-group">
    <label for="name14">Student Name:</label>
    <input type="text" class="form-control" name="name14" id="name14" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno14">Roll No:</label>
    <input type="text" name="roll14" class="form-control" id="rollno14" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic14">CNIC:</label>
    <input type="text" name="cnic14" class="form-control" id="cnic14" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add14">Address:</label>
    <input type="text" name="add14" class="form-control" id="add14" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct14">Contact:</label>
    <input type="text" name="cntct14" class="form-control" id="cntct14" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session14">Session:</label>
    <input type="text" name="session14" class="form-control" id="session14" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname14">Father Name:</label>
    <input type="text" name="fname14" class="form-control" id="fname14" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct14">Father Contact:</label>
    <input type="text" name="fcntct14" class="form-control" id="fcntct14" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat14">Nationality:</label>
    <input type="text" name="nat14" class="form-control" id="nat14" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig14">Religion:</label>
    <input type="text" name="relig14" class="form-control" id="relig14"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn14" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="it_morning" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT MORNING</h2></div>
		</center>
  <div class="form-group">
    <label for="name21">Student Name:</label>
    <input type="text" class="form-control" name="name21" id="name21" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno21">Roll No:</label>
    <input type="text" name="roll21" class="form-control" id="rollno21" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic21">CNIC:</label>
    <input type="text" name="cnic21" class="form-control" id="cnic21" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add21">Address:</label>
    <input type="text" name="add21" class="form-control" id="add21" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct21">Contact:</label>
    <input type="text" name="cntct21" class="form-control" id="cntct21" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session21">Session:</label>
    <input type="text" name="session21" class="form-control" id="session21" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname21">Father Name:</label>
    <input type="text" name="fname21" class="form-control" id="fname21" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct21">Father Contact:</label>
    <input type="text" name="fcntct21" class="form-control" id="fcntct21" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat21">Nationality:</label>
    <input type="text" name="nat21" class="form-control" id="nat21" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig21">Religion:</label>
    <input type="text" name="relig21" class="form-control" id="relig21" placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn21" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="it_evening_A" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT EVENING A</h2></div>
		</center>
  <div class="form-group">
    <label for="name22">Student Name:</label>
    <input type="text" class="form-control" name="name22" id="name22" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno22">Roll No:</label>
    <input type="text" name="roll22" class="form-control" id="rollno22" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic22">CNIC:</label>
    <input type="text" name="cnic22" class="form-control" id="cnic22" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add22">Address:</label>
    <input type="text" name="add22" class="form-control" id="add22" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct22">Contact:</label>
    <input type="text" name="cntct22" class="form-control" id="cntct22" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session22">Session:</label>
    <input type="text" name="session22" class="form-control" id="session22" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname22">Father Name:</label>
    <input type="text" name="fname22" class="form-control" id="fname22" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct22">Father Contact:</label>
    <input type="text" name="fcntct22" class="form-control" id="fcntct22" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat22">Nationality:</label>
    <input type="text" name="nat22" class="form-control" id="nat22" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig22">Religion:</label>
    <input type="text" name="relig22" class="form-control" id="relig22"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn22" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="it_evening_B" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT EVENING B</h2></div>
		</center>
  <div class="form-group">
    <label for="name23">Student Name:</label>
    <input type="text" class="form-control" name="name23" id="name23" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno23">Roll No:</label>
    <input type="text" name="roll23" class="form-control" id="rollno23" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic23">CNIC:</label>
    <input type="text" name="cnic23" class="form-control" id="cnic23" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add23">Address:</label>
    <input type="text" name="add23" class="form-control" id="add23" placeholder="Type Here" required>
  </div>
  <div class="form-group">
    <label for="cntct23">Contact:</label>
    <input type="text" name="cntct23" class="form-control" id="cntct23" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session23">Session:</label>
    <input type="text" name="session23" class="form-control" id="session23" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname23">Father Name:</label>
    <input type="text" name="fname23" class="form-control" id="fname23" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct23">Father Contact:</label>
    <input type="text" name="fcntct23" class="form-control" id="fcntct23" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat23">Nationality:</label>
    <input type="text" name="nat23" class="form-control" id="nat23" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig23">Religion:</label>
    <input type="text" name="relig23" class="form-control" id="relig23"  placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn23" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="it_weekend" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT WEEKEND</h2></div>
		</center>
  <div class="form-group">
    <label for="name24">Student Name:</label>
    <input type="text" class="form-control" name="name24" id="name24" placeholder="Example:Tahir Jutt" required>
  </div>
  <div class="form-group">
    <label for="rollno24">Roll No:</label>
    <input type="text" name="roll24" class="form-control" id="rollno24" placeholder="Example:473" required>
  </div>
  <div class="form-group">
    <label for="cnic24">CNIC:</label>
    <input type="text" name="cnic24" class="form-control" id="cnic24" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="add24">Address:</label>
    <input type="text" name="add24" class="form-control" id="add24" placeholder="Type Here">
  </div>
  <div class="form-group">
    <label for="cntct24">Contact:</label>
    <input type="text" name="cntct24" class="form-control" id="cntct24" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="session24">Session:</label>
    <input type="text" name="session24" class="form-control" id="session24" maxlength="9" placeholder="Example:2011" required>
  </div>
  <div class="form-group">
    <label for="fname24">Father Name:</label>
    <input type="text" name="fname24" class="form-control" id="fname24" placeholder="Example:Faqeer Muhammad" required>
  </div>
  <div class="form-group">
    <label for="fcntct24">Father Contact:</label>
    <input type="text" name="fcntct24" class="form-control" id="fcntct24" maxlength="12" placeholder="Example:068-1234567 or 0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="nat24">Nationality:</label>
    <input type="text" name="nat24" class="form-control" id="nat24" placeholder="Example:Pakistani" required>
  </div>
  <div class="form-group">
    <label for="relig24">Religion:</label>
    <input type="text" name="relig24" class="form-control" id="relig24" placeholder="Example:Islam" required>
  </div>
  
  <button type="submit" name="btn24" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="mcs_course" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">MCS COURSES</h2></div>
		</center>
  <div class="form-group">
    <label for="mcs_c_id">Course ID:</label>
    <input type="text" class="form-control" name="mcs_c_id" id="mcs_c_id" placeholder="Example:Course-12345" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_name">Course Name:</label>
    <input type="text" name="mcs_c_name" class="form-control" id="mcs_c_name" placeholder="Example:Web Designing" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_time">Delivering Time:</label>
    <input type="text" name="mcs_c_time" class="form-control" id="mcs_c_time" placeholder="Example:10:00 am" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_date">Delivering Date:</label>
    <input type="text" name="mcs_c_date" class="form-control" id="mcs_c_date" placeholder="Example:12/09/15" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_duration">Duration of Course:</label>
    <input type="text" name="mcs_c_duration" class="form-control" id="mcs_c_duration" placeholder="Example:6 Months" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_fee">Fee of Course:</label>
    <input type="text" name="mcs_c_fee" class="form-control" id="mcs_c_fee" placeholder="Example:Rs.6,000" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_instructor">Course Instructor:</label>
    <input type="text" name="mcs_c_instructor" class="form-control" id="mcs_c_instructor" placeholder="Example:Sir Haroon " required>
  </div>
  <div class="form-group">
    <label for="mcs_c_room">Room for Delivering Course:</label>
    <input type="text" name="mcs_c_room" class="form-control" id="mcs_c_room" placeholder="Example:Unix Lab" required>
  </div>
  <div class="form-group">
    <label for="mcs_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="mcs_c_lectures" class="form-control" id="mcs_c_lectures" placeholder="Example:32 Lectures" required>
  </div>
  
  
  <button type="submit" name="mcs_c_btn" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cs_course" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">BSCS COURSES</h2></div>
		</center>
  <div class="form-group">
    <label for="cs_c_id">Course ID:</label>
    <input type="text" class="form-control" name="cs_c_id" id="cs_c_id" placeholder="Example:Course-12345" required>
  </div>
  <div class="form-group">
    <label for="cs_c_name">Course Name:</label>
    <input type="text" name="cs_c_name" class="form-control" id="cs_c_name" placeholder="Example:Web Designing" required>
  </div>
  <div class="form-group">
    <label for="cs_c_time">Delivering Time:</label>
    <input type="text" name="cs_c_time" class="form-control" id="cs_c_time" placeholder="Example:10:00 am" required>
  </div>
  <div class="form-group">
    <label for="cs_c_date">Delivering Date:</label>
    <input type="text" name="cs_c_date" class="form-control" id="cs_c_date" placeholder="Example:12/09/15" required>
  </div>
  <div class="form-group">
    <label for="cs_c_duration">Duration of Course:</label>
    <input type="text" name="cs_c_duration" class="form-control" id="cs_c_duration" placeholder="Example:6 Months" required>
  </div>
  <div class="form-group">
    <label for="cs_c_fee">Fee of Course:</label>
    <input type="text" name="cs_c_fee" class="form-control" id="cs_c_fee" placeholder="Example:Rs.6,000" required>
  </div>
  <div class="form-group">
    <label for="cs_c_instructor">Course Instructor:</label>
    <input type="text" name="cs_c_instructor" class="form-control" id="cs_c_instructor" placeholder="Example:Sir Haroon " required>
  </div>
  <div class="form-group">
    <label for="cs_c_room">Room for Delivering Course:</label>
    <input type="text" name="cs_c_room" class="form-control" id="cs_c_room" placeholder="Example:Unix Lab" required>
  </div>
  <div class="form-group">
    <label for="cs_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="cs_c_lectures" class="form-control" id="cs_c_lectures" placeholder="Example:32 Lectures" required>
  </div>
  
  
  <button type="submit" name="cs_c_btn" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="it_course" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT COURSES</h2></div>
		</center>
  <div class="form-group">
    <label for="it_c_id">Course ID:</label>
    <input type="text" class="form-control" name="it_c_id" id="it_c_id" placeholder="Example:Course-12345" required>
  </div>
  <div class="form-group">
    <label for="it_c_name">Course Name:</label>
    <input type="text" name="it_c_name" class="form-control" id="it_c_name" placeholder="Example:Web Designing" required>
  </div>
  <div class="form-group">
    <label for="it_c_time">Delivering Time:</label>
    <input type="text" name="it_c_time" class="form-control" id="it_c_time" placeholder="Example:10:00 am" required>
  </div>
  <div class="form-group">
    <label for="it_c_date">Delivering Date:</label>
    <input type="text" name="it_c_date" class="form-control" id="it_c_date" placeholder="Example:12/09/15">
  </div>
  <div class="form-group">
    <label for="it_c_duration">Duration of Course:</label>
    <input type="text" name="it_c_duration" class="form-control" id="it_c_duration" placeholder="Example:6 Months" required>
  </div>
  <div class="form-group">
    <label for="it_c_fee">Fee of Course:</label>
    <input type="text" name="it_c_fee" class="form-control" id="it_c_fee" placeholder="Example:Rs.6,000" required>
  </div>
  <div class="form-group">
    <label for="it_c_instructor">Course Instructor:</label>
    <input type="text" name="it_c_instructor" class="form-control" id="it_c_instructor" placeholder="Example:Sir Haroon " required>
  </div>
  <div class="form-group">
    <label for="it_c_room">Room for Delivering Course:</label>
    <input type="text" name="it_c_room" class="form-control" id="it_c_room" placeholder="Example:Unix Lab" required>
  </div>
  <div class="form-group">
    <label for="it_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="it_c_lectures" class="form-control" id="it_c_lectures" placeholder="Example:32 Lectures" required>
  </div>
  
  
  <button type="submit" name="it_c_btn" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="per_fec" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">PERMANENT FECULTY</h2></div>
		</center>
  <div class="form-group">
    <label for="per_f_name">Teacher Name:</label>
    <input type="text" name="per_f_name" class="form-control" id="per_f_name" placeholder="Example:Sir Haroon" required>
  </div>
  <div class="form-group">
    <label for="per_f_cnic">CNIC:</label>
    <input type="text" class="form-control" name="per_f_cnic" id="per_f_cnic" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="per_f_address">Address:</label>
    <input type="text" name="per_f_address" class="form-control" id="per_f_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="per_f_cntct">Contact:</label>
    <input type="text" name="per_f_cntct" class="form-control" id="per_f_cntct" maxlength="12" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="per_f_email">Email:</label>
    <input type="text" name="per_f_email" class="form-control" id="per_f_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="per_f_quali">Qualification:</label>
    <input type="text" name="per_f_quali" class="form-control" id="per_f_quali" placeholder="Example:Masters in Telecommunication" required>
  </div>
  <div class="form-group">
    <label for="per_f_relig">Religion:</label>
    <input type="text" name="per_f_relig" class="form-control" id="per_f_relig" placeholder="Example:Islam " required>
  </div>
  <div class="form-group">
    <label for="per_f_nat">Nationality:</label>
    <input type="text" name="per_f_nat" class="form-control" id="per_f_nat" placeholder="Example:Pakistan" required>
  </div>
  <div class="form-group">
    <label for="per_f_join">Joining Date:</label>
    <input type="text" name="per_f_join" class="form-control" id="per_f_join" placeholder="Example:12/2/2010" required>
  </div>
  <div class="form-group">
    <label for="per_f_sal">Salary:</label>
    <input type="text" name="per_f_sal" class="form-control" id="per_f_sal" placeholder="Example:32 Lectures" required>
  </div>
  <div class="form-group">
    <label for="per_f_post">Post:</label>
    <input type="text" name="per_f_post" class="form-control" id="per_f_post" placeholder="Example:Assisstent lecturer" required>
  </div>
  
  
  <button type="submit" name="per_f_btn" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="vis_fec" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">VISITING FECULTY</h2></div>
		</center>
  <div class="form-group">
    <label for="vis_f_name">Teacher Name:</label>
    <input type="text" name="vis_f_name" class="form-control" id="vis_f_name" placeholder="Example:Sir Haroon" required>
  </div>
  <div class="form-group">
    <label for="vis_f_cnic">CNIC:</label>
    <input type="text" class="form-control" name="vis_f_cnic" id="vis_f_cnic" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="vis_f_address">Address:</label>
    <input type="text" name="vis_f_address" class="form-control" id="vis_f_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="vis_f_cntct">Contact:</label>
    <input type="text" name="vis_f_cntct" class="form-control" id="vis_f_cntct" maxlength="12" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="vis_f_email">Email:</label>
    <input type="text" name="vis_f_email" class="form-control" id="vis_f_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="vis_f_quali">Qualification:</label>
    <input type="text" name="vis_f_quali" class="form-control" id="vis_f_quali" placeholder="Example:Masters in Telecommunication" required>
  </div>
  <div class="form-group">
    <label for="vis_f_relig">Religion:</label>
    <input type="text" name="vis_f_relig" class="form-control" id="vis_f_relig" placeholder="Example:Islam " required>
  </div>
  <div class="form-group">
    <label for="vis_f_nat">Nationality:</label>
    <input type="text" name="vis_f_nat" class="form-control" id="vis_f_nat" placeholder="Example:Pakistan" required>
  </div>
  <div class="form-group">
    <label for="vis_f_join">Joining Date:</label>
    <input type="text" name="vis_f_join" class="form-control" id="vis_f_join" placeholder="Example:12/2/2010" required>
  </div>
  <div class="form-group">
    <label for="vis_f_sal">Salary:</label>
    <input type="text" name="vis_f_sal" class="form-control" id="vis_f_sal" placeholder="Example:32 Lectures" required>
  </div>
  <div class="form-group">
    <label for="vis_f_post">Post:</label>
    <input type="text" name="vis_f_post" class="form-control" id="vis_f_post" placeholder="Example:Assisstent lecturer" required>
  </div>
  
  
  <button type="submit" name="vis_f_btn" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="int_fec" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">INTERNS FECULTY</h2></div>
		</center>
  <div class="form-group">
    <label for="int_f_name">Teacher Name:</label>
    <input type="text" name="int_f_name" class="form-control" id="int_f_name" placeholder="Example:Sir Haroon" required>
  </div>
  <div class="form-group">
    <label for="int_f_cnic">CNIC:</label>
    <input type="text" class="form-control" name="int_f_cnic" id="int_f_cnic" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="int_f_address">Address:</label>
    <input type="text" name="int_f_address" class="form-control" id="int_f_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="int_f_cntct">Contact:</label>
    <input type="text" name="int_f_cntct" class="form-control" id="int_f_cntct" maxlength="12" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="int_f_email">Email:</label>
    <input type="text" name="int_f_email" class="form-control" id="int_f_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="int_f_quali">Qualification:</label>
    <input type="text" name="int_f_quali" class="form-control" id="int_f_quali" placeholder="Example:Masters in Telecommunication" required>
  </div>
  <div class="form-group">
    <label for="int_f_relig">Religion:</label>
    <input type="text" name="int_f_relig" class="form-control" id="int_f_relig" placeholder="Example:Islam " required>
  </div>
  <div class="form-group">
    <label for="int_f_nat">Nationality:</label>
    <input type="text" name="int_f_nat" class="form-control" id="int_f_nat" placeholder="Example:Pakistan" required>
  </div>
  <div class="form-group">
    <label for="int_f_join">Joining Date:</label>
    <input type="text" name="int_f_join" class="form-control" id="int_f_join" placeholder="Example:12/2/2010" required>
  </div>
  <div class="form-group">
    <label for="int_f_sal">Salary:</label>
    <input type="text" name="int_f_sal" class="form-control" id="int_f_sal" placeholder="Example:32 Lectures" required>
  </div>
  <div class="form-group">
    <label for="int_f_post">Post:</label>
    <input type="text" name="int_f_post" class="form-control" id="int_f_post" placeholder="Example:Assisstent lecturer" required>
  </div>
  
  
  <button type="submit" name="int_f_btn" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="acad_emp" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">ACADEMIC EMPLOYEES</h2></div>
		</center>
  <div class="form-group">
    <label for="acad_emp_name">Employee Name:</label>
    <input type="text" name="acad_emp_name" class="form-control" id="acad_emp_name" placeholder="Example:Rasheed" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="acad_emp_cnic" id="acad_emp_cnic" maxlength="15" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_address">Address:</label>
    <input type="text" name="acad_emp_address" class="form-control" id="acad_emp_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_cntct">Contact:</label>
    <input type="text" name="acad_emp_cntct" class="form-control" id="acad_emp_cntct" maxlength="12" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_email">Email:</label>
    <input type="text" name="acad_emp_email" class="form-control" id="acad_emp_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_designation">Designation:</label>
    <input type="text" name="acad_emp_designation" class="form-control" id="acad_emp_designation" placeholder="Example:Clerk" required>
  </div>
  
  <div class="form-group">
    <label for="acad_emp_hours">Working Hours:</label>
    <input type="text" name="acad_emp_hours" class="form-control" id="acad_emp_hours" placeholder="Example:8 Hours" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_year">Joining Year:</label>
    <input type="text" name="acad_emp_year" class="form-control" id="acad_emp_year" maxlength="4" placeholder="Example:2010 " required>
  </div>
  <div class="form-group">
    <label for="acad_emp_salary">Salary:</label>
    <input type="text" name="acad_emp_salary" class="form-control" id="acad_emp_salary" placeholder="Example:Rs.10,000" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_religion">Religion:</label>
    <input type="text" name="acad_emp_religion" class="form-control" id="acad_emp_religion" placeholder="Example:Islam" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_nationality">Nationality:</label>
    <input type="text" name="acad_emp_nationality" class="form-control" id="acad_emp_nationality" placeholder="Example:32 Pakistani" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_assisstent">Assisstent to:</label>
    <input type="text" name="acad_emp_assisstent" class="form-control" id="acad_emp_assisstent" placeholder="Example:Dr Dost Muhammad" required>
  </div>
  <div class="form-group">
    <label for="acad_emp_shift">Shift:</label>
    <input type="text" name="acad_emp_shift" class="form-control" id="acad_emp_shift" placeholder="Example:Morning" required> 
  </div>
  
  
  <button type="submit" name="acad_emp_btn" class="btn btn-success">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="admin_emp" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">ADMINISTRATIVE EMPLOYEES</h2></div>
		</center>
  <div class="form-group">
    <label for="admin_emp_name">Employee Name:</label>
    <input type="text" name="admin_emp_name" class="form-control" id="admin_emp_name" placeholder="Example:Rasheed" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="admin_emp_cnic" maxlength="15" id="admin_emp_cnic" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_address">Address:</label>
    <input type="text" name="admin_emp_address" class="form-control" id="admin_emp_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_cntct">Contact:</label>
    <input type="text" name="admin_emp_cntct" class="form-control" maxlength="12" id="admin_emp_cntct" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_email">Email:</label>
    <input type="text" name="admin_emp_email" class="form-control" id="admin_emp_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_designation">Designation:</label>
    <input type="text" name="admin_emp_designation" class="form-control" id="admin_emp_designation" placeholder="Example:Clerk" required>
  </div>
  
  <div class="form-group">
    <label for="admin_emp_hours">Working Hours:</label>
    <input type="text" name="admin_emp_hours" class="form-control" id="admin_emp_hours" placeholder="Example:8 Hours" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_year">Joining Year:</label>
    <input type="text" name="admin_emp_year" class="form-control" maxlength="4" id="admin_emp_year" placeholder="Example:2010 " required>
  </div>
  <div class="form-group">
    <label for="admin_emp_salary">Salary:</label>
    <input type="text" name="admin_emp_salary" class="form-control" id="admin_emp_salary" placeholder="Example:Rs.10,000" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_religion">Religion:</label>
    <input type="text" name="admin_emp_religion" class="form-control" id="admin_emp_religion" placeholder="Example:Islam" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_nationality">Nationality:</label>
    <input type="text" name="admin_emp_nationality" class="form-control" id="admin_emp_nationality" placeholder="Example:32 Pakistani" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_assisstent">Assisstent to:</label>
    <input type="text" name="admin_emp_assisstent" class="form-control" id="admin_emp_assisstent" placeholder="Example:Dr Dost Muhammad" required>
  </div>
  <div class="form-group">
    <label for="admin_emp_shift">Shift:</label>
    <input type="text" name="admin_emp_shift" class="form-control" id="admin_emp_shift" placeholder="Example:Morning" required>
  </div>
  
  
  <button type="submit" name="admin_emp_btn" class="btn btn-danger">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="cler_emp" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">CLERICAL EMPLOYEES</h2></div>
		</center>
  <div class="form-group">
    <label for="cler_emp_name">Employee Name:</label>
    <input type="text" name="cler_emp_name" class="form-control" id="cler_emp_name" placeholder="Example:Rasheed" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="cler_emp_cnic" maxlength="15" id="cler_emp_cnic" placeholder="Example:00000-0000000-0" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_address">Address:</label>
    <input type="text" name="cler_emp_address" class="form-control" id="cler_emp_address" placeholder="Example:Type Here" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_cntct">Contact:</label>
    <input type="text" name="cler_emp_cntct" class="form-control" maxlength="12" id="cler_emp_cntct" placeholder="Example:0300-1234567" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_email">Email:</label>
    <input type="text" name="cler_emp_email" class="form-control" id="cler_emp_email" placeholder="Example:abc123@yahoo.com" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_designation">Designation:</label>
    <input type="text" name="cler_emp_designation" class="form-control" id="cler_emp_designation" placeholder="Example:Clerk" required>
  </div>
  
  <div class="form-group">
    <label for="cler_emp_hours">Working Hours:</label>
    <input type="text" name="cler_emp_hours" class="form-control" id="cler_emp_hours" placeholder="Example:8 Hours" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_year">Joining Year:</label>
    <input type="text" name="cler_emp_year" class="form-control" maxlength="4" id="cler_emp_year" placeholder="Example:2010 " required>
  </div>
  <div class="form-group">
    <label for="cler_emp_salary">Salary:</label>
    <input type="text" name="cler_emp_salary" class="form-control" id="cler_emp_salary" placeholder="Example:Rs.10,000" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_religion">Religion:</label>
    <input type="text" name="cler_emp_religion" class="form-control" id="cler_emp_religion" placeholder="Example:Islam" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_nationality">Nationality:</label>
    <input type="text" name="cler_emp_nationality" class="form-control" id="cler_emp_nationality" placeholder="Example:32 Pakistani" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_assisstent">Assisstent to:</label>
    <input type="text" name="cler_emp_assisstent" class="form-control" id="cler_emp_assisstent" placeholder="Example:Dr Dost Muhammad" required>
  </div>
  <div class="form-group">
    <label for="cler_emp_shift">Shift:</label>
    <input type="text" name="cler_emp_shift" class="form-control" id="cler_emp_shift" placeholder="Example:Morning" required>
  </div>
  
  
  <button type="submit" name="cler_emp_btn" class="btn btn-primary">Insert</button>
</form>
</div>
		</div>
		</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['btn'])){
	
	$name=$_POST['name']; 
	$roll=$_POST['roll'];
	
   if(isset($_FILES['image'])){
      $errors= array();
       function GetImageExtension($imgtype)
 {
	if(empty($imgtype)) return false;
	switch($imgtype)
	{	
	case 'image/bmp': return '.bmp';
	case 'image/gif': return '.gif';
	case 'image/jpeg': return '.jpg';
	case 'image/png': return '.png';
	default: return false;
		}
	}	
	if (!empty($_FILES["image"]["name"])) {
		$file_name=$_FILES["image"]["name"];
		$temp_name=$_FILES["image"]["tmp_name"];
		$imgtype=$_FILES["image"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;
		
   }
   }
	$cnic=$_POST['cnic'];
	$add=$_POST['add'];
	$cntct=$_POST['cntct'];
	$session=$_POST['session'];
	$fname=$_POST['fname'];
	$fcntct=$_POST['fcntct'];
	$nat=$_POST['nat'];
	$relig=$_POST['relig'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$result = mysqli_query($con, "select * from mcs where roll='$roll'"); 
			$row_cnt = mysqli_num_rows($result);
			
		if($row_cnt > 0){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = mysqli_query($con, "insert into mcs (name,roll,std_pic,time,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','".$target_path."','".date("Y-m-d")."','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')");
	//$row1_cnt = mysqli_num_rows($query);
	if(move_uploaded_file($temp_name, $target_path) ) {
		
		
		echo "<script>alert('Data has been inserted...')</script>";	
	} 
	else{
		exit("Error While uploading image on the server");
	}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn1'])){
	$name=$_POST['name1']; 
	$roll=$_POST['roll1']; 
	$cnic=$_POST['cnic1'];
	$add=$_POST['add1'];
	$cntct=$_POST['cntct1'];
	$session=$_POST['session1'];
	$fname=$_POST['fname1'];
	$fcntct=$_POST['fcntct1'];
	$nat=$_POST['nat1'];
	$relig=$_POST['relig1'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_eve_a where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_eve_a (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn2'])){
	$name=$_POST['name2']; 
	$roll=$_POST['roll2']; 
	$cnic=$_POST['cnic2'];
	$add=$_POST['add2'];
	$cntct=$_POST['cntct2'];
	$session=$_POST['session2'];
	$fname=$_POST['fname2'];
	$fcntct=$_POST['fcntct2'];
	$nat=$_POST['nat2'];
	$relig=$_POST['relig2'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_eve_b where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_eve_b (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn3'])){
	$name=$_POST['name3']; 
	$roll=$_POST['roll3']; 
	$cnic=$_POST['cnic3'];
	$add=$_POST['add3'];
	$cntct=$_POST['cntct3'];
	$session=$_POST['session3'];
	$fname=$_POST['fname3'];
	$fcntct=$_POST['fcntct3'];
	$nat=$_POST['nat3'];
	$relig=$_POST['relig3'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_weekend where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_weekend (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn11'])){
	$name=$_POST['name11']; 
	$roll=$_POST['roll11']; 
	$cnic=$_POST['cnic11'];
	$add=$_POST['add11'];
	$cntct=$_POST['cntct11'];
	$session=$_POST['session11'];
	$fname=$_POST['fname11'];
	$fcntct=$_POST['fcntct11'];
	$nat=$_POST['nat11'];
	$relig=$_POST['relig11'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from cs_morning where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into cs_morning (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn12'])){
	$name=$_POST['name12']; 
	$roll=$_POST['roll12']; 
	$cnic=$_POST['cnic12'];
	$add=$_POST['add12'];
	$cntct=$_POST['cntct12'];
	$session=$_POST['session12'];
	$fname=$_POST['fname12'];
	$fcntct=$_POST['fcntct12'];
	$nat=$_POST['nat12'];
	$relig=$_POST['relig12'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from cs_eve_a where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into cs_eve_a (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn13'])){
	$name=$_POST['name13']; 
	$roll=$_POST['roll13']; 
	$cnic=$_POST['cnic13'];
	$add=$_POST['add13'];
	$cntct=$_POST['cntct13'];
	$session=$_POST['session13'];
	$fname=$_POST['fname13'];
	$fcntct=$_POST['fcntct13'];
	$nat=$_POST['nat13'];
	$relig=$_POST['relig13'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from cs_eve_b where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into cs_eve_b (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn14'])){
	$name=$_POST['name14']; 
	$roll=$_POST['roll14']; 
	$cnic=$_POST['cnic14'];
	$add=$_POST['add14'];
	$cntct=$_POST['cntct14'];
	$session=$_POST['session14'];
	$fname=$_POST['fname14'];
	$fcntct=$_POST['fcntct14'];
	$nat=$_POST['nat14'];
	$relig=$_POST['relig14'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from cs_weekend where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into cs_weekend (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn21'])){
	$name=$_POST['name21']; 
	$roll=$_POST['roll21']; 
	$cnic=$_POST['cnic21'];
	$add=$_POST['add21'];
	$cntct=$_POST['cntct21'];
	$session=$_POST['session21'];
	$fname=$_POST['fname21'];
	$fcntct=$_POST['fcntct21'];
	$nat=$_POST['nat21'];
	$relig=$_POST['relig21'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_morning where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_morning (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
<?php
include("include/db.php");
if(isset($_POST['btn22'])){
	$name=$_POST['name22']; 
	$roll=$_POST['roll22']; 
	$cnic=$_POST['cnic22'];
	$add=$_POST['add22'];
	$cntct=$_POST['cntct22'];
	$session=$_POST['session22'];
	$fname=$_POST['fname22'];
	$fcntct=$_POST['fcntct22'];
	$nat=$_POST['nat22'];
	$relig=$_POST['relig22'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_eve_a where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_eve_a (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
<?php
include("include/db.php");
if(isset($_POST['btn23'])){
	$name=$_POST['name23']; 
	$roll=$_POST['roll23']; 
	$cnic=$_POST['cnic23'];
	$add=$_POST['add23'];
	$cntct=$_POST['cntct23'];
	$session=$_POST['session23'];
	$fname=$_POST['fname23'];
	$fcntct=$_POST['fcntct23'];
	$nat=$_POST['nat23'];
	$relig=$_POST['relig23'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_eve_b where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_eve_b (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
<?php
include("include/db.php");
if(isset($_POST['btn24'])){
	$name=$_POST['name24']; 
	$roll=$_POST['roll24']; 
	$cnic=$_POST['cnic24'];
	$add=$_POST['add24'];
	$cntct=$_POST['cntct24'];
	$session=$_POST['session24'];
	$fname=$_POST['fname24'];
	$fcntct=$_POST['fcntct24'];
	$nat=$_POST['nat24'];
	$relig=$_POST['relig24'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_weekend where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_weekend (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['mcs_c_btn'])){
	$mcs_c_id			=	$_POST['mcs_c_id']; 
	$mcs_c_name			=	$_POST['mcs_c_name']; 
	$mcs_c_time			=	$_POST['mcs_c_time'];
	$mcs_c_date			=	$_POST['mcs_c_date'];
	$mcs_c_duration		=	$_POST['mcs_c_duration'];
	$mcs_c_fee			=	$_POST['mcs_c_fee'];
	$mcs_c_instructor	=	$_POST['mcs_c_instructor'];
	$mcs_c_room			=	$_POST['mcs_c_room'];
	$mcs_c_lectures		=	$_POST['mcs_c_lectures'];
	
	
	if(($mcs_c_id=='') AND ($mcs_c_name=='') AND ($mcs_c_time=='') AND ($mcs_c_date=='') AND ($mcs_c_duration=='') 
		AND ($mcs_c_fee=='') AND ($mcs_c_instructor=='') AND ($mcs_c_room=='') AND ($mcs_c_lectures==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_course where course_id='$mcs_c_id'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Course ID, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$mcs_c_id','$mcs_c_name','$mcs_c_time','$mcs_c_date','$mcs_c_duration','$mcs_c_fee','$mcs_c_instructor','$mcs_c_room','$mcs_c_lectures')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['cs_c_btn'])){
	$cs_c_id			=	$_POST['cs_c_id']; 
	$cs_c_name			=	$_POST['cs_c_name']; 
	$cs_c_time			=	$_POST['cs_c_time'];
	$cs_c_date			=	$_POST['cs_c_date'];
	$cs_c_duration		=	$_POST['cs_c_duration'];
	$cs_c_fee			=	$_POST['cs_c_fee'];
	$cs_c_instructor	=	$_POST['cs_c_instructor'];
	$cs_c_room			=	$_POST['cs_c_room'];
	$cs_c_lectures		=	$_POST['cs_c_lectures'];
	
	
	if(($cs_c_id=='') AND ($cs_c_name=='') AND ($cs_c_time=='') AND ($cs_c_date=='') AND ($cs_c_duration=='') 
		AND ($cs_c_fee=='') AND ($cs_c_instructor=='') AND ($cs_c_room=='') AND ($cs_c_lectures==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from cs_course where course_id='$cs_c_id'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Course ID, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$cs_c_id','$cs_c_name','$cs_c_time','$cs_c_date','$cs_c_duration','$cs_c_fee','$cs_c_instructor','$cs_c_room','$cs_c_lectures')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['it_c_btn'])){
	$it_c_id			=	$_POST['it_c_id']; 
	$it_c_name			=	$_POST['it_c_name']; 
	$it_c_time			=	$_POST['it_c_time'];
	$it_c_date			=	$_POST['it_c_date'];
	$it_c_duration		=	$_POST['it_c_duration'];
	$it_c_fee			=	$_POST['it_c_fee'];
	$it_c_instructor	=	$_POST['it_c_instructor'];
	$it_c_room			=	$_POST['it_c_room'];
	$it_c_lectures		=	$_POST['it_c_lectures'];
	
	
	if(($it_c_id=='') AND ($it_c_name=='') AND ($it_c_time=='') AND ($it_c_date=='') AND ($it_c_duration=='') 
		AND ($it_c_fee=='') AND ($it_c_instructor=='') AND ($it_c_room=='') AND ($it_c_lectures==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_course where course_id='$it_c_id'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Course ID, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$it_c_id','$it_c_name','$it_c_time','$it_c_date','$it_c_duration','$it_c_fee','$it_c_instructor','$it_c_room','$it_c_lectures')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['per_f_btn'])){
	$per_f_name			=	$_POST['per_f_name']; 
	$per_f_cnic			=	$_POST['per_f_cnic']; 
	$per_f_address		=	$_POST['per_f_address'];
	$per_f_cntct		=	$_POST['per_f_cntct'];
	$per_f_email		=	$_POST['per_f_email'];
	$per_f_quali		=	$_POST['per_f_quali'];
	$per_f_relig		=	$_POST['per_f_relig'];
	$per_f_nat			=	$_POST['per_f_nat'];
	$per_f_join			=	$_POST['per_f_join'];
	$per_f_sal			=	$_POST['per_f_sal'];
	$per_f_post			=	$_POST['per_f_post'];
	
	
	if(($per_f_name=='') AND ($per_f_cnic=='') AND ($per_f_address=='') AND ($per_f_cntct=='') AND ($per_f_email=='') 
		AND ($per_f_quali=='') AND ($per_f_relig=='') AND ($per_f_nat=='') AND ($per_f_join=='') AND ($per_f_sal=='') AND ($per_f_post==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from per_teacher where email='$per_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into per_teacher (name,cnic,addr,contact,email,quali,relig,nationality,joining,sal,post)
	values('$per_f_name','$per_f_cnic','$per_f_address','$per_f_cntct','$per_f_email','$per_f_quali','$per_f_relig','$per_f_nat','$per_f_join','$per_f_sal','$per_f_post')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['vis_f_btn'])){
	$vis_f_name			=	$_POST['vis_f_name']; 
	$vis_f_cnic			=	$_POST['vis_f_cnic']; 
	$vis_f_address		=	$_POST['vis_f_address'];
	$vis_f_cntct		=	$_POST['vis_f_cntct'];
	$vis_f_email		=	$_POST['vis_f_email'];
	$vis_f_quali		=	$_POST['vis_f_quali'];
	$vis_f_relig		=	$_POST['vis_f_relig'];
	$vis_f_nat			=	$_POST['vis_f_nat'];
	$vis_f_join			=	$_POST['vis_f_join'];
	$vis_f_sal			=	$_POST['vis_f_sal'];
	$vis_f_post			=	$_POST['vis_f_post'];
	
	
	if(($vis_f_name=='') AND ($vis_f_cnic=='') AND ($vis_f_address=='') AND ($vis_f_cntct=='') AND ($vis_f_email=='') 
		AND ($vis_f_quali=='') AND ($vis_f_relig=='') AND ($vis_f_nat=='') AND ($vis_f_join=='') AND ($vis_f_sal=='') AND ($vis_f_post==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from vis_teacher where email='$vis_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into vis_teacher (name,cnic,addr,contact,email,quali,relig,nationality,joining,sal,post)
	values('$vis_f_name','$vis_f_cnic','$vis_f_address','$vis_f_cntct','$vis_f_email','$vis_f_quali','$vis_f_relig','$vis_f_nat','$vis_f_join','$vis_f_sal','$vis_f_post')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['int_f_btn'])){
	$int_f_name			=	$_POST['int_f_name']; 
	$int_f_cnic			=	$_POST['int_f_cnic']; 
	$int_f_address		=	$_POST['int_f_address'];
	$int_f_cntct		=	$_POST['int_f_cntct'];
	$int_f_email		=	$_POST['int_f_email'];
	$int_f_quali		=	$_POST['int_f_quali'];
	$int_f_relig		=	$_POST['int_f_relig'];
	$int_f_nat			=	$_POST['int_f_nat'];
	$int_f_join			=	$_POST['int_f_join'];
	$int_f_sal			=	$_POST['int_f_sal'];
	$int_f_post			=	$_POST['int_f_post'];
	
	
	if(($int_f_name=='') AND ($int_f_cnic=='') AND ($int_f_address=='') AND ($int_f_cntct=='') AND ($int_f_email=='') 
		AND ($int_f_quali=='') AND ($int_f_relig=='') AND ($int_f_nat=='') AND ($int_f_join=='') AND ($int_f_sal=='') AND ($vis_f_post==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from int_teacher where email='$int_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into int_teacher (name,cnic,addr,contact,email,quali,relig,nationality,joining,sal,post)
	values('$int_f_name','$int_f_cnic','$int_f_address','$int_f_cntct','$int_f_email','$int_f_quali','$int_f_relig','$int_f_nat','$int_f_join','$int_f_sal','$int_f_post')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['acad_emp_btn'])){
	$acad_emp_name					=	$_POST['acad_emp_name']; 
	$acad_emp_cnic					=	$_POST['acad_emp_cnic']; 
	$acad_emp_address				=	$_POST['acad_emp_address'];
	$acad_emp_cntct					=	$_POST['acad_emp_cntct'];
	$acad_emp_email					=	$_POST['acad_emp_email'];
	$acad_emp_designation			=	$_POST['acad_emp_designation'];
	$acad_emp_hours					=	$_POST['acad_emp_hours'];
	$acad_emp_year					=	$_POST['acad_emp_year'];
	$acad_emp_salary				=	$_POST['acad_emp_salary'];
	$acad_emp_religion				=	$_POST['acad_emp_religion'];
	$acad_emp_nationality			=	$_POST['acad_emp_nationality'];
	$acad_emp_assisstent			=	$_POST['acad_emp_assisstent'];
	$acad_emp_shift					=	$_POST['acad_emp_shift'];
	
	
	if(($acad_emp_name=='') AND ($acad_emp_cnic=='') AND ($acad_emp_address=='') AND ($acad_emp_cntct=='') 
		AND ($acad_emp_email=='') AND ($acad_emp_designation=='') AND ($acad_emp_hours=='') AND ($acad_emp_year=='') 
	AND ($acad_emp_salary=='') AND ($acad_emp_religion=='') AND ($acad_emp_nationality=='') AND ($acad_emp_assisstent=='')
	AND ($acad_emp_shift==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from acad_emp where email='$int_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into acad_emp (name,cnic,addr,contact,email,desig,hours,year,salary,religion,nationality,assistent_to,shift)
	values('$acad_emp_name','$acad_emp_cnic','$acad_emp_address','$acad_emp_cntct','$acad_emp_email','$acad_emp_designation',
	'$acad_emp_hours','$acad_emp_year','$acad_emp_salary','$acad_emp_religion','$acad_emp_nationality','$acad_emp_assisstent','$acad_emp_shift')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['admin_emp_btn'])){
	$admin_emp_name					=	$_POST['admin_emp_name']; 
	$admin_emp_cnic					=	$_POST['admin_emp_cnic']; 
	$admin_emp_address				=	$_POST['admin_emp_address'];
	$admin_emp_cntct				=	$_POST['admin_emp_cntct'];
	$admin_emp_email				=	$_POST['admin_emp_email'];
	$admin_emp_designation			=	$_POST['admin_emp_designation'];
	$admin_emp_hours				=	$_POST['admin_emp_hours'];
	$admin_emp_year					=	$_POST['admin_emp_year'];
	$admin_emp_salary				=	$_POST['admin_emp_salary'];
	$admin_emp_religion				=	$_POST['admin_emp_religion'];
	$admin_emp_nationality			=	$_POST['admin_emp_nationality'];
	$admin_emp_assisstent			=	$_POST['admin_emp_assisstent'];
	$admin_emp_shift				=	$_POST['admin_emp_shift'];
	
	
	if(($admin_emp_name=='') AND ($admin_emp_cnic=='') AND ($admin_emp_address=='') AND ($admin_emp_cntct=='') 
		AND ($admin_emp_email=='') AND ($admin_emp_designation=='') AND ($admin_emp_hours=='') AND ($admin_emp_year=='') 
	AND ($admin_emp_salary=='') AND ($admin_emp_religion=='') AND ($admin_emp_nationality=='') AND ($admin_emp_assisstent=='')
	AND ($admin_emp_shift==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from admin_emp where email='$int_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into admin_emp (name,cnic,addr,contact,email,desig,hours,year,salary,religion,nationality,assistent_to,shift)
	values('$admin_emp_name','$admin_emp_cnic','$admin_emp_address','$admin_emp_cntct','$admin_emp_email',
	'$admin_emp_designation','$admin_emp_hours','$admin_emp_year','$admin_emp_salary','$admin_emp_religion',
	'$admin_emp_nationality','$admin_emp_assisstent','$admin_emp_shift')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['cler_emp_btn'])){
	$cler_emp_name					=	$_POST['cler_emp_name']; 
	$cler_emp_cnic					=	$_POST['cler_emp_cnic']; 
	$cler_emp_address				=	$_POST['cler_emp_address'];
	$cler_emp_cntct					=	$_POST['cler_emp_cntct'];
	$cler_emp_email					=	$_POST['cler_emp_email'];
	$cler_emp_designation			=	$_POST['cler_emp_designation'];
	$cler_emp_hours					=	$_POST['cler_emp_hours'];
	$cler_emp_year					=	$_POST['cler_emp_year'];
	$cler_emp_salary				=	$_POST['cler_emp_salary'];
	$cler_emp_religion				=	$_POST['cler_emp_religion'];
	$cler_emp_nationality			=	$_POST['cler_emp_nationality'];
	$cler_emp_assisstent			=	$_POST['cler_emp_assisstent'];
	$cler_emp_shift					=	$_POST['cler_emp_shift'];
	
	
	if(($cler_emp_name=='') AND ($cler_emp_cnic=='') AND ($cler_emp_address=='') AND ($cler_emp_cntct=='') 
		AND ($cler_emp_email=='') AND ($cler_emp_designation=='') AND ($cler_emp_hours=='') AND ($cler_emp_year=='') 
	AND ($cler_emp_salary=='') AND ($cler_emp_religion=='') AND ($cler_emp_nationality=='') AND ($cler_emp_assisstent=='')
	AND ($cler_emp_shift==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from clerk_emp where email='$cler_emp_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into clerk_emp (name,cnic,addr,contact,email,desig,hours,year,salary,religion,nationality,assistent_to,shift)
	values('$cler_emp_name','$cler_emp_cnic','$cler_emp_address','$cler_emp_cntct','$cler_emp_email',
	'$cler_emp_designation','$cler_emp_hours','$cler_emp_year','$cler_emp_salary','$cler_emp_religion',
	'$cler_emp_nationality','$cler_emp_assisstent','$cler_emp_shift')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	