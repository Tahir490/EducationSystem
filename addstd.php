<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<!DOCTYPE html>
<html>
<?php
include("include/db.php");
?>
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

	<h2>Add Students</h2>
	
		<a href="std.php"><img src="images/std4.png" alt="View Students" title="View Students" border="0" width="200px" align="right" /></a>
		<a href="admin.php"><img src="images/admin1.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="right" /></a>
		<center>

<form method="post" action="">
<table border='3'>
<tr>
	<th bgcolor='green' colspan="5">Add Student</th>
</tr>

<tr>
	<td align="right">Student Name:</td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td align="right">Roll No:</td>
	<td><input type="text" name="roll"></td>
</tr>
<tr>
	<td align="right">CNIC No:</td>
	<td><input type="text" name="cnic"></td>
</tr>
<tr>
	<td align="right">Father Name:</td>
	<td><input type="text" name="fname"></td>
</tr>
<tr>
	<td align="right">Address:</td>
	<td><input type="text" name="addr"></td>
</tr>
<tr>
	<td align="right">Contact:</td>
	<td><input type="text" name="cntct"></td>
</tr>
<tr>
	<td align="right">Father Contact:</td>
	<td><input type="text" name="fcntct"></td>
</tr>
<tr>
	<td align="right">Field of Study:</td>
	<td><input type="text" name="field"></td>
</tr>
<tr>
	<td align="right">Class/Section:</td>
	<td><input type="text" name="class"></td>
</tr>

<tr>
	<td align="right">Year of Admission:</td>
	<td><input type="text" name="year"></td>
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
	<p> ŠEducation System. All Right Reserved.</p>
	 </div>
</div>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['submit'])){
	$name=$_POST['name']; 
	$roll=$_POST['roll']; 
	$cnic=$_POST['cnic'];
	$fname=$_POST['fname'];
	$addr=$_POST['addr'];
	$cntct=$_POST['cntct'];
	$fcntct=$_POST['fcntct'];
	$field=$_POST['field'];
	$class=$_POST['class'];
	$year=$_POST['year'];
	$relig=$_POST['relig'];
	$nat=$_POST['nat'];
	
	$que = "select * from std where roll='$roll'";
	$run = mysql_query($que);
	if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
	

	else
	{
	
	$query = "insert into std (name,roll,cnic,fname,addr,contact,fcontact,field,class,year,religion,nationality)
	values('$name','$roll','$cnic','$fname','$addr','$cntct','$fcntct','$field','$class','$year','$relig','$nat')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}
}

?>

