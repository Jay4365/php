<?php
require_once("connection.php");
echo "connection established...";

$sql = "select * from students";
$statement = $db->prepare($sql);
$statement-> setFetchMode(PDO::FETCH_ASSOC);
$statement-> execute();
$table = $statement->fetchAll();

var_dump($table);
?>