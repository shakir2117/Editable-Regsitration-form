<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "select from registration where id = '".$_GET['id']."'";    
$result = mysqli_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysqli_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>First Name</td>    
                <td>Last Name</td>    
                <td>Gender</td>    
                <td>DOB</td>    
                <td>address</td>    
                <td>Phone</td>    
                <td>Gender</td>    
                <td>email</td>    
                <td>hobbies</td>    
                <td>Pphoto</td>    
                <td>status</td>    
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>