<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_cs_course'];
$query="delete from cs_course where id='$del_std'";
if(mysql_query($query)){
	header('location:cs_course.php?del=Data has been Deleted Successfully!!!');
}
?>