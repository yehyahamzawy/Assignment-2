<?php
$Connection = new mysqli("localhost", "root", "", "task2");
$sql = "INSERT INTO address (Address,pID)
VALUES ('".$_POST["child"]."','".$_POST["parent"]."')";
mysqli_query($Connection, $sql);
?>