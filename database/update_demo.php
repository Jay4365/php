<?php
require_once("connection.php");

try
{
    $id=6;
    $name="Dhaivat";
    $age=21;
    $course="larvel";
    $gender=1;
    $doj="2022-22-11";
    $sql = "update students set name=?,age=?,doj=?,course=?,gender=? where id=?";
    $statement = $db->prepare($sql);
    $statement -> bindparam(1,$name);
    $statement -> bindparam(2,$age);
    $statement -> bindparam(3,$gender);
    $statement -> bindparam(4,$doj);
    $statement -> bindparam(5,$course);
    $statement -> bindparam(6,$id);
    $statement -> execute();
    echo "Record Update Successfully";
}
catch (PDOException $error)
{
    echo $error;
}
?>