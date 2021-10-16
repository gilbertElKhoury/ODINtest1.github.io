<?php
session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];

$_SESSION["mafile"]="";

$id=$_REQUEST["ID"];
$Procheck=$_REQUEST["Procheck"];
$Qmean=$_REQUEST["Qmean"];
$dDFIRE=$_REQUEST["dDFIRE"];
$shiftX=$_REQUEST["shiftX"];
$DOPE=$_REQUEST["DOPE"];
$Verify3D=$_REQUEST["Verify3D"];
$Prove=$_REQUEST["Prove"];
$Errat=$_REQUEST["Errat"];
$frst=$_REQUEST["frst"];
$Prosa=$_REQUEST["Prosa"];
$isscore=$_REQUEST["isscore"];

$allchains=$_REQUEST["chain"];
if ($allchains=="") {
    $allchains="ALL";
    echo $allchains;
}
else
{
    if (strlen($allchains)==1)
    {
        if ($allchains>="A" && $allchains<="Z"  ) {
                echo $allchains;
                echo "\n";
            }
            else
            {
                if ($allchains>="a" && $allchains<="z"  ) {
                    $allchains=strtoupper($allchains);
                    echo $allchains;
                    echo "\n";
                }
            }
    }
    if (strlen($allchains)>1) {
        $allchains=explode(",",$allchains);
        print_r($allchains);
       foreach ($allchains as &$value) {
            $value =strtoupper($value);
            $value=str_replace(" ","",$value);
            if (strlen($value)>1) {
                $value="";
            }
            else
            {
                if ($value<"A" || $value>"Z") {
                    $value="";
                }
            }
        }
        $allchains=array_unique($allchains);
        print_r($allchains);
    }
}

