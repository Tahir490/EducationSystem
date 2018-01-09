<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_clerk_emp'];
		$que	=	"select * from clerk_emp where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id = $row['id'];
			$cler_emp_name			=	$row['name']; 
	$cler_emp_cnic					=	$row['cnic']; 
	$cler_emp_address				=	$row['addr'];
	$cler_emp_cntct					=	$row['contact'];
	$cler_emp_email					=	$row['email'];
	$cler_emp_designation			=	$row['desig'];
	$cler_emp_hours					=	$row['hours'];
	$cler_emp_year					=	$row['year'];
	$cler_emp_salary				=	$row['salary'];
	$cler_emp_religion				=	$row['religion'];
	$cler_emp_nationality			=	$row['nationality'];
	$cler_emp_assisstent			=	$row['assistent_to'];
	$cler_emp_shift					=	$row['shift'];
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
		<form method="post" action="edit_clerk_emp.php?edit_clerk_emp=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading2">Updating Clerical Employees' Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="cler_emp_name">Employee Name:</label>
    <input type="text" name="cler_emp_name" class="form-control" id="cler_emp_name" value="<?php echo @$cler_emp_name; ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="cler_emp_cnic" id="cler_emp_cnic" value="<?php echo @$cler_emp_cnic; ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_address">Address:</label>
    <input type="text" name="cler_emp_address" class="form-control" id="cler_emp_address" value="<?php echo @$cler_emp_address; ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_cntct">Contact:</label>
    <input type="text" name="cler_emp_cntct" class="form-control" id="cler_emp_cntct" value="<?php echo @$cler_emp_cntct; ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_email">Email:</label>
    <input type="text" name="cler_emp_email" class="form-control" id="cler_emp_email" value="<?php echo @$cler_emp_email; ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_designation">Designation:</label>
    <input type="text" name="cler_emp_designation" class="form-control" id="cler_emp_designation" value="<?php echo @$cler_emp_designation; ?>">
  </div>
  
  <div class="form-group">
    <label for="cler_emp_hours">Working Hours:</label>
    <input type="text" name="cler_emp_hours" class="form-control" id="cler_emp_hours" value="<?php echo @$cler_emp_hours ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_year">Joining Year:</label>
    <input type="text" name="cler_emp_year" class="form-control" id="cler_emp_year" value="<?php echo @$cler_emp_year ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_salary">Salary:</label>
    <input type="text" name="cler_emp_salary" class="form-control" id="cler_emp_salary" value="<?php echo @$cler_emp_salary ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_religion">Religion:</label>
    <input type="text" name="cler_emp_religion" class="form-control" id="cler_emp_religion" value="<?php echo @$cler_emp_religion ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_nationality">Nationality:</label>
    <input type="text" name="cler_emp_nationality" class="form-control" id="cler_emp_nationality" value="<?php echo @$cler_emp_nationality ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_assisstent">Assisstent to:</label>
    <input type="text" name="cler_emp_assisstent" class="form-control" id="cler_emp_assisstent" value="<?php echo @$cler_emp_assisstent ?>">
  </div>
  <div class="form-group">
    <label for="cler_emp_shift">Shift:</label>
    <input type="text" name="cler_emp_shift" class="form-control" id="cler_emp_shift" value="<?php echo @$cler_emp_shift ?>">
  </div>
  
  <button type="submit" name="edit_clerk_emp_btn" class="btn btn-primary">Update</button>
</form>
</div>
</div>
				
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>

<?php
include("include/db.php");
if(isset($_POST['edit_clerk_emp_btn'])){
	$edit_id1 = $_GET['edit_clerk_emp'];
	$cler_emp_name					=	$_POST['cler_emp_name']; 
	$cler_emp_cnic					=	$_POST['cler_emp_cnic']; 
	$cler_emp_address				=	$_POST['cler_emp_address'];
	$cler_emp_cntct					=	$_POST['cler_emp_cntct'];
	$cler_emp_email					=	$_POST['cler_emp_email'];
	$cler_emp_designation			=	$_POST['cler_emp_designation'];
	$cler_emp_hours					=	$_POST['cler_emp_hours'];
	$cler_emp_year					=	$_POST['cler_emp_year'];
	$cler_emp_salary				=	$_POST['cler_emp_salary'];
	$cler_emp_religion				=	$_POST['cler_emp_religion'];
	$cler_emp_nationality			=	$_POST['cler_emp_nationality'];
	$cler_emp_assisstent			=	$_POST['cler_emp_assisstent'];
	$cler_emp_shift					=	$_POST['cler_emp_shift'];
			
			
		$que1 = "update clerk_emp set name='$cler_emp_name',cnic='$cler_emp_cnic',addr='$cler_emp_address',
		contact='$cler_emp_cntct',email='$cler_emp_email',desig='$cler_emp_designation',hours='$cler_emp_hours',
		year='$cler_emp_year',salary='$cler_emp_salary',religion='$cler_emp_religion',nationality='$cler_emp_nationality',
		assistent_to='$cler_emp_assisstent',shift='$cler_emp_shift' 
		where id='$edit_id1'";
			if(mysql_query($que1)){
				header('location:clerk_emp.php?edit=Data has been Updated Successfully!!!');
			}
	}

?>

