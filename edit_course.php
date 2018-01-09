<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_course	=	@$_GET['edit_course'];
		$que	=	"select * from course where id='$edit_course'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id=$row['id'];
			$course_id = $row['course_id'];
			$name = $row['name'];
			$time = $row['time'];
			$date = $row['date'];
			$duration = $row['duration'];
			$fee = $row['fee'];
			$instructor = $row['instructor'];
			$room = $row['room'];
			$lec = $row['lec'];
			$std= $row['std'];
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

	<h2>Update Courses</h2>
	<a href="course.php"><img src="images/cl2.png" alt="View Courses" title="View Courses" border="0" width="200px" align="right" /></a>
	<a href="admin.php"><img src="images/admin1.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="right" /></a>
		<center>

<form method="post" action="edit_course.php?edit_form=<?php echo $id; ?>">
<table border='3'>
<tr>
	<th bgcolor='green' colspan="5">Updating Course</th>
</tr>
<tr>
	<td align="right">Course ID:</td>
	<td><input type="text" name="course_id" value="<?php echo @$course_id; ?>"></td>
</tr>
<tr>
	<td align="right">Course Name:</td>
	<td><input type="text" name="course" value="<?php echo @$name; ?>"></td>
</tr>

<tr>
	<td align="right">Time:</td>
	<td><input type="text" name="time" value="<?php echo @$time; ?>"></td>
</tr>
<tr>
	<td align="right">Date:</td>
	<td><input type="text" name="date" value="<?php echo @$date; ?>"></td>
</tr>
<tr>
	<td align="right">Course Duration:</td>
	<td><input type="text" name="duration" value="<?php echo @$duration; ?>"></td>
</tr>
<tr>
	<td align="right">Course Fee:</td>
	<td><input type="text" name="fee" value="<?php echo @$fee; ?>"></td>
</tr>
<tr>
	<td align="right">Course Instructor:</td>
	<td><input type="text" name="instructor" value="<?php echo @$instructor; ?>"></td>
</tr>
<tr>
	<td align="right">Room:</td>
	<td><input type="text" name="room" value="<?php echo @$room; ?>"></td>
</tr>
<tr>
	<td align="right">No.of Lectures/Duration:</td>
	<td><input type="text" name="lec" value="<?php echo @$lec; ?>"></td>
</tr>

<tr>
	<td align="right">No.of Students/Course:</td>
	<td><input type="text" name="std" value="<?php echo @$std; ?>"></td>
</tr>
<tr>
	<td align="center" colspan="6">
	<input type="submit" name="update" value="Update Now">
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
	<p class="copyright">©Education System. All Right Reserved.</p>
	 </div>
</div>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['update'])){
			$edit_id1 = $_GET['edit_form'];
			$course_id = $_POST['course_id'];
			$name = $_POST['course'];
			$time = $_POST['time'];
			$date = $_POST['date'];
			$duration = $_POST['duration'];
			$fee = $_POST['fee'];
			$instructor = $_POST['instructor'];
			$room = $_POST['room'];
			$lec = $_POST['lec'];
			$std= $_POST['std'];
			
	
	$que = "update course set course_id='$course_id',name='$name',time='$time',date='$date',duration='$duration',
		fee='$fee',instructor='$instructor',room='$room',lec='$lec',std='$std' where id='$edit_id1'";
			if(mysql_query($que)){
				echo"<script>alert('Data has been updated...')</script>";
			}
}

?>

