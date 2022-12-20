<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['name'])){ 
   
    $profession= $_POST['name']; 
    
    $sql_statement = "SELECT * FROM videos WHERE  name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    
} 
else 
{
    echo "You did not enter a name";
}

if($result)
{
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $viid = $row['viid'];
        $name = $row['name']; 
        $link = $row['link']; 
        $description = $row['description']; 
        echo $viid . " " . $name . " " . $link . "<br>"; 
} 
}
?>