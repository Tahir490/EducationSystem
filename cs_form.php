<?php
session_start();
if(!$_SESSION['email']){
	header('location:login.php?error=You are not an administrator!!');
}
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
	<script type="text/javascript" src="admissions_info.js"></script>
	<link href="admin.css" rel="stylesheet" type="text/css" />
	<link href="admissions_info.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	.table{
		margin-top:-200px;
	
	position: relative;
    left: -380px;
		}
	.table1{
		margin-top:-300px;
	
	position: relative;
    right: 200px;
		
	}
	</style>
	<script>
		function myFunction() {
        window.print('');
}
</script>
</head>
<body>

	
<table class="table" >
  <tr>
  	<td>
		<div id="dropdown3" class="dropdown">
		 <button class="btn btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span></button>
			 <ul class="dropdown-menu">
			 <li><a href="admissions_info.php" >Admission Page</a></li>
			 <li class="divider"></li>
			 <li><a href="index.php" >Home Page</a></li>
			 </ul>
			 </div>
	</td>
	
  </tr>
</table>
	<table class="table1" >
  <tr>
  	<td>
		<div id="dropdown4" class="dropdown">
		 <button class="btn btn btn-danger btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
			 Download your Chalan form here <span class="caret"></span></button>
			 <ul class="dropdown-menu">
			 <li><a href="challan.pdf" download>In Pdf</a> </li>
			 <li class="divider"></li>
			 <li><a href="challan.docx" >In Doc</a></li>
			 </ul>
			 </div>
	</td>
  </tr>
