




<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'bookdb.php';
    $fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$clgname = $_POST['clgname'];
$year = $_POST['year'];
$location = $_POST['location'];

$sql = "INSERT INTO `apply` (fname, lname, email, contact, gender, course, clgname, year, location) VALUES('$fname','$lname','$email','$contact','$gender','$course','$clgname','$year','$location')";
if ($conn->query($sql) === TRUE) {
    // Data inserted into the database

    // Send email
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

    if (mail($to, $subject, $body)) {
        echo "Data inserted into the database and email sent successfully.";
    } else {
        echo "Data inserted into the database, but there was an error sending the email.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