$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
$conn = new mysqli($servername,$username,$password,$dbname);
$target_dir3= "/var/www/html/ODIN/tools/";
$target_dir2= "/var/www/html/ODIN/processed/";
$target_dir = "/var/www/html/ODIN/uploads/";
$target_file = $target_dir . strtoupper(basename($_FILES["fileToUpload"]["name"]));
$target_file2 = $target_dir2 . strtoupper(basename($_FILES["fileToUpload"]["name"]));
$target_file3 = $target_dir3 .strtoupper(basename($_FILES["fileToUpload"]["name"]));
$target_file=str_replace(".PDB", ".pdb", $target_file);
$target_file2=str_replace(".PDB", ".pdb", $target_file2);
$target_file3=str_replace(".PDB", ".pdb", $target_file3);
$uploadOk = 1;
$lol=strtoupper(basename($_FILES["fileToUpload"]["name"]));
$lol=str_replace(".PDB", ".pdb", $lol);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $target_file;
if ($lol!=".pdb") {

//check type (pdb or fasta)
if($imageFileType != "pdb" ) {
    echo "Sorry, only PDB files are allowed.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 3221225472) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("location:../fue.php#run");
    echo "I have Failed file not ok";
// if everything is ok, try to upload file
} else {
	
    if (file_get_contents($_FILES["fileToUpload"]["tmp_name"]))
    {
        $content = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
        file_put_contents($target_file,$content);
        file_put_contents($target_file2,$content);
        file_put_contents($target_file3,$content);
        $time=date("Y-m-d");
        $timetodel=date("Y-m-d",strtotime("+2 month",time()));
        if ($allchains=="ALL") {
             $sql = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Procheck\",\"$lol\")";
                $sql2 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Qmean\",\"$lol\")";
                $sql3 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"dDFIRE\",\"$lol\")";
                $sql4 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"shiftX\",\"$lol\")";
                $sql5 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Isscore\",\"$lol\")";
                $sql8 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"DOPE\",\"$lol\")";
                $sql9 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"frst\",\"$lol\")";
                $sql10 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Verify3D\",\"$lol\")";
                $sql11 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Prove\",\"$lol\")";
                $sql12 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Errat\",\"$lol\")";
                $sql13 = "INSERT INTO Ptools (User_ID,Tool_name,Filename) values ($id,\"Prosa\",\"$lol\")";
                $sql7= "SELECT count(Filename) From Results where Filename like '$lol' and User_ID like $id and Chain like 'ALL'";
                $con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
                if ($result=mysqli_query($con,$sql7)) {
                    while ($rows=mysqli_fetch_assoc($result)) {
                        if ($rows['count(Filename)']==0) {
                            $sql6 = "INSERT INTO Results (User_ID, Filename,Completed, Remove) VALUES ($id, \"$lol\",\"$time\",\"$timetodel\")";
                            $conn->query($sql6);
                        }
                    }
                };
                    if (((((((($Procheck =="on") || ($Qmean=="on")) || (($dDFIRE=="on") || ($shiftX=="on")) || $DOPE=="on") || $frst=="on") || $Prove=="on")|| $Verify3D=="on") || $Errat=="on")||$Prosa=="on"){
                        if ( $Procheck=="on") {
                            $conn->query($sql);
                        };
                        if ( $dDFIRE=="on") {
                            $conn->query($sql3);
                        };
                        if ( $shiftX=="on") {
                            $conn->query($sql4);
                        };
                        if ($isscore=="on") {
                            $conn->query($sql5);
                        };
                        if ($DOPE=="on") {
                            $conn->query($sql8);
                        };
                         if ($frst=="on") {
                            $conn->query($sql9);
                        };
                        if ($Errat=="on") {
                            $conn->query($sql12);
                        };
                        if ($Prove=="on") {
                            $conn->query($sql11);
                        };
                        if ($Verify3D=="on") {
                            $conn->query($sql10);
                        };
                        if ( $Qmean=="on") {
                            $conn->query($sql2);
                        };
                        if ( $Prosa=="on") {
                            $conn->query($sql13);
                        };
                header("location:ODexecute.php");
            }
            else
            {
                echo "I have failed on test 2";
            }
        }
        else
        {
        	echo "here";
            if (strlen($allchains)==1) 
            {
                $sql = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Procheck\",\"$lol\",\"$allchains\")";
                    $sql2 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Qmean\",\"$lol\",\"$allchains\")";
                    $sql3 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"dDFIRE\",\"$lol\",\"$allchains\")";
                    $sql4 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"shiftX\",\"$lol\",\"$allchains\")";
                    $sql5 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Isscore\",\"$lol\",\"$allchains\")";
                    $sql8 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"DOPE\",\"$lol\",\"$allchains\")";
                    $sql9 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"frst\",\"$lol\",\"$allchains\")";
                    $sql10 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Verify3D\",\"$lol\",\"$allchains\")";
                    $sql11 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prove\",\"$lol\",\"$allchains\")";
                    $sql12 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Errat\",\"$lol\",\"$allchains\")";
                    $sql13 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prosa\",\"$lol\",\"$allchains\")";
                    $sql7= "SELECT count(Filename) From Results where Filename like '$lol' and User_ID like $id and Chain like '$allchains'";
                    $con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
                    if ($result=mysqli_query($con,$sql7)) 
                    {
                        while ($rows=mysqli_fetch_assoc($result)) {
                            if ($rows['count(Filename)']==0) {
                                $sql6 = "INSERT INTO Results (User_ID, Filename,Chain,Completed, Remove) VALUES ($id, \"$lol\",\"$allchains\",\"$time\",\"$timetodel\")";
                                $conn->query($sql6);
                            }
                        }
                    }
                    if (((((((($Procheck =="on") || ($Qmean=="on")) || (($dDFIRE=="on") || ($shiftX=="on")) || $DOPE=="on") || $frst=="on") || $Prove=="on")|| $Verify3D=="on") || $Errat=="on")||$Prosa=="on"){
                        if ( $Procheck=="on") {
                            $conn->query($sql);
                        };
                        if ( $dDFIRE=="on") {
                            $conn->query($sql3);
                        };
                        if ( $shiftX=="on") {
                            $conn->query($sql4);
                        };
                        if ($isscore=="on") {
                            $conn->query($sql5);
                        };
                        if ($DOPE=="on") {
                            $conn->query($sql8);
                        };
                         if ($frst=="on") {
                            $conn->query($sql9);
                        };
                        if ($Errat=="on") {
                            $conn->query($sql12);
                        };
                        if ($Prove=="on") {
                            $conn->query($sql11);
                        };
                        if ($Verify3D=="on") {
                            $conn->query($sql10);
                        };
                        if ($Prosa=="on") {
                            $conn->query($sql13);
                        };
                        if ( $Qmean=="on") {
                            $conn->query($sql2);
                        };
                    header("location:ODexecute.php");
                }
                else
                {
                    echo "I have failed on test 3";
                }
            }
            else
            {
                foreach ($allchains as &$value) {
                    if ($value=="") {
                        continue;
                    }
                    $sql = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Procheck\",\"$lol\",\"$value\")";
                        $sql2 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Qmean\",\"$lol\",\"$value\")";
                        $sql3 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"dDFIRE\",\"$lol\",\"$value\")";
                        $sql4 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"shiftX\",\"$lol\",\"$value\")";
                        $sql5 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Isscore\",\"$lol\",\"$value\")";
                        $sql8 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"DOPE\",\"$lol\",\"$value\")";
                        $sql9 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"frst\",\"$lol\",\"$value\")";
                        $sql10 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Verify3D\",\"$lol\",\"$value\")";
                        $sql11 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prove\",\"$lol\",\"$value\")";
                        $sql12 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Errat\",\"$lol\",\"$value\")";
                        $sql13 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prosa\",\"$lol\",\"$value\")";
                        $sql7= "SELECT count(Filename) From Results where Filename like '$lol' and User_ID like $id and Chain like '$value'";
                        $con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
                        if ($result=mysqli_query($con,$sql7)) {
                            while ($rows=mysqli_fetch_assoc($result)) {
                                if ($rows['count(Filename)']==0) {
                                    $sql6 = "INSERT INTO Results (User_ID, Filename,Chain,Completed, Remove) VALUES ($id, \"$lol\",\"$value\",\"$time\",\"$timetodel\")";
                                    $conn->query($sql6);
                                }
                            }
                        };
                        if (((((((($Procheck =="on") || ($Qmean=="on")) || (($dDFIRE=="on") || ($shiftX=="on")) || $DOPE=="on") || $frst=="on") || $Prove=="on")|| $Verify3D=="on") || $Errat=="on")||$Prosa=="on"){
                        if ( $Procheck=="on") {
                            $conn->query($sql);
                        };
                        if ( $dDFIRE=="on") {
                            $conn->query($sql3);
                        };
                        if ( $shiftX=="on") {
                            $conn->query($sql4);
                        };
                        if ($isscore=="on") {
                            $conn->query($sql5);
                        };
                        if ($DOPE=="on") {
                            $conn->query($sql8);
                        };
                         if ($frst=="on") {
                            $conn->query($sql9);
                        };
                        if ($Errat=="on") {
                            $conn->query($sql12);
                        };
                        if ($Prove=="on") {
                            $conn->query($sql11);
                        };
                        if ($Verify3D=="on") {
                            $conn->query($sql10);
                        };
                        if ($Prosa=="on") {
                            $conn->query($sql13);
                        };
                        if ( $Qmean=="on") {
                            $conn->query($sql2);
                        };
                        header("location:ODexecute.php");
                    }
                    else
                    {
                       echo "I have failed on test4";
                    }
                }    
            }
        }
    }
    else
    {
        header("location:../user2.php#run");
    }
}
}
else
{
    header("location:../user2.php#run");
}

?>
