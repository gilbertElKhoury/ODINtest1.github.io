<?php
session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];


$id=$_REQUEST["ID"];
$_SESSION["ID"] = $id;
$Procheck=$_REQUEST["Procheck"];
$Qmean=$_REQUEST["Qmean"];
$dDFIRE=$_REQUEST["dDFIRE"];
$shiftX=$_REQUEST["shiftX"];
$isscore=$_REQUEST["isscore"];
$DOPE=$_REQUEST["DOPE"];
$Verify3D=$_REQUEST["Verify3D"];
$Prove=$_REQUEST["Prove"];
$Errat=$_REQUEST["Errat"];
$frst=$_REQUEST["frst"];
$Prosa=$_REQUEST["Prosa"];
$name=$_REQUEST["fileToUpload2"];
$chain=$_REQUEST["chain"];
$_SESSION["FTD"] = $name;
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
$conn = new mysqli($servername,$username,$password,$dbname);
$str_arr = explode (",", $name);  
if($name!="")
{
    if ((strlen($name)==4) || (strlen($name)==8)) 
    {
        if (strpos($name, '.pdb') !== false) {$name=str_replace(".pdb","",$name);}
        $name2=strtoupper($name).".pdb";
        chdir("../tools");
        if (file_exists($name2)) {$output=1;} else 
        {
            exec('python download.py '.$name2,$output);
            chdir("../uploads");
            shell_exec("chmod -R 777 *");
            shell_exec("cp ".$name2." ../tools/");
            chdir("../tools");
            shell_exec("chmod -R 777 *");
            $output=$output[0];
        }
        if ($output!="0") 
        {
            print("hello");
            $time=date("Y-m-d");
            $timetodel=date("Y-m-d",strtotime("+2 month",time()));
            $sql = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Procheck\",\"$name2\",\"$chain\")";
            $sql2 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Qmean\",\"$name2\",\"$chain\")";
            $sql3 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"dDFIRE\",\"$name2\",\"$chain\")";
            $sql4 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"shiftX\",\"$name2\",\"$chain\")";
            $sql5 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Isscore\",\"$name2\",\"$chain\")";
            $sql8 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"DOPE\",\"$name2\",\"$chain\")";
            $sql9 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"frst\",\"$name2\",\"$chain\")";
            $sql10 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Verify3D\",\"$name2\",\"$chain\")";
            $sql11 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prove\",\"$name2\",\"$chain\")";
            $sql12 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Errat\",\"$name2\",\"$chain\")";
            $sql13 = "INSERT INTO Ptools (User_ID,Tool_name,Filename,Chain) values ($id,\"Prosa\",\"$name2\",\"$chain\")";
            $sql7= "SELECT count(Filename) From Results where Filename like '$name2' and User_ID like $id and Chain like '$chain'";
            $con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
            if ($result=mysqli_query($con,$sql7)) 
            {
                while ($rows=mysqli_fetch_assoc($result)) {
                    if ($rows['count(Filename)']==0) 
                    {
                        print("added to result page");
                        $sql6 = "INSERT INTO Results (User_ID, Filename,Completed, Remove, Chain) VALUES ($id, \"$name2\",\"$time\",\"$timetodel\",\"$chain\")";
                        $conn->query($sql6);
                    }else
                    {
                        print("did not add to result page");
                    }
                }
            };
            if (((((((($Procheck =="on") || ($Qmean=="on")) || (($dDFIRE=="on") || ($shiftX=="on")) || $DOPE=="on") || $frst=="on") || $Prove=="on")|| $Verify3D=="on") || $Errat=="on")||$Prosa=="on")
            {
                print("selected a tool");
                if ( $Procheck=="on") {
                    echo "added Procheck";
                    $conn->query($sql);
                };
                if ( $dDFIRE=="on") {
                    echo "added dDFIRE";
                    $conn->query($sql3);
                };
                if ( $shiftX=="on") {
                    echo "added shiftX";
                    $conn->query($sql4);
                };
                if ($isscore=="on") {
                    echo "added isscore";
                    $conn->query($sql5);
                };
                if ($DOPE=="on") {
                    echo "added DOPE";
                    $conn->query($sql8);
                };
                if ($frst=="on") {
                    echo "added frst";
                    $conn->query($sql9);
                };
                if ($Errat=="on") {
                    echo "added Errat";
                    $conn->query($sql12);
                };
                 if ($Prosa=="on") {
                    echo "added Prosa";
                    $conn->query($sql13);
                };
                if ($Prove=="on") {
                    echo "added Prove";
                    $conn->query($sql11);
                };
                if ($Verify3D=="on") {
                    echo "added Verify3D";
                    $conn->query($sql10);
                };
                if ( $Qmean=="on") {
                    echo "added Qmean";
                    $conn->query($sql2);
                };
                header("Location:ODexecute.php");
            }
            else{
                print("did not select a tool");
                $_SESSION["mafile"]="";
                header("Location:../fue2.php#run");
            }     
        }
        else{
            $_SESSION["mafile"]="";
            header("Location:../fde.php#run");
        }
    }
    else{
        print("success2");
        $_SESSION["mafile"]="";
        header("location:../fde.php#run");
    }
}
else{
    print("success1");
    $_SESSION["mafile"]="";
    header("location:../fde.php#run");
}
?>
