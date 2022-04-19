<?php
    	$id=$_GET['id'];
    	include('connection.php');
    	mysqli_query($conn,"delete from `registration` where id='$id'");
    	header('location:index.php');
    ?>"DELETE FROM `registration` WHERE `registration`.`id` = 6"