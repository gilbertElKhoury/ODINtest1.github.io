<?php

session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];
$idj=$_REQUEST["ptoolsid"];
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
$time=date("Y-m-d")." ". date("H:i:s");
$conn = new mysqli($servername,$username,$password,$dbname);
$sql0= "SELECT Status from Ptools WHERE Ptools.ID like '".$idj."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
$result0=$conn->query($sql0);
$row0 = $result0->fetch_assoc();
$staj=$row0['Status'];
if ($staj<3){ 

$sql= "UPDATE Ptools SET Ptools.Status=\"3\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$idj."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
$conn->query($sql);
header("location:../user2.php#jobs");
}
else
{
	header("location:../user2.php#stat");
}
?>
