<?php
    	include('connection.php');
    	$id=$_GET['id'];
     
    	$fname=$_POST['fname'];
    	$lname=$_POST['lname'];
        $gen=$_POST['gen'];
        $DOB=$_POST['DOB'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $status=$_POST['status'];
     
    	mysqli_query($conn,"update `registration` set fname='$fname', lname='$lname',gen='$gen',DOB='$DOB',phone='$phone',email='$email',status='$status' where id='$id'");
    	header('location:index.php');
    ?>