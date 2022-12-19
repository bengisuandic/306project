<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $uid = $_POST['ids'];
    $sql_statement = "DELETE FROM enrolled WHERE uid = $uid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>