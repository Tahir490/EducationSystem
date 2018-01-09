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
<meta name="viewport" name="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="admin.css" rel="stylesheet" type="text/css" />


</head>

<body>



<font color="#FBD61A"><?php echo @$_GET['del']; ?></td></font>

	<div class="heading"><h2>MCS MORNING</h2></div>
	<div class="search">
	<form class="form-inline" action="std.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by Roll No. or CNIC No." size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-success">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from mcs where cnic='$search' OR roll='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
			$name = $row['name'];
			$roll = $row['roll'];
			$cnic = $row['cnic'];
			$addr = $row['address'];
			$cntct = $row['cntct'];
			$session=$row['session'];
			$fname = $row['fname'];
			$fcntct = $row['fcntct'];
			$nat = $row['nationality']; 
			$relig = $row['religion'];
		?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	<tr class="info">
			<td><?php echo @$name; ?></td>
			<td><?php echo @$roll; ?></td>
			<td><?php echo @$cnic; ?></td>
			<td><?php echo @$addr; ?></td>
			<td><?php echo @$cntct; ?></td>
			<td><?php echo @$session; ?></td>
			<td><?php echo @$fname; ?></td>
			<td><?php echo @$fcntct; ?></td>
			<td><?php echo @$nat; ?></td>
			<td><?php echo @$relig; ?></td>
			
		</tr>
		<tr>
			<td align="center" colspan="12"><a href=".php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="success">
	    <th>ID</th>
	    <th>Name</th>
	    <th>Roll No</th>
		<th>CNIC No</th>
	    <th>Address</th>
	    <th>Contact</th>
	    <th>Session</th>
	    <th>Father Name</th>
	    <th>Father Contact</th>
		<th>Nationality</th>
	     <th>Religion</th>
	    <th>Delete</th>
		<th>Edit</th>
      </tr>
	<tr class="danger">
	  <?php
	  include("include/db.php");
$query ="select * from mcs";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id = $row['id'];
	$name = $row[1];
	$roll = $row[2];
	$cnic = $row[3];
	$addr = $row[4];
	$cntct = $row[5];
	$session = $row[6];
	$fname = $row[7];
	$fcntct = $row[8];
	$nat = $row[9];
	$relig= $row[10];
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $name; ?> </td>
	    <td><?php echo $roll; ?></td>
		<td><?php echo $cnic; ?></td>
	    <td><?php echo $addr; ?></td>
	    <td><?php echo $cntct; ?></td>
	    <td><?php echo $session; ?></td>
	    <td><?php echo $fname; ?></td>
	    <td><?php echo $fcntct; ?></td>
	    <td><?php echo $nat; ?></td>
	    <td><?php echo $relig; ?></td>
		<td><a href='del_std.php?del_std=<?php echo $id; ?>'><font color="black">Delete</font></a></td>
	    <td><a href='edit_std.php?edit_std=<?php echo $id; ?>'><font color="black">Edit</font></a></td>
      </tr>
  <?php }  ?>	
</table>
</div>
</div>
</div>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-success btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>

