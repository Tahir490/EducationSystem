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
   }else{
      alert("User does not want to continue!");
	  return false;
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
	<h2>Employees</h2>
	<form action="emp.php" method="get" class="search" >
	<input type="text" name="search" placeholder="Search by CNIC or Email" size="40">
	<input type="submit" name="sub" value="Search Here" >
	</form>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from emp where cnic='$search' OR email='$search'";
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
			
			 
		
	?>
	<table width="600"  align="center" bgcolor="green" border="2">
	<tr>
			<td><?php echo @$name; ?></td>
			<td><?php echo @$cnic; ?></td>
			<td><?php echo @$addr; ?></td>
			<td><?php echo @$cntct; ?></td>
			<td><?php echo @$desig; ?></td>
			<td><?php echo @$email; ?></td>
			<td><?php echo @$hours; ?></td>
			<td><?php echo @$year; ?></td>
			<td><?php echo @$sal; ?></td>
			<td><?php echo @$relig; ?></td>
			<td><?php echo @$nat; ?></td>
			<td><?php echo @$field; ?></td>
			<td><?php echo @$assiss; ?></td>
			<td><?php echo @$shift; ?></td>
			
			
		</tr>
		<tr>
			<td align="center" colspan="14"><a href="emp.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
	<table width="1203" height="144" border="5" cellspacing="5" >
	  <tr>
	    
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Name</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">CNIC No.</th>
        <th  width="134" bgcolor="#CCCCCC" scope="col">Address</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Contact</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Designation</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Email</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Working Hours</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Joining Year/Date</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Salary</th>
	    <th width="134" bgcolor="#CCCCCC" scope="col">Religion</th>
        <th  width="134" bgcolor="#CCCCCC" scope="col">Nationality</th>
	    <th  width="134" bgcolor="#CCCCCC" scope="col">Field of Work</th>
	    <th width="134" bgcolor="#CCCCCC" scope="col">Assisstent To</th>
        <th width="134" bgcolor="#CCCCCC" scope="col">Shift</th>
		<th width="134" bgcolor="#CCCCCC" scope="col">ID</th>
		<th width="134" bgcolor="#CCCCCC" scope="col">Delete</th>
		<th width="134" bgcolor="#CCCCCC" scope="col">Edit</th>
      </tr>
	  <tr>
	  <?php
	  include("include/db.php");
$query ="select * from emp";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	
	$name = $row[0];
	$cnic = $row[1];
	$addr = $row[2];
	$cntct = $row[3];
	$desig = $row[4];
	$email = $row[5];
	$hours = $row[6];
	$year = $row[7];
	$sal= $row[8];
	$relig= $row[9];
	$nat= $row[10];
	$field= $row[11];
	$assiss= $row[12];
	$shift= $row[13];
	$id= $row[14];

?>
	    
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $name; ?> </td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $cnic; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $addr; ?></td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $cntct; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $desig; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $email; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $hours; ?></td>
	    <td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $year; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $sal; ?></td>
		<td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $relig; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $nat; ?></td>
		<td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $field; ?></td>
		<td width="134" bgcolor="#CCCCCC" scope="col"  ><?php echo $assiss; ?></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $shift; ?></td>
		<td width="134"  bgcolor="#CCCCCC" scope="col"  ><?php echo $id; ?></td>
		<td width="134"  bgcolor="#CCCCCC" scope="col"  ><a href='del_emp.php?del_emp=<?php echo $id; ?>'onclick="getConfirmation();"><font color="black">Delete</font></a></td>
	    <td width="134"  bgcolor="#CCCCCC" scope="col"  ><a href='edit_emp.php?edit_emp=<?php echo $id; ?>'><font color="black">Edit</font></a></td>
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

