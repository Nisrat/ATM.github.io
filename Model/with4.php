<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$card= $_POST["card_no"];

$query = $link->query("SELECT `balan` FROM `balance` Where card_no='$card';");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['balan'];
    
}
$balances= $array[0];

$sql="INSERT INTO history(card_no, withdraw) VALUES('$card', '20000')";
$b= totalbalance($balances,20000);
$balan="UPDATE balance SET balan =$b  Where card_no='$card'";
function totalbalance($a,$c)  
{  
    return $a - $c;
} 

if ($link->query($sql) === TRUE && $link->query($balan) === TRUE) {
    header("Location: ../View/welcome.php");



            exit();
    
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }
    // Close connection
    mysqli_close($link);

?>
 
