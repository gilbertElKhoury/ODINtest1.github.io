<?php
session_start();
?>
<html>
<head>
    <title>Login In</title>
</head>
<body>
<?php
$servername="localhost" ;
$username="root" ;
$password="g.@.K.987" ;
$dbname="ODIN" ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) ;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) ;
}


$user=$_REQUEST["username"];
$pass=$_REQUEST["pass"];
$_SESSION["UN"]=$user;
$_SESSION["PA"]=$pass;
    
$sql = "SELECT * FROM User where User.Username='$user' and User.Active=1";

$result=$conn->query($sql);

if ($result->num_rows>0) 
{
  echo "<div class=\"row\" style=\"position: fixed;z-index: 0\">
      <video width=\"200\" autoplay loop>
      <source src=\"sbvideos/odinanime4.mp4\" type=\"video/mp4\">
       </video>
    </div>";
   	while($row = $result->fetch_assoc()) 
  	{
  		if (password_verify($pass,$row['Password'])) {
  			
  		
   			$_SESSION["FN"]=$row['Firstname'];
   			$_SESSION["LN"]=$row['Lastname'];
   			$_SESSION["MA"]=$row['Email'];
   			$_SESSION["UN"]=$row['Username'];
   			$_SESSION["PA"]=$pass;
        $_SESSION["UID"]=$row['ID'];
   			header("location:  ../user2.php");
   		}
   		else
   		{
   			header("location:  ../index3.php#IA");
   		}
   	}

	
}
else
{
    header("location:  ../index3.php#IA");
}

$conn.close();
?>
</body>
</html>
