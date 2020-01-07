<html>
<head>


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

$ean13 .= ean_checkdigit($ean13); 

echo $ean13;


?>

</head>
</html>
