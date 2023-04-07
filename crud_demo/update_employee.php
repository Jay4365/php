<?php
session_start();
require_once("connection.php");
var_dump($_POST);
extract($_POST);
try
{
    $sql = "update employee set name=?, email=?, doj=?, gender=? where id =?";
    $statement =$db ->prepare($sql);
    $statement -> bindparam(1,$name);
    $statement -> bindparam(2,$email);
    $statement -> bindparam(3,$doj);
    $statement -> bindparam(4,$gender);
    $statement -> bindparam(5,$id);
    $statement -> execute();
    $_SESSION['message'] = "Employee Updated Successfully";
    header("location:crud_demo.php");
}
catch(PDOException $error)
{
    echo $error;
}
?>