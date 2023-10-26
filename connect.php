<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABSE='jorim';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABSE);
if(!$con){
    die(mysqli_error($con));
}
?>