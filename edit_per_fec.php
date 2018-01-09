<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_per_fec'];
		$que	=	"select * from per_teacher where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
						$id	 			= 	$row['id'];
			$edit_per_fec_name				=	$row['name']; 
			$edit_per_fec_cnic				=	$row['cnic']; 
			$edit_per_fec_address			=	$row['addr'];
			$edit_per_fec_contact			=	$row['contact'];
			$edit_per_fec_email				=	$row['email'];
			$edit_per_fec_quali				=	$row['quali'];
			$edit_per_fec_relig				=	$row['relig'];
			$edit_per_fec_nat				=	$row['nationality'];
			$edit_per_fec_join				=	$row['joining'];
			$edit_per_fec_sal				=	$row['sal'];
			$edit_per_fec_post				=	$row['post'];
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
		<form method="post" action="edit_per_fec.php?edit_per_fec=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading">Updating Permanent Faculty's Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="name">Teacher Name:</label>
    <input type="text" class="form-control" name="name" id="name"  value="<?php echo @$edit_per_fec_name; ?>" >
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" name="cnic" class="form-control" id="cnic"  value="<?php echo @$edit_per_fec_cnic; ?>">
  </div>
  <div class="form-group">
    <label for="addr">Address:</label>
    <input type="text" name="addr" class="form-control" id="addr"  value="<?php echo @$edit_per_fec_address; ?>">
  </div>
  <div class="form-group">
    <label for="cntct">Contact:</label>
    <input type="text" name="cntct" class="form-control" id="cntct"  value="<?php echo @$edit_per_fec_contact; ?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" id="email"  value="<?php echo @$edit_per_fec_email; ?>">
  </div>
  <div class="form-group">
    <label for="quali">Qualification:</label>
    <input type="text" name="quali" class="form-control" id="quali"  value="<?php echo @$edit_per_fec_quali; ?>">
  </div>
  <div class="form-group">
    <label for="relig">Religion:</label>
    <input type="text" name="relig" class="form-control" id="relig"  value="<?php echo @$edit_per_fec_relig; ?>">
  </div>
  <div class="form-group">
    <label for="nat">Nationality:</label>
    <input type="text" name="nat" class="form-control" id="nat"  value="<?php echo @$edit_per_fec_nat; ?>">
  </div>
  <div class="form-group">
    <label for="joining">Joining:</label>
    <input type="text" name="joining" class="form-control" id="joining"  value="<?php echo @$edit_per_fec_join; ?>">
  </div>
  <div class="form-group">
    <label for="sal">Salary:</label>
    <input type="text" name="sal" class="form-control" id="sal"  value="<?php echo @$edit_per_fec_sal; ?>">
  </div>
  <div class="form-group">
    <label for="post">Post:</label>
    <input type="text" name="post" class="form-control" id="post"  value="<?php echo @$edit_per_fec_post; ?>">
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
			$edit_id1 = $_GET['edit_per_fec'];
			$edit_per_fec_name				=	$_POST['name']; 
			$edit_per_fec_cnic				=	$_POST['cnic']; 
			$edit_per_fec_address			=	$_POST['addr'];
			$edit_per_fec_contact			=	$_POST['cntct'];
			$edit_per_fec_email				=	$_POST['email'];
			$edit_per_fec_quali				=	$_POST['quali'];
			$edit_per_fec_relig				=	$_POST['relig'];
			$edit_per_fec_nat				=	$_POST['nat'];
			$edit_per_fec_join				=	$_POST['joining'];
			$edit_per_fec_sal				=	$_POST['sal'];
			$edit_per_fec_post				=	$_POST['post'];
			
			
		$que1 = "update per_teacher set name='$edit_per_fec_name',cnic='$edit_per_fec_cnic',addr='$edit_per_fec_address',
		contact='$edit_per_fec_contact',email='$edit_per_fec_email',quali='$edit_per_fec_quali',relig='$edit_per_fec_quali',
		nationality='$edit_per_fec_nat',joining='$edit_per_fec_join',sal='$edit_per_fec_sal',post='$edit_per_fec_post' where id='$edit_id1'";
			if(mysql_query($que1)){
				header('location:per_fec.php?edit=Data has been Updated Successfully!!!');
			}
	}

?>

