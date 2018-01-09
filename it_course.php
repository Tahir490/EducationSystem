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
<div class="heading2"><h2>BSIT COURSES</h2></div>
	<div class="search">
	<form class="form-inline" action="it_course.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by Course id" size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-primary">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from it_course where course_id='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
			$it_c_id			=	$row[1]; 
			$it_c_name			=	$row[2]; 
			$it_c_time			=	$row[3];
			$it_c_date			=	$row[4];
			$it_c_duration		=	$row[5];
			$it_c_fee			=	$row[6];
			$it_c_instructor	=	$row[7];
			$it_c_room			=	$row[8];
			$it_c_lectures		=	$row[9];
		?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	<tr class="info">
			<td><?php echo @$it_c_id; ?></td>
			<td><?php echo @$it_c_name; ?></td>
			<td><?php echo @$it_c_time; ?></td>
			<td><?php echo @$it_c_date; ?></td>
			<td><?php echo @$it_c_duration; ?></td>
			<td><?php echo @$it_c_fee; ?></td>
			<td><?php echo @$it_c_instructor; ?></td>
			<td><?php echo @$it_c_room; ?></td>
			<td><?php echo @$it_c_lectures; ?></td>
			
			
		</tr>
		<tr>
			<td align="center" colspan="12"><a href="it_course.php">OK</a></td>
		</tr>
	</table><br><br>
		<?php }} ?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="info">
	    <th>ID</th>
	    <th>Course ID</th>
	    <th>Course Name</th>
		<th>Delivering Time of Course</th>
	    <th>Delivering Date of Course</th>
	    <th>Duration of Course</th>
	    <th>Course Fee</th>
	    <th>Course Instructor</th>
	    <th>Room for Delivering Course</th>
		<th>No. of Lectures/Course</th>
	    <th>Delete</th>
		<th>Edit</th>
      </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from it_course";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id 				= $row['id'];
	$it_c_id 			= $row[1];
	$it_c_name 			= $row[2];
	$it_c_time 			= $row[3];
	$it_c_date 			= $row[4];
	$it_c_duration 		= $row[5];
	$it_c_fee 			= $row[6];
	$it_c_instructor 	= $row[7];
	$it_c_room 			= $row[8];
	$it_c_lectures 		= $row[9];
	
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $it_c_id; ?> </td>
	    <td><?php echo $it_c_name; ?></td>
		<td><?php echo $it_c_time; ?></td>
	    <td><?php echo $it_c_date; ?></td>
	    <td><?php echo $it_c_duration; ?></td>
	    <td><?php echo $it_c_fee; ?></td>
	    <td><?php echo $it_c_instructor; ?></td>
	    <td><?php echo $it_c_room; ?></td>
	    <td><?php echo $it_c_lectures; ?></td>
	    
		<td><a href='del_it_course.php?del_it_course=<?php echo $id; ?>'><font color="#2A7B9B">Delete</font></a></td>
	    <td><a href='edit_it_course.php?edit_it_course=<?php echo $id; ?>'><font color="#2A7B9B">Edit</font></a></td>
      </tr>
  <?php }  ?>	
</table>
</div>
</div>
<div>
<center><font color="#2A7B9B" size="8px"><?php echo @$_GET['del']; ?></td></font></center>
<center><font color="#2A7B9B" size="8px"><?php echo @$_GET['edit']; ?></td></font></center>
		<div class="container">
		<div class="dropdown">
			 <button class="btn btn-primary btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
			 Go to <span class="caret"></span>
			 </button>
			<ul class="dropdown-menu">
			<li><a href="#it_course" data-toggle="modal">Insert Courses</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="it_course" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">BSIT COURSES</h2></div>
		</center>
  <div class="form-group">
    <label for="it_c_id">Course ID:</label>
    <input type="text" class="form-control" name="it_c_id" id="it_c_id" placeholder="Example:Course-12345">
  </div>
  <div class="form-group">
    <label for="it_c_name">Course Name:</label>
    <input type="text" name="it_c_name" class="form-control" id="it_c_name" placeholder="Example:Web Designing">
  </div>
  <div class="form-group">
    <label for="it_c_time">Delivering Time:</label>
    <input type="text" name="it_c_time" class="form-control" id="it_c_time" placeholder="Example:10:00 am">
  </div>
  <div class="form-group">
    <label for="it_c_date">Delivering Date:</label>
    <input type="text" name="it_c_date" class="form-control" id="it_c_date" placeholder="12/09/15">
  </div>
  <div class="form-group">
    <label for="it_c_duration">Duration of Course:</label>
    <input type="text" name="it_c_duration" class="form-control" id="it_c_duration" placeholder="Example:6 Months">
  </div>
  <div class="form-group">
    <label for="it_c_fee">Fee of Course:</label>
    <input type="text" name="it_c_fee" class="form-control" id="it_c_fee" placeholder="Example:Rs.6,000">
  </div>
  <div class="form-group">
    <label for="it_c_instructor">Course Instructor:</label>
    <input type="text" name="it_c_instructor" class="form-control" id="it_c_instructor" placeholder="Example:Sir Haroon ">
  </div>
  <div class="form-group">
    <label for="it_c_room">Room for Delivering Course:</label>
    <input type="text" name="it_c_room" class="form-control" id="it_c_room" placeholder="Example:Unix Lab">
  </div>
  <div class="form-group">
    <label for="it_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="it_c_lectures" class="form-control" id="it_c_lectures" placeholder="Example:32 Lectures">
  </div>
  
  
  <button type="submit" name="it_c_btn" class="btn btn-primary">Insert</button>
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
if(isset($_POST['it_c_btn'])){
	$it_c_id			=	$_POST['it_c_id']; 
	$it_c_name			=	$_POST['it_c_name']; 
	$it_c_time			=	$_POST['it_c_time'];
	$it_c_date			=	$_POST['it_c_date'];
	$it_c_duration		=	$_POST['it_c_duration'];
	$it_c_fee			=	$_POST['it_c_fee'];
	$it_c_instructor	=	$_POST['it_c_instructor'];
	$it_c_room			=	$_POST['it_c_room'];
	$it_c_lectures		=	$_POST['it_c_lectures'];
	
	
	if(($it_c_id=='') AND ($it_c_name=='') AND ($it_c_time=='') AND ($it_c_date=='') AND ($it_c_duration=='') 
		AND ($it_c_fee=='') AND ($it_c_instructor=='') AND ($it_c_room=='') AND ($it_c_lectures==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from it_course where course_id='$it_c_id'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Course ID, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into it_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$it_c_id','$it_c_name','$it_c_time','$it_c_date','$it_c_duration','$it_c_fee','$it_c_instructor','$it_c_room','$it_c_lectures')";
	
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
       $query=mysql_query("select * from it_course"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>