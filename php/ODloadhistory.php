<?php
$id=$_REQUEST["ID"];
$sql7= "SELECT * From Results where User_ID like $id";
$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
 if ($result=mysqli_query($con,$sql7)) 
{
    while ($rows=mysqli_fetch_assoc($result)) {
    	
    	echo "Filename:";
    	echo $rows["Filename"];
        echo ",Chain:";
        echo $rows["Chain"];
    	echo ",Start:";
    	echo $rows["Completed"];
    	echo ",End:";
    	echo $rows["Remove"];
    	echo "/";
    }
};
?>