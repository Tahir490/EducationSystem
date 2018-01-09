<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>


<?php
include("include/db.php");
$del_course = $_GET['del_course'];
$query="delete from course where id='$del_course'";
if(mysql_query($query)){
	header('location:course.php?del=Data has been Deleted Successfully!!!');
}
?>