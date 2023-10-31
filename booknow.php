<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    <title>Book Now</title>
    <link rel="stylesheet" href="style.css">
    <style>
#form-group .error p{
    color:#f53b57;
}
#form-group .error input{
    border-color:#f53b57;
}
#form-group .success p{
    color:#115933;
}
#form-group .success input{
    border-color:#05c46b;
}
#form-group p{
    float:left;
    font-size: 1.5rem;
    
}
#form-group{
    margin-bottom:10px;
}
.error-message {
color: red;
}

.valid-message {
color: green;
}
</style>
</head>
<body>

<header class="header">
        <a href="#" class="logo">
           
        <i class="fas fa-dental"></i> PerfectSmile </a>
    
        <nav class="navbar">
            <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./our.services.php">Services</a></li>
            <li><a href="./booknow.php">Book Online</a></li>
            <li><a href="./membership.php">Membership plan</a></li>
            <li><a href="./cr.php">Career</a></li>
            <li><a href="./aboutus.php">About us</a></li>
            <li><a href="./login.php" class="button">Login</a></li>
            <!-- <a href="./Account.php" class="scroll">Account -->
                <!-- <p> Welcome
                    <div class="menu">
                    <?php echo $_SESSION['email'];?>
                    </div> -->
                <!-- </p> -->
            <!-- </a> -->
            <li><a href="./logout.php" class="button1">Logout</a></li>   
        </ul>
        </nav>    
            <div id="menu-btn" class="fas fa-bar"></div>    
    </header>
    <section class="home" id="home">
    <div class="image">
    <img src="image/pl.png">
    </div>
    <div class="content">
        <h3>Perfect Smile</h3>
        <p>Where Smiles Shine Brighter Every Day!</p>
        <a href="./contactus.php" class="btn"> Contact us </a>
    </div>
</section>


<section class="book" id="book">
    <h1 class="heading"> <span>book</span> now </h1>
        <div class="content">
            <p>Ready to schedule your next dental appointment? Look no further! Booking with us is as easy as saying 'cheese' for a smile.</p>
        </div> 
        <div class="row">
            <form action="index.php" id="form-group" method="post">
            <h3 class="booking">Book Appointment</h3>
                <input type="names" id="names" placeholder="your name" class="box"><p id="name-message"></p>
                <input type="number" id="number" placeholder="your number" class="box"><p id="id-message"></p>
                <input type="email" id="email" placeholder="your email" class="box"><p id="e-message"></p>
                <input type="message" id="email" placeholder="your Message" class="box"><p id="m-message"></p>
                <input type="date" id="date" class="box"><p id="date-message"></p>
                <input type="submit" placeholder="book now" class="btn">
            </form>
        </div>
     
</section>
<!--booking section ends-->

<!--footer section starts-->
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
            <h3>Our Services</h3>
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

    <div class="credit"> Created by <a href="https://jorimts.com/"> Jorim Technology Solutions Pvt Ltd</a> | all rights reserved </div>
</section>
<!--footer section ends-->
<script>
// Get all the review box elements
const reviewBoxes = document.querySelectorAll('.box');

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add the animated class to elements in the viewport
function animateOnScroll() {
    reviewBoxes.forEach((box) => {
        if (isInViewport(box)) {
            box.classList.add('animated');
        }
    });
}

// Listen for the scroll event to trigger animations
window.addEventListener('scroll', animateOnScroll);

// Initial check to see if any elements are already in the viewport
animateOnScroll();

</script>
    

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>