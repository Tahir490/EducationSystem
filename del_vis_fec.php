<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_vis_fec'];
$query="delete from vis_teacher where id='$del_std'";
if(mysql_query($query)){
	header('location:vis_fec.php?del=Data has been Deleted Successfully!!!');
}
?>