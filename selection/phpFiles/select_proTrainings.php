<?php
include "../../config1.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM pro_trainings WHERE  price < 1000";


if (!empty($_POST['price'])){ 
   
    $price = $_POST['price']; 
    
    $sql_statement = "SELECT * FROM pro_trainings WHERE  price < $price";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a price";
}

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $pid = $row['pid'];
    $name = $row['name']; 
    $price = $row['price']; 
    $capacity = $row['capacity']; 
    $date = $row['date']; 
    echo $pid . " " . $name . " " . $price . "<br>"; 
} 

?>
