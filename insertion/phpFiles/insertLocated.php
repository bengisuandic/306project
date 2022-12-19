<?php 

include "config1.php"; 

if (!empty($_POST['veid'])){ 
    $wid = $_POST['veid']; 
    $uid= $_POST['wid']; 

    

    $sql_statement = "INSERT INTO located(veid, wid) VALUES ($veid,$wid)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the eid.";
}

?>