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


if (!empty($_POST['wid'])){ 
   
    $wid = $_POST['wid']; 
    
    $sql_statement = "SELECT * FROM conducts WHERE  wid = $wid";
    $result = mysqli_query($db, $sql_statement);
    
    echo "<table>";
    echo "<tr><th>Teacher ID</th><th>Worksop ID</th></tr>";
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $wid = $row['wid'];
        $tid = $row['tid']; 
    
        //echo $eid . " " . $name . " " . $price . "<br>"; 
        echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$tid</td><td>$wid</td></tr>\n";
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