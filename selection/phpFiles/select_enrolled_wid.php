<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['wid'])){ 
   
    $wid = $_POST['wid']; 
    
    $sql_statement = "SELECT * FROM enrolled WHERE  wid = $wid";
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