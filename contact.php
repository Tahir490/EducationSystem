<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Education System</title>
<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="contact.css" rel="stylesheet" type="text/css" />
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
	<h2>Contact Us</h2>
	<p></p>
	<p></p>
	<p></p>
</div>
<header class="body">
    </header>

    <section class="body">
	
	<form method="post">
        
    <label>Name*</label>
    <input name="name" placeholder="Type Here" required>
            
    <label>Email*</label>
    <input name="email" type="email" placeholder="Type Here" required>
            
    <label>Message*</label>
    <textarea name="message" placeholder="Type Here" required></textarea>
	<label>*What is 2+2? (Anti-spam)</label>
<input name="human" placeholder="Type Here" required>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>
    </section>

    <footer class="body">
	<div id="footer" >
	<h2>Contact No:+92-333-5052424<h2>
	<h2>E-Mail:sabeeumer54@gmail.com<h2>
	
	</div>
    </footer>

</body>

</html>
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
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $from = 'From: Tahir'; 
    $to = 'tahir.jutt9089@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
   if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) {
	$query = "insert into user_msg (name,email,msg,antispam)
	values('$name','$email','$msg','$human')";
				if(mysql_query($query))
	{	
		echo "<script>alert('Message has been sent successfully...')</script>";	
}
			
	        
	    } else { 
	        echo "<script>alert('Something went wrong, go back and try again!')</script>"; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	   echo "<script>alert('You answered the anti-spam question incorrectly!')</script>";
	}
    } else {
        echo "<script>alert('You need to fill all required fields!!')</script>";    
		}
}
}
?>