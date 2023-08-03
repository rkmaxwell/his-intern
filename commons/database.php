<?php

$host="localhost";
$user="root";
$password="";
$db="his_intern";


$connection=mysqli_connect($host,$user,$password,$db);

if(!$connection){

	echo "Failed to connect";
}

function connectToDB(){

$host="localhost";
$user="root";
$password="";
$db="his_intern";


$connection=mysqli_connect($host,$user,$password,$db);

return $connection;


}

?>