<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['uid'])){ 
   
    $uid= $_POST['uid']; 
    
    $sql_statement = "SELECT * FROM enrolled WHERE  uid = $uid";
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
        $uid = $row['uid']; 
        echo $uid . " " . $wid . "<br>"; 
    } 
}

?>