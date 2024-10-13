<?php
include("final.php");
extract($_POST);
$sql = "INSERT INTO `data`(`name`, `email`, `address`, `phone`,`payment_method`) VALUES ('.$name.','.$email.','.$address.','.$phone.','.$payment_method.')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>