<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Card</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="mem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">    
</head>
<body>
    <!-- navbar heading start -->
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-tooth"></i> PerfectSmile </a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="our.services.php">Services</a>
            <a href="booknow.php">Book Online</a>
            <a href="membership.php">Membership plan</a>
            <a href="cr.php">Career</a>
            <a href="cr.php">About us</a>
            <a href="./login.php" class="button">Login</a>
            <!-- <a href="./Account.php" class="scroll">Account -->
                <!-- <p> Welcome
                    <div class="menu">
                    <?php echo $_SESSION['email'];?>
                    </div> -->
                <!-- </p> -->
            <!-- </a> -->
            <a href="cr.php" class="button1">Logout</a>
        </nav>    
            <div id="menu-btn" class="fas fa-bar"></div>    
    </header>
    <!-- navbar heading end -->

    <!-- home section start -->
    <section class="home" id="home">
        <div class="image">
            <img src="image/pl.png">
        </div>

        <div class="content">
            <h3>Membership Details</h3>
            <!-- <p>Where Smiles Shine Brighter Every Day!</p> -->
            <a href="./contactus.php" class="btn"> Contact us </a>
        </div>
    </section>
    <!-- home section end -->

    <!-- Membership section start -->
    <section class="home-container">
        <div class="home-wrapper">
            <div class="container">
                <div class="homepage">
                    <div class="content1 fade">   
                        <div class="col-lg-6 col-md-12">
                            <div class="content_table">
                                <span class="sub-title">Basic</span>
                                    <ul>
                                        <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                                        <pre><li style="font-size: large;">  Consultation</li></pre>
                                        <pre><li style="font-size: large;">  2 Scaling & Polishing</li></pre>
                                        <pre><li style="font-size: large;">  Free Oral Scanning</li></pre> 
                                    </ul>
                                    <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs999/month</a></button>
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="image/mem1.jpg" style="width:55%; height:39rem; float:right; margin-top:-38%; position:relative; "alt="img">
                        </div>
                    </div>
                    <div class="content1 fade">   
                        <div class="col-lg-6 col-md-12">
                            <div class="content_table">
                                <span class="sub-title">Pro</span>
                                    <ul>
                                        <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                                        <pre><li style="font-size: large;">  Voucher worth 2000</li></pre>
                                        <pre><li style="font-size: large;">  Free Oral Scanning</li></pre>
                                        <pre><li style="font-size: large;">  5 - Consultation Free</li></pre> 
                                    </ul>
                                    <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs999/month</a></button>
                            </div>
                        </div>
                            <div class="img_container">
                                <img src="image/mem2.jpg" style="width:55%; height:39rem; float:right; margin-top:-38%; position:relative; "alt="img">
                            </div>
                    </div>
                    <div class="content1 fade">   
                        <div class="col-lg-6 col-md-12">
                            <div class="content_table">
                                <span class="sub-title">Premium</span>
                                    <ul>
                                        <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                                        <pre><li style="font-size: large;">  6-Consultation Free</li></pre>
                                        <pre><li style="font-size: large;">  Dental Family Voucher</li></pre>
                                        <pre><li style="font-size: large;">  10% Discount on any service</li></pre> 
                                    </ul>
                                    <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs999/month</a></button>
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="image/mem3.jpg" style="width:55%; height:39rem; float:right; margin-top:-38%; position:relative; "alt="img">
                        </div>
                    </div>
                    <div class="content1 fade">   
                        <div class="col-lg-6 col-md-12">
                            <div class="content_table">
                                <span class="sub-title">Platinum</span>
                                    <ul>
                                        <pre><li style="font-size: large;">  Digital X-Ray</li></pre>
                                        <pre><li style="font-size: large;">  No Consultation Charges</li></pre>
                                        <pre><li style="font-size: large;">   Free Smile Assesment</li></pre>
                                        <pre><li style="font-size: large;">  Dental Voucher worth Rs10000</li></pre> 
                                    </ul>
                                    <button class="bt1" class="btn btn-success"><a href="payment.php" target="_blank" style="color:black; font-weight: 500;">Buy Now @Rs999/month</a></button>
                            </div>
                        </div>
                        <div class="img_container">
                            <img src="image/mem4.jpg" style="width:55%; height:39rem; float:right; margin-top:-38%; position:relative; "alt="img">
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    <div style="text-align: center; float:right; margin-top: 5.8rem;">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>   
            </div> 
        </div>
    </section>
    <!-- Membership section end -->

    <!-- footer section -->
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
            <a href="services1.php"> <i class="fas fa-chevron-right"></i> Braces Orthodontics </a>
            <a href="services2.php"> <i class="fas fa-chevron-right"></i> Kids Dentistry </a>
            <a href="services3.php"> <i class="fas fa-chevron-right"></i> Root Canal Therapy </a>
            <a href="services4.php"> <i class="fas fa-chevron-right"></i> Dental Implants </a>
            <a href="services5.php"> <i class="fas fa-chevron-right"></i> Gum Therapy </a>
            <a href="services6.php"> <i class="fas fa-chevron-right"></i> Teeth Whitening </a>
            <a href="services7.php"> <i class="fas fa-chevron-right"></i> Laser Dentistry </a> 
            <a href="services8.php"> <i class="fas fa-chevron-right"></i> Teeth Removal </a>                       
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
            <a href="https://www.facebook.com"> <i class="fa-brands fa-facebook"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fa-brands fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com"> <i class="fa-brands fa-linkedin"></i> LinkedIn </a> 
            <a href="https://www.pinterest.com"> <i class="fa-brands fa-pinterest-p"></i> Pinterest </a>                            
        </div>
    </div>
    <div class="credit"> Created by <a href="https://jorimts.com/"> Jorim Technology Solutions Pvt Ltd</a> | all rights reserved </div>
</section>
<!-- footer section end -->

<!-- up-arrow start  -->
<div class="go-top active"><i class="fa-solid fa-arrow-up"></i></div>
<!-- up-arrow end  -->

<!-- image sliding script start -->
<script>
            let slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("content1");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
</script>
<!-- image sliding script end -->

<!-- Go-Top start -->
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
<!-- Go-Top end -->
</body>
</html>