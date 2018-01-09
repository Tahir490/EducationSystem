<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_mcs_eve_a'];
		$que	=	"select * from mcs_eve_a where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id = $row['id'];
			$name = $row['name'];
			$roll = $row['roll'];
			$cnic = $row['cnic'];
			$addr = $row['address'];
			$cntct = $row['cntct'];
			$session = $row['session'];
			$fname = $row['fname'];
			$fcntct = $row['fcntct'];
			$nat= $row['nationality'];
			$relig = $row['religion'];
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
		
		<div class="container">
		<div class="form">
		<form method="post" action="edit_mcs_eve_a.php?edit_mcs_eve_a=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading">Updating Mcs Evening A's Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="name">Student Name:</label>
    <input type="text" class="form-control" name="name" id="name"  value="<?php echo @$name; ?>" >
  </div>
  <div class="form-group">
    <label for="rollno">Roll No:</label>
    <input type="text" name="roll" class="form-control" id="rollno"  value="<?php echo @$roll; ?>">
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" name="cnic" class="form-control" id="cnic"  value="<?php echo @$cnic; ?>">
  </div>
  <div class="form-group">
    <label for="add">Address:</label>
    <input type="text" name="add" class="form-control" id="add"  value="<?php echo @$addr; ?>">
  </div>
  <div class="form-group">
    <label for="cntct">Contact:</label>
    <input type="text" name="cntct" class="form-control" id="cntct"  value="<?php echo @$cntct; ?>">
  </div>
  <div class="form-group">
    <label for="session">Session:</label>
    <input type="text" name="session" class="form-control" id="session"  value="<?php echo @$session; ?>">
  </div>
  <div class="form-group">
    <label for="fname">Father Name:</label>
    <input type="text" name="fname" class="form-control" id="fname"  value="<?php echo @$fname; ?>">
  </div>
  <div class="form-group">
    <label for="fcntct">Father Contact:</label>
    <input type="text" name="fcntct" class="form-control" id="fcntct"  value="<?php echo @$fcntct; ?>">
  </div>
  <div class="form-group">
    <label for="nat">Nationality:</label>
    <input type="text" name="nat" class="form-control" id="nat"  value="<?php echo @$nat; ?>">
  </div>
  <div class="form-group">
    <label for="relig">Religion:</label>
    <input type="text" name="relig" class="form-control" id="relig"  value="<?php echo @$relig; ?>">
  </div>
  
  <button type="submit" name="update" class="btn btn-success">Update</button>
</form>
</div>
</div>
				
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['update'])){
			$edit_id1 = $_GET['edit_mcs_eve_a'];
			$name=$_POST['name']; 
			$roll=$_POST['roll']; 
			$cnic=$_POST['cnic'];
			$add=$_POST['add'];
			$cntct=$_POST['cntct'];
			$session=$_POST['session'];
			$fname=$_POST['fname'];
			$fcntct=$_POST['fcntct'];
			$nat=$_POST['nat'];
			$relig=$_POST['relig'];
			
			
		$que1 = "update mcs_eve_a set name='$name',roll='$roll',cnic='$cnic',address='$add',cntct='$cntct',session='$session',
		fname='$fname',fcntct='$fcntct',nationality='$nat',religion='$relig' where id='$edit_id1'";
			if(mysql_query($que1)){
				header('location:mcs_eve_a.php?edit=Data has been Updated Successfully!!!');
			}
	}

?>

