<?php
session_start();
$name=$_REQUEST["FTD"];
chdir("../tools/");
echo $name;
$command = escapeshellcmd('python getchains.py '.$name.' ');
$output = shell_exec($command);
header("location: ../chains/".$name."_chains.php");
?>