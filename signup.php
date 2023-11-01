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
        <h4>It's only takes a minute</h4>
        <form id="form-group" action="signup.php" method="post">
          <div>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname"><p id="name-message"></p>
          </div>
            <div>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" required><p id="lname-message"></p>
            </div>
            <div>
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender"  required>
            </div>
            <div>
            <label for="number">Contact Address</label>
            <input type="number" name="number" id="number" required><p id="contact-message"></p>
            </div>
            <div>
            <label for="add">Address</label>
            <input type="text" name="add" id="add" required>
            </div>
            <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><p id="e-message"></p>
            </div>
            <div>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" required><p id="password-message"></p>
            </div>
           
            <input type="submit" name="sub" value="Submit">
        </form>
        <p>By Clicking the Sign Up button, you agree to our<br><a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a></p>
        <p>Already have an account? 
            <a href="login.php">Login</a></p>
    </div>
    <script>

var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var email = document.getElementById("email");
var passwordInput = document.getElementById('pass');

fname.addEventListener('input', function () {
          // Get the value of the input
          var x = fname.value;
          var text;
          
          // Define the minimum and maximum allowed length
          var minLength = 3;
          var maxLength = 30;
    
          // Check the length of the input value
          if (x.length < minLength || x.length > maxLength) {
              // Display an error message
              text="Input must be more that 3 characters";
              document.getElementById("name-message").innerHTML = '<p class="error-message">' + text + '</p>';
          } else {
              // Clear the error message if the length is valid
              text= "valid input";
              document.getElementById("name-message").innerHTML = '<p class="valid-message">' + text + '</p>';
          }   
      });

      lname.addEventListener('input', function () {
        // Get the value of the input
        var x = lname.value;
        var text;
        
        // Define the minimum and maximum allowed length
        var minLength = 3;
        var maxLength = 30;
  
        // Check the length of the input value
        if (x.length < minLength || x.length > maxLength) {
            // Display an error message
            text="Input must be more that 3 characters";
            document.getElementById("lname-message").innerHTML = '<p class="error-message">' + text + '</p>';
        } else {
            // Clear the error message if the length is valid
            text= "valid input";
            document.getElementById("lname-message").innerHTML = '<p class="valid-message">' + text + '</p>';
        }
    });

      email.addEventListener('input',function(){
        var z=email.value;
        var text;

        if (!z.includes('@')) {
            text = "Email must contain '@' symbol";
            document.getElementById("e-message").innerHTML = '<p class="error-message">' + text + '</p>';
    } else {
        text = "Valid email";
        document.getElementById("e-message").innerHTML = '<p class="valid-message">' + text + '</p>';
    }
      });

      number.addEventListener('input',function(){
        var m=number.value;
        var text;

        var minid = 10;
        var maxid = 10;

        if (m.length < minid || m.length > maxid) {
            text = "Input should be 10 number";
            document.getElementById("contact-message").innerHTML = '<p class="error-message">' + text + '</p>';
    } else {
        text = "Valid email";
        document.getElementById("contact-message").innerHTML = '<p class="valid-message">' + text + '</p>';
    }
      });
    
      passwordInput.addEventListener('input', function () {
    // Get the value of the input
    var password = passwordInput.value;
    var text;
    
    // Define the password strength criteria
    var minLength = 8;  // Minimum length
    var hasUppercase = /[A-Z]/.test(password);  // At least one uppercase letter
    var hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(password);  // At least one special character
    var hasNumber = /\d/.test(password);  // At least one digit

    // Check if the password meets all criteria
    if (password.length < minLength) {
        text = "Password must be at least 8 characters long.";
    } else if (!hasUppercase) {
        text = "Password must contain at least one uppercase letter.";
    } else if (!hasSpecialChar) {
        text = "Password must contain at least one special character.";
    } else if (!hasNumber) {
        text = "Password must contain at least one number.";
    } else {
        text = "Password is valid.";
    }
    // Display the error message or valid message
    document.getElementById("password-message").innerHTML = '<p class="' + (text === "Password is valid." ? "valid-message" : "error-message") + '">' + text + '</p';
});
      </script>
</body>
</html>