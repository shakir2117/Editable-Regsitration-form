    <?php
    	include('connection.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `registration` where id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>registration form</title>
    </head>
    <body>
    <link href = "registration.css" type = "text/css" rel = "stylesheet" />
    	<h2>Edit</h2>
    	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    		<div class="form_group">
            <label>Firstname:</label><input type="text" value="<?php echo $row['fname']; ?>" name="fname">
            </div>
            <div class="form_group">
            <label>Lastname:</label><input type="text" value="<?php echo $row['lname']; ?>" name="lname">   
            </div>
    		<div class="form_group">
            <label>Gender</label>
            <input type = "radio" id = "Male" name = "gen" value = "Male" >Male
            <input type = "radio" id = "Female" name = "gen" value = "Female">Female            
            </div>
            <div class="form_group">
            <label>DOB</label><input type="date" value="<?php echo $row['DOB']; ?>" name="DOB">   
            </div>
            <div class="form_group">
            <label>Mobile no.</label><input type="text" value="<?php echo $row['phone']; ?>" name="phone" pattern="\d{10}" maxlength="10" placeholder="enter your phone no.">   
            </div>
            <div class="form_group">
            <label>Email</label><input type="text" pattern="[^ @]*@[^ @]*" value="<?php echo $row['email']; ?>" name="email">   
            </div>
            <div class = "form_group">    
                <label>Status</label>    
                <select name="status">
                    <option id = "New" value="New">New Student</option>
                    <option id ="Old" value="Old">Old Student</option>
                </select>    
            </div>
    		<input type="submit" name="submit">
    		<a href="index.php">Back</a>
    	</form>
    </body>
    </html>