<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Education System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" name="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="focus.js" ></script>
<script type="text/javascript"src="pass_strength.js" > </script>
<link href="admin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.form-control{
	Demo:focus;	
}
.user{
	color:red;
}
.email{
	color:red;
}

.red{
	background:red;
	color:white;
	padding:0px 10px;	
}

.orange{
	background:orange;
	color:white;
	padding:0px 10px;	
}


.green{
	background:green;
	color:white;
	padding:0px 10px;	
}
	
.glyphicon{
	left:25px;
}
#login{
	left:10px;
}
.btn{
	left:100px;
}

</style>
</head>
<body>
	<div class="container">
		<div class="well">
		<center><h2><b>Create a New Account</b></h2></center><br>
		<center><h5>You have to sign up before proceed! Lets set up your account. Already have one?
		<a href="#signin" data-toggle="modal">Sign in here<span id="login" class="glyphicon glyphicon-log-in"></span></a>
		</h5></center><br>
		
		<form class="form-horizontal" method="post" action="">
  
  
  <div class="form-group">
  
    <label for="inputPassword3" class="col-sm-2 control-label">Name<span class="glyphicon glyphicon-user"></span></label>
	
    <div class="col-sm-10">
	
      
	  <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Doe" required>
	  <span class="user"></span>
	  
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email<span class="glyphicon glyphicon-envelope"></span></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="abc123@yahoo.com" required>
	  <span class="email"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password<span class="glyphicon glyphicon-pencil"></span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" required name="password" placeholder="Enter Your Password">
		<span class="pass"></span>
	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger" name="submit">Sign up</button>
    </div>
  </div>
  </form>
		</div>
		</div>
		<div class="modal fade" id="signin" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h3 class="heading2">Sign in</h3></div>
		</center>
		  <div class="form-group">
    <label for="email" >Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  name="email" placeholder="abc123@yahoo.com" required>
	 
    </div>
  </div>
  <div class="form-group">
    <label for="password" >Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="password" placeholder="Enter Your Password" required>
		
	</div>
  </div>
  
     <div class="btn"><button  type="submit" class="btn btn-info"  name="btn">Sign in</button></div>
   
		</form>
		</div>
		</div>
		</div>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['submit'])){
	 $name				=	$_POST['name']; 
	 $email				=	$_SESSION['email']=$_POST['email']; 
	 $password			=	$_POST['password'];
	
	
	
	if(($name=='') AND ($email=='') AND ($password==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from users where email='$email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into users (name,email,password)
	values('$name','$email','$password')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Your account has been created...Use your Email and Password to sign in')</script>";	
}
	}

	?>
	<?php
include("include/db.php");
if(isset($_POST['btn']))
{
	$email		=	$_SESSION['email']=$_POST['email'];
	$password	=	$_POST['password'];
$query="select * from users where 
email='$email' AND password='$password'";

$run=mysql_query($query);
if(mysql_num_rows($run)>0){
	header('Location: admissions_info.php');
}	

else{
echo"<script>alert('You are not a valid user...Email or Password is incorrect')
</script>";	
}
}
?>