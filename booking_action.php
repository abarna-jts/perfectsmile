<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'bookdb.php';
    $fname = $_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$cardNumber = $_POST['cardNumber'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO `book` (fname, email, address, city, state, zipcode, cardNumber, exp_month,exp_month,exp_year,cvv) VALUES('$fname','$email','$address','$city','$city','$zipcode','$cardNumber','$exp_month','$exp_year','$cvv')";
if ($conn->query($sql) === TRUE) {
    echo "Your payment Successfull";
}
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}