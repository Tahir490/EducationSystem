<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_std'];
$query="delete from std where id='$del_std'";
if(mysql_query($query)){
	header('location:std.php?del=Data has been Deleted Successfully!!!');
}
?>