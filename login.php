<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Education System</title>
<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
	$('.tip').tooltip({
			show:'slideDown',
			hide:'fade',
			
		});
});

</script>
<style type="text/css">
.ui-tooltip{
		background:red;
		color:white;
	}
</style>
</head>

<body>
<div id="header_container">
<div id="header">
  <a href="index.php" ><img src="images/logo.gif" alt="Education System" title="Education System" border="0" class="tip" /></a>
  <ul>
    <li ><a href="index.php" title="Home" class="tip">Home</a> </li>
     <li ><a href="gallery.php" title="Gallery" class="tip">Gallery</a></li>
     <li ><a href="services.php" title="Services" class="tip">Services</a></li>
	  <li ><a href="contact.php" title="Contact Us" class="tip">Contact Us</a></li>
	   <li class="login"><a href="login.php" title="Login" class="tip">Login</a></li>
	   <li ><a href="admission.php" title="Admissions" class="tip">Admissions</a> </li>
	   
  </ul>
 <h1></h1>  
  </div>
</div>


<div id="bodymiddlePan">
	<h2>Login</h2>
	<div id="body1"><form action="" method="post" >
	<label>Student Login:</label>
	<input name="name" type="text" id="yourname" placeholder="Enter Your Name"  required/>
	<input name="password" type="password" id="password" placeholder="Enter Your Password" required />
	<input name="submit" type="submit" class="botton" value="GO"/>
</form>

</div>
<div id="body1"><form action="" method="post" >
	<label>Feculty Login:</label>
	<input name="name" type="text" id="yourname" placeholder="Enter Your Name"  required/>
	<input name="password" type="password" id="password" placeholder="Enter Your Password" required />
	<input name="submit" type="submit" class="botton" value="GO"/>
</form>

</div>
<div id="body1"><form action="" method="post" >
	<label>Employe Login:</label>
	<input name="name" type="text" id="yourname" placeholder="Enter Your Name"  required/>
	<input name="password" type="password" id="password" placeholder="Enter Your Password" required />
	<input name="submit" type="submit" class="botton" value="GO"/>
</form>

</div>
<div id="body1"><form action="" method="post" >
	<label>Admin Login:</label>
	<input name="name" type="text" id="yourname" placeholder="Enter Your Name"  required/>
	<input name="password" type="password" id="password" placeholder="Enter Your Password" required />
	<input name="submit" type="submit" class="botton" value="GO"/>
</form>

</div>
	
</div>



<div id="bodyBottomPan">
  <div id="servicesPan">
  	<h2>News</h2>
	<p class="view"><a href="news.php" class="tip" title="News">view</a></p>
  </div>
  <div id="schedulePan">
  	<h2>Notices</h2>
	<p class="view"><a href="notices.php" class="tip" title="Notices">view</a></p>
  </div>
</div>

<div id="footermainPan">
  <div id="footerPan">
  	<div id="footerlogoPan"><a href="index.php" class="tip"><img src="images/footerlogo.gif" title="Education System" alt="Education System" width="290" height="36" border="0" /></a></div>
	<ul>
  	<li ><a href="index.php" title="Home" class="tip">Home</a>|</li>
     <li ><a href="gallery.php" title="Gallery" class="tip">Gallery</a>|</li>
     <li ><a href="services.php" title="Services" class="tip">Services</a>|</li>
	  <li ><a href="contact.php" title="Contact Us" class="tip">Contact Us</a>|</li>
	   <li><a href="login.php" title="Login" class="tip">Login</a></li>
	</ul>
	<p> ©Education System. All Right Reserved.</p>
	 </div>
</div>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['submit']))
{
	$admin_name=$_SESSION['name']=$_POST['name'];
	$admin_pass=$_POST['password'];
$query="select * from admin where 
username='$admin_name' AND password='$admin_pass'";

$result = mysqli_query($con, "select * from admin where username='$admin_name' AND password='$admin_pass'"); 

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

if($row_cnt > 0){
	header('Location: admin.php');
}	

else{
echo"<script>alert('User name or Password is incorrect')
</script>";	
}
}
?>
