<?php
$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="data";

//mysqli

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
  
  echo 'nooo connect';
  
}

?>