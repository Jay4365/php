<?php
require_once("connection.php");

try
{
    $name="Jay";
    $age=20;
    $gender=1;
    $course="php";
    $doj="2022-12-31";
    $sql = "insert into students (name,age,gender,course,doj) values(?,?,?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$name);
    $statement->bindparam(2,$age);
    $statement->bindparam(3,$gender);
    $statement->bindparam(4,$course);
    $statement->bindparam(5,$doj);
    $statement->execute();
    echo "data added successfully";
}
catch(PDOException $error)
{
    echo $error;
}
?>
