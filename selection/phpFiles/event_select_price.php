<?php 

include "../../config1.php"; // Makes mysql connection



if (!empty($_POST['price'])){ 
   
    $price = $_POST['price']; 
    
    $sql_statement = "SELECT * FROM events  WHERE  price < $price";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a price for the event";
}

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $eid = $row['eid'];
    $name = $row['name']; 
    $type = $row['type'];
    $price = $row['price']; 
    $capacity = $row['capacity']; 
    $date = $row['date']; 
    echo $eid . " " . $name . " " . $price . "<br>"; 
} 

?>