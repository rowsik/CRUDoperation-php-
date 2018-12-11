<?php

$dsn= 'mysql:dbname=crud;host=localhost';
$user="root";
$password="123456";




//$con= mysqli_connect('localhost','root','123456',crud');

try{
$con= new PDO ($dsn,$user,$password);
}catch(PDOException  $e){

echo $e-> getMessage();

}

// if ($con) {
// 	echo "string";
// 	# code...
// }





?>