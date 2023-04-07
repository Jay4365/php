<?php
require_once("connection.php");
try
{
    $sql = "delete from employee where id = ?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$_REQUEST['id']);
    $statement->execute();
    $_SESSION['message']="Delete Successfully";
    header("location:crud_demo.php");
}
catch (PDOException $error)
{
    echo $error;
}
?>