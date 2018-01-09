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
<div class="heading1"><h2>BSCS Admissions</h2></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
		<div class="container">
		
		<div class="responsive-table">
	<table class="table table-bordered" >
	
	  <tr class="danger">
	    <th>ID</th>
	    <th>Name</th>
		<th>Father Name</th>
		<th>Profession</th>
		<th>Gender</th>
	    <th>CNIC No</th>
		<th>Email</th>
		<th>Date of Birth</th>
	    <th>Address</th>
	    <th>City</th>
	    <th>Phone No</th>
	    <th>Mobile No</th>
	    <th>Last Degree</th>
		<th>Marks</th>
	    <th>Percent</th>
	    <th>College</th>
		<th>Marks</th>
		<th>Nat Marks</th>
		<th>Amount</th>
		<th>Deposit</th>
		<th>Bank</th>
		<th>Details</th>
		<th>Show</th>
		
      </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from bscs_admisson";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id = $row['id'];
	$option = $row[1];
	$name = $row[2];
	$fname = $row[3];
	$prof = $row[4];
	$gender = $row[5];
	$cnic = $row[6];
	$email = $row[7];
	$day = $row[8];
	$month = $row[9];
	$year = $row[10];
	$address= $row[11];
	$city= $row[12];
	$phone= $row[13];
	$mobile= $row[14];
	$degree= $row[15];
	$marks= $row[16];
	$percent= $row[17];
	$college= $row[18];
	$passing= $row[19];
	$nat= $row[20];
	$amount= $row[21];
	$deposit= $row[22];
	$bank= $row[23];
	$details= $row[24];
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $option; ?><?php echo $name; ?> </td>
	    <td><?php echo $fname; ?></td>
		<td><?php echo $prof; ?></td>
	    <td><?php echo $gender; ?></td>
	    <td><?php echo $cnic; ?></td>
	    <td><?php echo $email; ?></td>
	    <td><?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></td>
	    <td><?php echo $address; ?></td>
		<td><?php echo $city; ?></td>
		<td><?php echo $phone; ?></td>
		<td><?php echo $mobile; ?></td>
		<td><?php echo $degree; ?></td>
		<td><?php echo $marks; ?></td>
		<td><?php echo $percent; ?></td>
		<td><?php echo $college; ?></td>
		<td><?php echo $passing; ?></td>
		<td><?php echo $nat; ?></td>
		<td><?php echo $amount; ?></td>
		<td><?php echo $deposit; ?></td>
		<td><?php echo $bank; ?></td>
		<td><?php echo $details; ?></td>
		
	    <td><a href='edit_bscs_admission.php?edit_bscs_admission=<?php echo $id; ?>'><font color="#408C40">Show</font></a></td></a></td>
      </tr>
  <?php }  ?>	
</table>

</div>
</div>

<div class="container">
		<div class="dropdown">
			 <button class="btn btn-danger btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
				
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
		</body>
		</html>
<?php
include("include/db.php");
  $total_num_results=23;
       //or get the count dynamically as shown below.
       $query=mysql_query("select * from bscs_admisson"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>