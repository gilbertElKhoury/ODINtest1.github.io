<?php
	session_start();
	$mail=$_SESSION["MA"];
	$lname=$_SESSION["LN"];
	$fname=$_SESSION["FN"];
	$user=$_SESSION["UN"];
	$pass=$_SESSION["PA"];
	if ($user=="") {
		header("location: php/ODsignout.php");
	}
	$servername="localhost" ;
	$username="root" ;
	$password="g.@.K.987" ;
	$dbname="ODIN" ;
	$finame=$_SESSION["Finame"];
	$conn= new mysqli($servername,$username,$password,$dbname);

	$sql0 = "SELECT * FROM User where User.Username='$user' and User.Active=0";

	$result0=$conn->query($sql0);

	if ($result0->num_rows>0)
	{
		while($row = $result0->fetch_assoc()) 
  		{
  			if (password_verify($pass,$row['Password'])) {
  		
				$sql= "UPDATE User SET User.Active=\"1\" WHERE User.Username like '".$user."'";
				$conn->query($sql);
			}
			else
			{
				header("location:index.php");
			}
		}
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
?>
<!DOCTYPE html>
<html>
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script>
	<title>ODIN: Protein Quality Assessment Web Server</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	window.onload =showslides();
	function showslides() {
	
	}
	</script>
	<style>
	.loader {
  border: 12px solid #2b2b2b;
  border-radius: 100%;
  border-top: 12px solid #2b2b2b;
  width: 300px;
  height: 300px;
  margin-right: auto;
  margin-left: auto;
  -webkit-animation: spin 8s linear infinite; /* Safari */
  animation: spin 8s linear infinite;
 }
 #tail {
			display: none;
			height: 100%;
			width: 100%;
			padding-top: 50%;
			-webkit-animation: fade 3s infinite;
    		animation: fade 3s infinite;
		}
	#body{
		display: block;
	}
