<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABSE='payment_booking';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABSE);
if(!$con){
    die(mysqli_error($con));
}
?>

