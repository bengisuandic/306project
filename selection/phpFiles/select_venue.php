<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['name'])){ 
   
    $name= $_POST['name']; 
    
    $sql_statement = "SELECT * FROM venues WHERE  name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a name";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $veid = $row['veid'];
        $name = $row['name']; 
        $mobile = $row['mobile']; 
        $address = $row['address']; 
        echo $veid . " " . $name . " " . $address . "<br>"; 
} 
}
?>