#text{

	display: block;
	height: 100%;
	width: 100%;
	margin-bottom: 30%;
	color: #a7bba2;text-align: center;letter-spacing: 20px;font-size: 50px;
}
#loader{
		
			margin-top: 0%;
			width: 100%;
}
	.paused{
	 	animation-play-state: paused;
	}
	.loader2 {
  position:relative;
  display:inline-block;
  z-index:20px;
  border: 12px solid #2b2b2b;
  border-radius: 100%;
  border-top: 12px solid #2b2b2b;
  border-color:#2b2b2b;
  background-color:#2b2b2b;
  font-size: 10px;
  padding: 2px;
  width: 35px;
  height: 35px; 
	}
	.loader2:hover {
	   font-size: 18px;
	   background-color:#a7bba2;
	}

	@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
	}
	@keyframes spin {
  0% { transform: rotate(0deg); }
  25% { transform: rotate(90deg); }
  50% { transform: rotate(180deg); }
  75% { transform: rotate(270deg); }
  100% { transform: rotate(360deg); }
	}
	@keyframes fade {
  			0% {opacity: 0;}
  			10%{opacity: 0.2;}
    		20%{opacity: 0.4;}
    		30%{opacity: 0.6;}
    		40%{opacity: 0.8; }
    		50%{opacity: 1;}
    		60%{opacity: 0.8;}
    		70%{opacity: 0.6;}
    		80%{opacity: 0.4;}
    		90%{opacity: 0.2;}
    		100%{opacity: 0;}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="ODcss/ODindex.css">
	<style type="text/css">body{
		overflow-x: hidden;
	}</style>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Forum">
	<script type="text/javascript"></script>	
</head>
<body>
	<div id="error" class="hidden" style="position:absolute;z-index:999;top:141%;left:35%;text-align: center;width: 300px;height:100px;padding:20px;background-color: #2b2b2b;border:2px solid red"><p id="errmsg" style="color: #a7bba2;">Error Message </p> <button id="hider" style="text-align: right;right: 0%;border:none;background-color: #a7bba2;color: #2b2b2b;display: inline-block;">OK</button></div>
	<div id="loader" style="background-color: #2b2b2b;">
		<div id="tail">
			<img  class="img-responsive" src="ODimages/slogo black no back.png" style="margin-right: auto;margin-left: auto">
			<p style="color: #a7bba2;text-align: center;letter-spacing: 5px;font-size: 50px;">LOADING</p>
			<p id="text">....</p>
		</div>
	</div>
	<div id="body" class="container-fluid" style="background-color: white;">
		<div id="home">
			<div class="row" id="home" style="background-color: white;width: 100%">
				<div class="col-md-3" >
					<!-- insert the logo -->
					<a href="index.php" ><img class="img-responsive" id="logo" src="ODimages/slogo white no back.png" style="width: 300px;height: 150px" ></a>
				</div>
				<div class="col-md-9">

					<ul class="list-group" style="text-align: center;margin-top: 5%">
						<li class="list-group-item navbartabs" >
							<a href="#run" class="eventab" >Run A Job</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="#check" class="oddtab" >Check Jobs</a>

						</li>
						<li class="list-group-item navbartabs">
							<a href="php/ODsignout.php" class="eventab">Sign out <?php echo $user ?></a>
						</li>
					</ul>
				</div>
				<hr style="width: 100%; height:3px;color: #222222">
			</div>
		</div>
		<div id="learn">
			<div class="row">
				<div class="col-md-4" id="steps">
					
					<div class="col-md-12">
						<div id="step1">
							<h1 class="sectionhead" style="color: black;border-color: #a7bba2;">Step</h1><h1 class="sectionheadcnt" style="color: black;">One: </h1>
							<p>Upload the PDB structure of interest</p><br>
						</div>
					</div>
					<div class="col-md-12">
						<div id="step2">
							<br><h1 class="sectionhead" style="color: black;border-color: #a7bba2;">Step</h1><h1 class="sectionheadcnt" style="color: black;">two: </h1>
							<p>Read description of each of the available tools</p><br>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<video style="width:800px;height:420px;margin-top: 5%;margin-right: auto;margin-left: auto;" autoplay loop muted>
						<source id="myvid" src="ODimages/videos/p1.mp4" type="video/mp4">
					</video>	
				</div>
				<div class="col-md-4">
					<div class="col-md-12">
						<div  id="step3">
							<h1 class="sectionhead" style="color: black;border-color: #a7bba2;">Step</h1><h1 class="sectionheadcnt" style="color: black;">three: </h1>
							<p >Select the tools needed to assess your protein structure</p><br>
						</div>
					</div>
					<div class="col-md-12">
						<div id="step4">
							<br><h1 class="sectionhead" style="color: black;border-color: #a7bba2;">Step</h1><h1 class="sectionheadcnt" style="color: black;">four: </h1>
							<p >Wait no more. The result will be sent to you directly by email</p><br>
						</div>
					</div>
					<br><br><br>	
					<br><br><br>
				</div>
			</div>
		</div>
		<div id="run">
			<div class="row" style="background-color: #2b2b2b;" id="#Characteristics" >
				<form action="php/ODuploadfile.php" id="fileup" method="post" enctype="multipart/form-data">
				<div class="col-md-4">
						<h2 class="sectionhead">Upload</h2><h2 class="sectionheadcnt">the pdb File</h2>
						<hr>
   						 <p style="color: white" >Select pdb file to upload:</p>
   						 <input style="color: white" type="file"  id="ftu" class="butt1" name="fileToUpload" >	
   						 <p style="color: white" ><br>Enter PDB ID to use:</p><br>
   						 <input style="color: white" type="text"  id="ftd" class="butt2" name="fileToUpload2"  placeholder="Insert 4 letter pdb ID only">
   						 <p style="color: white" ><br>Enter Chain ID or Leave blank for all chains:</p><br>
   						 <input style="color: white" type="text" name="chain" id="chain" placeholder="Insert 1 letter chain only">
   						 <p style="color: white" >Seperate the Chain IDs by a comma<br>Example: A,B,.., </p><br>
				</div>
				<div class="col-md-8" style="background-color:#2b2b2b;color: black; padding-top:auto;padding-bottom: auto;margin-bottom: 6%;">
						<h2 class="sectionhead">Select</h2><h2 class="sectionheadcnt">the tools</h2>
						<hr>
						<div class="col-md-3">
							<?php 
								$sql0="SELECT ID from User WHERE User.Username like '$user'";
								$result=$conn->query($sql0);
								if($result->num_rows>0){
									while ($row=$result->fetch_assoc()) {
										$val1=$row['ID'];
										echo "<input type=\"text\" name=\"ID\" value=\"$val1\" style=\"display:none\">";	
									}
								}
							?>
							<input type="checkbox" name="Procheck" id="Pc"><p>Procheck</p><a id="Procheck" href="#run" > <span class="glyphicon glyphicon-info-sign"></span></a>
							<br>
							<input  type="checkbox" name="Qmean" id="Qm"><p>Qmean</p><a  id="Qmean" href="#run" > <span class="glyphicon glyphicon-info-sign"></span></a>
							<br>
							<input type="checkbox" name="dDFIRE" id="Dd"><p>dDFIRE</p><a  id="dDFIRE" href="#run" > <span class="glyphicon glyphicon-info-sign"></span></a>
							<br>
							<input type="checkbox" name="shiftX" id="Sx"><p>SHIFTX</p><a  id="shiftX" href="#run"> <span class="glyphicon glyphicon-info-sign"></span></a>
							<br>
							<input type="checkbox" name="DOPE" id="Dp"><p >DOPE</p><a id="DOPE" href="#run"> <span class="glyphicon glyphicon-info-sign" ></span></a>
							<br>
							<button id="sub" type="submit" name="submit"><p style="margin:auto">Start</p></button></form><br><br><br>
						</div>
						<div class="col-md-9" id="des" style="height: 450px;">
							<h2 class="sectionhead" style="padding: 10px;font-size: 30px;border-top: 2px solid white">Description: </h2>
							<div class="col-md-12" style="padding: 10px;padding-top: 0px">
								
								<p id="warn" class="show">1- Please check the chains of your PDB file (The Tool will ignore any invalid chain) <br>2- It is Important to check that your PDB file do not contain any nucleotide. Otherwise the tool wont show promised results.<br>3- Once you press start your job is submitted.<br><br>Average Waiting Time is 3 minutes</p>

							</div>
							<div class="col-md-12" style="padding: 10px;padding-top: 0px">
								<p id="ProcheckD" class="hidden">Procheck: Checks the stereochemical quality of a protein structure, producing several PostScript plots analyzing its overall and residue-by-residue geometry. It includes PROCHECK-NMR for checking the quality of structures solved by NMR.<br><a href="http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&amp;db=PubMed&amp;dopt=Abstract&amp;list_uids=9008363" style="color:#a7bba2" target="_blank">For More Info Click Here</a></p>

								<p id="QmeanD" class="hidden">Qmean: A method based on the composite scoring function which evaluates several structural features of proteins. The absolute quality estimate of a model is expressed in terms of how well the model score agrees with the expected values from a representative set of high resolution experimental structures. The Z-scores of the individual components of the composite QMEAN score point to structural descriptors that contribute most to the final score, and thereby indicate potential reasons for ‘bad’ models.<br><a style="color:#a7bba2" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3031035/" target="_blank">For More Info Click Here</a></p>
							</div>
							<div class="col-md-12" style="padding: 10px;padding-top: 0px">
								<p id="DOPED" class="hidden">DOPE is based on an improved reference state that corresponds to noninteracting atoms in a homogeneous sphere with the radius dependent on a sample native structure; it thus accounts for the finite and spherical shape of the native structures. <br><a href="https://onlinelibrary.wiley.com/doi/full/10.1110/ps.062416606" style="color:#a7bba2" target="_blank">For More Info Click Here</a></p>
							</div>
							<div class="col-md-12">
								<p id="dDFIRED" class="hidden">dDFIRE: assess energy functions by ab initio refolding of fully unfolded terminal segments with secondary structures while keeping the rest of the proteins fixed in their native conformations. The updated DFIRE energy function yields success rates of 100% and 67%, respectively, for its ability to sample and fold fully unfolded terminal segments of 15 proteins to within 3.5 A global root-mean-squared distance from the corresponding native structures.<br><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2442011/" target="_blank" style="color:#a7bba2"> For More Info Click Here</a></p>

								<p id="shiftXD" class="hidden">SHIFTX2: is capable of rapidly and accurately calculating diamagnetic 1H, 13C and 15N chemical shifts from protein coordinate data. In addition, it is substantially more accurate (up to 26% better by correlation coefficient with an RMS error that is up to 3.3× smaller) than the next best performing program. It also provides significantly more coverage (up to 10% more), is significantly faster (up to 8.5×) and capable of calculating a wider variety of backbone and side chain chemical shifts (up to 6×) than many other shift predictors.<br><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3085061/" style="color:#a7bba2" target="_blank"> For More Info Click Here</a></p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id="check">
			<div class="row" style="text-align: center;margin-top: 10%;">
				
				<br><br>
				<h2 class="sectionhead">Job</h2><h2 class="sectionheadcnt">History</h2>
				<hr>
				<br>
			</div>
			<div class="row" id="stat">
				<div class="col-md-4" style="text-align:center;margin-left: auto;margin-right: auto; color: #383838;padding:12px">
					<p class="stat4">Your Most Used Tools Are:<br>
							<?php

								$sql="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Tool_name like 'Procheck' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result=mysqli_query($con,$sql))
  									{
										$row = mysqli_fetch_assoc($result);
 										$v1= $row['count(*)'];
										mysqli_free_result($result);
  									}
  								$sql2="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Tool_name like 'Qmean' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result2=mysqli_query($con,$sql2))
  									{
										$row2 = mysqli_fetch_assoc($result2);
 										$v2= $row2['count(*)'];
										mysqli_free_result($result2);
  									}
  								$sql3="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Tool_name like 'dDFIRE' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result3=mysqli_query($con,$sql3))
  									{
										$row3 = mysqli_fetch_assoc($result3);
 										$v3= $row3['count(*)'];
										mysqli_free_result($result3);
  									}
  								$sql4="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Tool_name like 'shiftX' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result4=mysqli_query($con,$sql4))
  									{
										$row4 = mysqli_fetch_assoc($result4);
 										$v4= $row4['count(*)'];
										mysqli_free_result($result4);
  									}
  								$sql5="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Tool_name like 'DOPE' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result5=mysqli_query($con,$sql5))
  									{
										$row5 = mysqli_fetch_assoc($result5);
 										$v5= $row5['count(*)'];
										mysqli_free_result($result4);
  									}
  									$max= max($v1,$v2,$v3,$v4,$v5);
  									if ($max!=0) {
  										
  										if ($max===$v1) {
  											echo " Procheck, ";
  										}
  										if ($max===$v2) {
  											echo " Qmean, ";
  										}
  										if ($max===$v3) {
  											echo " dDFIRE, ";
  										}
  										if ($max===$v4) {
  											echo "SHIFTX, ";
  										}
  										if ($max===$v5) {
  											echo "DOPE ";
  										}
  									}
  									else{
  										echo "No Submitted Jobs Yet";
  									}

							?>
						</p>
						<br>
						<p class="stat4">Number Of Completed Jobs is:<br>
							<?php

								$sql="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Status like '4' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result=mysqli_query($con,$sql))
  									{
										$row = mysqli_fetch_assoc($result);
 										$v1= $row['count(*)'];
 										echo $v1;
										mysqli_free_result($result);
  									}

							?>
						</p>
						<br>
						<p class="stat4">Number Of Running Jobs is:<br>
							<?php

								$sql="SELECT count(*) FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') AND Ptools.Status like '2' ";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result=mysqli_query($con,$sql))
  									{
										$row = mysqli_fetch_assoc($result);
 										$v1= $row['count(*)'];
 										echo $v1;
										mysqli_free_result($result);
  									}

							?>
						</p>
						<br><br><br>
				</div>
				<div class="col-md-4" style="text-align: center;">
					<p class="stat" style="text-align: center;">Your Results:</p><br>

							<?php

								function s_datediff( $str_interval, $dt_menor, $dt_maior, $relative){

							       if( is_string( $dt_menor)) $dt_menor = date_create( $dt_menor);
							       if( is_string( $dt_maior)) $dt_maior = date_create( $dt_maior);

							       $diff = date_diff( $dt_menor, $dt_maior, ! $relative);
							       switch( $str_interval){
           								case "y": 
           							   		$total = $diff->y + $diff->m / 12 + $diff->d / 365.25; break;
           								case "m":
           							    	$total= $diff->y * 12 + $diff->m + $diff->d/30 + $diff->h / 24;
               								break;
           								case "d":
               								$total = $diff->y * 365.25 + $diff->m * 30 + $diff->d + $diff->h/24 + $diff->i / 60;
               								break;
           	              			}
           	              			if( $dt_menor >= $dt_maior)
           	              				return -1 * $total;
           	              			else
           	              			    return $total;
           	              		}
								$sql="SELECT Remove, ID, User_ID, Filename, Chain  FROM Results WHERE Results.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') ORDER BY Results.ID desc";
								$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									if ($result=mysqli_query($con,$sql))
  									{
  										
										while($row = mysqli_fetch_assoc($result))
										{
											$v=$row['ID'];
											$ui=$row['User_ID'];
											$v5=$row['Filename'];
											$v6=$row['Chain'];
											$v1=str_replace(".pdb", "", $v5);
											$v0= $ui.$v1;
											$v0=strtoupper($v0);
											$v0= $v0."_".$v6.".pdb";
											if ($v6=="ALL") {
												$v0= $ui.$v1.".pdb";
											}
											if ($v6!="ALL") {
												$v1=$v1.":".$v6;
											}
 											$v2=str_replace(".pdb", "_result.php", $v0);
											$v3=date("Y-m-d");
 											$v4=$row['Remove'];
 											$di=s_datediff("d",$v3,$v4,false);
 											if ($di>0) {

 												$sql5="SELECT count(*) FROM Ptools WHERE Ptools.Filename like '$v5' and Ptools.Chain like '$v6' and Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user')";
												if ($result5=mysqli_query($con,$sql5))
  												{
  										
													while($row5 = mysqli_fetch_assoc($result5))
													{
														if ($row5['count(*)']!=0) {
            												echo "<p style=\"text-align: center; display:inline-block\"><a href=\"results/".$v2."\" class=\"stat\"style=\"text-decoration:none;margin-left:5%\" target=\"_blank\">".$v1."</a><p style=\"display:inline-block;margin-left:10%\"> Time Remaining: ".$di." Days</p><br>";
        												} 
        											}
 												}
 											}
 											else
 											{
												chdir("../results/");
												if (file_exists($v2)) {
            										$output=1;
        										} else{
 													$sql2="DELETE FROM Results where ID like '$v' and Filename like '$v5' and Chain like '$v6'";
 													$sql3="UPDATE Ptools SET Active=0 WHERE Ptools.User_ID like '$ui' and Ptools.Filename like '$v5' and Chain like '$v6' ";
 													mysqli_query($con,$sql2);
 													mysqli_query($con,$sql3);
 												}
 											}
 										}
										mysqli_free_result($result);
  									}
							?>
					<br><br>
						<button id="showdetail" class="more">History [+]</button>
				</div>
				<div class="col-md-4" style="padding-left: 5%;padding: auto;padding-top: 0%;text-align: center;">
					<p id="stat2" style="font-size: 18px;font-weight:bold;text-align: center;display: inline-block;padding-left:10%;padding-right: 10%;">Number Of Submitted Jobs<br></p>
						<p style="font-size: 50px;text-align: center;padding-left:28%;padding-right: 28%;margin-top: 5%"><br><?php
						 			$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
									$sql="SELECT * FROM Ptools WHERE Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user')";
									if ($result=mysqli_query($con,$sql))
  									{
										$rowcount=mysqli_num_rows($result);
										echo $rowcount;
										mysqli_free_result($result);
  									}
							?></p>
				</div>
			</div>
			<div id="jobs" class="row" style="background-color: #2b2b2b;max-height:420px;overflow-y: scroll;">
				<div  id="jstat" class="hidden">
					<ul class="list-group" style="background-color: #2b2b2b;border:none">
						<div class="col-md-12">
							<li class="list-group-item" style="background-color: #2b2b2b;border:none">
								<div class="col-md-8">
									<div class="col-md-3" style="display:inline-block"><p class="stat3" >File Name</p></div><div class="col-md-3" style="display:inline-block"><p class="stat3" >Tool</p></div><div class="col-md-3" style="display:inline-block"><p class="stat3" >Submission Date</p></div><div class="col-md-3" style="display:inline-block"><p class="stat3" >Expiry Date</p></div>
								</div>
								<div class="col-md-2" style="display:inline-block"> <p class="stat3" >Status</p></div>
								<div class="col-md-2">
									<form id="act" method="POST" action="php/ODdeletealljob.php">					
										<button class="more" id="delete" type="submit" name="submit"> <p class="stat3" >Delete All</p></button>
									</form>
								</div>
							</li>
						</div>
						<?php  
							$sql="SELECT * FROM Ptools WHERE Ptools.Active like '1' and Ptools.User_ID like (SELECT ID FROM User WHERE User.Username like '$user') ORDER BY Ptools.ID desc";
							$con=mysqli_connect("localhost","root","g.@.K.987","ODIN");
							if ($result=mysqli_query($con,$sql))
  							{
								while($row = mysqli_fetch_assoc($result))
								{
									$val2= $row['ID'];
									$v0= $row['Filename'];
									$v0=str_replace(".pdb", ": ", $v0);
									$v1= $row['Tool_name'];
									$v2= $row['Status'];
									$v3= $row['Start'];
									$v4= $row['End'];
									$v5= $row['Chain'];
									if ($v5=="ALL") {
										$v5=str_replace("ALL", "", $v5);
										$v0=str_replace(":", "", $v0);
									}
									echo "<div class=\"col-md-12\">
											<li class=\"list-group-item\" style=\"background-color: #2b2b2b;border:none\">
												<div class=\"col-md-8\">";
 													echo "<div class=\"col-md-3\" style=\"display:inline-block\"><p class=\"stat3\" >".$v0."</p><p class=\"stat3\" >".$v5."</p></div><div class=\"col-md-3\" style=\"display:inline-block\"><p class=\"stat3\" >".$v1."</p></div><div class=\"col-md-3\" style=\"display:inline-block\"><p class=\"stat3\" >".$v3."</p></div><div class=\"col-md-3\" style=\"display:inline-block\"><p class=\"stat3\" >".$v4.
 												"</p></div></div>
 												<div class=\"col-md-2\">";
 													switch ($v2) {
 														case 4:
 															echo "<p class=\"stat3\">Completed</p>";
 															break;
 														case 3:
 															echo "<p class=\"stat3\">Canceled</p>";
 															break;
 														case 2:
 															echo "<p class=\"stat3\">Processing</p>";
 															break;
 														default:
 															echo "<p class=\"stat3\">Pending</p>";
 															break;
 													}
 													echo "</div><div class=\"col-md-2\">
 														<form id=\"act\" method=\"POST\" action=\"php/ODcanceljob.php\">
															<input type=\"text\" name=\"ptoolsid\" value=\"$val2\" style=\"display: none\"> 
															<input type=\"text\" name=\"staj\" value=\"$v2\" style=\"display: none\">
															<div class=\"col-md-6\">
																<button id=\"cancel\" class=\"more\" type=\"submit\" name=\"submit\">
																	Cancel
																</button>
															</div>
														</form>
														<form id=\"act\" method=\"POST\" action=\"php/ODdeletejob.php\">
															<input type=\"text\" name=\"ptoolsid\" value=\"$val2\" style=\"display: none\"> 
															<input type=\"text\" name=\"staj\" value=\"$v2\" style=\"display: none\">
															<div class=\"col-md-6\">
															<button class=\"more\" id=\"delete\" type=\"submit\" name=\"submit\">Delete</button>
															</div>
														</form>
												</div>
 											</li>
 										</div>";
 								}
 							}
 						?>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer" class="blf" style="width: 100%;">
			<div id="ftback" class="row" style="background-color: #2b2b2b" >
				<br>
				<br>
				<div class="col-md-12" >
					<a href="index.php" target="_blank"><img class="img-responsive" id="logo2" src="ODimages/logo black no back.png" style="width: 300px;height: 150px;margin-left: auto;margin-right: auto;" ></a>
				</div>
				<div class="col-md-12" style="text-align: center;">
					<p id="rights" class="blftimesright" >@<?php echo date("Y");?> All rights reseved. </p>
			
					<a href="" style="display: inline-block;text-decoration: none;color: #a7bba2;" target="_blank">Privacy and terms condition</a>
				</div>
				<div class="col-md-12">
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			
			
			document.getElementById('showdetail').addEventListener("click",function () {
					
					if (document.getElementById('showdetail').innerHTML=="History [-]") {
						document.getElementById('showdetail').innerHTML="History [+]";
						document.getElementById('jstat').classList.add("hidden");
						document.getElementById('jstat').classList.remove("show");
						document.getElementById('footer').classList.remove("wlf");
						document.getElementById('footer').classList.add("blf");
						document.getElementById('rights').classList.remove("whftimesright");
						document.getElementById('rights').classList.add("blftimesright");
						document.getElementById('ftback').style.background="#2b2b2b";
						document.getElementById('logo2').src="ODimages/logo black no back.png";
					}
					else{	
						if (document.getElementById('showdetail').innerHTML=="History [+]") {
							document.getElementById('showdetail').innerHTML="History [-]";
							document.getElementById('jstat').classList.remove("hidden");
							document.getElementById('jstat').classList.add("show");
							document.getElementById('footer').classList.remove("blf");
							document.getElementById('footer').classList.add("wlf");
							document.getElementById('rights').classList.add("whftimesright");
							document.getElementById('rights').classList.remove("blftimesright");
							document.getElementById('ftback').style.background="white";
							document.getElementById('logo2').src="ODimages/logo white no back.png";
						}
					}
				});
		</script>	
		<script type="text/javascript">
			var circle = document.querySelector('circle');
			var radius = circle.r.baseVal.value/2;
			var circumference = 4*radius*Math.PI;

			circle.style.strokeDasharray = `${circumference} ${circumference}`;
			circle.style.strokeDashoffset = `${circumference}`;

			function setProgress(percent) {
			  const offset = circumference - percent / 100 * circumference;
			  circle.style.strokeDashoffset = offset;
			}
			$(window).scroll(function() {
			   var hT = $('#stat2').offset().top,
			       hH = $('#stat2').outerHeight(),
			       wH = $(window).height(),
			       wS = $(this).scrollTop();
				   if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
				      const input = document.getElementById('input');
						setProgress(input.value);
  					if (input.value < 101 && input.value > -1) {
			    	setProgress(input.value);
			 		 }  
				   } else {
			     	const input = document.getElementById('input');
					setProgress(0);
			   	}
			});
		</script>
		<script type="text/javascript">
			defaultv='php/ODuploadfile.php';
			O='php/ODdownloadfile.php';
			element = document.getElementsByClassName('butt1');
			element[0].addEventListener("click",function(){
			document.getElementById('fileup').action=defaultv;
    		});
    		element2 = document.getElementsByClassName('butt2');
			element2[0].addEventListener("click",function(){
    		document.getElementById('fileup').action=O;
    		});
		</script>
		<script type="text/javascript">
			main=document.getElementById('des');
			form=document.getElementById('fileup');

			element = document.getElementById('dDFIRE');
			element2 = document.getElementById('Procheck');
			element3 = document.getElementById('Qmean');
			element4 = document.getElementById('shiftX');
			element5 = document.getElementById('DOPE');
			delement = document.getElementById('dDFIRED');
			delement2 = document.getElementById('ProcheckD');
			delement3 = document.getElementById('QmeanD');
			delement4 = document.getElementById('shiftXD');
			delement5 = document.getElementById('DOPED');
			delement6=document.getElementById('warn');
			delement7=document.getElementById('warnD');
			form.addEventListener("submit",function(){
				but.classList.add("hidden");
				delement7.classList.remove("hidden");
				delement7.classList.add("show");
				if (delement.classList.contains("show")) {
					delement.classList.remove("show");
					delement.classList.add("hidden");
				}
				if (delement2.classList.contains("show")) {
					delement2.classList.remove("show");
					delement2.classList.add("hidden");
				}
				if (delement3.classList.contains("show")) {
					delement3.classList.remove("show");
					delement3.classList.add("hidden");
				}
				if (delement4.classList.contains("show")) {
					delement4.classList.remove("show");
					delement4.classList.add("hidden");
				}
				if (delement5.classList.contains("show")) {
					delement5.classList.remove("show");
					delement5.classList.add("hidden");
				}
				if (delement6.classList.contains("show")) {
					delement6.classList.remove("show");
					delement6.classList.add("hidden");
				}
			});
			element.addEventListener("click",function(){
				
				if (delement.classList.contains("hidden")) {
					delement6.classList.add("hidden");
    				delement.classList.remove("hidden");
    				delement.classList.add("show");
    				if (delement2.classList.contains("show")) {
    					delement2.classList.remove("show");
    					delement2.classList.add("hidden");
    				}
    				if (delement3.classList.contains("show")) {
    					delement3.classList.remove("show");
    					delement3.classList.add("hidden");
    				}
    				if (delement4.classList.contains("show")) {
    					delement4.classList.remove("show");
    					delement4.classList.add("hidden");
    				}
    				if (delement5.classList.contains("show")) {
    					delement5.classList.remove("show");
    					delement5.classList.add("hidden");
    				}
				}
				else
				{
					delement6.classList.remove("hidden");
					delement6.classList.add("show");
					delement.classList.remove("show");
    				delement.classList.add("hidden");
    			
				}
			});
			element2.addEventListener("click",function(){
				delement6.classList.add("hidden");
				if (delement2.classList.contains("hidden")) {
    				delement2.classList.remove("hidden");
    				delement2.classList.add("show");
    				if (delement.classList.contains("show")) {
    					delement.classList.remove("show");
    					delement.classList.add("hidden");
    				}
    				if (delement3.classList.contains("show")) {
    					delement3.classList.remove("show");
    					delement3.classList.add("hidden");
    				}
    				if (delement4.classList.contains("show")) {
    					delement4.classList.remove("show");
    					delement4.classList.add("hidden");
    				}
    				if (delement5.classList.contains("show")) {
    					delement5.classList.remove("show");
    					delement5.classList.add("hidden");
    				}
				}
				else
				{
					delement2.classList.remove("show");
    				delement2.classList.add("hidden");
    				delement6.classList.remove("hidden");
					delement6.classList.add("show");
				}
			});
			element3.addEventListener("click",function(){
				delement6.classList.add("hidden");
				if (delement3.classList.contains("hidden")) {
    				delement3.classList.remove("hidden");
    				delement3.classList.add("show");
    				if (delement2.classList.contains("show")) {
    					delement2.classList.remove("show");
    					delement2.classList.add("hidden");
    				}
    				if (delement.classList.contains("show")) {
    					delement.classList.remove("show");
    					delement.classList.add("hidden");
    				}
    				if (delement4.classList.contains("show")) {
    					delement4.classList.remove("show");
    					delement4.classList.add("hidden");
    				}
    				if (delement5.classList.contains("show")) {
    					delement5.classList.remove("show");
    					delement5.classList.add("hidden");
    				}
				}
				else
				{
		 			delement3.classList.remove("show");
    				delement3.classList.add("hidden");
    				delement6.classList.remove("hidden");
					delement6.classList.add("show");
				}
			});
			element4.addEventListener("click",function(){
				delement6.classList.add("hidden");
				if (delement4.classList.contains("hidden")) {
    				delement4.classList.remove("hidden");
    				delement4.classList.add("show");
    				if (delement2.classList.contains("show")) {
    					delement2.classList.remove("show");
    					delement2.classList.add("hidden");
    				}
    				if (delement3.classList.contains("show")) {
    					delement3.classList.remove("show");
    					delement3.classList.add("hidden");
    				}
    				if (delement.classList.contains("show")) {
    					delement.classList.remove("show");
    					delement.classList.add("hidden");
    				}
    				if (delement5.classList.contains("show")) {
    					delement5.classList.remove("show");
    					delement5.classList.add("hidden");
    				}
				}
				else
				{
		 			delement4.classList.remove("show");
    				delement4.classList.add("hidden");
    				delement6.classList.remove("hidden");
					delement6.classList.add("show");
				}
			});
			element5.addEventListener("click",function(){
				delement6.classList.add("hidden");
				if (delement5.classList.contains("hidden")) {
    				delement5.classList.remove("hidden");
    				delement5.classList.add("show");
    				if (delement2.classList.contains("show")) {
    					delement2.classList.remove("show");
    					delement2.classList.add("hidden");
    				}
    				if (delement3.classList.contains("show")) {
    					delement3.classList.remove("show");
    					delement3.classList.add("hidden");
    				}
    				if (delement.classList.contains("show")) {
    					delement.classList.remove("show");
    					delement.classList.add("hidden");
    				}
    				if (delement4.classList.contains("show")) {
    					delement4.classList.remove("show");
    					delement4.classList.add("hidden");
    				}
				}
				else
				{
		 			delement5.classList.remove("show");
    				delement5.classList.add("hidden");
    				delement6.classList.remove("hidden");
					delement6.classList.add("show");
				}
			});
		</script>
		<script type="text/javascript">
			function scrollLeft() {
				this.src=this.src.replace("slogo","logo");
			}
	
			function scrollRight() {
			    this.src=this.src.replace("logo","slogo");
			}

			document.getElementById('logo').addEventListener("mouseover",scrollLeft);
			document.getElementById('logo').addEventListener("mouseout",scrollRight);
			document.getElementById('logo2').addEventListener("mouseover",scrollLeft);
			document.getElementById('logo2').addEventListener("mouseout",scrollRight);
		</script>
		<script type="text/javascript">

			$('#sub').click(function() {
				var fine=0
				var defaultv='php/ODuploadfile.php';
				var O='php/ODdownloadfile.php';
				var z=window.location.href.replace("user2.php","");
				var y=z.replace("#run","");
				var t=document.getElementById('fileup').action;
				t=t.replace(y,"");
				var val = document.getElementById('ftu').value;
				val=val.toUpperCase();
				var temp2= val.replace(".pdb","");
				temp2= temp2.replace(".PDB","");
				var lol = document.getElementById('ftu').value.includes(".pdb");
				var val2 = document.getElementById('ftd').value;
				val2=val2.toUpperCase();
				var temp3= val2.replace(".pdb","");
				temp3= temp3.replace(".PDB","");
				var lol2=val2.length;
				var lol3 = document.getElementById('ftd').value.includes(".pdb");
				var t1= document.getElementById('Pc').checked;
				var t2=document.getElementById('Qm').checked;
				var t3=document.getElementById('Dd').checked;
				var t4=document.getElementById('Sx').checked;
				var t5=document.getElementById('Dp').checked;
				var chains=document.getElementById('chain').value;
				chains=chains.toUpperCase();
				var res = chains.split("");
				var temp="";
				for (var i = 0; i < res.length; i++) {
					if (res[i]>="A" && res[i]<="Z" ) {
						if (i==res.length-1) {
							if (temp.includes(res[i])==false) {
								temp+=res[i];
							}
						}
						else{
							if (temp.includes(res[i])==false){ 
								temp+=res[i]+",";
							}
						}
					}
				}
				var res2 = temp.split(",");
				if (t==defaultv) {
					if(val==""){
						document.getElementById('error').classList.remove("hidden");
						document.getElementById('error').classList.add("show");
						document.getElementById('errmsg').innerHTML="File Not Uploaded";
						$("#error").animate({ scrollTop: 0 }, "fast");
						fine=1;
						event.preventDefault();
						document.getElementById('hider').addEventListener("click",function() {
							document.getElementById('error').classList.add("hidden");
							document.getElementById('error').classList.remove("show");
						})

					}
					else{
						if (lol==false) {
							document.getElementById('error').classList.remove("hidden");
						document.getElementById('error').classList.add("show");
						document.getElementById('errmsg').innerHTML="Not A PDB File";
						$("#error").animate({ scrollTop: 0 }, "fast");						
						fine=1;
						event.preventDefault();
						document.getElementById('hider').addEventListener("click",function() {
							document.getElementById('error').classList.add("hidden");
							document.getElementById('error').classList.remove("show");
						})

						}
						else
						{
							
							if ((t1||t2||t3||t4||t5)==false) {
									document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="No Tools Selected";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								})
							}
						}
					}
				}
				if (t==O) {
					if(val2==""){
						document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="Invalid PDB ID";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");

								})
					}
					else
					{
						if (lol2!=4 && lol2!=8) {

							document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('error').style.height="250px";
								document.getElementById('errmsg').innerHTML="Invalid PDB ID <br>check the length of the PDB ID<br>Should be 4 (if extension not included)<br>Should be 8 (if extension is included)";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								document.getElementById('error').style.height="100px";
								})
						}
						else
						{
							if (lol2==4 && lol3==true) {
								document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="Invalid PDB ID ";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								})
							}
							if(lol2==8 && lol3==false)
							{
								document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="Invalid PDB ID ";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								})
							}
							
								var request;
								if(window.XMLHttpRequest)
    								request = new XMLHttpRequest();
								else
    								request = new ActiveXObject("Microsoft.XMLHTTP");
    							request.open('GET', 'https://files.rcsb.org/view/'+temp3+".pdb", false);
								request.send();
								if (request.status === 404) {
    								document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="Invalid PDB ID ";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								})
								}
								
								if ((t1||t2||t3||t4||t5)==false) {
									document.getElementById('error').classList.remove("hidden");
								document.getElementById('error').classList.add("show");
								document.getElementById('errmsg').innerHTML="No Tools Selected";
								$("#error").animate({ scrollTop: 0 }, "fast");
								fine=1;
								event.preventDefault();
								document.getElementById('hider').addEventListener("click",function() {
								document.getElementById('error').classList.add("hidden");
								document.getElementById('error').classList.remove("show");
								})
								}
						}
					}
				}			
				if(fine==0){									
				$('#footer').css('display', 'none');
  				$('#body').css('display', 'none');
  				$('#tail').css('display', 'block');
  				}
  			});
		</script>
		<script type="text/javascript">
			window.addEventListener("load",function(){
				if (typeof window.orientation !== 'undefined') { 
					document.getElementById('error').style="position:absolute;z-index:999;top:500%;left:10%;text-align: center;width: 220px;height:150px;padding:20px;background-color: #2b2b2b;border:2px solid red;";
				}
			});
		</script>
		<script type="text/javascript">
			window.addEventListener("load",function(){
				if (typeof window.orientation !== 'undefined') { 
					document.getElementById('error').style="position:absolute;z-index:999;top:500%;left:10%;text-align: center;width: 220px;height:150px;padding:20px;background-color: #2b2b2b;border:2px solid #a7bba2;";
				}
			});
		</script>
		<script type="text/javascript">
			window.addEventListener("load",function() {
				document.getElementById('error').classList.remove("hidden");
						document.getElementById('error').classList.add("show");
						document.getElementById('errmsg').innerHTML="No Tools Selected";
						document.getElementById('hider').addEventListener("click",function() {
							document.getElementById('error').classList.add("hidden");
							document.getElementById('error').classList.remove("show");
							window.location.replace("user2.php#run");
						})
			});
		</script>
		<script type="text/javascript">
			window.addEventListener("load",function(){
				if (typeof window.orientation !== 'undefined') { 
					document.getElementById('error').style="position:absolute;z-index:999;top:500%;left:10%;text-align: center;width: 220px;height:150px;padding:20px;background-color: #2b2b2b;border:2px solid #a7bba2;";
				}
			});
		</script>
	</div>
</body>
</html>