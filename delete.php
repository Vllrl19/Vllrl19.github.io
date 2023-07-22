<?php
	$id=$_GET['id'];
	include('conns.php');
	mysqli_query($conn,"delete from `user` where userid='$id'");
	header('location:indexs.php');
?>