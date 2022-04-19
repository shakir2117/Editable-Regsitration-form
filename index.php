<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign Up</h2>    
        <form name = "form1" action="register.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" placeholder="enter firstname" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" placeholder="enter lastname" required />    
                </div>    
                <div class = "form_group">    
                    <label>Gender:</label>    
                    <input type = "radio" id = "Male" name = "gen" value = "Male" required/>Male
                    <input type = "radio" id = "Female" name = "gen" value = "Female" required/>Female
                </div>    
                <div class = "form_group">    
                    <label>DOB :</label>    
                    <input type = "date" name = "DOB" value = "" required/>    
                </div>
                <div class = "form_group">    
                    <label>Address :</label>    
                    <textarea name="address" rows="4" cols="40" placeholder="enter address" required></textarea>    
                </div>
                <div class = "form_group">    
                    <label>Mobile No.:</label>    
                    <input type = "text" name = "phone" value = "" pattern="\d{10}" maxlength="10" placeholder="enter your phone no." required/>    
                </div>
                <div class = "form_group">    
                    <label>Email :</label>    
                    <input type = "email" name = "email" pattern="[^ @]*@[^ @]*" value = "" placeholder="enter your email" required/>    
                </div>
                <div class = "form_group">    
                    <label>Hobbies: </label>    
                    <input type = "radio" name = "hobbies" value = "Gaming" required/>Gaming
                    <input type = "radio" name = "hobbies" value = "Football" required/>Football
                    <input type = "radio" name = "hobbies" value = "Cricket" required/>Cricket   
                    <input type = "radio" name = "hobbies" value = "Vloging" required/>Vloging    
                </div>
                <div class = "form_group">    
                    <label>Profile photo :</label>    
                    <input type = "file" name = "Pphoto" value = "" accept="image/jpeg" required/>    
                </div>
                <div class = "form_group">    
                    <label>Status</label>    
                    <select id="status" name="status">
                        <option value="New">New Student</option>
                        <option value="Old">Old Student</option>
                      </select>    
                </div>
                <input type="submit" value="sign up"> <br> Sign Up
            </div>    
        </form> 
        <div>
    		<table border="1">
    			<thead>
                    <th>Sr No</th>
    				<th>Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Mobile no.</th>
                    <th>Email</th>
    				<th>Status</th>
    			</thead>
    			<tbody>
    				<?php
    					include('connection.php');
    					$query=mysqli_query($conn,"select * from `registration`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
                                <td><?php echo $row['id']; ?></td>
    							<td><?php echo $row['fname']; ?>  <?php echo $row['lname']; ?></td>
    							<td><?php echo $row['gen']; ?></td>
                                <td><?php echo $row['DOB']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
    								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>   
    </body>    
</html>   