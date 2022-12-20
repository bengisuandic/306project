<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['profession'])){ 
   
    $profession= $_POST['profession']; 
    
    $sql_statement = "SELECT * FROM teachers WHERE  profession = '$profession'";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a profession";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $tid = $row['tid'];
        $name = $row['name']; 
        $email = $row['email']; 
        $mobile = $row['mobile']; 
        $profession = $row['profession']; 
        echo $tid . " " . $name . " " . $profession . "<br>"; 
} 
}
?>
