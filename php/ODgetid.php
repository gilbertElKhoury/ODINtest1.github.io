<?php
session_start();
$un= $_REQUEST["UN"];
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
$conn = new mysqli($servername,$username,$password,$dbname);
$sql0= "SELECT * from User WHERE User.Username like '$un'";
$result0=$conn->query($sql0);
$row0 = $result0->fetch_assoc();
$idj=$row0['ID'];
echo $idj;
?>