<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['name'])){ 
   
    $name= $_POST['name']; 
    
    $sql_statement = "SELECT * FROM food_types WHERE  name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a name";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $fid = $row['fid'];
        $name = $row['name']; 
        $description = $row['description']; 
        echo $fid . " " . $name . " " . $description . "<br>"; 
} 
}
?>