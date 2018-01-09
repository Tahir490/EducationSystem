<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
function pagination($total_num_results,$posts_per_page,$cur_page) {
  $no = $total_num_results / $posts_per_page;
  $no = ceil($no);
  $prev="";
  $pages_html="";

  $start_page=$cur_page-2;
  $end_page=$cur_page+2;
  $start_diff=$cur_page-1;
  $end_diff=$no-$cur_page;
  if($end_diff < 2) {
    $start_page=$cur_page+$end_diff;
    $start_page=$start_page-4;
  }
  while($start_page < 1) { $start_page=$start_page+1; }
  if($start_diff < 2) {
    $end_page=$cur_page-$start_diff;
    $end_page=$end_page+4;
  }
  while($end_page > $no) { $end_page=$end_page-1; }

  //creating div with `id`=pagination
  $pages_html .= "<div id='pagination' >";

  //displaying current page out of the total number of pages available
  $pages_html .= "<label class='disptext' >Page ".$cur_page." of ".$no."</label>";
  //appending first page button
  if($start_diff > 2) { $pages_html .= "<a href='?page=1' > << First </a>"; }
  //appending previous page button
  if($cur_page > 1) { $prev=$cur_page-1; $pages_html .= "<a href='?page=".$prev."' > < Prev </a>"; }

  //appending the page number buttons
  for($i=$start_page; $i<=$end_page; $i++) { $pages_html .= "<a href='?page=".$i."' id='page".$i."' > ".$i." </a>"; }

  //appending the next page button
  if($cur_page < $no) { $next=$cur_page+1; $pages_html .= "<a href='?page=".$next."' > Next > </a>"; }

  //Appending the last page button
  if($end_diff > 2) { $pages_html .= "<a href='?page=".$no."' > Last >> </a>"; }
  //jquery script to highlight the current page button
  $pages_html .= "<script type='text/javascript'>var d = document.getElementById('page".$cur_page."');
  d.className += ' selectedpage';</script>";
  $pages_html .= "</div><!--pagination-->";

  return $pages_html; //returns html content.
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Education System</title>
<meta name="viewport" name="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="admin.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div class="heading1"><h2>ADMINISTRATIVE EMPLOYEES</h2></div>
	<div class="search">
	<form class="form-inline" action="admin_emp.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by CNIC No. or Email" size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-danger">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from admin_emp where email ='$search' OR cnic='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
	$admin_emp_name						=	$row[1]; 
	$admin_emp_cnic						=	$row[2]; 
	$admin_emp_address					=	$row[3];
	$admin_emp_cntct					=	$row[4];
	$admin_emp_email					=	$row[5];
	$admin_emp_designation				=	$row[6];
	$admin_emp_hours					=	$row[7];
	$admin_emp_year						=	$row[8];
	$admin_emp_salary					=	$row[9];
	$admin_emp_religion					=	$row[10];
	$admin_emp_nationality				=	$row[11];
	$admin_emp_assisstent				=	$row[12];
	$admin_emp_shift					=	$row[13];
		?>
		
	<table class="table table-bordered">
	<tr class="info">
			<td><?php echo @$admin_emp_name; ?></td>
			<td><?php echo @$admin_emp_cnic; ?></td>
			<td><?php echo @$admin_emp_address; ?></td>
			<td><?php echo @$admin_emp_cntct; ?></td>
			<td><?php echo @$admin_emp_email; ?></td>
			<td><?php echo @$admin_emp_designation; ?></td>
			<td><?php echo @$admin_emp_hours; ?></td>
			<td><?php echo @$admin_emp_year; ?></td>
			<td><?php echo @$admin_emp_salary; ?></td>
			<td><?php echo @$admin_emp_religion; ?></td>
			<td><?php echo @$admin_emp_nationality; ?></td>
			<td><?php echo @$admin_emp_assisstent; ?></td>
			<td><?php echo @$admin_emp_shift; ?></td>
			
			
		</tr>
		<tr>
			<td align="center" colspan="12"><a href="admin_emp.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="danger">
	    <th>ID</th>
	    <th>Name</th>
	    <th>CNIC</th>
		<th>Address</th>
	    <th>Contact</th>
	    <th>Email</th>
	    <th>Designation</th>
	    <th>Working Hours</th>
	    <th>Joining Year</th>
		<th>Salary</th>
		<th>Religion</th>
		<th>Nationality</th>
		<th>Assisstent To</th>
		<th>Shift</th>
	    <th>Delete</th>
		<th>Edit</th>
      </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from admin_emp";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id 							= $row['id'];
	$admin_emp_name					=	$row[1]; 
	$admin_emp_cnic					=	$row[2]; 
	$admin_emp_address				=	$row[3];
	$admin_emp_cntct					=	$row[4];
	$admin_emp_email					=	$row[5];
	$admin_emp_designation			=	$row[6];
	$admin_emp_hours					=	$row[7];
	$admin_emp_year					=	$row[8];
	$admin_emp_salary				=	$row[9];
	$admin_emp_religion				=	$row[10];
	$admin_emp_nationality			=	$row[11];
	$admin_emp_assisstent			=	$row[12];
	$admin_emp_shift					=	$row[13];
	
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $admin_emp_name; ?> </td>
	    <td><?php echo $admin_emp_cnic; ?></td>
		<td><?php echo $admin_emp_address; ?></td>
	    <td><?php echo $admin_emp_cntct; ?></td>
	    <td><?php echo $admin_emp_email; ?></td>
	    <td><?php echo $admin_emp_designation; ?></td>
	    <td><?php echo $admin_emp_hours; ?></td>
	    <td><?php echo $admin_emp_year; ?></td>
	    <td><?php echo $admin_emp_salary; ?></td>
		<td><?php echo $admin_emp_religion; ?></td>
		<td><?php echo $admin_emp_nationality; ?></td>
		<td><?php echo $admin_emp_assisstent; ?></td>
		<td><?php echo $admin_emp_shift; ?></td>
	    
		<td><a href='del_admin_emp.php?del_admin_emp=<?php echo $id; ?>'><font color="#E43C39">Delete</font></a></td>
	    <td><a href='edit_admin_emp.php?edit_admin_emp=<?php echo $id; ?>'><font color="#E43C39">Edit</font></a></td>
      </tr>
  <?php }  ?>	
