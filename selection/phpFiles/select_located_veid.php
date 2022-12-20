<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['veid'])){ 
   
    $veid = $_POST['veid']; 
    
    $sql_statement = "SELECT * FROM located WHERE  veid = $veid";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter an ID";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $veid = $row['veid'];
        $wid = $row['wid']; 
        echo $wid . " " . $veid . "<br>"; 
    } 
}

?>