<?php
session_start();
header('location:index.php');
session_destroy();
header('location:index.php');
?>