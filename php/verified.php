<?php
session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];
$hash= $_SESSION["hashed"];
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
echo $hash;
$conn = new mysqli($servername,$username,$password,$dbname);
$sql0= "SELECT * from User WHERE User.Username like '$un' and User.Password like '$hash'";
$result0=$conn->query($sql0);
$row0 = $result0->fetch_assoc();
$idj=$row0['ID'];
$sql= "UPDATE User SET User.Active=\"1\" WHERE User.ID like '".$idj."')";
$conn->query($sql);
console.log($idj);
header("location:../user2.php");
?>