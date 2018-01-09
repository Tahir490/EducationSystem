<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_mcs_weekend'];
$query="delete from mcs_weekend where id='$del_std'";
if(mysql_query($query)){
	header('location:mcs_weekend.php?del=Data has been Deleted Successfully!!!');
}
?>