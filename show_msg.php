<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$id	=	@$_GET['show_msg'];
		$que	=	"select * from user_msg where id='$id'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$msg = $row['msg'];
	
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
		<form method="post" action="show_msg.php?show_msg=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading2">Viewing User Messages</h2></div>
		</center><br />

		<div class="form-group">
		<label for="name3">Name:</label>
		
		 <input class="form-control" id="disabledInput" type="text"  value="<?php echo @$name; ?>" disabled>
		</div>
		
		<div class="form-group">
		<label for="name3">Email:</label>
		<input class="form-control" id="disabledInput1" type="text"  value="<?php echo @$email; ?>" disabled>
		</div>
		
		<div class="form-group">
		<label for="name3">Message:</label>
		<input class="form-control" id="disabledInput18" type="text"  value="<?php echo @$msg; ?>" disabled>
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
				<li><a href="user_msgs.php">User Messages</a></li>
				
				</ul>
				</div>
				</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
				</body>
		