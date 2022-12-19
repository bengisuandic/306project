<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $address = $_POST['address']; 
    $phone = $_POST['phone']; 
    

    $sql_statement = "INSERT INTO venues(name, phone,address ) VALUES ('$name',$phone ,'$address')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the venue name.";
}

?>