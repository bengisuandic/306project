<html>
<head>
<title>...</title>
<style type="text/css">
table {
margin: 8px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php 
include "config1.php"; // Makes mysql connection


if (!empty($_POST['type'])){ 
   
    $type= $_POST['type']; 
    
    $sql_statement = "SELECT * FROM events WHERE  type = '$type'";
    $result = mysqli_query($db, $sql_statement);

    echo "<table>";
    echo "<tr><th>ID</th><th>hashtag</th></tr>";
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $eid = $row['eid'];
        $name = $row['name']; 
        $type = $row['type'];
        $price = $row['price']; 
        $capacity = $row['capacity']; 
        $date = $row['date']; 
        //echo $eid . " " . $name . " " . $price . "<br>"; 
        echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$eid</td><td>$name</td><td>$price</td></tr>\n";
    } 
    echo "</table>";
        
} 
else 
{
    echo "You did not enter a type";
}


?>
</body>
</html>