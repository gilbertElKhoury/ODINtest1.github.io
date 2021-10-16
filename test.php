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
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Forum">
  <script type="text/javascript"></script>  
</head>
<body>

"<div class=\"row\"><div class=\"col-md-12\"><br></div><div class=\"col-md-4\"></div><div class=\"col-md-4\"><div id=\"viewport\" style=\"width:700px; height:700px;\"></div></div><div class=\"col-md-4\"></div><div class=\"col-md-12\"><br></div></div><script src=\"https://unpkg.com/ngl\"></script><script>var myHexArray= ["+str(localQ(sys.argv[len(sys.argv)-3]),True,False,False)+"];var myHexArray2= ["+str(localQ(sys.argv[len(sys.argv)-3]),False,True,False)+"];var myHexArray3= ["+str(localQ(sys.argv[len(sys.argv)-3]),False,False,True)+"];var myHexArray4= ["+str(localQ(sys.argv[len(sys.argv)-3]),True,True,False)+"];var myHexArray5= ["+str(localQ(sys.argv[len(sys.argv)-3]),True,False,True)+"];var myHexArray6= ["+str(localQ(sys.argv[len(sys.argv)-3]),False,True,True)+"];var myHexArray7= ["+str(localQ(sys.argv[len(sys.argv)-3]),True,True,True)+"];document.addEventListener(\"DOMContentLoaded\", function () {   var stage = new NGL.Stage( \"viewport\" ,{backgroundColor:'white'});function addElement (el) {  Object.assign(el.style, {    position: \"absolute\", zIndex: 10  }) stage.viewer.container.appendChild(el)}function createElement (name, properties, style) {  var el = document.createElement(name)  Object.assign(el, properties)  Object.assign(el.style, style)  return el}function loader(argument) {  var schemeId = NGL.ColormakerRegistry.addScheme(function (params) {this.atomColor = function (atom) {  return argument[atom.residueIndex]  }})stage.loadFile(\"../tools/"+sys.argv[len(sys.argv)-3]+".pdb\").then(function (o) { o.addRepresentation(\"cartoon\", { color: schemeId })  o.autoView()})}var ProsaCheckbox = createElement(\"input\", {  type: \"checkbox\",  checked: false,  onchange: function (e) {    if (this.checked){    loader(myHexArray)    }else{      stage.loadFile(\"../tools/"+sys.argv[len(sys.argv)-3]+".pdb\").then(function (o) {  o.addRepresentation(\"cartoon\", {colorScheme: \"residueindex\"})  o.autoView()})      if (ProsaCheckbox.checked){        loader(myHexArray)      }      if (QmeanCheckbox.checked){        loader(myHexArray2)      }      if (QmeanDiscoCheckbox.checked){        loader(myHexArray3)      }      if (PQCheckbox.checked){        loader(myHexArray4)      }      if (PQDCheckbox.checked){        loader(myHexArray5)      }      if (QQDCheckbox.checked){        loader(myHexArray6)      }      if (AllCheckbox.checked){        loader(myHexArray7)      }    }  }}, { top: \"36px\", left: \"12px\" })addElement(ProsaCheckbox)addElement(createElement(\"span\", {  innerText: \"Prosa\"}, { top: \"36px\", left: \"32px\" }))var QmeanCheckbox = createElement(\"input\", {  type: \"checkbox\",  checked: false,  onchange: function (e) {    if (this.checked){    loader(myHexArray2)    }else{      stage.loadFile(\"../tools/"+sys.argv[len(sys.argv)-3]+".pdb\").then(function (o) {  o.addRepresentation(\"cartoon\", {colorScheme: \"residueindex\"})  o.autoView()})      if (ProsaCheckbox.checked){        loader(myHexArray)      }      if (QmeanCheckbox.checked){        loader(myHexArray2)      }      if (QmeanDiscoCheckbox.checked){        loader(myHexArray3)      }      if (PQCheckbox.checked){        loader(myHexArray4)      }      if (PQDCheckbox.checked){        loader(myHexArray5)      }      if (QQDCheckbox.checked){        loader(myHexArray6)      }      if (AllCheckbox.checked){        loader(myHexArray7)      }    }  }}, { top: \"60px\", left: \"12px\" })addElement(QmeanCheckbox)addElement(createElement(\"span\", {  innerText: \"Qmean\"}, { top: \"60px\", left: \"32px\" }))var QmeanDiscoCheckbox = createElement(\"input\", {  type: \"checkbox\",  checked: false,  onchange: function (e) {    if (this.checked){    loader(myHexArray3)    }else{      stage.loadFile(\"../tools/"+sys.argv[len(sys.argv)-3]+".pdb\").then(function (o) {  o.addRepresentation(\"cartoon\", {colorScheme: \"residueindex\"})  o.autoView()})      if (ProsaCheckbox.checked){        loader(myHexArray)      }      if (QmeanCheckbox.checked){        loader(myHexArray2)      }      if (QmeanDiscoCheckbox.checked){        loader(myHexArray3)      }      if (PQCheckbox.checked){        loader(myHexArray4)      }      if (PQDCheckbox.checked){        loader(myHexArray5)      }      if (QQDCheckbox.checked){        loader(myHexArray6)      }      if (AllCheckbox.checked){        loader(myHexArray7)      }    }  }}, { top: \"84px\", left: \"12px\" })addElement(QmeanDiscoCheckbox)addElement(createElement(\"span\", {  innerText: \"QmeanDisco\"}, { top: \"84px\", left: \"32px\" }))var PQCheckbox = createElement(\"input\", {  type: \"checkbox\",  checked: false,  onchange: function (e) {    if (this.checked){    loader(myHexArray4)    }else{      stage.loadFile(\"../tools/"+sys.argv[len(sys.argv)-3]+".pdb\").then(function (o) {  o.addRepresentation(\"cartoon\", {colorScheme: \"residueindex\"})  o.autoView()})      if (ProsaCheckbox.checked){        loader(myHexArray)      }      if (QmeanCheckbox.checked){        loader(myHexArray2)      }      if (QmeanDiscoCheckbox.checked){        loader(myHexArray3)      }      if (PQCheckbox.checked){        loader(myHexArray4)      }      if (PQDCheckbox.checked){        loader(myHexArray5)      }      if (QQDCheckbox.checked){        loader(myHexArray6)      }      if (AllCheckbox.checked){        loader(myHexArray7)      }    }  }}, { top: \"110px\", left: \"12px\" })addElement(PQCheckbox)addElement(createElement(\"span\", {  innerText: \"Prosa + Qmean\"}, { top: \"110px\", left: \"32px\" }))var PQDCheckbox = createElement(\"input\", {  type: \"checkbox\",  checked: false,  onchange: function (e) {
    if (this.checked){
    loader(myHexArray5)
    }else{
      stage.loadFile("tools/3GWD.pdb").then(function (o) {
  o.addRepresentation("cartoon", {colorScheme: "residueindex"})
  o.autoView()})
      if (ProsaCheckbox.checked){
        loader(myHexArray)
      }
      if (QmeanCheckbox.checked){
        loader(myHexArray2)
      }
      if (QmeanDiscoCheckbox.checked){
        loader(myHexArray3)
      }
      if (PQCheckbox.checked){
        loader(myHexArray4)
      }
      if (PQDCheckbox.checked){
        loader(myHexArray5)
      }
      if (QQDCheckbox.checked){
        loader(myHexArray6)
      }
      if (AllCheckbox.checked){
        loader(myHexArray7)
      }
    }
  }
}, { top: "136px", left: "12px" })
addElement(PQDCheckbox)
addElement(createElement("span", {
  innerText: "Prosa + QmeanDisco"
}, { top: "136px", left: "32px" }))
var QQDCheckbox = createElement("input", {
  type: "checkbox",
  checked: false,
  onchange: function (e) {
    if (this.checked){
    loader(myHexArray6)
    }else{
      stage.loadFile("tools/3GWD.pdb").then(function (o) {
  o.addRepresentation("cartoon", {colorScheme: "residueindex"})
  o.autoView()})
      if (ProsaCheckbox.checked){
        loader(myHexArray)
      }
      if (QmeanCheckbox.checked){
        loader(myHexArray2)
      }
      if (QmeanDiscoCheckbox.checked){
        loader(myHexArray3)
      }
      if (PQCheckbox.checked){
        loader(myHexArray4)
      }
      if (PQDCheckbox.checked){
        loader(myHexArray5)
      }
      if (QQDCheckbox.checked){
        loader(myHexArray6)
      }
      if (AllCheckbox.checked){
        loader(myHexArray7)
      }
    }
  }
}, { top: "162px", left: "12px" })
addElement(QQDCheckbox)
addElement(createElement("span", {
  innerText: "Qmean + QmeanDisco"
}, { top: "162px", left: "32px" }))

