<?php 

include "config1.php"; 

if (!empty($_POST['eid'])){ 
    $wid = $_POST['eid']; 
    $uid= $_POST['fid']; 

    

    $sql_statement = "INSERT INTO has(eid, fid) VALUES ($eid,$fid)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the eid.";
}

?>