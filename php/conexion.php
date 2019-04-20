<?php


$mysqli = mysqli_connect("127.0.0.1","root","","test_php");

if(!$mysqli){
    die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
}
   

?>