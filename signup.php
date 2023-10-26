<?php
  $success=0;
  $user=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $Gender=$_POST['gender'];
            $num=$_POST['number'];
            $address=$_POST['add'];
            $gmail=$_POST['mail'];
            $password=$_POST['pass'];
        $sql="Select * from `forms` where email='$gmail'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                // echo "User already exist";
                $user=1;
            }else{
                $sql = "insert into `forms` (fname, lname, gender, cnum, address, email, pass) values('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
                $result=mysqli_query($con,$sql);
                if($result){
                        $success=1;
                        header('location:login.php');
                    }else{
                        die(mysqli_error($con));
                    }
            }
        }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Ohh no Sorry</strong> User already exist
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong>
    You have Successfully Signed up.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's and only takes a minute</h4>
        <form action="signup.php" method="post">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="sub" value="Submit">
        </form>
        <p>By Clicking the Sign Up button, you agree to our<br><a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a></p>
        <p>Already have an account? 
            <a href="login.php">Login</a></p>
    </div>
</body>
</html>