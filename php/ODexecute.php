<?php
require_once "Mail.php";
ini_set('max_execution_time', 12000);
session_start();
$un= $_SESSION["UN"];
$fn= $_SESSION["FN"];
$ln= $_SESSION["LN"];
$ma= $_SESSION["MA"];
$pa= $_SESSION["PA"];
if ($user=="") {
		header("location: ODsignout.php");
}
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] ;
}
$servername= "localhost";
$username="root";
$password="g.@.K.987";
$dbname="ODIN";
$conn = new mysqli($servername,$username,$password,$dbname);
$mypath=getcwd();
$time=date("Y-m-d")." ". date("H:i:s");

chdir("../tools/");
shell_exec("chmod -R 777 *");

$fres="";
$sql0="SELECT ID,Email from User WHERE User.Username like '$un'";

$result=$conn->query($sql0);

if($result->num_rows>0){
	while ($row=$result->fetch_assoc()) {
		$val1=$row['ID'];
		$_SESSION["PID"]=$val1;
		$sql="SELECT * from Ptools WHERE Ptools.User_ID like '$val1' ORDER BY 'Filename' ";
		$result1=$conn->query($sql);
		if ($result1->num_rows==0) {
			header("location:../user2.php#run");
		}
		if($result1->num_rows>0){
			while ($row2=$result1->fetch_assoc()) {
					if ($row2["Status"]<2) {
						$sql2="UPDATE Ptools SET Ptools.Status=\"2\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
						$idj=$row2["ID"];
						$name=$row2["Filename"];
						$name0=$row2["Filename"];
						$nname=str_replace(".pdb","",$name);
						$chain=$row2["Chain"];
						if ($chain!="ALL") {
							$name=$nname."_".$chain.".pdb";
							chdir("../tools/");
							$command = escapeshellcmd('python extract.py '.$nname.'.pdb '.$chain);
							$output = shell_exec($command);
						}
						chdir("../tools");
       					 if (file_exists($name)) {
            					$outputo=1;
        				}
        				else
        				{
        					$outputo=0;
        					$sql2="DELETE FROM Results WHERE Results.Chain like '".$chain."' AND Results.Filename like '".$name0."' AND Results.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
        					$sql=  "DELETE FROM Ptools WHERE Ptools.ID like '".$idj."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
							$conn->query($sql);
							$conn->query($sql2);
        				}
  						if ($outputo==1) {
  						
						$nname2=str_replace(".pdb","",$name);
						$rand=$row2['User_ID'];
						$fastaname= str_replace(".pdb",".fasta",$name);
						$conn->query($sql2);
						switch ($row2["Tool_name"]) {

							case 'frst':
								$fres=$fres." -frst";
								chdir("../tools/");
								shell_exec("./run_frst.sh '".$name."'");
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;
							case 'Prosa':
								$fres=$fres." -ps";
								chdir("../tools/");
								$command = escapeshellcmd('python prosa.py '.$name.' ');
								$output = shell_exec($command);
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;
							case 'DOPE':
								$fres=$fres." -dP";
								chdir("../tools/");
								echo $name;
								$command = escapeshellcmd('python DOPE.py '.$name.' '.$chain);
								$output = shell_exec($command);
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;

							case 'Procheck':

								$fres=$fres." -procheck";
								chdir("../tools/");
								shell_exec("chmod -R 777 *");
								shell_exec("./run_procheck.sh '".$name."'");
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;
							case 'Qmean':
								$fres=$fres." -Qm";
								chdir("../tools/");
								shell_exec("chmod -R 777 *");
								$command = escapeshellcmd('python Qmean.py '.$name.' '.' "mail.odin.lau@gmail.com"');
								$output = shell_exec($command);
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;
								
							case 'dDFIRE':
								$fres=$fres." -dD";
								chdir("../tools/");
								shell_exec("chmod -R 777 *");
								shell_exec("bash run_dDFIRE.sh '".$name."'");
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;

							case 'shiftX':
								$fres=$fres." -sx";
								chdir("../tools/");
								shell_exec("chmod -R 777 *");
								shell_exec("bash run_shiftx.sh '".$name."'");
								$time=date("Y-m-d")." ". date("H:i:s");
								$sql3="UPDATE Ptools SET Ptools.Status=\"4\",Ptools.End=\"".$time."\" WHERE Ptools.ID like '".$row2["ID"]."' AND Ptools.User_ID LIKE (SELECT ID from User where User.Username like '".$un."')";
								$conn->query($sql3);
								chdir($mypath);
								break;
							default :
								header("location:../user2.php#run");
								break;
						}		
						}
					}
				}
			}	
			$_SESSION["PNa"]=$nname2;
			$fres=$fres.' '.$nname2;
			chdir("../tools/");
			shell_exec("chmod -R 777 *");
			$url= url();
			echo 'python3 getresults.py'.$fres.' '.$url.' '.$rand;
			$command = escapeshellcmd('python3 getresults.py'.$fres.' '.$url.' '.$rand);
			$output = shell_exec($command);
			shell_exec("chmod -R 777 *");
			chdir("../results/");
			shell_exec("chmod -R 777 *");
			chdir($mypath);
	}
	$name=$_SESSION["PNa"];
	console.log($name); 
	if ($name=="") {
	 header("Location:../fe3.php#run");
	}
	else{
		$id=$_SESSION["PID"];
		$from = 'ODIN Team <mail.odin.lau@gmail.com> '; //change this to your email address
		$to = $ma; // change to address
		$subject = 'Project '.$id.$name.' results'; // subject of mail
		$body = "Dear ".$un.",\n your job submission has been completed, please click on the link below to go to the result page\n\n http://biosoftsolutions.xyz/ODIN/results/".$id.$name."_result.php\n\n Thank you for using ODIN, please cite the tool in your work\n Sincerely Yours,\nGilbert El Khoury"; //content of mail
		$headers = array(
			'From' => $from,
			'To' => $to,
			'Subject' => $subject
		);
		$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'mail.odin.lau@gmail.com',
			'password' => 'G.@.k.987'
			));
		// Send the mail
		$mail = $smtp->send($to, $headers, $body);
		header("Location:../results/".$id.$name."_result.php");
	}
}	
?>
<?php	

	
?>
