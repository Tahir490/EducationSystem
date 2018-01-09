<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_int_fec'];
$query="delete from int_teacher where id='$del_std'";
if(mysql_query($query)){
	header('location:int_fec.php?del=Data has been Deleted Successfully!!!');
}
?>