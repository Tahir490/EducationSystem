<?php
session_start();
if(!$_SESSION['name']){
	header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("include/db.php");
$del_emp = $_GET['del_emp'];
$query="delete from emp where id='$del_emp'";
if(mysql_query($query)){
	header('location:emp.php?del=Data has been Deleted Successfully!!!');
}
?>