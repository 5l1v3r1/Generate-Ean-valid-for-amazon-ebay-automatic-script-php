<html>
<head>
<?php

$servername = "localhost";
$username = "root";
$password = "r1ccard0@85";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysql_select_db("mgm", $conn);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connesso al Database";


  
?>

</head>
</html>
<br>
<br>
<html>
<head>



<?php



function ean_checkdigit($code){
  $code = str_pad($code, 12, "0", STR_PAD_LEFT);
  $sum = 0;
  for($i=(strlen($code)-1);$i>=0;$i--){
    $sum += (($i % 2) * 2 + 1 ) * $code[$i];
  }
  return (10 - ($sum % 10));
}


$ean13 = rand(1,999999999999);




//$ean13 = '200320079443'; //It is 12 Digits code
$ean13 .= ean_checkdigit($ean13); //Now it is '2003200794432' 13 Digits code

echo $ean13;


?>

</head>
</html>
