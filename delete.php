<?php
include 'conn.php';
//
$id=$_GET['id'];
echo "<pre>";
// print_r($_GET);
// echo "$id";
// die;

$query=  "DELETE FROM crudtable WHERE id =$id" ;




$con->query($query);
// print_r($con);
// die;

header("Location:insert.php?message=user deleted!");
?>

