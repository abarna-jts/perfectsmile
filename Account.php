<?php
session_start();

include("db.php");
if (isset($_SESSION['mail'])) {
    // User is logged in
    $username = $_SESSION['mail'];
    echo "Welcome, $gmail!";
} else {
    // User is not logged in; display "Account"
    echo "Account";
}
?>