<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>

<?php
include("include/db.php");
$del_teach = $_GET['del_teach'];
$query="delete from teacher where id='$del_teach'";
if(mysql_query($query)){
	header('location:teach.php?del=Data has been Deleted Successfully!!!');
}
?>