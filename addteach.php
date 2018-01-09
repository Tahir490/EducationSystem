<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Education System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header_container">
<div id="header">
  <a href="index.php"><img src="images/logo.gif" alt="Education System" title="Education System" border="0" /></a>
  
  <ul>
    <li ><a href="index.php" title="Home">Home</a> </li>
     <li ><a href="gallery.php" title="Gallery">Gallery</a></li>
     <li ><a href="services.php" title="Services">Services</a></li>
	  <li ><a href="contact.php" title="Contact Us">Contact Us</a></li>
	   <li class="login"><a href="login.php" title="Login">Login</a></li>
	   
  </ul>
 <h1></h1>  
  </div>
</div>

<div id="bodymiddlePan">

	<h2>Add Teachers</h2>
	<a href="teach.php"><img src="images/teach2.png" alt="View Teacher" title="View Teacher" border="0" width="200px" align="right" /></a>
	<a href="admin.php"><img src="images/admin1.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="right" /></a>
		<center>

<form method="post" action="">
<table border='3'>
<tr>
	<th bgcolor='green' colspan="5">Add Teachers</th>
</tr>

<tr>
	<td align="right">Teacher Name:</td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td align="right">CNIC No:</td>
	<td><input type="text" name="cnic"></td>
</tr>
<tr>
	<td align="right">Address:</td>
	<td><input type="text" name="addr"></td>
</tr>
<tr>
	<td align="right">contact:</td>
	<td><input type="text" name="cntct"></td>
</tr>
<tr>
	<td align="right">Email:</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td align="right">Qualification:</td>
	<td><input type="text" name="quali"></td>
</tr>
<tr>
	<td align="right">Course:</td>
	<td><input type="text" name="course"></td>
</tr>

<tr>
	<td align="right">Class/Section:</td>
	<td><input type="text" name="class"></td>
</tr>
<tr>
	<td align="right">Religion:</td>
	<td><input type="text" name="relig"></td>
</tr>
<tr>
	<td align="right">Nationality:</td>
	<td><input type="text" name="nat"></td>
</tr>
<tr>
	<td align="right">Joining Date:</td>
	<td><input type="text" name="join"></td>
</tr>
<tr>
	<td align="right">Salary:</td>
	<td><input type="text" name="sal"></td>
</tr>
<tr>
	<td align="right">Post:</td>
	<td><input type="text" name="post"></td>
</tr>

<tr>
	<td align="center" colspan="6">
	<input type="submit" name="submit" value="Submit">
	</td>
</tr>
</table>
</form>
  </center>
	
</div>
<div id="bodyBottomPan"></div>
<div id="footermainPan">
  <div id="footerPan">
  	<div id="footerlogoPan"><a href="index.php"><img src="images/footerlogo.gif" title="Education System" alt="Education System" width="290" height="36" border="0" /></a></div>
	<ul>
  	<li ><a href="index.php" title="Home">Home</a>|</li>
     <li ><a href="gallery.php" title="Gallery">Gallery</a>|</li>
     <li ><a href="services.php" title="Services">Services</a>|</li>
	  <li ><a href="contact.php" title="Contact Us">Contact Us</a>|</li>
	   <li><a href="login.php" title="Login">Login</a></li>
	</ul>
	<p> ©Education System. All Right Reserved.</p>
	 </div>
</div>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['submit'])){
	$name 		= 			$_POST['name']; 
	$cnic 		= 			$_POST['cnic'];
	$addr 		=			$_POST['addr'];
	$cntct		= 			$_POST['cntct'];
	$email		=			$_POST['email'];
	$quali		= 			$_POST['quali'];
	$course		=			$_POST['course'];
	$class		=			$_POST['class'];
	$relig		=			$_POST['relig'];
	$nat		=			$_POST['nat'];
	$join		=			$_POST['join'];
	$sal		=			$_POST['sal'];
	$post 		=			$_POST['post'];
	
	$que = "select * from teacher where email='$email'";
	$run = mysql_query($que);
	if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
	else
	{
	$query = "insert into teacher (name,cnic,addr,contact,email,quali,course,class,relig,nationality,joining,sal,post)
	values('$name','$cnic','$addr','$cntct','$email','$quali','$course','$class','$relig','$nat','$join','$sal','$post')";
	if(mysql_query($query)){	
		echo "<script>alert('Data has been inserted...')</script>";	
}
		
}
}
?>

