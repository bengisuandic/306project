<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['type'])){ 
   
    $type= $_POST['type']; 
    
    $sql_statement = "SELECT * FROM users WHERE  type = '$type'";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a type";
}

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $uid = $row['uid'];
    $name = $row['name']; 
    $email = $row['email']; 
    $mobile = $row['mobile']; 
    $type = $row['type']; 
    echo $uid . " " . $name . " " . $type . "<br>"; 
} 

?>
