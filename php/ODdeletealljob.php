<?php
session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];
$idj=$_REQUEST["ptoolsid"];
$staj=$_REQUEST["stid"];
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql=  "UPDATE Ptools SET Ptools.Active=\"0\" WHERE 1";
$conn->query($sql);
header("location: ../user2.php#jobs");


?>
