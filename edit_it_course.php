<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_it_course'];
		$que	=	"select * from it_course where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id         = 	$row['id'];
	$it_c_id			=	$row['course_id']; 
	$it_c_name			=	$row['name']; 
	$it_c_time			=	$row['time'];
	$it_c_date			=	$row['date'];
	$it_c_duration		=	$row['duration'];
	$it_c_fee			=	$row['fee'];
	$it_c_instructor	=	$row['instructor'];
	$it_c_room			=	$row['room'];
	$it_c_lectures		=	$row['lec'];
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
		<form method="post" action="edit_it_course.php?edit_it_course=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading2">Updating BSIT Courses' Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="it_c_id">Course ID:</label>
    <input type="text" class="form-control" name="it_c_id" id="it_c_id"  value="<?php echo @$it_c_id; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_name">Course Name:</label>
    <input type="text" name="it_c_name" class="form-control" id="it_c_name"  value="<?php echo @$it_c_name; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_time">Delivering Time:</label>
    <input type="text" name="it_c_time" class="form-control" id="it_c_time"  value="<?php echo @$it_c_time; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_date">Delivering Date:</label>
    <input type="text" name="it_c_date" class="form-control" id="it_c_date"  value="<?php echo @$it_c_date; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_duration">Duration of Course:</label>
    <input type="text" name="it_c_duration" class="form-control" id="it_c_duration"  value="<?php echo @$it_c_duration; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_fee">Fee of Course:</label>
    <input type="text" name="it_c_fee" class="form-control" id="it_c_fee"  value="<?php echo @$it_c_fee; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_instructor">Course Instructor:</label>
    <input type="text" name="it_c_instructor" class="form-control" id="it_c_instructor"  value="<?php echo @$it_c_instructor; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_room">Room for Delivering Course:</label>
    <input type="text" name="it_c_room" class="form-control" id="it_c_room"  value="<?php echo @$it_c_room; ?>">
  </div>
  <div class="form-group">
    <label for="it_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="it_c_lectures" class="form-control" id="it_c_lectures"  value="<?php echo @$it_c_lectures; ?>">
  </div>
  
  
  <button type="submit" name="it_c_btn" class="btn btn-primary">Update</button>
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
			$edit_id1 = $_GET['edit_it_course'];
	$it_c_id			=	$_POST['it_c_id']; 
	$it_c_name			=	$_POST['it_c_name']; 
	$it_c_time			=	$_POST['it_c_time'];
	$it_c_date			=	$_POST['it_c_date'];
	$it_c_duration		=	$_POST['it_c_duration'];
	$it_c_fee			=	$_POST['it_c_fee'];
	$it_c_instructor	=	$_POST['it_c_instructor'];
	$it_c_room			=	$_POST['it_c_room'];
	$it_c_lectures		=	$_POST['it_c_lectures'];
			
			
		$query = "insert into it_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$it_c_id','$it_c_name','$it_c_time','$it_c_date','$it_c_duration','$it_c_fee','$it_c_instructor','$it_c_room','$it_c_lectures')";
	
	if(mysql_query($query))
	{	
		header('location:it_course.php?edit=Data has been Updated Successfully!!!');	
}
	}

	?>
