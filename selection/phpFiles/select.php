<?php 

include "../../config1.php"; // Makes mysql connection



if (!empty($_POST['price'])){ 
   
    $price = $_POST['price']; 
    
    $sql_statement = "SELECT * FROM workshops WHERE  price < $price";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a price";
}

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $wid = $row['wid'];
    $name = $row['name']; 
    $price = $row['price']; 
    $capacity = $row['capacity']; 
    $date = $row['date']; 
    echo $wid . " " . $name . " " . $price . "<br>"; 
} 

?>