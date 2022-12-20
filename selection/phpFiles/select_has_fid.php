<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['fid'])){ 
   
    $fid= $_POST['fid']; 
    
    $sql_statement = "SELECT * FROM has WHERE  fid = $fid";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter an ID";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $eid = $row['eid'];
        $fid = $row['fid']; 
        echo $eid . " " . $fid . "<br>"; 
    } 
}

?>