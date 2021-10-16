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
						<a href="index.php" ><img class="img-responsive" id="logo" src="ODimages/slogo white no back.png" style="width: 300px;height: 150px" ></a>
				</div>
				<div class="col-md-9">
					<ul class="list-group" style="text-align: center;margin-top: 5%">
						<li class="list-group-item navbartabs" >
							<a href="#about" class="eventab" >About</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="#Characteristics" class="oddtab" >Characteristics</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="#makers" class="eventab">Makers</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="example.php" class="oddtab">Documentation</a>
						</li>
						<li class="list-group-item navbartabs">
							<a href="#IA" class="eventab">Sign Up / Login</a>
						</li>
					</ul>
				</div>
				<hr style="width: 100%; height:2px;color: #222222;">
			</div>
			<div id="about">
				<div class="row" style="background-color: #a7bba2">
					<div class="col-md-6">
						<img class="img-responsive" src="ODimages/submit.png" style="margin-top:0.5%;margin-left: -2%">
					</div>
					<div class="col-md-6">
						<br><br>
						<h1 class="sectionhead">ABOUT</h1><h1 class="sectionheadcnt">ODIN</h1><br><br>
						<p style="color:white;">ODIN is a web server designed to provide you the ability to assess the quality of your protein tertiary structure at ease and with minimal interference. In other words, having integrated a large set of widely used and known protein quality assessment programs, ODIN is capable of fast delivery of a consensus protein quality score representing an overall quality of the protein module submitted.</p>
						<br><br><button class="more"><a href="Report.pdf" target="_blank" >MORE</a></button>
					</div>
				</div>
			</div>
			<div id="Characteristics" >
				<div class="row" style="background-color: #222222;text-align: center;">
					<br><br>
					<h2 class="sectionhead">Characteristics</h2>
				</div>
				<div class="row" style="background-color: #222222">
					<div class="col-md-4">
						<div class="serviceback">
							<h2 class="sectionheado">Friendly</h2>
							<p>ODIN is your web tool of choice simply because of its ease to use and efficiency. Rather than navigating multiple website submiting same job at different web servers, ODIN allows you to submit the same job for different web servers allowing you to concentrate on more important tasks for the results will reach you later on by email</p>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 class="sectionheado">Powerful</h2>
							<p>ODIN could be identified as a better quality assessment webtool not only by being user friendly rather by being ultra fast in addition to being largerly updated in order to deliver the fastest quality assessment possible while maintaining a high rate of accuracy by updating and adding new tools making ODIN more precise and more accurate.</p>
						</div>
						<br><br>
					</div>
					<div class="col-md-4">
						<div class="serviceback">
							<h2 class="sectionheado">Immediate</h2>
							<p>ODIN takes protein quality assessment a further step forward making sure you are saving time allowing you to choose between a set of the best quality assessment programs and web servers. the results will reach you by email containing the information generated by these chosen web server using only one web tool and one website</p>
						</div>
						<br><br>
					</div>
				</div>
			</div>
			<div id="makers">
				<div class="row"  style="text-align: center;">
					<br><br>
					<h2 class="sectionhead">The</h2><h2 class="sectionheadcnt">Makers</h2>
					<hr>
					<br><br>
					<div class="col-md-12">
						<div class="col-md-3">
							<img class="img-responsive" src="ODimages/gix2_t.jpeg" style="height: auto;width:100%">
							<br>
						</div>
						<div class="col-md-9">
							<h2 class="sectionheadcnt">Mr.</h2><h2 class="sectionheadcnt"> Gilbert El Khoury</h2>
							<p>Mr. Gilbert El Khoury is an undergraduate student at the lebanese american university majoring in the field of Bioinformatics while minoring in both chemsitry and business. he joined LAU in 2014 and this web server is his capstone project built in 2018 </p>
							<button class="more"><a href="mailto:gilbert.elkhoury@lau.edu"> Contact Mr El Khoury</a></button>
							<br>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							<img class="img-responsive" src="ODimages/JosephREBEHMED.jpg" style="height: auto;width:100%">
							<br>
						</div>
						<div class="col-md-9">
							<br>
							<h2 class="sectionheadcnt">Dr.</h2><h2 class="sectionheadcnt"> Joseph Rebehmed</h2>
							<p>Dr. Joseph Rebehmed is an assistant professor of Bioinformatics. He joined the Lebanese American University in January 2016 as a visiting assistant professor of Bioinformatics. He obtained a master’s degree in Bioinformatics and a PhD in Computational Chemistry and Informatics (with the highest level of distinction) from the University Paris Diderot, France.</p>
							<button class="more"><a href="mailto:joseph.rebehmed@lau.edu.lb" > Contact Dr Rebehmed</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="IA" style="text-align: center;background-color: #2b2b2b">
				<div class="col-md-6" id="signup" style="background-color: #a7bba2">
					<br><br>
					<h2 class="sectionheado" >Sign Up</h2>
					<br><br>
					
					<form id="up" method="POST" action="php/ODsignup.php" style="background: unset;border: #2b2b2b">
						<div class="col-md-12">
							<i class="glyphicon glyphicon-user"></i>
							<input class="suin" type="text" name="username" placeholder=" Username" id="user" required><br>
							<p id="usere" class="error hidden">Invalid Username</p>
						</div>
						<br><br>
						<div class="col-md-12">
		    				<i class="glyphicon glyphicon-sunglasses"></i>
    						<input class="suin" type="text" name="fname" placeholder=" First Name" id="fname" required><br>
    						<p id="fnamee" class="error hidden">Insert Your First Name</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<i class="glyphicon glyphicon-apple"></i>
							<input class="suin" type="text" name="lname" placeholder=" Last Name" id="lname" required><br>
							<p id="lnamee" class="error hidden">Insert Your Last Name</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<i class="glyphicon glyphicon-flag"></i>
							<select class="suin" type="text" name="loc" placeholder="Country" value="country" id="country" style="width: 30%;border:2px solid #2b2b2b;" required>
								<option value="">Enter Your Country</option>
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia, Plurinational State of</option>
								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CX">Christmas Island</option>
								<option value="CC">Cocos (Keeling) Islands</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo, the Democratic Republic of the</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Côte d'Ivoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CW">Curaçao</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="DO">Dominican Republic</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="ET">Ethiopia</option>
								<option value="FK">Falkland Islands (Malvinas)</option>
								<option value="FO">Faroe Islands</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GF">French Guiana</option>
								<option value="PF">French Polynesia</option>
								<option value="TF">French Southern Territories</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GR">Greece</option>
								<option value="GL">Greenland</option>
								<option value="GD">Grenada</option>
								<option value="GP">Guadeloupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard Island and McDonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran, Islamic Republic of</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, Democratic People's Republic of</option>
								<option value="KR">Korea, Republic of</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Lao People's Democratic Republic</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MQ">Martinique</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="YT">Mayotte</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia, Federated States of</option>
								<option value="MD">Moldova, Republic of</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MS">Montserrat</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Réunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="BL">Saint Barthélemy</option>
								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="MF">Saint Martin (French part)</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SX">Sint Maarten (Dutch part)</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia and the South Sandwich Islands</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan, Province of China</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania, United Republic of</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-Leste</option>
								<option value="TG">Togo</option>
								<option value="TK">Tokelau</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela, Bolivarian Republic of</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
						</div>
						<br><br>
						<div class="col-md-12">
							<i class="glyphicon glyphicon-envelope"></i><input class="suin" type="email" id="em" name="email" placeholder=" Email Address" required><br>
							<p id="eme" class="error hidden">Insert A Valid Email</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<i class="glyphicon glyphicon-lock"></i><input class="suin" type="password" id="pass" name="pass" placeholder=" Password" required><br>
							<p id="passe" class="error hidden">Insert A Valid Password</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<i class="glyphicon glyphicon-lock"></i><input class="suin" type="password" id="rpass" name="rpass" placeholder="Retype your Password" required><br><br>
							<p id="passe3" class="error hidden">Passwords do not match</p><br>
							<button class="moree" id="su" type="submit"> Submit </button><br>
						</div>
						<br><br>
						
							
						
					
					</form>
				</div>
				<div class="col-md-6" id="signup">
					<br><br>
					<h2 class="sectionhead">Sign In</h2>
					<br><br>
					<form id="in" method="POST" action="php/ODsignin.php" >
						<div class="col-md-12">
							<input class="siin" type="text" name="username" id="user2" placeholder=" Username" required>
							<br><p id="usere2" class="error2 hidden">Invalid Username</p>
						</div>
						<br><br>
						<div class="col-md-12">
							<input class="siin" type="password" name="pass" id="pass2" placeholder=" Password" required>
							<br><p id="passe2" class="error2 hidden">Invalid Password</p>
						</div>
						<br><br>
						<button class="moro" id="si" type="submit"> Submit </button>
					</form>
				</div>	
			</div>
			<div class="row" id="footer" >
				<br>
				<br>
				<div class="col-md-12">
					<a href="index.php" target="_blank" ><img class="img-responsive" id="logo2" src="ODimages/slogo white no back.png" style="width: 300px;height: 150px;margin-left: auto;margin-right: auto;" ></a>
				</div>
				<div class="col-md-12" style="text-align: center;">
					<p style="display: inline-block;" >@<?php echo date("Y");?> All rights reseved. </p>
			
					<a href="" style="display: inline-block;text-decoration: none;color: #a7bba2" target="_blank">Privacy and terms condition</a>
				</div>
				<div class="col-md-12">
					<br>
					<br>
					<br>
				</div>
			</div>
			<div class="homebutt">
				<a href="#home" ><img id="homebutt" class="img-responsive three" src="ODimages/up.png" ></a>
			</div>
		</div>
		<script type="text/javascript">
			mypass= document.getElementById("pass");
			myrpass=document.getElementById("rpass");
			mypass.addEventListener("change",function() { 
				if(mypass.value!==myrpass.value) 
				{
					document.getElementById("su").classList.add("hidden");
					document.getElementById("passe3").classList.remove("hidden");
					document.getElementById("passe3").classList.add("show");
				}
				if(mypass.value===myrpass.value)
				{
					document.getElementById("su").classList.remove("hidden");
					document.getElementById("passe3").classList.add("hidden");
					document.getElementById("passe3").classList.remove("show");
				}
			});
			myrpass.addEventListener("change",function() { 
				if(mypass.value!==myrpass.value) 
				{
					document.getElementById("su").classList.add("hidden");
					document.getElementById("passe3").classList.remove("hidden");
					document.getElementById("passe3").classList.add("show");
				}
				if(mypass.value===myrpass.value)
				{
					document.getElementById("su").classList.remove("hidden");
					document.getElementById("passe3").classList.add("hidden");
					document.getElementById("passe3").classList.remove("show");
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
			$(document).on('scroll', function() {
				if($(this).scrollTop()>=$('#home').position().top){
					document.getElementById('homebutt').classList.add("three");
				}
    			if($(this).scrollTop()>=$('#about').position().top){
    				document.getElementById('homebutt').classList.remove("three");
    		   		document.getElementById('homebutt').classList.add("two");
    			}
    			if($(this).scrollTop()>=$('#Characteristics').position().top){
    				document.getElementById('homebutt').classList.remove("two");
    			    document.getElementById('homebutt').classList.add("one");
    			}
    			if($(this).scrollTop()>=$('#makers').position().top){
    				document.getElementById('homebutt').classList.remove("one");
    			    document.getElementById('homebutt').classList.add("two");
    			}
    			if($(this).scrollTop()>=$('#IA').position().top){
    				document.getElementById('homebutt').classList.remove("two");
    			    document.getElementById('homebutt').classList.add("one");
    			}
    			if($(this).scrollTop()>=$('#footer').position().top){
    				document.getElementById('homebutt').classList.remove("one");
    			    document.getElementById('homebutt').classList.add("two");
    			}
			})	
		</script>
	</body>
</html>

