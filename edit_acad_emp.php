<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_acad_emp'];
		$que	=	"select * from acad_emp where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id = $row['id'];
			$acad_emp_name			=	$row['name']; 
	$acad_emp_cnic					=	$row['cnic']; 
	$acad_emp_address				=	$row['addr'];
	$acad_emp_cntct					=	$row['contact'];
	$acad_emp_email					=	$row['email'];
	$acad_emp_designation			=	$row['desig'];
	$acad_emp_hours					=	$row['hours'];
	$acad_emp_year					=	$row['year'];
	$acad_emp_salary				=	$row['salary'];
	$acad_emp_religion				=	$row['religion'];
	$acad_emp_nationality			=	$row['nationality'];
	$acad_emp_assisstent			=	$row['assistent_to'];
	$acad_emp_shift					=	$row['shift'];
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
		<form method="post" action="edit_acad_emp.php?edit_acad_emp=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading">Updating Academic Employees' Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="acad_emp_name">Employee Name:</label>
    <input type="text" name="acad_emp_name" class="form-control" id="acad_emp_name" value="<?php echo @$acad_emp_name; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="acad_emp_cnic" id="acad_emp_cnic" value="<?php echo @$acad_emp_cnic; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_address">Address:</label>
    <input type="text" name="acad_emp_address" class="form-control" id="acad_emp_address" value="<?php echo @$acad_emp_address; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_cntct">Contact:</label>
    <input type="text" name="acad_emp_cntct" class="form-control" id="acad_emp_cntct" value="<?php echo @$acad_emp_cntct; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_email">Email:</label>
    <input type="text" name="acad_emp_email" class="form-control" id="acad_emp_email" value="<?php echo @$acad_emp_email; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_designation">Designation:</label>
    <input type="text" name="acad_emp_designation" class="form-control" id="acad_emp_designation" value="<?php echo @$acad_emp_designation; ?>">
  </div>
  
  <div class="form-group">
    <label for="acad_emp_hours">Working Hours:</label>
    <input type="text" name="acad_emp_hours" class="form-control" id="acad_emp_hours" value="<?php echo @$acad_emp_hours; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_year">Joining Year:</label>
    <input type="text" name="acad_emp_year" class="form-control" id="acad_emp_year" value="<?php echo @$acad_emp_year; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_salary">Salary:</label>
    <input type="text" name="acad_emp_salary" class="form-control" id="acad_emp_salary" value="<?php echo @$acad_emp_salary; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_religion">Religion:</label>
    <input type="text" name="acad_emp_religion" class="form-control" id="acad_emp_religion" value="<?php echo @$acad_emp_religion; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_nationality">Nationality:</label>
    <input type="text" name="acad_emp_nationality" class="form-control" id="acad_emp_nationality" value="<?php echo @$acad_emp_nationality; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_assisstent">Assisstent to:</label>
    <input type="text" name="acad_emp_assisstent" class="form-control" id="acad_emp_assisstent" value="<?php echo @$acad_emp_assisstent; ?>">
  </div>
  <div class="form-group">
    <label for="acad_emp_shift">Shift:</label>
    <input type="text" name="acad_emp_shift" class="form-control" id="acad_emp_shift" value="<?php echo @$acad_emp_shift; ?>">
  </div>
  
  
  <button type="submit" name="edit_acad_emp_btn" class="btn btn-success">Update</button>
</form>
</div>
</div>
				
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>

<?php
include("include/db.php");
if(isset($_POST['edit_acad_emp_btn'])){
	$edit_id1 = $_GET['edit_acad_emp'];
	$acad_emp_name					=	$_POST['acad_emp_name']; 
	$acad_emp_cnic					=	$_POST['acad_emp_cnic']; 
	$acad_emp_address				=	$_POST['acad_emp_address'];
	$acad_emp_cntct					=	$_POST['acad_emp_cntct'];
	$acad_emp_email					=	$_POST['acad_emp_email'];
	$acad_emp_designation			=	$_POST['acad_emp_designation'];
	$acad_emp_hours					=	$_POST['acad_emp_hours'];
	$acad_emp_year					=	$_POST['acad_emp_year'];
	$acad_emp_salary				=	$_POST['acad_emp_salary'];
	$acad_emp_religion				=	$_POST['acad_emp_religion'];
	$acad_emp_nationality			=	$_POST['acad_emp_nationality'];
	$acad_emp_assisstent			=	$_POST['acad_emp_assisstent'];
	$acad_emp_shift					=	$_POST['acad_emp_shift'];
			
			
		$que1 = "update acad_emp set name='$acad_emp_name',cnic='$acad_emp_cnic',addr='$acad_emp_address',
		contact='$acad_emp_cntct',email='$acad_emp_email',desig='$acad_emp_designation',hours='$acad_emp_hours',
		year='$acad_emp_year',salary='$acad_emp_salary',religion='$acad_emp_religion',nationality='$acad_emp_nationality',
		assistent_to='$acad_emp_assisstent',shift='$acad_emp_shift' 
		where id='$edit_id1'";
			if(mysql_query($que1)){
				header('location:acad_emp.php?edit=Data has been Updated Successfully!!!');
			}
	}

?>

