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
<div class="heading2"><h2>USER MESSAGES</h2></div>
<div class="container">
		<div class="well">
		<div class="responsive-table">
	<table class="table table-bordered">
	
	  <tr class="info">
	    <th>ID</th>
	    <th>Name</th>
	    <th>Email</th>
		<th>Messages</th>
		<th>Delete</th>
		<th>Show</th>
	    </tr>
	<tr>
	  <?php
	  include("include/db.php");
$query ="select * from user_msg";
$run = mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$id = $row['id'];
	$name = $row[1];
	$email = $row[2];
	$msg = $row[3];
	?>
	    <td><?php echo $id; ?></td>
	    <td><?php echo $name; ?> </td>
	    <td><?php echo $email; ?></td>
		<td><?php echo $msg; ?></td>
		<td><a href='del_msg.php?del_msg=<?php echo $id; ?>'><font color="#E43C39">Delete</font></a></td>
	    <td><a href='show_msg.php?show_msg=<?php echo $id; ?>'><font color="#E43C39">Show</font></a></td>
		</tr>
	<?php }  ?>	
</table>
</div>
</div>
<center><font color="#E43C39" size="8px"><?php echo @$_GET['del']; ?></td></font></center>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
include("include/db.php");
  $total_num_results=23;
       //or get the count dynamically as shown below.
       $query=mysql_query("select * from cs_morning"); //query to show results from.
       $total_num_results = mysql_num_rows($query); //Total count of the fetched results.
       //////////////////////////////////
  $posts_per_page="15"; //how many results do you need to show on a single page.
  $cur_page="1"; //current page. by default it is set to 1.
  if(isset($_GET['page'])) { $cur_page=$_GET['page']; } //if variable `page` is set in url parameters, then change the current page.
  $html=pagination($total_num_results,$posts_per_page,$cur_page); //calling pagination function.
  echo $html; //printing the result.
?>