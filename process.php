<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$clgname = $_POST['clgname'];
$year = $_POST['year'];
$location = $_POST['location'];

$to = "abarnadevi1234@gmail.com";
$subject = "Application Form Submission";
$body = "Dear $to,

You have received a new application form submission.

The applicant's details are as follows:

First name: $fname;
Last name: $lname;
Email: $email;
Contact: $contact;
Gender: $gender;
Course: $course;
College name: $clgname;
Year of passing: $year;
Current location: $location;

Please review the application form and take appropriate action.

Thank you,
The Application Form Team";

mail($to, $subject, $body);

?>