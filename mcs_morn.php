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
<link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
<script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="admin.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div class="heading"><h2>MCS MORNING</h2></div>
	<div class="search">
	<form class="form-inline" action="mcs_morn.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by Roll No. or CNIC No." size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-success">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from mcs where cnic='$search' OR roll='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
			$name = $row['name'];
			$roll = $row['roll'];
			$img = $row['img_path'];
			$sub = $row['sub_time'];
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
			<td><?php echo @$img; ?></td>
			<td><?php echo @$sub; ?></td>
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
			<td align="center" colspan="12"><a href="mcs_morn.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered" >
	
	  <tr class="success">
	    <th>ID</th>
	    <th>Name</th>
	    <th>Roll No</th>
		<th>Image</th>
	    <th>Time</th>
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

$result ="select * from mcs";
$run = mysqli_query($con, $result);
while($row=mysqli_fetch_array($run))
{
	$id = $row['id'];
	$name = $row[1];
	$roll = $row[2];
	$img = $row[3];
	$sub = $row[4];
	$cnic = $row[5];
	$addr = $row[6];
	$cntct = $row[7];
	$session = $row[8];
	$fname = $row[9];
	$fcntct = $row[10];
	$nat = $row[11];
	$relig= $row[12];
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $name; ?> </td>
	    <td><?php echo $roll; ?></td>
		<td width="50" rowspan=""><center>
		<a href="<?php echo $img;?>">
		<img src="<?php echo $img; ?>" width="50" height="50" border="0"></a></center>
		</td>
		<td><?php echo $sub; ?></td>
		<td><?php echo $cnic; ?></td>
	    <td><?php echo $addr; ?></td>
	    <td><?php echo $cntct; ?></td>
	    <td><?php echo $session; ?></td>
	    <td><?php echo $fname; ?></td>
	    <td><?php echo $fcntct; ?></td>
	    <td><?php echo $nat; ?></td>
	    <td><?php echo $relig; ?></td>
		<td><a href='del_mcs_morn.php?del_mcs_morn=<?php echo $id; ?>'><font color="#408C40">Delete</font></a></td></a></td>
	    <td><a href='edit_mcs_morn.php?edit_mcs_morn=<?php echo $id; ?>'><font color="#408C40">Edit</font></a></td></a></td>
      </tr>
  <?php }  ?>	
</table>

</div>
</div>
</div>
<center><font color="#408C40" size="8px"><?php echo @$_GET['del']; ?></font></center>
<center><font color="#408C40" size="8px"><?php echo @$_GET['edit']; ?></font></center>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-success btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
				<li><a href="#mcs_morning" data-toggle="modal">Insert Students</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="mcs_morning" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		
		<form method="post" action="" enctype="multipart/form-data">
		<center>
			<div><h2 class="heading">Mcs Morning</h2></div>
		</center>
  <div class="form-group">
    <label for="name">Student Name:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Example:Tahir Jutt">
  </div>
  <div class="form-group">
    <label for="rollno">Roll No:</label>
    <input type="text" name="roll" class="form-control" id="rollno" placeholder="Example:473">
  </div>
  <div class="form-group">
    <label for="img">Student Picture:</label>
    <input type="file" name="image" class="form-control" id="img"  required>
	
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" name="cnic" class="form-control" id="cnic" placeholder="Example:00000-0000000-0">
  </div>

  <div class="form-group">
    <label for="add">Address:</label>
    <input type="text" name="add" class="form-control" id="add" placeholder="Type Here">
  </div>
  <div class="form-group">
    <label for="cntct">Contact:</label>
    <input type="text" name="cntct" class="form-control" id="cntct" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="session">Session:</label>
    <input type="text" name="session" class="form-control" id="session" placeholder="Example:2011">
  </div>
  <div class="form-group">
    <label for="fname">Father Name:</label>
    <input type="text" name="fname" class="form-control" id="fname" placeholder="Example:Faqeer Muhammad">
  </div>
  <div class="form-group">
    <label for="fcntct">Father Contact:</label>
    <input type="text" name="fcntct" class="form-control" id="fcntct" placeholder="Example:068-1234567 or 0300-1234567">
  </div>
  <div class="form-group">
    <label for="nat">Nationality:</label>
    <input type="text" name="nat" class="form-control" id="nat" placeholder="Example:Pakistani">
  </div>
  <div class="form-group">
    <label for="relig">Religion:</label>
    <input type="text" name="relig" class="form-control" id="relig" placeholder="Example:Islam">
  </div>
  
  <button type="submit" name="btn" class="btn btn-success">Insert</button>
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
if(isset($_POST['btn'])){
	
	$name=$_POST['name']; 
	$roll=$_POST['roll'];
	
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
	$cnic=$_POST['cnic'];
	$add=$_POST['add'];
	$cntct=$_POST['cntct'];
	$session=$_POST['session'];
	$fname=$_POST['fname'];
	$fcntct=$_POST['fcntct'];
	$nat=$_POST['nat'];
	$relig=$_POST['relig'];
	
	if(($name=='') AND ($roll=='') AND ($cnic=='') AND ($add=='') AND ($cntct=='') AND ($session=='')
		AND ($fname=='') AND ($fcntct=='') AND ($nat=='') AND ($relig==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from mcs where roll='$roll'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Roll No, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into mcs (name,roll,img_path,sub_time,cnic,address,cntct,session,fname,fcntct,nationality,religion)
	values('$name','$roll','".$target_path."','".date("Y-m-d")."','$cnic','$add','$cntct','$session','$fname','$fcntct','$nat','$relig')";
	if(move_uploaded_file($temp_name, $target_path)) {
		
		mysql_query($query) or die("error in $query == ----> ".mysql_error()); 
		echo "<script>alert('Data has been inserted...')</script>";	
	} 
	else{
		exit("Error While uploading image on the server");
	}
	}

	?>
<?php
include("include/db.php");
  $total_num_results=23;
       //or get the count dynamically as shown below.
       $query=mysqli_query($con, "select * from mcs"); //query to show results from.
       $total_num_results = mysqli_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>	
