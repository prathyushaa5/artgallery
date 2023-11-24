<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="artgallery";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
  die("failed connection");
}
