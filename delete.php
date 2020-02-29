<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete mobile </title>
</head>

<body>
<?php
	$ID=$_GET['ID']; echo $ID;
	require_once("connect.php");
	$sql="delete from mobile where ID= $ID ";
	$query=mysqli_query($conn,$sql);
     if($query){header('location:mobile.php');} 
?>
</body>
</html>