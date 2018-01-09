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
		<div id="dropdown" class="dropdown">
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
		<div id="dropdown1" class="dropdown">
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
		
		<form method="post" action=""  enctype="multipart/form-data">
		
		<center>
			<div><h2 class="heading1">Admission Form for MCS</h2></div>
		</center>
		<p class="bg-primary">Apply Online here</p>
		<p class="bg-danger">For by hand submission, fill out the form here and then click on the print button below</p>
		<p class="bg-success">Please fill the form to proceed</p>
		
		<h4>Personal Information:</h4>
		<div class="form-group">
		<label for="name3">Name of candidate:</label>
		<select class="form-control" id="option" name="option">
		  <option>Mr.</option>
		  <option>Miss.</option>
		  <option>Mrs.</option>
		   </select>
		 <div class="input"><input type="text" class="form-control" id="name" name="name" required></div>
		</div>
		<span class="name"></span>
		<div class="form-group">
    <label for="name3">Student Pic:</label>
    <div class="input1"><input type="file" name="image" class="form-control" id="img"  required></div>
	
  </div>
		<div class="form-group">
		<label for="name3">Father's Name:</label>
		<div class="input1"><input type="text" class="form-control" id="fname" name="fname" required></div>
		</div>
		<span class="fname"></span>
		<div class="form-group">
		<label for="name3">Profession:</label>
		<div class="input1"><input type="text" class="form-control" name="prof" required></div>
		</div>
		<div class="form-group" >
		<label for="name3">Gender:</label>
		<select class="form-control" id="input2" name="gender" required >
		  <option>Male</option>
		  <option>Female</option>
		   </select>
		   </div>
		   		
		   <div class="form-group">
		<label for="name3">CNIC #:</label>
		<div class="input1"><input type="text" class="form-control" maxlength="15" name="cnic" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Email:</label>
		<div class="input1"><input type="text" class="form-control" id="email" name="email" required></div>
		</div>
		<span class="email"></span>
		<div class="form-group" >
		<label for="name3">Date of Birth:</label>
		<select class="form-control" id="input3" name="day" >
		  <option>Day</option>
		  <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
		  <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
		  <option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
		  <option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
		  <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
		   <option>31</option>
		   </select>
		<select class="form-control" id="input4"  name="month" >
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
		   
		  
		   <select class="form-control" id="input5" name="year" >
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
		<div class="input1"><textarea class="form-control" rows="3" id="address" name="address"></textarea required></div>
		</div>
		<span class="address"></span>
		<div class="form-group">
		<label for="name3">City:</label>
		<div class="input1"><input type="text" class="form-control" id="city" name="city" required></div>
		</div>
		<span class="city"></span>
		<div class="form-group">
		<label for="name3">Phone #:</label>
		<div class="input1"><input type="text" class="form-control" maxlength="12" name="phone" placeholder="Example:068-1234567 or 0300-1234567" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Mobile #:</label>
		<div class="input1"><input type="text" class="form-control" maxlength="12" id="mobile" name="mobile" placeholder="Example:068-1234567 or 0300-1234567" required></div>
		</div>
		<span class="mobile"></span>
		<h4>Educational Qualification:</h4>
		<div class="form-group">
		<label for="name3">Last Degree:</label>
		<div class="input1"><input type="text" class="form-control" name="degree" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Marks in Last Degree:</label>
		<div class="input1"><input type="text" class="form-control" name="marks" required ></div>
		</div>
		<div class="form-group">
		<label for="name3">Percentage in Last Degree:</label>
		<div class="input1"><input type="text" class="form-control" name="percent" required></div>
		</div>
		<div class="form-group">
		<label for="name3">College/University:</label>
		<div class="input1"><input type="text" class="form-control" name="college" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Year of Passing:</label>
		<div class="input1"><input type="text" class="form-control" maxlength="4" name="passing" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Marks in NAT:</label>
		<div class="input1"><input type="text" class="form-control" name="nat" required ></div>
		</div>
		<h4>Fee:</h4>
		<div class="form-group">
		<label for="name3">Amount:</label>
		<div class="input1"><input type="text" class="form-control" name="amount" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Deposit Date:</label>
		<div class="input1"><input type="text" class="form-control" name="deposit" required ></div>
		</div>
		<div class="form-group">
		<label for="name3">Bank & Branch Name:</label>
		<div class="input1"><input type="text" class="form-control" name="bank" required></div>
		</div>
		<div class="form-group">
		<label for="name3">Details if any:</label>
		<div class="input1"><textarea class="form-control" rows="3" name="details" ></textarea></div>
		</div>
		<button type="submit" class="btn btn-primary"  name="mcs_btn">Submit</button>
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
if(isset($_POST['mcs_btn'])){
	$option			=	$_POST['option']; 
	$name			=	$_POST['name']; 
	 if(isset($_FILES['image'])){
      $errors= array();
       function GetImageExtension($imgtype)
 {
	if(empty($imgtype)) return false;
	switch($imgtype)
	{	
	case 'image/bmp': return '.bmp';
	case 'image/gif': return '.gif';
	case 'image/jpeg': return '.jpg';
	case 'image/png': return '.png';
	default: return false;
		}
	}	
	if (!empty($_FILES["image"]["name"])) {
		$file_name=$_FILES["image"]["name"];
		$temp_name=$_FILES["image"]["tmp_name"];
		$imgtype=$_FILES["image"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;
		
   }
   }
	$fname			=	$_POST['fname']; 
	$prof			=	$_POST['prof'];
	$gender			=	$_POST['gender'];
	$cnic			=	$_POST['cnic'];
	$email			=	$_POST['email'];
	$day			=	$_POST['day'];
	$month			=	$_POST['month'];
	$year			=	$_POST['year'];
	$address		=	$_POST['address'];
	$city			=	$_POST['city'];
	$phone			=	$_POST['phone']; 
	$mobile			=	$_POST['mobile']; 
	$degree			=	$_POST['degree'];
	$marks			=	$_POST['marks'];
	$percent		=	$_POST['percent'];
	$college		=	$_POST['college'];
	$passing		=	$_POST['passing'];
	$nat			=	$_POST['nat'];
	$amount			=	$_POST['amount'];
	$deposit		=	$_POST['deposit'];
	$bank			=	$_POST['bank'];
	$details		=	$_POST['details'];
	
	
	if(($option=='') AND($name=='') AND ($fname=='') AND ($prof=='') AND ($gender=='') AND ($cnic=='') 
		AND ($email=='') AND ($day=='') AND ($month=='') AND ($year=='')
		AND ($address=='') AND ($city=='') AND ($phone=='') AND ($mobile=='')
		AND ($degree=='') AND ($marks=='') AND ($percent=='') AND ($college=='')
		AND ($passing=='') AND ($nat=='') AND ($amount=='') AND ($deposit=='')
		AND ($bank=='') AND ($details==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_admisson where email='$email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_admisson (surname,name,img_path,Time,fname,prof,gender,cnic,email,day,month,year,address,city,phone,
	mobile,degree,marks,percent,college,passing,nat,amount,deposit,bank,details)
	values('$option','$name','".$target_path."','".date("Y-m-d")."','$fname','$prof','$gender','$cnic','$email','$day','$month','$year','$address','$city'
	,'$phone','$mobile','$degree','$marks','$percent','$college','$passing','$nat','$amount','$deposit'
	,'$bank','$details')";
	
	if(move_uploaded_file($temp_name, $target_path)) {
		
		mysql_query($query) or die("error in $query == ----> ".mysql_error()); 
		echo "<script>alert('Data has been inserted...')</script>";	
	} 
	else{
		exit("Error While uploading image on the server");
	}
	}

	?>