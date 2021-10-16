<?php
session_start();
$Fuser=$_SESSION["FN"];
$Luser=$_SESSION["LN"];
$user=$_SESSION["UN"];
$pmail=$_SESSION["MA"];
$pass=$_SESSION["PA"];
require_once "Mail.php";
chdir("../tools/");
$command = escapeshellcmd('python sendMail.py '.$user.' '.$pmail);
$output = shell_exec($command);
?>
<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>ODIN: Protein Quality Assessment Web Server</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../ODcss/ODindex.css">
    

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
                        <a href="../index.php" ><img class="img-responsive" id="logo" src="../ODimages/slogo white no back.png" style="width: 300px;height: 150px" ></a>
                </div>
                <div class="col-md-9" style="float: right">
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
                    </ul>
                </div>
                <hr style="width: 100%; height:2px;color: #222222;">
            </div>
            <div id="thx">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-size:80px;font-weight:bold;color:#a7bba2;text-align:center"> Welcome <?php echo $user; ?></h2>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size:28px;text-align:center">Thank You For Signing Up<br><br>An email has been sent to this email address<br><?php echo $pmail; ?> <br><br>In order to activate your account<br>please click on the link found in the email message<br><br></p>
                    </div>
                </div>


            </div>
            <div id="about">
                <div class="row" style="background-color: #a7bba2">
                    <div class="col-md-6">
                        <img class="img-responsive" src="../ODimages/submit.png" style="margin-top:0.5%;margin-left: -2%">
                    </div>
                    <div class="col-md-6">
                        <br><br>
                        <h1 class="sectionhead">ABOUT</h1><h1 class="sectionheadcnt">ODIN</h1><br><br>
                        <p style="color:white;">ODIN is a web server designed to provide you the ability to assess the quality of your protein tertiary structure at ease and with minimal interference. In other words, having integrated a large set of widely used and known protein quality assessment programs, ODIN is capable of fast delivery of a consensus protein quality score representing an overall quality of the protein module submitted.</p>
                        <br><br><button class="more"><a href="../Report.pdf" target="_blank" >MORE</a></button>
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
                            <img class="img-responsive" src="../ODimages/gix2_t.jpeg" style="height: auto;width:100%">
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
                            <img class="img-responsive" src="../ODimages/JosephREBEHMED.jpg" style="height: auto;width:100%">
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
            <div class="row" id="footer" style="background-color: #2b2b2b ">
                <br>
                <br>
                <div class="col-md-12">
                    <a href="../index.php" target="_blank" ><img class="img-responsive" id="logo2" src="../ODimages/slogo black no back.png" style="width: 300px;height: 150px;margin-left: auto;margin-right: auto;" ></a>
                </div>
                <div class="col-md-12" style="text-align: center;">
                    <p style="display: inline-block;color:white" >@<?php echo date("Y");?> All rights reseved. </p>
            
                    <a href="" style="display: inline-block;text-decoration: none;color: #a7bba2" target="_blank">Privacy and terms condition</a>
                </div>
                <div class="col-md-12">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="homebutt">
                <a href="#home" ><img id="homebutt" class="img-responsive three" src="../ODimages/up.png" ></a>
            </div>
        </div>
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
                if($(this).scrollTop()>=$('#footer').position().top){
                    document.getElementById('homebutt').classList.remove("one");
                    document.getElementById('homebutt').classList.add("two");
                }
            })  
        </script>
    </body>
</html>