<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_teach	=	@$_GET['edit_teach'];
		$que	=	"select * from teacher where id='$edit_teach'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$name = $row['name'];
			$cnic = $row['cnic'];
			$addr = $row['addr'];
			$cntct = $row['contact'];
			$email = $row['email'];
			$quali = $row['quali'];
			$course = $row['course'];
			$class = $row['class'];
			$relig= $row['relig'];
			$nationality = $row['nationality'];
			$joining = $row['joining'];
			$sal = $row['sal'];
			$post = $row['post'];
			$id = $row['id'];
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

	<h2>Update Teachers</h2>
	<a href="teach.php"><img src="images/teach2.png" alt="View Teacher" title="View Teacher" border="0" width="200px" align="right" /></a>
	<a href="admin.php"><img src="images/admin1.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="right" /></a>
	
		<center>

<form method="post" action="edit_teach.php?edit_form=<?php echo $id; ?>">
<table border='3'>
<tr>
	<th bgcolor='green' colspan="5">Updating Teachers</th>
</tr>

<tr>
	<td align="right">Teacher Name:</td>
	<td><input type="text" name="name" value="<?php echo @$name; ?>"></td>
</tr>
<tr>
	<td align="right">CNIC No:</td>
	<td><input type="text" name="cnic" value="<?php echo @$cnic; ?>"></td>
</tr>
<tr>
	<td align="right">Address:</td>
	<td><input type="text" name="addr" value="<?php echo @$addr; ?>"></td>
</tr>
<tr>
	<td align="right">contact:</td>
	<td><input type="text" name="cntct" value="<?php echo @$cntct; ?>"></td>
</tr>
<tr>
	<td align="right">Email:</td>
	<td><input type="text" name="email" value="<?php echo @$email; ?>"></td>
</tr>
<tr>
	<td align="right">Qualification:</td>
	<td><input type="text" name="quali" value="<?php echo @$quali; ?>"></td>
</tr>
<tr>
	<td align="right">Course:</td>
	<td><input type="text" name="course" value="<?php echo @$course; ?>"></td>
</tr>

<tr>
	<td align="right">Class/Section:</td>
	<td><input type="text" name="class" value="<?php echo @$class; ?>"></td>
</tr>
<tr>
	<td align="right">Religion:</td>
	<td><input type="text" name="relig" value="<?php echo @$relig; ?>"></td>
</tr>
<tr>
	<td align="right">Nationality:</td>
	<td><input type="text" name="nat" value="<?php echo @$nationality; ?>"></td>
</tr>
<tr>
	<td align="right">Joining Date:</td>
	<td><input type="text" name="join" value="<?php echo @$joining; ?>"></td>
</tr>
<tr>
	<td align="right">Salary:</td>
	<td><input type="text" name="sal" value="<?php echo @$sal; ?>"></td>
</tr>
<tr>
	<td align="right">Post:</td>
	<td><input type="text" name="post" value="<?php echo @$post; ?>"></td>
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
	<p> ©Education System. All Right Reserved.</p>
	 </div>
</div>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['update'])){
			$edit_id1 = $_GET['edit_form'];
			$name = $_POST['name'];
			$cnic = $_POST['cnic'];
			$addr = $_POST['addr'];
			$cntct = $_POST['cntct'];
			$email = $_POST['email'];
			$quali = $_POST['quali'];
			$course = $_POST['course'];
			$class = $_POST['class'];
			$relig = $_POST['relig'];
			$nat= $_POST['nat'];
			$join= $_POST['join'];
			$sal= $_POST['sal'];
			$post= $_POST['post'];
			
			
		$que1 = "update teacher set name='$name',cnic='$cnic',addr='$addr',contact='$cntct',email='$email',quali='$quali',
		course='$course',class='$class',relig='$relig',nationality='$nat',joining='$join',sal='$sal',post='$post' where id='$edit_id1'";
			if(mysql_query($que1)){
				echo"<script>alert('Data has been updated...')</script>";
				
			}
			
}



?>

