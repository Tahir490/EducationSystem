<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
	$edit_std	=	@$_GET['edit_mcs_course'];
		$que	=	"select * from mcs_course where id='$edit_std'";
		$run = mysql_query($que);
		while($row=mysql_fetch_array($run)){
			$id         = 	$row['id'];
	$mcs_c_id			=	$row['course_id']; 
	$mcs_c_name			=	$row['name']; 
	$mcs_c_time			=	$row['time'];
	$mcs_c_date			=	$row['date'];
	$mcs_c_duration		=	$row['duration'];
	$mcs_c_fee			=	$row['fee'];
	$mcs_c_instructor	=	$row['instructor'];
	$mcs_c_room			=	$row['room'];
	$mcs_c_lectures		=	$row['lec'];
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
<script type="text/javascript">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
</head>
<body>
		
		<div class="container">
		<div class="form" id="content">
		<form method="post" action="edit_mcs_course.php?edit_mcs_course=<?php echo $id; ?>" >
		<center>
			<div><h2 class="heading">Updating Mcs Courses' Record</h2></div>
		</center><br />
  <div class="form-group">
    <label for="mcs_c_id">Course ID:</label>
    <input type="text" class="form-control" name="mcs_c_id" id="mcs_c_id" placeholder="Example:Course-12345" value="<?php echo @$mcs_c_id; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_name">Course Name:</label>
    <input type="text" name="mcs_c_name" class="form-control" id="mcs_c_name" placeholder="Example:Web Designing" value="<?php echo @$mcs_c_name; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_time">Delivering Time:</label>
    <input type="text" name="mcs_c_time" class="form-control" id="mcs_c_time" placeholder="Example:10:00 am" value="<?php echo @$mcs_c_time; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_date">Delivering Date:</label>
    <input type="text" name="mcs_c_date" class="form-control" id="mcs_c_date" placeholder="12/09/15" value="<?php echo @$mcs_c_date; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_duration">Duration of Course:</label>
    <input type="text" name="mcs_c_duration" class="form-control" id="mcs_c_duration" placeholder="Example:6 Months" value="<?php echo @$mcs_c_duration; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_fee">Fee of Course:</label>
    <input type="text" name="mcs_c_fee" class="form-control" id="mcs_c_fee" placeholder="Example:Rs.6,000" value="<?php echo @$mcs_c_fee; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_instructor">Course Instructor:</label>
    <input type="text" name="mcs_c_instructor" class="form-control" id="mcs_c_instructor" placeholder="Example:Sir Haroon" value="<?php echo @$mcs_c_instructor; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_room">Room for Delivering Course:</label>
    <input type="text" name="mcs_c_room" class="form-control" id="mcs_c_room" placeholder="Example:Unix Lab" value="<?php echo @$mcs_c_room; ?>">
  </div>
  <div class="form-group">
    <label for="mcs_c_lectures">No. of Lectures/Course:</label>
    <input type="text" name="mcs_c_lectures" class="form-control" id="mcs_c_lectures" placeholder="Example:32 Lectures" value="<?php echo @$mcs_c_lectures; ?>">
  </div>
  
  <div id="editor"></div>
  <button  type="submit" name="mcs_c_btn" class="btn btn-success">Update</button>
  <button  id="cmd" >Generate a PDF</button>
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
if(isset($_POST['mcs_c_btn'])){
			$edit_id1 = $_GET['edit_mcs_course'];
	$mcs_c_id			=	$_POST['mcs_c_id']; 
	$mcs_c_name			=	$_POST['mcs_c_name']; 
	$mcs_c_time			=	$_POST['mcs_c_time'];
	$mcs_c_date			=	$_POST['mcs_c_date'];
	$mcs_c_duration		=	$_POST['mcs_c_duration'];
	$mcs_c_fee			=	$_POST['mcs_c_fee'];
	$mcs_c_instructor	=	$_POST['mcs_c_instructor'];
	$mcs_c_room			=	$_POST['mcs_c_room'];
	$mcs_c_lectures		=	$_POST['mcs_c_lectures'];
			
			
		$query = "insert into mcs_course (course_id,name,time,date,duration,fee,instructor,room,lec)
	values('$mcs_c_id','$mcs_c_name','$mcs_c_time','$mcs_c_date','$mcs_c_duration','$mcs_c_fee','$mcs_c_instructor','$mcs_c_room','$mcs_c_lectures')";
	
	if(mysql_query($query))
	{	
		header('location:mcs_course.php?edit=Data has been Updated Successfully!!!');	
}
	}

	?>
