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





	<div class="heading2"><h2>BSIT Weekend</h2></div>
	<div class="search">
	<form class="form-inline" action="it_weekend.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by Roll No. or CNIC No." size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-primary">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from it_weekend where cnic='$search' OR roll='$search'";
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
			<td align="center" colspan="12"><a href="it_weekend.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="info">
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
$query ="select * from it_weekend";
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
		<td><a href='del_it_weekend.php?del_it_weekend=<?php echo $id; ?>'><font color="#2A7B9B">Delete</font></a></td>
	    <td><a href='edit_it_weekend.php?edit_it_weekend=<?php echo $id; ?>'><font color="#2A7B9B">Edit</font></a></td>
      </tr>
  <?php }  ?>	
</table>
</div>
</div>
</div>
<center><font color="#2A7B9B" size="8px"><?php echo @$_GET['del']; ?></font></center>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-primary btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			<li><a href="#it_weekend" data-toggle="modal">Insert Students</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="it_weekend" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT Weekend</h2></div>
		</center>
  <div class="form-group">
    <label for="name24">Student Name:</label>
    <input type="text" class="form-control" name="name24" id="name24" placeholder="Example:Tahir Jutt">
  </div>
  <div class="form-group">
    <label for="rollno24">Roll No:</label>
    <input type="text" name="roll24" class="form-control" id="rollno24" placeholder="Example:473">
  </div>
  <div class="form-group">
    <label for="cnic24">CNIC:</label>
    <input type="text" name="cnic24" class="form-control" id="cnic24" placeholder="Example:00000-0000000-0">
  </div>
  <div class="form-group">
    <label for="add24">Address:</label>
    <input type="text" name="add24" class="form-control" id="add24" placeholder="Type Here">
  </div>
  <div class="form-group">
    <label for="cntct24">Contact:</label>
    <input type="text" name="cntct24" class="form-control" id="cntct24" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="session24">Session:</label>
    <input type="text" name="session24" class="form-control" id="session24" placeholder="Example:2011">
  </div>
  <div class="form-group">
    <label for="fname24">Father Name:</label>
    <input type="text" name="fname24" class="form-control" id="fname24" placeholder="Example:Faqeer Muhammad">
  </div>
  <div class="form-group">
    <label for="fcntct24">Father Contact:</label>
    <input type="text" name="fcntct24" class="form-control" id="fcntct24" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="nat24">Nationality:</label>
    <input type="text" name="nat24" class="form-control" id="nat24" placeholder="Example:Pakistani">
  </div>
  <div class="form-group">
    <label for="relig24">Religion:</label>
    <input type="text" name="relig24" class="form-control" id="relig24" placeholder="Example:Islam">
  </div>
  
  <button type="submit" name="btn24" class="btn btn-primary">Insert</button>
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
if(isset($_POST['btn24'])){
	$name=$_POST['name24']; 
	$roll=$_POST['roll24']; 
	$cnic=$_POST['cnic24'];
	$add=$_POST['add24'];
	$cntct=$_POST['cntct24'];
	$session=$_POST['session24'];
	$fname=$_POST['fname24'];
	$fcntct=$_POST['fcntct24'];
	$nat=$_POST['nat24'];
	$relig=$_POST['relig24'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_weekend where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_weekend (name,roll,cnic,address,cntct,session,fname,fcntct,nationality,religion)
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
       $query=mysql_query("select * from it_weekend"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>	