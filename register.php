<?php      
        include('connection.php');
        $fname=$_POST['fname'];
    	$lname=$_POST['lname'];
        $gen=$_POST['gen'];
        $DOB=$_POST['DOB'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $hobbies=$_POST['hobbies'];
        $Pphoto=$_POST['Pphoto'];
        $status=$_POST['status'];
    	mysqli_query($conn,"insert into `registration` (fname,lname,gen,DOB,address,phone,email,hobbies,Pphoto,status) values ('$fname','$lname','$gen','$DOB','$address','$phone','$email','$hobbies','$Pphoto','$status')");
    	header('location:index.php');
?>