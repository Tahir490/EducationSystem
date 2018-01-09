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
<script type="text/javascript">
<!--
function getConfirmation(){
   var retVal = confirm("Do you want to continue ?");
   if( retVal == true ){
      alert("User wants to continue!");
	  return true;
   }
}
//-->
</script>
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
<div id="course-table">
<font color="#FBD61A"><?php echo @$_GET['del']; ?></td></font>
	<h2>Courses</h2>
	<form action="course.php" method="get" class="search" >
	<input type="text" name="search" placeholder="Search by Course ID" size="40">
	<input type="submit" name="sub" value="Search Here" >
	</form>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from course where course_id='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
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
			 
		
	?>
	<table width="600"  align="center" bgcolor="FBD61A" border="2">
	<tr>
			<td><?php echo @$course_id; ?></td>
			<td><?php echo @$name; ?></td>
			<td><?php echo @$time; ?></td>
			<td><?php echo @$date; ?></td>
			<td><?php echo @$duration; ?></td>
			<td><?php echo @$fee; ?></td>
			<td><?php echo @$instructor; ?></td>
			<td><?php echo @$room; ?></td>
			<td><?php echo @$lec; ?></td>
			<td><?php echo @$std; ?></td>
		</tr>
		<tr>
			<td align="center" colspan="10"><a href="course.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
	<table width="1020" height="144" border="5" cellspacing="5" >
		
	  <tr>
	    <th  width="134" bgcolor="#CCCCCC" scope="col"  >ID</th>
		<th  width="134" bgcolor="#CCCCCC" scope="col"  >Course ID</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Name</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Time</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Date</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Duration</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Fee</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Instructor</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Room</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">No. of Lectures/Duration</th>
	    <th width="134" bgcolor="#CCCCCC" scope="col">No.of Students/Course</th>
		<th width="134" bgcolor="#CCCCCC" scope="col">Delete</th>
		<th width="134" bgcolor="#CCCCCC" scope="col">Edit</th>
		
      </tr>
	  <tr>
	  <?php
	  include("include/db.php");
$query ="select * from course";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id = $row['id'];
	$course_id = $row[1];
	$name = $row[2];
	$time = $row[3];
	$date = $row[4];
	$duration = $row[5];
	$fee = $row[6];
	$instructor = $row[7];
	$room = $row[8];
	$lec = $row[9];
	$std= $row[10];

?>
	    <td width="134" height="69" bgcolor="#CCCCCC" scope="col"  ><?php echo $id; ?></td>
		<td width="134" height="69" bgcolor="#CCCCCC" scope="col"  ><?php echo $course_id; ?></td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $name; ?> </td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $time; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $date; ?></td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $duration; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $fee; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $instructor; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $room; ?></td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $lec; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $std; ?></td>
		<td width="134"  bgcolor="#CCCCCC" scope="col"  ><a href='del_course.php?del_course=<?php echo $id; ?>'onclick="getConfirmation();"><font color="black">Delete</font></a></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><a href='edit_course.php?edit_course=<?php echo $id; ?>'><font color="black">Edit</font></a></td>
		
	 </tr>
  <?php }  ?>	
</table>

<a href="admin.php"><img src="images/admin.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="left" /></a>
  </div>
  
	
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

