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
<div class="heading"><h2>MCS WEEKEND</h2></div>
	<div class="search">
	<form class="form-inline" action="mcs_weekend.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by Roll No. or CNIC No." size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-success">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from mcs_weekend where cnic='$search' OR roll='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
			$name = $row['name'];
			$roll = $row['roll'];
			$cnic = $row['cnic'];
			$addr = $row['address'];
			$cntct = $row['cntct'];
			$session=$row['session'];
			$fname = $row['fname'];
			$fcntct = $row['fcntct'];
			$nat = $row['nationality']; 
			$relig = $row['religion'];
		?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	<tr class="info">
			<td><?php echo @$name; ?></td>
			<td><?php echo @$roll; ?></td>
			<td><?php echo @$cnic; ?></td>
			<td><?php echo @$addr; ?></td>
			<td><?php echo @$cntct; ?></td>
			<td><?php echo @$session; ?></td>
			<td><?php echo @$fname; ?></td>
			<td><?php echo @$fcntct; ?></td>
			<td><?php echo @$nat; ?></td>
			<td><?php echo @$relig; ?></td>
			
			
		</tr>
		<tr>
			<td align="center" colspan="12"><a href="mcs_weekend.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="success">
	    <th>ID</th>
	    <th>Name</th>
	    <th>Roll No</th>
		<th>CNIC No</th>
	    <th>Address</th>
	    <th>Contact</th>
	    <th>Session</th>
	    <th>Father Name</th>
	    <th>Father Contact</th>
		<th>Nationality</th>
	     <th>Religion</th>
	    <th>Delete</th>
		<th>Edit</th>
      </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from mcs_weekend";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id = $row['id'];
	$name = $row[1];
	$roll = $row[2];
	$cnic = $row[3];
	$addr = $row[4];
	$cntct = $row[5];
	$session = $row[6];
	$fname = $row[7];
	$fcntct = $row[8];
	$nat = $row[9];
	$relig= $row[10];
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $name; ?> </td>
	    <td><?php echo $roll; ?></td>
		<td><?php echo $cnic; ?></td>
	    <td><?php echo $addr; ?></td>
	    <td><?php echo $cntct; ?></td>
	    <td><?php echo $session; ?></td>
	    <td><?php echo $fname; ?></td>
	    <td><?php echo $fcntct; ?></td>
	    <td><?php echo $nat; ?></td>
	    <td><?php echo $relig; ?></td>
		<td><a href='del_mcs_weekend.php?del_mcs_weekend=<?php echo $id; ?>'><font color="#408C40">Delete</font></a></td>
	    <td><a href='edit_mcs_weekend.php?edit_mcs_weekend=<?php echo $id; ?>'><font color="#408C40">Edit</font></a></td></a></td>
      </tr>
  <?php }  ?>	
</table>
</div>
</div>
</div>
<center><font color="#408C40" size="8px"><?php echo @$_GET['del']; ?></td></font></center>
<center><font color="#408C40" size="8px"><?php echo @$_GET['edit']; ?></td></font></center>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-success btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			<li><a href="#mcs_weekend" data-toggle="modal">Insert Students</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="mcs_weekend" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading">Mcs Weekend</h2></div>
		</center>
  <div class="form-group">
    <label for="name3">Student Name:</label>
    <input type="text" class="form-control" name="name3" id="name3" placeholder="Example:Tahir Jutt">
  </div>
  <div class="form-group">
    <label for="rollno3">Roll No:</label>
    <input type="text" name="roll3" class="form-control" id="rollno3" placeholder="Example:473">
  </div>
  <div class="form-group">
    <label for="cnic3">CNIC:</label>
    <input type="text" name="cnic3" class="form-control" id="cnic3" placeholder="Example:00000-0000000-0">
  </div>
  <div class="form-group">
    <label for="add3">Address:</label>
    <input type="text" name="add3" class="form-control" id="add3" placeholder="Type Here">
  </div>
  <div class="form-group">
    <label for="cntct3">Contact:</label>
    <input type="text" name="cntct3" class="form-control" id="cntct3" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="session3">Session:</label>
    <input type="text" name="session3" class="form-control" id="session3" placeholder="Example:2011">
  </div>
  <div class="form-group">
    <label for="fname3">Father Name:</label>
    <input type="text" name="fname3" class="form-control" id="fname3" placeholder="Example:Faqeer Muhammad">
  </div>
  <div class="form-group">
    <label for="fcntct3">Father Contact:</label>
    <input type="text" name="fcntct3" class="form-control" id="fcntct3" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="nat3">Nationality:</label>
    <input type="text" name="nat3" class="form-control" id="nat3" placeholder="Example:Pakistani">
  </div>
  <div class="form-group">
    <label for="relig3">Religion:</label>
    <input type="text" name="relig3" class="form-control" id="relig3"  placeholder="Example:Islam">
  </div>
  
  <button type="submit" name="btn3" class="btn btn-success">Insert</button>
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
if(isset($_POST['btn3'])){
	$name=$_POST['name3']; 
	$roll=$_POST['roll3']; 
	$cnic=$_POST['cnic3'];
	$add=$_POST['add3'];
	$cntct=$_POST['cntct3'];
	$session=$_POST['session3'];
	$fname=$_POST['fname3'];
	$fcntct=$_POST['fcntct3'];
	$nat=$_POST['nat3'];
	$relig=$_POST['relig3'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs_weekend where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs_weekend (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	
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
       $query=mysql_query("select * from mcs_weekend"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>