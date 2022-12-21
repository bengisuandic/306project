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


if (!empty($_POST['veid'])){ 
   
    $veid = $_POST['veid']; 
    
    $sql_statement = "SELECT * FROM located WHERE  veid = $veid";
    $result = mysqli_query($db, $sql_statement);
    
    echo "<table>";
    echo "<tr><th>Venue ID</th><th>Workshop ID</th></tr>";
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $veid = $row['veid'];
        $wid = $row['wid']; 
    
        //echo $eid . " " . $name . " " . $price . "<br>"; 
        echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$veid</td><td>$wid</td></tr>\n";
    } 
    echo "</table>";
        
} 
else 
{
    echo "You did not enter the ID";
}


?>
</body>
</html>