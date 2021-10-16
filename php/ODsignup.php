
<?php
session_start();

?>
<?php    
function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

 $PublicIP = get_client_ip();
 $str_arr = explode (",", $PublicIP);  
 $PublicIP=$str_arr[0];
 $json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
 $json  =  json_decode($json ,true);
 $country2 =  $json['country'];
 ?>

<html>
<head>
    <title>Signing up</title>
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

$Fuser =$_REQUEST["fname"];
$Luser =$_REQUEST["lname"];
$user=$_REQUEST["username"];
$mail=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$vpass=$_REQUEST["rpass"];
$location=$_REQUEST["loc"];
$_SESSION["FN"]=$Fuser;
$_SESSION["LN"]=$Luser;
$_SESSION["UN"]=$user;
$_SESSION["MA"]=$mail;
$_SESSION["PA"]=$pass;
if ($location!=$country2) {
	$location=$country2;
}
$country="";
switch ($location) {
	case 'AF': $country="Afghanistan";break;
	case 'AX': $country="Åland Islands";break;
	case 'AL': $country="Albania";break;
	case 'DZ': $country="Algeria";break;
	case 'AS': $country="American Samoa";break;
	case 'AD': $country="Andorra";break;
	case 'AO': $country="Angola";break;
	case 'AI': $country="Anguilla";break;
	case 'AQ': $country="Antarctica";break;
	case 'AG': $country="Antigua and Barbuda";break;
	case 'AR': $country="Argentina";break;
	case 'AM': $country="Armenia";break;
	case 'AW': $country="Aruba";break;
	case 'AU': $country="Australia";break;
	case 'AT': $country="Austria";break;
	case 'AZ': $country="Azerbaijan";break;
	case 'BS': $country="Bahamas";break;
	case 'BH': $country="Bahrain";break;
	case 'BD': $country="Bangladesh";break;
	case 'BB': $country="Barbados";break;
	case 'BY': $country="Belarus";break;
	case 'BE': $country="Belgium";break;
	case 'BZ': $country="Belize";break;
	case 'BJ': $country="Benin";break;
	case 'BM': $country="Bermuda";break;
	case 'BT': $country="Bhutan";break;
	case 'BO': $country="Bolivia, Plurinational State of";break;
	case 'BQ': $country="Bonaire, Sint Eustatius and Saba";break;
	case 'BA': $country="Bosnia and Herzegovina";break;
	case 'BW': $country="Botswana";break;
	case 'BV': $country="Bouvet Island";break;
	case 'BR': $country="Brazil";break;
	case 'IO': $country="British Indian Ocean Territory";break;
	case 'BN': $country="Brunei Darussalam";break;
	case 'BG': $country="Bulgaria";break;
	case 'BF': $country="Burkina Faso";break;
	case 'BI': $country="Burundi";break;
	case 'KH': $country="Cambodia";break;
	case 'CM': $country="Cameroon";break;
	case 'CA': $country="Canada";break;
	case 'CV': $country="Cape Verde";break;
	case 'KY': $country="Cayman Islands";break;
	case 'CF': $country="Central African Republic";break;
	case 'TD': $country="Chad";break;
	case 'CL': $country="Chile";break;
	case 'CN': $country="China";break;
	case 'CX': $country="Christmas Island";break;
	case 'CC': $country="Cocos (Keeling) Islands";break;
	case 'CO': $country="Colombia";break;
	case 'KM': $country="Comoros";break;
	case 'CG': $country="Congo";break;
	case 'CD': $country="Congo, the Democratic Republic of the";break;
	case 'CK': $country="Cook Islands";break;
	case 'CR': $country="Costa Rica";break;
	case 'CI': $country="Côte d'Ivoire";break;
	case 'HR': $country="Croatia";break;
	case 'CU': $country="Cuba";break;
	case 'CW': $country="Curaçao";break;
	case 'CY': $country="Cyprus";break;
	case 'CZ': $country="Czech Republic";break;
	case 'DK': $country="Denmark";break;
	case 'DJ': $country="Djibouti";break;
	case 'DM': $country="Dominica";break;
	case 'DO': $country="Dominican Republic";break;
	case 'EC': $country="Ecuador";break;
	case 'EG': $country="Egypt";break;
	case 'SV': $country="El Salvador";break;
	case 'GQ': $country="Equatorial Guinea";break;
	case 'ER': $country="Eritrea";break;
	case 'EE': $country="Estonia";break;
	case 'ET': $country="Ethiopia";break;
	case 'FK': $country="Falkland Islands (Malvinas)";break;
	case 'FO': $country="Faroe Islands";break;
	case 'FJ': $country="Fiji";break;
	case 'FI': $country="Finland";break;
	case 'FR': $country="France";break;
	case 'GF': $country="French Guiana";break;
	case 'PF': $country="French Polynesia";break;
	case 'TF': $country="French Southern Territories";break;
	case 'GA': $country="Gabon";break;
	case 'GM': $country="Gambia";break;
	case 'GE': $country="Georgia";break;
	case 'DE': $country="Germany";break;
	case 'GH': $country="Ghana";break;
	case 'GI': $country="Gibraltar";break;
	case 'GR': $country="Greece";break;
	case 'GL': $country="Greenland";break;
	case 'GD': $country="Grenada";break;
	case 'GP': $country="Guadeloupe";break;
	case 'GU': $country="Guam";break;
	case 'GT': $country="Guatemala";break;
	case 'GG': $country="Guernsey";break;
	case 'GN': $country="Guinea";break;
	case 'GW': $country="Guinea-Bissau";break;
	case 'GY': $country="Guyana";break;
	case 'HT': $country="Haiti";break;
	case 'HM': $country="Heard Island and McDonald Islands";break;
	case 'VA': $country="Holy See (Vatican City State)";break;
	case 'HN': $country="Honduras";break;
	case 'HK': $country="Hong Kong";break;
	case 'HU': $country="Hungary";break;
	case 'IS': $country="Iceland";break;
	case 'IN': $country="India";break;
	case 'ID': $country="Indonesia";break;
	case 'IR': $country="Iran, Islamic Republic of";break;
	case 'IQ': $country="Iraq";break;
	case 'IE': $country="Ireland";break;
	case 'IM': $country="Isle of Man";break;
	case 'IL': $country="Israel";break;
	case 'IT': $country="Italy";break;
	case 'JM': $country="Jamaica";break;
	case 'JP': $country="Japan";break;
	case 'JE': $country="Jersey";break;
	case 'JO': $country="Jordan";break;
	case 'KZ': $country="Kazakhstan";break;
	case 'KE': $country="Kenya";break;
	case 'KI': $country="Kiribati";break;
	case 'KP': $country="Korea, Democratic People's Republic of";break;
	case 'KR': $country="Korea, Republic of";break;
	case 'KW': $country="Kuwait";break;
	case 'KG': $country="Kyrgyzstan";break;
	case 'LA': $country="Lao People's Democratic Republic";break;
	case 'LV': $country="Latvia";break;
	case 'LB': $country="Lebanon";break;
	case 'LS': $country="Lesotho";break;
	case 'LR': $country="Liberia";break;
	case 'LY': $country="Libya";break;
	case 'LI': $country="Liechtenstein";break;
	case 'LT': $country="Lithuania";break;
	case 'LU': $country="Luxembourg";break;
	case 'MO': $country="Macao";break;
	case 'MK': $country="Macedonia, the former Yugoslav Republic of";break;
	case 'MG': $country="Madagascar";break;
	case 'MW': $country="Malawi";break;
	case 'MY': $country="Malaysia";break;
	case 'MV': $country="Maldives";break;
	case 'ML': $country="Mali";break;
	case 'MT': $country="Malta";break;
	case 'MH': $country="Marshall Islands";break;
	case 'MQ': $country="Martinique";break;
	case 'MR': $country="Mauritania";break;
	case 'MU': $country="Mauritius";break;
	case 'YT': $country="Mayotte";break;
	case 'MX': $country="Mexico";break;
	case 'FM': $country="Micronesia, Federated States of";break;
	case 'MD': $country="Moldova, Republic of";break;
	case 'MC': $country="Monaco";break;
	case 'MN': $country="Mongolia";break;
	case 'ME': $country="Montenegro";break;
	case 'MS': $country="Montserrat";break;
	case 'MA': $country="Morocco";break;
	case 'MZ': $country="Mozambique";break;
	case 'MM': $country="Myanmar";break;
	case 'NA': $country="Namibia";break;
	case 'NR': $country="Nauru";break;
	case 'NP': $country="Nepal";break;
	case 'NL': $country="Netherlands";break;
	case 'NC': $country="New Caledonia";break;
	case 'NZ': $country="New Zealand";break;
	case 'NI': $country="Nicaragua";break;
	case 'NE': $country="Niger";break;
	case 'NG': $country="Nigeria";break;
	case 'NU': $country="Niue";break;
	case 'NF': $country="Norfolk Island";break;
	case 'MP': $country="Northern Mariana Islands";break;
	case 'NO': $country="Norway";break;
	case 'OM': $country="Oman";break;
	case 'PK': $country="Pakistan";break;
	case 'PW': $country="Palau";break;
	case 'PS': $country="Palestinian Territory, Occupied";break;
	case 'PA': $country="Panama";break;
	case 'PG': $country="Papua New Guinea";break;
	case 'PY': $country="Paraguay";break;
	case 'PE': $country="Peru";break;
	case 'PH': $country="Philippines";break;
	case 'PN': $country="Pitcairn";break;
	case 'PL': $country="Poland";break;
	case 'PT': $country="Portugal";break;
	case 'PR': $country="Puerto Rico";break;
	case 'QA': $country="Qatar";break;
	case 'RE': $country="Réunion";break;
	case 'RO': $country="Romania";break;
	case 'RU': $country="Russian Federation";break;
	case 'RW': $country="Rwanda";break;
	case 'BL': $country="Saint Barthélemy";break;
	case 'SH': $country="Saint Helena, Ascension and Tristan da Cunha";break;
	case 'KN': $country="Saint Kitts and Nevis";break;
	case 'LC': $country="Saint Lucia";break;
	case 'MF': $country="Saint Martin (French part)";break;
	case 'PM': $country="Saint Pierre and Miquelon";break;
	case 'VC': $country="Saint Vincent and the Grenadines";break;
	case 'WS': $country="Samoa";break;
	case 'SM': $country="San Marino";break;
	case 'ST': $country="Sao Tome and Principe";break;
	case 'SA': $country="Saudi Arabia";break;
	case 'SN': $country="Senegal";break;
	case 'RS': $country="Serbia";break;
	case 'SC': $country="Seychelles";break;
	case 'SL': $country="Sierra Leone";break;
	case 'SG': $country="Singapore";break;
	case 'SX': $country="Sint Maarten (Dutch part)";break;
	case 'SK': $country="Slovakia";break;
	case 'SI': $country="Slovenia";break;
	case 'SB': $country="Solomon Islands";break;
	case 'SO': $country="Somalia";break;
	case 'ZA': $country="South Africa";break;
	case 'GS': $country="South Georgia and the South Sandwich Islands";break;
	case 'SS': $country="South Sudan";break;
	case 'ES': $country="Spain";break;
	case 'LK': $country="Sri Lanka";break;
	case 'SD': $country="Sudan";break;
	case 'SR': $country="Suriname";break;
	case 'SJ': $country="Svalbard and Jan Mayen";break;
	case 'SZ': $country="Swaziland";break;
	case 'SE': $country="Sweden";break;
	case 'CH': $country="Switzerland";break;
	case 'SY': $country="Syrian Arab Republic";break;
	case 'TW': $country="Taiwan, Province of China";break;
	case 'TJ': $country="Tajikistan";break;
	case 'TZ': $country="Tanzania, United Republic of";break;
	case 'TH': $country="Thailand";break;
	case 'TL': $country="Timor-Leste";break;
	case 'TG': $country="Togo";break;
	case 'TK': $country="Tokelau";break;
	case 'TO': $country="Tonga";break;
	case 'TT': $country="Trinidad and Tobago";break;
	case 'TN': $country="Tunisia";break;
	case 'TR': $country="Turkey";break;
	case 'TM': $country="Turkmenistan";break;
	case 'TC': $country="Turks and Caicos Islands";break;
	case 'TV': $country="Tuvalu";break;
	case 'UG': $country="Uganda";break;
	case 'UA': $country="Ukraine";break;
	case 'AE': $country="United Arab Emirates";break;
	case 'GB': $country="United Kingdom";break;
	case 'US': $country="United States";break;
	case 'UM': $country="United States Minor Outlying Islands";break;
	case 'UY': $country="Uruguay";break;
	case 'UZ': $country="Uzbekistan";break;
	case 'VU': $country="Vanuatu";break;
	case 'VE': $country="Venezuela, Bolivarian Republic of";break;
	case 'VN': $country="Viet Nam";break;
	case 'VG': $country="Virgin Islands, British";break;
	case 'VI': $country="Virgin Islands, U.S.";break;
	case 'WF': $country="Wallis and Futuna";break;
	case 'EH': $country="Western Sahara";break;
	case 'YE': $country="Yemen";break;
	case 'ZM': $country="Zambia";break;
	case 'ZW': $country="Zimbabwe";break;
	default: break;
}

if ($pass==$vpass) {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $_SESSION["hashed"]=$hash;
    $sql0= "SELECT count(*) from User WHERE User.Username like '".$user."'";
	$result0=$conn->query($sql0);
	$row0=$result0->fetch_assoc();
	print_r($row0);
	if ($row0['count(*)']==0) {
		
$sql = "INSERT INTO User (Username, Email, Country, Password, Firstname, Lastname, Active) values ('$user','$mail','$country','$hash', '$Fuser','$Luser',0)";
if ($conn->query($sql) === TRUE) {
	
    header("location:send.php");
}
}
else
{
    header("location:../index2.php#IA");
}
}
else
{
    header("location:../index.php#IA");
}

$conn.close();
?>
</body>
</html>
