<?php
$login=0;
$invalid=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
            $gmail=$_POST['mail'];
            $password=$_POST['pass'];
        $sql="Select * from `forms` where email='$gmail' and pass='$password'";

        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $login=1;
                session_start();
                $_SESSION['email']=$gmail;
                header('location:index.php');
            }
            else{
                $invalid=1;
            }
                // $sql = "insert into `forms` (fname, lname, gender, cnum, address, email, pass) values('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
                // $result=mysqli_query($con,$sql);
                // if($result){
                //         $success=1;
                //     }else{
                //         die(mysqli_error($con));
                //     }
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
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong>
    You have Successfully logged in.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong>
    Invalid Credentials
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>
    <div class="login">
        <h1>Sign In</h1>
        <form action="login.php" method="post">
        <form method="post">
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="sub" value="Submit">
        </form>
        <p>Not have a account? <a href="signup.php">Sign Up here</a></p>
    </div>
</body>
</html>