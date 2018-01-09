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
<div class="heading2"><h2>INTERNS FECULTY</h2></div>
	<div class="search">
	<form class="form-inline" action="vis_fec.php" method="get">
	<div class="form-group">
    <input type="text" class="form-control" id="info" name="search" placeholder="Search by CNIC No. or Email" size="40">
  </div>
  <button type="submit" name="sub" class="btn btn-primary">Search Here</button>
</form></div>
	<?php
	include("include/db.php");
		if(isset($_GET['sub'])){
			 $search = $_GET['search'];
			 $que = "select * from int_teacher where email ='$search' OR cnic='$search'";
			 $run = mysql_query($que);
			 while($row=mysql_fetch_array($run)){
			$int_fec_name				=	$row[1]; 
			$int_fec_cnic				=	$row[2]; 
			$int_fec_address			=	$row[3];
			$int_fec_contact			=	$row[4];
			$int_fec_email				=	$row[5];
			$int_fec_quali				=	$row[6];
			$int_fec_relig				=	$row[7];
			$int_fec_nat				=	$row[8];
			$int_fec_join				=	$row[9];
			$int_fec_sal				=	$row[10];
			$int_fec_post				=	$row[11];
		?>
		<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	<tr class="info">
			<td><?php echo @$int_fec_name; ?></td>
			<td><?php echo @$int_fec_cnic; ?></td>
			<td><?php echo @$int_fec_address; ?></td>
			<td><?php echo @$int_fec_contact; ?></td>
			<td><?php echo @$int_fec_email; ?></td>
			<td><?php echo @$int_fec_quali; ?></td>
			<td><?php echo @$int_fec_relig; ?></td>
			<td><?php echo @$int_fec_nat; ?></td>
			<td><?php echo @$int_fec_join; ?></td>
			<td><?php echo @$int_fec_sal; ?></td>
			<td><?php echo @$int_fec_post; ?></td>
			
			
		</tr>
		<tr>
			<td align="center" colspan="12"><a href="int_fec.php">OK</a></td>
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
	    <th>CNIC</th>
		<th>Address</th>
	    <th>Contact</th>
	    <th>Email</th>
	    <th>Qualification</th>
	    <th>Religion</th>
	    <th>Nationality</th>
		<th>Joining</th>
		<th>Salary</th>
		<th>Post</th>
	    <th>Delete</th>
		<th>Edit</th>
      </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from int_teacher";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id 						= $row['id'];
	$int_fec_name				= $row[1];
	$int_fec_cnic				= $row[2];
	$int_fec_address 			= $row[3];
	$int_fec_contact 			= $row[4];
	$int_fec_email 				= $row[5];
	$int_fec_quali 				= $row[6];
	$int_fec_relig 				= $row[7];
	$int_fec_nat				= $row[8];
	$int_fec_join 				= $row[9];
	$int_fec_sal 				= $row[10];
	$int_fec_post 				= $row[11];
	
	

?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $int_fec_name; ?> </td>
	    <td><?php echo $int_fec_cnic; ?></td>
		<td><?php echo $int_fec_address; ?></td>
	    <td><?php echo $int_fec_contact; ?></td>
	    <td><?php echo $int_fec_email; ?></td>
	    <td><?php echo $int_fec_quali; ?></td>
	    <td><?php echo $int_fec_relig; ?></td>
	    <td><?php echo $int_fec_nat; ?></td>
	    <td><?php echo $int_fec_join; ?></td>
		<td><?php echo $int_fec_sal; ?></td>
		<td><?php echo $int_fec_post; ?></td>
	    
		<td><a href='del_int_fec.php?del_int_fec=<?php echo $id; ?>'><font color="#2A7B9B">Delete</font></a></td>
	    <td><a href='edit_int_fec.php?edit_int_fec=<?php echo $id; ?>'><font color="#2A7B9B">Edit</font></a></td>
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
			<li><a href="#int_fec" data-toggle="modal">Insert</a></li>
			 	<li><a href="admin.php">Admin Panel</a></li>
				<li><a href="index.php">Home Page</a></li>
				</div>
				</div>
				<div class="modal fade" id="int_fec" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<form method="post" action="">
		<center>
			<div><h2 class="heading2">INTERNS FECULTY</h2></div>
		</center>
  <div class="form-group">
    <label for="int_f_name">Teacher Name:</label>
    <input type="text" name="int_f_name" class="form-control" id="int_f_name" placeholder="Example:Sir Haroon">
  </div>
  <div class="form-group">
    <label for="int_f_cnic">CNIC:</label>
    <input type="text" class="form-control" name="int_f_cnic" id="int_f_cnic" placeholder="Example:00000-0000000-0">
  </div>
  <div class="form-group">
    <label for="int_f_address">Address:</label>
    <input type="text" name="int_f_address" class="form-control" id="int_f_address" placeholder="Example:Type Here">
  </div>
  <div class="form-group">
    <label for="int_f_cntct">Contact:</label>
    <input type="text" name="int_f_cntct" class="form-control" id="int_f_cntct" placeholder="Example:0300-1234567">
  </div>
  <div class="form-group">
    <label for="int_f_email">Email:</label>
    <input type="text" name="int_f_email" class="form-control" id="int_f_email" placeholder="Example:abc123@yahoo.com">
  </div>
  <div class="form-group">
    <label for="int_f_quali">Qualification:</label>
    <input type="text" name="int_f_quali" class="form-control" id="int_f_quali" placeholder="Example:Masters in Telecommunication">
  </div>
  <div class="form-group">
    <label for="int_f_relig">Religion:</label>
    <input type="text" name="int_f_relig" class="form-control" id="int_f_relig" placeholder="Example:Islam ">
  </div>
  <div class="form-group">
    <label for="int_f_nat">Nationality:</label>
    <input type="text" name="int_f_nat" class="form-control" id="int_f_nat" placeholder="Example:Pakistan">
  </div>
  <div class="form-group">
    <label for="int_f_join">Joining Date:</label>
    <input type="text" name="int_f_join" class="form-control" id="int_f_join" placeholder="Example:12/2/2010">
  </div>
  <div class="form-group">
    <label for="int_f_sal">Salary:</label>
    <input type="text" name="int_f_sal" class="form-control" id="int_f_sal" placeholder="Example:32 Lectures">
  </div>
  <div class="form-group">
    <label for="int_f_post">Post:</label>
    <input type="text" name="int_f_post" class="form-control" id="int_f_post" placeholder="Example:Assisstent lecturer">
  </div>
  
  
  <button type="submit" name="int_f_btn" class="btn btn-primary">Insert</button>
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
if(isset($_POST['int_f_btn'])){
	$int_f_name			=	$_POST['int_f_name']; 
	$int_f_cnic			=	$_POST['int_f_cnic']; 
	$int_f_address		=	$_POST['int_f_address'];
	$int_f_cntct		=	$_POST['int_f_cntct'];
	$int_f_email		=	$_POST['int_f_email'];
	$int_f_quali		=	$_POST['int_f_quali'];
	$int_f_relig		=	$_POST['int_f_relig'];
	$int_f_nat			=	$_POST['int_f_nat'];
	$int_f_join			=	$_POST['int_f_join'];
	$int_f_sal			=	$_POST['int_f_sal'];
	$int_f_post			=	$_POST['int_f_post'];
	
	
	if(($int_f_name=='') AND ($int_f_cnic=='') AND ($int_f_address=='') AND ($int_f_cntct=='') AND ($int_f_email=='') 
		AND ($int_f_quali=='') AND ($int_f_relig=='') AND ($int_f_nat=='') AND ($int_f_join=='') AND ($int_f_sal=='') AND ($vis_f_post==''))
		{
			echo"<script>alert('Please, fill out all fields first!!')</script>";
			exit();
		}
		else {
			$que = "select * from int_teacher where email='$int_f_email'";
	        $run = mysql_query($que);
		if(mysql_num_rows($run)==1){
		echo"<script>alert('Email, you provided, is already present in our data base...Please try another one!!')</script>";
		exit();
	}
		}

	
	$query = "insert into int_teacher (name,cnic,addr,contact,email,quali,relig,nationality,joining,sal,post)
	values('$int_f_name','$int_f_cnic','$int_f_address','$int_f_cntct','$int_f_email','$int_f_quali','$int_f_relig','$int_f_nat','$int_f_join','$int_f_sal','$int_f_post')";
	
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
       $query=mysql_query("select * from int_teacher"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>	