<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['tid'])){ 
   
    $tid= $_POST['tid']; 
    
    $sql_statement = "SELECT * FROM conducts WHERE  tid = $tid";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter an ID";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $wid = $row['wid'];
        $tid = $row['tid']; 
        echo $tid . " " . $wid . "<br>"; 
    } 
}

?>