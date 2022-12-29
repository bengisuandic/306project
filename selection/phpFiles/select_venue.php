<html>
<head>
<title>...</title>
<style type="text/css">
table {
margin: 50px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 2em;
background: #9919d0;
color: #FFF;
padding: 12px 16px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 2em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['name'])){ 
   
    $name= $_POST['name']; 
    
    $sql_statement = "SELECT * FROM venues WHERE  name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    if (mysqli_num_rows($result)  < 1) {
        echo "No results, sorry..";} else {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Address</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $veid = $row['veid'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $address = $row['address'];
            echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$veid</td><td>$name</td><td>$mobile</td><td>$address</td></tr>\n";
        }
        echo "</table>";
    }
} 
else 
{
    echo "You did not enter a type";
}


?>
</body>
</html>