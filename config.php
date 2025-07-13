<?php
$server="localhost";
$username="root";
$password="";
$db="todo";

$link=new mysqli($server,$username,$password,$db);
if ($link->connect_error){
    die("error:".$link->connect_error);
}
?>