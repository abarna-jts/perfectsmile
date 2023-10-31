<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABSE='payment_booking';


$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABSE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

