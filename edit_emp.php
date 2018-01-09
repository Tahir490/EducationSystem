<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_emp	=	@$_GET['edit_emp'];
		$que	=	"select * from emp where id='$edit_emp'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			
			$name = $row['name'];
			$cnic = $row['cnic'];
			$addr = $row['addr'];
			$cntct = $row['contact'];
			$desig = $row['desig'];
			$email = $row['email'];
			$hours = $row['hours'];
			$year = $row['year'];
			$sal= $row['salary'];
			$relig = $row['religion'];
			$nat = $row['nationality'];
			$field = $row['field'];
			$assiss = $row['assistent_to'];
			$shift = $row['shift'];
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

	<h2>Update Employee</h2>
		<a href="emp.php"><img src="images/emp2.png" alt="View Employee" title="View Employees" border="0" width="200px" align="right" /></a>
		<a href="admin.php"><img src="images/admin1.png" alt="Go to Admin Panel" title="Go to Admin Panel" border="0" width="200px" align="right" /></a>
		<center>

<form method="post" action="edit_emp.php?edit_form=<?php echo $id; ?>">
<table border='3'>
<tr>
	<th bgcolor='green' colspan="5">Updating Employees</th>
</tr>

<tr>
	<td align="right">Employee Name:</td>
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
	<td align="right">Designation:</td>
	<td><input type="text" name="desig" value="<?php echo @$desig; ?>"></td>
</tr>
<tr>
	<td align="right">Email:</td>
	<td><input type="text" name="email" value="<?php echo @$email; ?>"></td>
</tr>
<tr>
	<td align="right">Working Hours:</td>
	<td><input type="text" name="hours" value="<?php echo @$hours; ?>"></td>
</tr>
<tr>
	<td align="right">Joining Year/Date:</td>
	<td><input type="text" name="year" value="<?php echo @$year; ?>"></td>
</tr>

<tr>
	<td align="right">Salary:</td>
	<td><input type="text" name="sal" value="<?php echo @$sal; ?>"></td>
</tr>
<tr>
	<td align="right">Religion:</td>
	<td><input type="text" name="relig" value="<?php echo @$relig; ?>"></td>
</tr>
<tr>
	<td align="right">Nationality:</td>
	<td><input type="text" name="nat" value="<?php echo @$nat; ?>"></td>
</tr>
<tr>
	<td align="right">Field of Work:</td>
	<td><input type="text" name="field" value="<?php echo @$field; ?>"></td>
</tr>
<tr>
	<td align="right">Assisstent To:</td>
	<td><input type="text" name="assiss" value="<?php echo @$assiss; ?>"></td>
</tr>
<tr>
	<td align="right">Shift:</td>
	<td><input type="text" name="shift" value="<?php echo @$shift; ?>"></td>
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
			echo $name = $_POST['name']; 
			$cnic  = $_POST['cnic'];
			$addr = $_POST['addr'];
			$cntct= $_POST['cntct'];
			$desig= $_POST['desig'];
			$email= $_POST['email'];
			$hours=$_POST['hours'];
			$year=$_POST['year'];
			$sal=$_POST['sal'];
			$relig=$_POST['relig'];
			$nat=$_POST['nat'];
			$field=$_POST['field'];
			$assiss=$_POST['assiss'];
			$shift=$_POST['shift'];
			
				
		$que1 = "update emp set name='$name',cnic='$cnic',addr='$addr',contact='$cntct',desig='$desig',email='$email',
		hours='$hours',year='$year',salary='$sal',religion='$relig',nationality='$nat',field='$field',
		assistent_to='$assiss',shift='$shift' where id='$edit_id1'";
			if(mysql_query($que1)){
				echo"<script>alert('Data has been updated...')</script>";
				
			}
			
}



?>

