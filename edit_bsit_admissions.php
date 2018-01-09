<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$id	=	@$_GET['edit_bsit_admission'];
		$que	=	"select * from bsit_admisson where id='$id'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			
	$id = $row['id'];
	$surname = $row['surname'];
	$name = $row['name'];
	$fname = $row['fname'];
	$prof = $row['prof'];
	$gender = $row['gender'];
	$cnic = $row['cnic'];
	$email = $row['email'];
	$day = $row['day'];
	$month = $row['month'];
	$year = $row['year'];
	$address= $row['address'];
	$city= $row['city'];
	$phone= $row['phone'];
	$mobile= $row['mobile'];
	$degree= $row['degree'];
	$marks= $row['marks'];
	$percent= $row['percent'];
	$college= $row['college'];
	$passing= $row['passing'];
	$nat= $row['nat'];
	$amount= $row['amount'];
	$deposit= $row['deposit'];
	$bank= $row['bank'];
	$details= $row['details'];
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
		<form method="post" action="edit_bsit_admission.php?edit_bsit_admission=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading2">Viewing BSIT Admissions</h2></div>
		</center><br />
		<h4>Personal Information:</h4>
		<div class="form-group">
		<label for="name3">Name of candidate:</label>
		
		 <input class="form-control" id="disabledInput" type="text"  value="<?php echo @$surname; ?><?php echo @$name; ?>" disabled>
		</div>
		
		<div class="form-group">
		<label for="name3">Father's Name:</label>
		<input class="form-control" id="disabledInput1" type="text"  value="<?php echo @$fname; ?>" disabled>
		</div>
		
		<div class="form-group">
		<label for="name3">Profession:</label>
		<input class="form-control" id="disabledInput2" type="text"  value="<?php echo @$prof; ?>" disabled>
		</div>
		<div class="form-group" >
		<label for="name3">Gender:</label>
		<input class="form-control" id="disabledInput3" type="text"  value="<?php echo @$gender; ?>" disabled>
		   </div>
		   		
		   <div class="form-group">
		<label for="name3">CNIC #:</label>
		<input class="form-control" id="disabledInput4" type="text"  value="<?php echo @$cnic; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Email:</label>
		<input class="form-control" id="disabledInput5" type="text"  value="<?php echo @$email; ?>" disabled>
		</div>
		
		<div class="form-group" >
		<label for="name3">Date of Birth:</label>
		<input class="form-control" id="disabledInput6" type="text"  value="<?php echo @$day; ?>-<?php echo @$month; ?>-<?php echo @$year; ?>" disabled>
		
			<div class="form-group">
		<label for="name3">Address:</label>
		<textarea class="form-control" id="disabledInput20" rows="3" type="text"  value="<?php echo @$address; ?>" disabled ></textarea>
		</div>
		
		<div class="form-group">
		<label for="name3">City:</label>
		<input class="form-control" id="disabledInput7" type="text"  value="<?php echo @$city; ?>" disabled>
		</div>
		
		<div class="form-group">
		<label for="name3">Phone #:</label>
		<input class="form-control" id="disabledInput8" type="text"  value="<?php echo @$phone; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Mobile #:</label>
		<input class="form-control" id="disabledInput9" type="text"  value="<?php echo @$mobile; ?>" disabled>
		</div>
		<span class="mobile"></span>
		<h4>Educational Qualification:</h4>
		<div class="form-group">
		<label for="name3">Last Degree:</label>
		<input class="form-control" id="disabledInput10" type="text"  value="<?php echo @$degree; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Marks in Last Degree:</label>
		<input class="form-control" id="disabledInput11" type="text"  value="<?php echo @$marks; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Percentage in Last Degree:</label>
		<input class="form-control" id="disabledInput12" type="text"  value="<?php echo @$percent; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">College/University:</label>
		<input class="form-control" id="disabledInput13" type="text"  value="<?php echo @$college; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Year of Passing:</label>
		<input class="form-control" id="disabledInput14" type="text"  value="<?php echo @$passing; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Marks in NAT:</label>
		<input class="form-control" id="disabledInput15" type="text"  value="<?php echo @$nat; ?>" disabled>
		</div>
		<h4>Fee:</h4>
		<div class="form-group">
		<label for="name3">Amount:</label>
		<input class="form-control" id="disabledInput16" type="text"  value="<?php echo @$amount; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Deposit Date:</label>
		<input class="form-control" id="disabledInput17" type="text"  value="<?php echo @$deposit; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Bank & Branch Name:</label>
		<input class="form-control" id="disabledInput18" type="text"  value="<?php echo @$bank; ?>" disabled>
		</div>
		<div class="form-group">
		<label for="name3">Details if any:</label>
		<textarea class="form-control" id="disabledInput19" rows="3" type="text"  value="<?php echo @$details; ?>" disabled ></textarea>
		</div>
		
		</form>
		</div>
		</div>
		</div>
		</div>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-primary btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
				
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				<li><a href="bsit_admissions.php">BSIT ADMISSIONS</a></li>
				</ul>
				</div>
				</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
				</body>
				