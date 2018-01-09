<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_std = $_GET['del_it_eve_a'];
$query="delete from it_eve_a where id='$del_std'";
if(mysql_query($query)){
	header('location:it_eve_a.php?del=Data has been Deleted Successfully!!!');
}
?>