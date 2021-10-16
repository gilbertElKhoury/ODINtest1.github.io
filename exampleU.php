<?php
	session_start();
	$mail=$_SESSION["MA"];
	$lname=$_SESSION["LN"];
	$fname=$_SESSION["FN"];
	$user=$_SESSION["UN"];
	$pass=$_SESSION["PA"];
	if ($user=="") {
		header("location: php/ODsignout.php");
	}?>
<!DOCTYPE html>
<html>
	<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>ODIN: Protein Quality Assessment Web Server</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="ODcss/ODindex.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript">
	window.onload =showslides();
	function showslides() {
	
	}
	</script>


	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Forum" />
	</head>
	<body>
		<div class="container-fluid" style="background-color: white;">
			<div class="row" id="home" style="background-color: white;width: 100%">
				<div class="col-md-3">
						<a href="user2.php" ><img class="img-responsive" id="logo" src="ODimages/slogo white no back.png" style="width: 300px;height: 150px" ></a>
				</div>
				<div class="col-md-9">
					<ul class="list-group" style="text-align: center;margin-top: 5%">
						<li class="list-group-item navbartabs" >
							<a href="user2.php#run" class="eventab" >Run A Job</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="user2.php#check" class="oddtab" >Check Jobs</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="exampleU.php" class="eventab">Documentation</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="php/ODsignout.php" class="oddtab">Sign out <?php echo $user ?></a>
						</li>
					</ul>
				</div>
				<hr style="width: 100%; height:2px;color: #222222;">
			</div>
			<div id="TOC">
				<div class="row" style="background-color: #a7bba2">
					
					<div class="col-md-12">
						<br><br>
						<h1 id="toc" class="sectionhead">Table Of </h1><h1 class="sectionheadcnt">Content</h1><br><br>
						<p style="color:white;">
						<ol class="list-group" class="exampletoc">
							<li id="rajs" class="list-group-item" class="exampletocitem">
								<a  href="#raj" >Running A Job</a>
								<ul class="list-group" class="exampletoc">
									<li class="list-group-item" class="exampletocitem">
										<a href="#steps" >Steps to run a job</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#upf" >Upload a pdb file</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#ipi" >Insert a pdb id</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#mt" >More tweaks</a>
									</li>
								</ul>
							</li>
							<li id="cjrs" class="list-group-item" class="exampletocitem">
								<a href="#cjr" >Checking Job Results</a>
								<ul class="list-group" class="exampletoc">
									<li class="list-group-item" class="exampletocitem">
										<a href="#od" >ODIN Score</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#tb" >tool Bar</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#pv" >Protein View</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#pc" >Procheck</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#qm" >Qmean</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#ps" >PROSA</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#dd" >dDFIRE</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#dp" >DOPE</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#sx" >SHIFTX</a>
									</li>
								</ul>
							</li>
							<li id="cjhs" class="list-group-item" class="exampletocitem">
								<a href="#cjh" >Checking Job History</a>
								<ul class="list-group" class="exampletoc">
									<li class="list-group-item" class="exampletocitem">
										<a href="#ip" >History Information Panel</a>
									</li>
									<li class="list-group-item" class="exampletocitem">
										<a href="#dh" >Detailed History Panel</a>
									</li>
								</ul>
							</li>
						</ol>
						</p>
						<br><br>
					</div>
				</div>
			</div>
			<div id="raj" style="border-top:2px solid white">
				<div class="row" style="background-color: #222222;text-align: center;">
					<br><br>
					<div id="IA">
					<h1 class="sectionhead">Running A Job</h1><br><br>
					</div>

				</div>
				<div class="row" style="background-color: #222222">
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="steps" class="sectionheado">Steps<br><a href="#TOC">Previous</a></h2>
							<p>Upon successfull Sign in or Sign Up  the user is redirected to his account page where he first encounter a navigation bar where he can click on links that will take him to appropriate sections ( such as running a job/ checking job history / and signing out). <br>Underneath the navigation bar the user is able to see clearly the steps he need to perform for a successful job submission such steps are the following <br> 1- provide a PDB ID or Upload a pdb file<br>2- Select the set of tools you wish to use after careful read of their descriptions<br>3- wait for the results either on the browser or via email <br> In addition, ODIN shows the user his last submitted protein structure in case its a new user the spot is left blank <img class="img-responsive" src="ODimages/example_pic0.png"></p>
							<h2><br><a href="#upf">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="upf" class="sectionheado">Uploading A PDB File<br><a href="#steps">Previous</a></h2>
							<p>ODIN provides two ways of pdb file submission either via file upload or via PDB ID, in this section we will discuss the file upload feature. Having such a feature embeded in ODIN architecture the user is able to upload his own models or any pdb file via the following process: <br> 1- the user press run a job or scroll to the section shown in the image below <br> 2- the user presses the choose file button <br> 3- a viewer to pick the pdb file is displayed  <br> 4- the user has the option to pick a specific chain ID from his pdb file by inserting the letter or letters seperated by comma in the box below Enter Chain ID title <br> 5- the user proceeds to select the tools he wish to use <br> 6- A description of the tools can be displayed in the box next to the list of the tools by clicking on the exclamation mark next to the specific tool <br> 7- once done selecting tools the user is now ready to submit his job which will be executed in the background by pressing the start button<img class="img-responsive" src="ODimages/example_pic1.png"></p>
							<h2><br><a href="#ipi">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="ipi" class="sectionheado">Inserting A PDB ID<br><a href="#upf">Previous</a></h2>
							<p>ODIN provides two ways of pdb file submission either via file upload or via PDB ID, in this section we will discuss the PDB ID selection feature. Having such a feature embeded in ODIN architecture the user is able to rapidly query any pdb file that is uploaded to the RCSB pdb database with little or no effort at all via the following process: <br> 1- the user press run a job or scroll to the section shown in the image below <br> 2- the user selects the text box below the title "Enter PDB ID to use:" and types in the specific PDB ID he's interested in assessing<br> 3- the user has the option to pick a specific chain ID from his pdb file by inserting the letter or letters seperated by comma in the box below Enter Chain ID title <br> 4- the user proceeds to select the tools he wish to use <br> 5- A description of the tools can be displayed in the box next to the list of the tools by clicking on the exclamation mark next to the specific tool <br> 6- once done selecting tools the user is now ready to submit his job which will be executed in the background by pressing the start button<img class="img-responsive" src="ODimages/example_pic2.png"> </p>
							<h2><br><a href="#mt">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="mt" class="sectionheado">More Tweaks<br><a href="#ipi">Previous</a></h2>
							<p>Having integrated two mechanism for PDB file submission, ODIN reliefs the user from the hustle of picking which mechanism is it willing to use.<br> ODIN is capable of adapting the mechanism to retreive the pdb file based on the user's last action in other words <br> if the user wishs to provide his file via upload, the last action he should perform is clicking the select file button shown and hence ODIN looks up for uploaded file. if at any time the user wishs to use a PDB ID instead of the already uploaded file just follow the Inserting A PDB ID tutorial mentioned above, ODIN will automatically ignore the uploaded file<br> if the user wishs to provide his PDB file via PDB ID, the last action he should perform is clicking the text box below the title "Enter PDB ID to use:" and hence ODIN looks up for PDB ID in the RCSB pdb database. if at any time the user wishs to upload his PDB file instead of the already using the pdb id, just follow the Uploading A PDB File tutorial mentioned above, ODIN will automatically ignore the typed PDB ID</p>
							<h2><br><a href="#od">Next</a></h2>
						</div>
						<br><br>
					</div>
				</div>
			</div>
			<div id="cjr" style="border-top:2px solid white">
				<div class="row" style="background-color: #222222;text-align: center;">
					<br><br>
					<div id="IA">
					<h1 class="sectionhead">Checking Job Result<br>
					</div>

				</div>
				<div class="row" style="background-color: #222222">
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="od" class="sectionheado">ODIN Score<br><a href="#mt">Previous</a></h2>
							<p>The ODIN result page includes a navigation bar that gives the user the option to run another job or to check the job history or download the current result page.<br> The result page title is then the pdb file title and the chain in case it is specified <br> The ODIN score is a scoring function that gives a consensus idea about the quality of the protein structure being studied. <br> the score takes the form of a percentage ( over 100) <img class="img-responsive" src="ODimages/example_pic3.png"></p>
							<h2><br><a href="#pc">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="tb" class="sectionheado">Tool Bar<br><a href="#mt">Previous</a></h2>
							<p>it includes all the tools supported by ODIN. it is important to note that each tool can have one of three states (Pass, N/A or fail) and an anchor which will redirect the user to a section. Pass indicates that the pdb file submitted passed all the minimum conditions set by the tool, a fail indicate that this pdb file did not meet these minimum conditions, while a N/A indicates that the tool was not selected among the tool's set  <img class="img-responsive" src="ODimages/example_pic4.png"></p>
							<h2><br><a href="#pc">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="pv" class="sectionheado">Protein View<br><a href="#mt">Previous</a></h2>
							<p>The viewer allows the user to see the tertiary or even the quatarnary sturcture but as well provide the following features zooming in,hovering over the structure's residues, rotating the structure (by pressing I key). ODIN's with the help of NGL viewer is able to color the protein based on the quality of the protein's residues. this residue quality is derived from tools such as PROSA, QMEAN and QMEANDisco or a combination of these tools <img class="img-responsive" src="ODimages/example_pic5.png"> </p>
							<h2><br><a href="#pc">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="pc" class="sectionheado">Procheck<br><a href="#pv">Previous</a></h2>
							<p>The ODIN result page include a procheck section where the first colomn reports the percentage of core, allowed, generousely allowed, and disallowed regions while the second includes the ramachadran plot of the protein being studied. it is an interactive plot allowing the user to zoom in and out in various regions, and hover over the residues where the phi and psi values are reported respectively, the user has access to various hover options present in the panel above the plot.<br> N.B: the Procheck tool can be found <a href="https://www.ebi.ac.uk/thornton-srv/software/PROCHECK/">here</a> <img class="img-responsive" src="ODimages/example_pic6.png"> </p>
							<h2><br><a href="#dd">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="qm" class="sectionheado">Qmean<br><a href="#pv">Previous</a></h2>
							<p>The first colomn of the Qmean section reports a horizental bar chart showing the normailized and z score for each of the following factors: Packing, interaction, accessibility agreement, solvent agreement, torsion, C beta, qmean6 and qmean4 scores. while the second includes a basic chart showing the local residue quality according to two scoring methods Qmean and Qmeandisco of each residue in the protein studied<br> N.B: the Qmean tool and details can be found <a href="https://swissmodel.expasy.org/qmean/">here</a> <img class="img-responsive" src="ODimages/example_pic7.png"></p>
							<h2><br><a href="#dd">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="ps" class="sectionheado">Prosa<br><a href="#pv">Previous</a></h2>
							<p>The first colomn of the Prosa section reports a graph showing a default graph of high quality pdb files that are used as standards and then a dot is shown on the graph if the dot falls in the standard graph then the protein is of high quality. In addition, this section includes a Z-score while the second section includes a basic chart showing the local residue quality according to various windows size for each residue in the protein studied<br> N.B: the Prosa tool and details can be found <a href="https://www.came.sbg.ac.at/prosa.php">here</a> <img class="img-responsive" src="ODimages/example_pic8.png"></p>
							<h2><br><a href="#dd">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="dd" class="sectionheado">dDFIRE<br><a href="#ps">Previous</a></h2>
							<p>The first colomn of the dDFIRE section reports the name of the file being studied while the second section includes a numeric value indicating an energy value for the protein studied. the value displayed can be used to compare to various proteins the smaller the better the protein is<br> N.B: the dDfire tool's details can be found <a href="https://www.ncbi.nlm.nih.gov/pubmed/18260109">here</a> <img class="img-responsive" src="ODimages/example_pic9.png"></p>
							<h2><br><a href="#ip">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="sx" class="sectionheado">SHIFTx<br><a href="#ps">Previous</a></h2>
							<p>The SHIFTx section reports a graph showing a basic chart showing the diamagnetic 1H, 13C and 15N chemical shifts of each residue of both backbone and sidechain atoms in the protein studied. <br> N.B: the SHIFTX tool and details can be found <a href="http://www.shiftx2.ca/">here</a><br><br><br><img class="img-responsive" src="ODimages/example_pic11.png"></p>
							<h2><br><a href="#ip">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 id="dp" class="sectionheado">DOPE<br><a href="#ps">Previous</a></h2>
							<p>The first colomn of the DOPE section reports the name of the file being studied while the second section includes a numeric value indicating a statistical potential used to assess homology models in protein structure prediction. the value displayed can be used to assess the quality of a structure model as a whole.<br> N.B: the DOPE tool and details can be found <a href="https://www.salilab.org/modeller/">here</a> <img class="img-responsive" src="ODimages/example_pic10.png"></p>
							<h2><br><a href="#ip">Next</a></h2>
						</div>
						<br><br>
					</div>
				</div>
			</div>
			<div id="cjh" style="border-top:2px solid white">
				<div class="row" style="background-color: #222222;text-align: center;">
					<br><br>
					<div id="IA">
					<h1 class="sectionhead">Checking Job History</h1><br><br>
					</div>

				</div>
				<div class="row" style="background-color: #222222">
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="ip" class="sectionheado">History Information Panel<br><a href="#dp">Previous</a></h2>
							<p>this panel is divided into three section that relays information about the jobs history<br>the first section displays which tools are the most used so far, the number of completed jobs so far as well the number of jobs currently running <br>The section #2 shows a list of submitted pdb files with a link to their result pages and a timer next to it after the timer reaches zero this record is removed from the list of displayed history<br> Finally section #3 displays the number of submitted job so far<br> N.B: each tool selected during submitting a run is considered as one job <img class="img-responsive" src="ODimages/example_pic12.png"></p>
							<h2><br><a href="#dh">Next</a></h2>
						</div>
						<br><br>
					</div>
					<div class="col-md-12">
						<div class="serviceback">
							<h2 id="dh" class="sectionheado">Detailed History Panel<br><a href="#ip">Previous</a></h2>
							<p>this panel simply shows detailed information about each job submitted so far such as filename, the tool selected for the job, the submission date, expiry or completion date, the status of the job and the option to either delete it from the database or cancel a currently running job <br> N.B: deleting all the jobs for a specific pdb file removes it from the history information panel as well <img class="img-responsive" src="ODimages/example_pic13.png"></p>
							<h2><br><a href="#toc">Next</a></h2>
						</div>
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