</table>
</div>
</div>

<center><font color="#E43C39" size="8px"><?php echo @$_GET['del']; ?></td></font></center>
<center><font color="#E43C39" size="8px"><?php echo @$_GET['edit']; ?></td></font></center>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-danger btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			<li><a href="#admin_emp" data-toggle="modal">Insert</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="admin_emp" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading1">ADMINISTRATIVE EMPLOYEES</h2></div>
		</center>
  <div class="form-group">
    <label for="admin_emp_name">Employee Name:</label>
    <input type="text" name="admin_emp_name" class="form-control" id="admin_emp_name" placeholder="Example:Rasheed">
  </div>
  <div class="form-group">
    <label for="admin_emp_cnic">CNIC:</label>
    <input type="text" class="form-control" name="admin_emp_cnic" id="admin_emp_cnic" placeholder="Example:00000-0000000-0">
  </div>
  <div class="form-group">
    <label for="admin_emp_address">Address:</label>
    <input type="text" name="admin_emp_address" class="form-control" id="admin_emp_address" placeholder="Example:Type Here">
  </div>
  <div class="form-group">
    <label for="admin_emp_cntct">Contact:</label>
    <input type="text" name="admin_emp_cntct" class="form-control" id="admin_emp_cntct" placeholder="Example:0300-1234567">
  </div>
  <div class="form-group">
    <label for="admin_emp_email">Email:</label>
    <input type="text" name="admin_emp_email" class="form-control" id="admin_emp_email" placeholder="Example:abc123@yahoo.com">
  </div>
  <div class="form-group">
    <label for="admin_emp_designation">Designation:</label>
    <input type="text" name="admin_emp_designation" class="form-control" id="admin_emp_designation" placeholder="Example:Clerk">
  </div>
  
  <div class="form-group">
    <label for="admin_emp_hours">Working Hours:</label>
    <input type="text" name="admin_emp_hours" class="form-control" id="admin_emp_hours" placeholder="Example:8 Hours">
  </div>
  <div class="form-group">
    <label for="admin_emp_year">Joining Year:</label>
    <input type="text" name="admin_emp_year" class="form-control" id="admin_emp_year" placeholder="Example:2010 ">
  </div>
  <div class="form-group">
    <label for="admin_emp_salary">Salary:</label>
    <input type="text" name="admin_emp_salary" class="form-control" id="admin_emp_salary" placeholder="Example:Rs.10,000">
  </div>
  <div class="form-group">
    <label for="admin_emp_religion">Religion:</label>
    <input type="text" name="admin_emp_religion" class="form-control" id="admin_emp_religion" placeholder="Example:Islam">
  </div>
  <div class="form-group">
    <label for="admin_emp_nationality">Nationality:</label>
    <input type="text" name="admin_emp_nationality" class="form-control" id="admin_emp_nationality" placeholder="Example:32 Pakistani">
  </div>
  <div class="form-group">
    <label for="admin_emp_assisstent">Assisstent to:</label>
    <input type="text" name="admin_emp_assisstent" class="form-control" id="admin_emp_assisstent" placeholder="Example:Dr Dost Muhammad">
  </div>
  <div class="form-group">
    <label for="admin_emp_shift">Shift:</label>
    <input type="text" name="admin_emp_shift" class="form-control" id="admin_emp_shift" placeholder="Example:Morning">
  </div>
  
  
  <button type="submit" name="admin_emp_btn" class="btn btn-danger">Insert</button>
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
if(isset($_POST['admin_emp_btn'])){
	$admin_emp_name					=	$_POST['admin_emp_name']; 
	$admin_emp_cnic					=	$_POST['admin_emp_cnic']; 
	$admin_emp_address				=	$_POST['admin_emp_address'];
	$admin_emp_cntct				=	$_POST['admin_emp_cntct'];
	$admin_emp_email				=	$_POST['admin_emp_email'];
	$admin_emp_designation			=	$_POST['admin_emp_designation'];
	$admin_emp_hours				=	$_POST['admin_emp_hours'];
	$admin_emp_year					=	$_POST['admin_emp_year'];
	$admin_emp_salary				=	$_POST['admin_emp_salary'];
	$admin_emp_religion				=	$_POST['admin_emp_religion'];
	$admin_emp_nationality			=	$_POST['admin_emp_nationality'];
	$admin_emp_assisstent			=	$_POST['admin_emp_assisstent'];
	$admin_emp_shift				=	$_POST['admin_emp_shift'];
	
	
	if(($admin_emp_name=='') AND ($admin_emp_cnic=='') AND ($admin_emp_address=='') AND ($admin_emp_cntct=='') 
		AND ($admin_emp_email=='') AND ($admin_emp_designation=='') AND ($admin_emp_hours=='') AND ($admin_emp_year=='') 
	AND ($admin_emp_salary=='') AND ($admin_emp_religion=='') AND ($admin_emp_nationality=='') AND ($admin_emp_assisstent=='')
	AND ($admin_emp_shift==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from admin_emp where email='$int_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into admin_emp (name,cnic,addr,contact,email,desig,hours,year,salary,religion,nationality,assistent_to,shift)
	values('$admin_emp_name','$admin_emp_cnic','$admin_emp_address','$admin_emp_cntct','$admin_emp_email',
	'$admin_emp_designation','$admin_emp_hours','$admin_emp_year','$admin_emp_salary','$admin_emp_religion',
	'$admin_emp_nationality','$admin_emp_assisstent','$admin_emp_shift')";
	
	if(mysql_query($query))
	{	
		echo "<script>alert('Data has been inserted...')</script>";	
}
	}

	?>
<?php
include("include/db.php");
  $total_num_results=23;
       //or get the count dynamically as shown below.
       $query=mysql_query("select * from admin_emp"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>	