var AllCheckbox = createElement("input", {
  type: "checkbox",
  checked: false,
  onchange: function (e) {
    if (this.checked){
    loader(myHexArray7)
    }else{
      stage.loadFile("tools/3GWD.pdb").then(function (o) {
  o.addRepresentation("cartoon", {colorScheme: "residueindex"})
  o.autoView()})
      if (ProsaCheckbox.checked){
        loader(myHexArray)
      }
      if (QmeanCheckbox.checked){
        loader(myHexArray2)
      }
      if (QmeanDiscoCheckbox.checked){
        loader(myHexArray3)
      }
      if (PQCheckbox.checked){
        loader(myHexArray4)
      }
      if (PQDCheckbox.checked){
        loader(myHexArray5)
      }
      if (QQDCheckbox.checked){
        loader(myHexArray6)
      }
      if (AllCheckbox.checked){
        loader(myHexArray7)
      }
    }
  }
}, { top: "188px", left: "12px" })
addElement(AllCheckbox)
addElement(createElement("span", {
  innerText: "All"
}, { top: "188px", left: "32px" }))

var centerButton = createElement("input", {
  type: "button",
  value: "center",
  onclick: function () {
    stage.autoView(1000)
  }
}, { top: "218px", left: "12px" })
addElement(centerButton)
var clearButton = createElement("input", {
  type: "button",
  value: "clear",
  onclick: function () {
    stage.loadFile("tools/3GWD.pdb").then(function (o) {
  o.addRepresentation("cartoon", {colorScheme: "residueindex"})
  o.autoView()})
  }
}, { top: "260px", left: "12px" })
addElement(clearButton)
}) 
       </script>
</body>
</html>
