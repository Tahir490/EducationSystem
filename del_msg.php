<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_msg = $_GET['del_msg'];
$query="delete from user_msg where id='$del_msg'";
if(mysql_query($query)){
	header('location:user_msgs.php?del=Data has been Deleted Successfully!!!');
}
?>