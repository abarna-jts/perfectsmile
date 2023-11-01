<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="cr.css" />
  </head>
  <body>
    <!-- navbar-header start -->
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-tooth"></i>PerfectSmile </a>
        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./our.services.php">Services</a>
            <a href="./booknow.php">Appointments</a>
            <a href="./membership.php">Membership plan</a>
            <a href="./cr.php">Career</a> 
            <a href="./aboutus.php">About us</a>
            <a href="./login.php" class="button">Login</a>
            <!-- <a href="./Account.php" class="scroll">Account -->
                <!-- <p> Welcome
                    <div class="menu">
                    <?php echo $_SESSION['email'];?>
                    </div> -->
                <!-- </p> -->
            <!-- </a> -->
            <a href="./logout.php" class="button1">Logout</a>  
        </nav>    
            <div id="menu-btn" class="fas fa-bar"></div>    
    </header>
    <!-- navbar-header end -->

    <!-- home-section start -->
    <section class="home" id="home">
        <div class="image">
            <img src="image/pl.png" alt="">
        </div>
        <div class="content">
            <h3>Career Details</h3>
            <p>Where Smiles Shine Brighter Every Day!</p>
            <a href="./contactus.php" class="btn"> Contact us </a>
        </div>
    </section>
    <!-- home-section end -->
    
    <!-- job list box start -->
    <div class="jobs-list-container">
      <h2>5 Jobs</h2>
      <input class="job-search" type="text" placeholder="Search here..." />
      <div class="jobs"></div>
    </div>
    <!-- job list box end -->

    <!-- footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
            <a href="./index.php"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="./aboutus.php"> <i class="fas fa-chevron-right"></i> About us </a>
            <a href="./our.services.php"> <i class="fas fa-chevron-right"></i> Services </a>
            <a href="./booknow.php"> <i class="fas fa-chevron-right"></i> Appointments </a>
            <a href="./membership.php"> <i class="fas fa-chevron-right"></i> Membership plan </a>
            <a href="./cr.php"> <i class="fas fa-chevron-right"></i> Career </a>
            <a href="./login.php"> <i class="fas fa-chevron-right"></i> Login/Sign Up </a>            
            </div>
    
            <div class="box">
                <h3>Our Services</h3>
            <a href="./services1.php"> <i class="fas fa-chevron-right"></i> Braces Orthodontics </a>
            <a href="./services2.php"> <i class="fas fa-chevron-right"></i> Kids Dentistry </a>
            <a href="./services3.php"> <i class="fas fa-chevron-right"></i> Root Canal Therapy </a>
            <a href="./services4.php"> <i class="fas fa-chevron-right"></i> Dental Implants </a>
            <a href="./services5.php"> <i class="fas fa-chevron-right"></i> Gum Therapy </a>
            <a href="./services6.php"> <i class="fas fa-chevron-right"></i> Teeth Whitening </a>
            <a href="./services7.php"> <i class="fas fa-chevron-right"></i> Laser Dentistry </a> 
            <a href="./services8.php"> <i class="fas fa-chevron-right"></i> Teeth Removal </a>                        
            </div>
            
            <div class="box">
                <h3>Contact Us</h3>
                <a href="tel:7305686253"> <i class="fas fa-phone"></i> 7305686253 </a>
            <a href="tel:9840734794"> <i class="fas fa-phone"></i> 9840734794 </a>
            <a href="mailto:jdcare1997@gmail.com"> <i class="fas fa-envelope"></i> jdcare1997@gmail.com </a>
            <a href="mailto:perfectsmile1029@gmail.com"> <i class="fas fa-envelope"></i> perfectsmile1029@gmail.com </a> 
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chennai, India - 600075 </a>                               
            </div>
    
            <div class="box">
                <h3>Follow Us</h3>
            <a href="https://www.facebook.com"> <i class="fa-brands fa-facebook-f"></i> Facebook </a>
            <a href="https://www.twitter.com"> <i class="fa-brands fa-twitter"></i> Twitter </a>
            <a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i> Instagram </a>
            <a href="https://www.linkedin.com"> <i class="fa-brands fa-linkedin"></i> LinkedIn </a> 
            <a href="https://www.pinterest.com"> <i class="fa-brands fa-pinterest-p"></i> Pinterest </a>                               
            </div>
        </div>
    
        <div class="credit"> created by <span> Jorim Technology Solutions Pvt Ltd </span> | all rights reserved </div>
    </section>
    <!-- footer-section end -->

    <!-- up-arrow start -->
    <div class="go-top active"><i class="fa-solid fa-arrow-up"></i></div>
    <!-- up-arrow end -->

    <!-- job list content js -->
    <script src="cr.js"></script>
    <!-- job list content js -->

    <!-- go-top start -->
    <script>
    $(function(){
    // Scroll Event
    $(window).on('scroll', function(){
        var scrolled = $(window).scrollTop();
        if (scrolled > 500) $('.go-top').addClass('active');
        if (scrolled < 500) $('.go-top').removeClass('active');
    });  
    // Click Event
    $('.go-top').on('click', function() {
        $("html, body").animate({ scrollTop: "0" },  500);
    });
    
});
    </script>
    <!-- go-top end -->
    
  </body>
</html>