</table>
		<div class="container">
		<div class="well">
		<form method="post" action="">
		
		<center>
			<div><h2 class="heading1">Admission Form for BSCS</h2></div>
		</center>
		<p class="bg-primary">Apply Online here</p>
		<p class="bg-danger">For by hand submission, fill out the form here and then click on the print button below</p>
		<p class="bg-success">Please fill the form to proceed</p>
		<h4>Personal Information:</h4>
		<div class="form-group">
		<label for="name3">Name of candidate:</label>
		<select class="form-control" id="option1" name="option1">
		  <option>Mr.</option>
		  <option>Miss.</option>
		  <option>Mrs.</option>
		   </select>
		 <div class="input11"><input type="text" class="form-control" id="name1" name="name1" required></div>
		</div>
		<span class="name1"></span>
		<div class="form-group">
		<label for="name3">Father's Name:</label>
		<div class="input12"><input type="text" class="form-control" id="fname1" name="fname1" required></div>
		</div>
		<span class="fname1"></span>
		<div class="form-group">
		<label for="name3">Profession:</label>
		<div class="input12"><input type="text" class="form-control" name="prof1" required></div>
		</div>
		<div class="form-group" >
		<label for="name3">Gender:</label>
		<select class="form-control" id="input22" name="gender1" required>
		  <option>Male</option>
		  <option>Female</option>
		   </select>
		   </div>
		   		
		   <div class="form-group">
		<label for="name3">CNIC #:</label>
		<div class="input12"><input type="text" class="form-control" maxlength="15" name="cnic1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Email:</label>
		<div class="input12"><input type="text" class="form-control" id="email1" name="email1" required></div>
		</div>
		<span class="email1"></span>
		<div class="form-group" >
		<label for="name3">Date of Birth:</label>
		<select class="form-control" id="input33" name="day1" >
		  <option>Day</option>
		  <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
		  <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
		  <option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
		  <option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
		  <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
		   <option>31</option>
		   </select>
		<select class="form-control" id="input44"  name="month1" >
		  <option>Month</option>
		  <option>January</option>
		  <option>February</option>
		  <option>March</option>
		  <option>April</option>
		  <option>May</option>
		  <option>June</option>
		  <option>July</option>
		  <option>August</option>
		  <option>September</option>
		  <option>October</option>
		  <option>November</option>
		  <option>December</option>
		   </select>
		   
		  
		   <select class="form-control" id="input55" name="year1" >
		  <option>Year</option>
		  <option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option>
		  <option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option>
		  <option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option>
		  <option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option>
		  <option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option>
		  <option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option>
		   </select>
		   
		    </div>
			<div class="form-group">
		<label for="name3">Address:</label>
		<div class="input12"><textarea class="form-control" rows="3" id="address1" name="address1" required></textarea></div>
		</div>
		<span class="address1"></span>
		<div class="form-group">
		<label for="name3">City:</label>
		<div class="input12"><input type="text" class="form-control" id="city1" name="city1" required></div>
		</div>
		<span class="city1"></span>
		<div class="form-group">
		<label for="name3">Phone #:</label>
		<div class="input12"><input type="text" class="form-control" maxlength="12" name="phone1" placeholder="Example:068-1234567 or 0300-1234567" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Mobile #:</label>
		<div class="input12"><input type="text" class="form-control" maxlength="12" id="mobile1" name="mobile1" placeholder="Example:068-1234567 or 0300-1234567" required></div>
		</div>
		<span class="mobile1"></span>
		<h4>Educational Qualification:</h4>
		<div class="form-group">
		<label for="name3">Last Degree:</label>
		<div class="input12"><input type="text" class="form-control" name="degree1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Marks in Last Degree:</label>
		<div class="input12"><input type="text" class="form-control" name="marks1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Percentage in Last Degree:</label>
		<div class="input12"><input type="text" class="form-control" name="percent1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">College/University:</label>
		<div class="input12"><input type="text" class="form-control" name="college1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Year of Passing:</label>
		<div class="input12"><input type="text" class="form-control" maxlength="12" name="passing1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Marks in NAT:</label>
		<div class="input12"><input type="text" class="form-control" name="nat1" required></div>
		</div>
		<h4>Fee:</h4>
		<div class="form-group">
		<label for="name3">Amount:</label>
		<div class="input12"><input type="text" class="form-control" name="amount1" required ></div>
		</div>
		<div class="form-group">
		<label for="name3">Deposit Date:</label>
		<div class="input12"><input type="text" class="form-control" name="deposit1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Bank & Branch Name:</label>
		<div class="input12"><input type="text" class="form-control" name="bank1" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Details if any:</label>
		<div class="input12"><textarea class="form-control" rows="3" name="details1" ></textarea></div>
		</div>
		<button type="submit" class="btn btn-primary"  name="bscs_btn">Submit</button>
		<button type="submit" class="btn btn-primary" onclick="myFunction('')">Print this page</button>
		</form>
		</div>
		</div>
				
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
include("include/db.php");
if(isset($_POST['bscs_btn'])){
	$option1			=	$_POST['option1'];
	$name1			=	$_POST['name1']; 
	$fname1			=	$_POST['fname1']; 
	$prof1			=	$_POST['prof1'];
	$gender1			=	$_POST['gender1'];
	$cnic1			=	$_POST['cnic1'];
	$email1			=	$_POST['email1'];
	$day1			=	$_POST['day1'];
	$month1			=	$_POST['month1'];
	$year1			=	$_POST['year1'];
	$address1		=	$_POST['address1'];
	$city1			=	$_POST['city1'];
	$phone1			=	$_POST['phone1']; 
	$mobile1			=	$_POST['mobile1']; 
	$degree1			=	$_POST['degree1'];
	$marks1			=	$_POST['marks1'];
	$percent1		=	$_POST['percent1'];
	$college1		=	$_POST['college1'];
	$passing1		=	$_POST['passing1'];
	$nat1			=	$_POST['nat1'];
	$amount1			=	$_POST['amount1'];
	$deposit1		=	$_POST['deposit1'];
	$bank1			=	$_POST['bank1'];
	$details1		=	$_POST['details1'];
	
	
	if(($option=='') AND ($name1=='') AND ($fname1=='') AND ($prof1=='') AND ($gender1=='') AND ($cnic1=='') 
		AND ($email1=='') AND ($day1=='') AND ($month1=='') AND ($year1=='')
		AND ($address1=='') AND ($city1=='') AND ($phone1=='') AND ($mobile1=='')
		AND ($degree1=='') AND ($marks1=='') AND ($percent1=='') AND ($college1=='')
		AND ($passing1=='') AND ($nat1=='') AND ($amount1=='') AND ($deposit1=='')
		AND ($bank1=='') AND ($details1==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from bscs_admisson where email='$email1'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into bscs_admisson (surname,name,fname,prof,gender,cnic,email,day,month,year,address,city,phone,
	mobile,degree,marks,percent,college,passing,nat,amount,deposit,bank,details)
	values('$option1','$name1','$fname1','$prof1','$gender1','$cnic1','$email1','$day1','$month1','$year1','$address1','$city1'
	,'$phone1','$mobile1','$degree1','$marks1','$percent1','$college1','$passing1','$nat1','$amount1','$deposit1'
	,'$bank1','$details1')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Your form has been sent.Thanks...')</script>";	
}
	}

	?>