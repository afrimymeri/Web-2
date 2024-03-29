<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Cars | MotorEmpire</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
     <!--SWIPER JS-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

     <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

     <!--STYLESHEET I KTIJ PAGE-->
     <link rel="stylesheet" href="style.css" />

     <!--LINKU PER JQUERY PA T CILIN SKA SHANSA ME FUNKSIONI DARK THEME TOGGLE- I-->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <STYLE>
        .site-footer 
        {
    background-color: #2c3e50;
    color: white;
    padding: 40px 0;
    font-size: 15px;
}

.site-footer .container 
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-top 
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 40px;
    word-spacing: normal;
}

.footer-top > div 
{
    flex: 1;
    min-width: 200px;
    margin-right: 15px;
}

.footer-top h3 
{
    color: #f1c40f;
    margin-bottom: 15px;
}

.footer-top ul, .footer-top p 
{
    margin: 0;
    padding: 0;
    list-style: none;
}

.footer-top ul li a 
{
    color: #bdc3c7;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
    transition: color 0.3s;
}

.footer-top ul li a:hover 
{
    color: #f1c40f;
}

.footer-contact ul li, .footer-social .social-icons a
 {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    color: #bdc3c7;
}

.footer-contact ul li i, .footer-social .social-icons a i 
{
    margin-right: 10px;
    font-size: 18px;
}

.footer-social .social-icons a 
{
    color: #bdc3c7;
    transition: color 0.2s;
}

.footer-social .social-icons a:hover 
{
    color: #f1c40f;
}

/*
.footer-bottom 
{
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #34495e;
    padding-top: 20px;
}
*/


@media (max-width: 768px) 
{
    .footer-top 
    {
        text-align: center;
    }

    .footer-top > div 
    {
        margin-bottom: 30px;
    }
}

 </STYLE>

</head>

<body>
        <!--HEADER/NAVBAR start-->

        <header>

            <div id="MenuBtn" class="fas fa-bars"></div>
            <a href="#" class="logo"> <img src="images/logo2.png" width="100px " height="50px" ></a>
            <nav class="navbar">
              <a href="index.html">Home</a>
              <a href="vehicles.html" target="blank">Vehicles</a>
              <a href="featured.html">Featured</a>
              <a href="#Services">Services</a>
              <a href="#Review">Review</a>
              <a href="#Contact">Contact</a>
              <a href="price.html" target="blank">PriceRange</a>
            </nav>

            <div id="LoginBtn">
              <button class="btn">Login</button>
              <i class="fas fa-user"></i>
            </div>

          </header>
      


          <!--
            LEJE NIHER KIT PJES
          -->
    <!--Login Form Container-i
    <div class="loginFormContainer">
        <span id="CloseLoginForm" class="fas fa-times"></span>
        <form action="">
          <h3>User Login</h3>

          <input type="email" placeholder="Email" required class="box" />
          <input type="password" placeholder="Password" required class="box" />
          <p>Forgot your Password? <a href="#">Click Here</a></p>
          <button class="btn">Submit</button>
          <p>or Login With</p>

          <div class="buttons">
            <a href="#" class="btn">Google</a>
            <a href="#" class="btn">Facebook</a>
          </div>

        </form>
      </div> 
      -->  
      
      

        <!--Featured Section Start-->
        <section id="Feature" class="feature">
            <h1 class="heading">Featured Cars</h1>
            <div class="swiper FeatureSlider">
              <div class="swiper-wrapper">
                <div class="swiper-slide box">
                  <img src="images/featured1bmw.png" alt="" />
                  <div class="content">
                    <h3>BMW M4 Coupe</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$85,000</div>
                    <a href="https://www.bmwusa.com/vehicles/m-models/m4-coupe/overview.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>


                <div class="swiper-slide box">
                  <img src="images/featuredbmwreplace.avif" alt="" />
                  <div class="content">
                    <h3>BMW i8</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$140,000</div>
                    <a href="https://www.bmw.co.uk/en/topics/discover/bmw-i8.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>



                <div class="swiper-slide box">
                  <img src="images/featured6.png" alt="" />
                  <div class="content">
                    <h3>BMW 3 Series Sedan M Automobiles</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$60,900</div>
                    <a href="https://www.bmw.co.th/en/all-models/m-series/m3-sedan/2023/bmw-3-series-sedan-m-automobiles-overview.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>



                <div class="swiper-slide box">
                  <img src="images/featuredx6comp.png" alt="" />
                  <div class="content">
                    <h3>BMW X6 M Competition</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$128,000</div>
                    <a href="https://www.bmwusa.com/vehicles/m-models/x6-m/sports-activity-coupe/overview.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>



                <div class="swiper-slide box">
                  <img src="images/featuredbmwww.png" alt="" />
                  <div class="content">
                    <h3>BMW X2 M35i xDrive</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$60,000</div>
                    <a href="https://www.bmw-m.com/en/all-models/overview-m-and-m-performance/bmw-x2-m35i-xdrive/2023/bmw-x2-m35i-xdrive.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>



                <div class="swiper-slide box">
                  <img src="images/featured4.png" alt="" />
                  <div class="content">
                    <h3>BMW 5 Series Sedan</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$85,000</div>
                    <a href="https://www.bmwusa.com/vehicles/5-series/sedan/overview.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>
      


                <div class="swiper-slide box">
                  <img src="images/featured5.png" alt="" />
                  <div class="content">
                    <h3>BMW i7 M70</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$169,495</div>
                    <a href="https://www.bmwusa.com/vehicles/all-electric/i7/sedan/electric-bmw-m.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>
      


                <div class="swiper-slide box">
                  <img src="images/featuredm3.webp" alt="" />
                  <div class="content">
                    <h3>BMW M3 Competition</h3>
                    <div class="starts">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i> 
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$76,995</div>
                    <a href="https://www.bmwusa.com/vehicles/m-models/m3-sedan/overview.html" target="_blank" class="btn">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          



          <!--kodi html per dark theme toggle -->
          <div class="dark-mode-toggle">
            <button id="darkModeToggle">
                Toggle Dark Mode
            </button>
        </div>

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

<script>
   $(document).ready(function() {
    $('#darkModeToggle').click(function() {
        if ($('body').hasClass('dark-mode')) {
            $('body').removeClass('dark-mode', function() {
                $('body').fadeIn('slow'); 
            });
        } else {
            $('body').fadeOut('slow', function() {
                $('body').addClass('dark-mode');
                $('body').fadeIn('slow'); 
            });
        }
    });
});



</script>



<br><br>




<!-- Footer Start -->
<footer>
  <div class="footer-content">
    <!-- Section for the brand, app link, and social icons -->
    <div class="footer-sectionbrand-section">
      <h1>MOTOR EMPIRE</h1>
      <p>Download Our App</p>
      <div class="app-link">
        <!-- Assuming 'footerimg.png' is the image for the app store -->
        <a href="#" class="google-play-link">
          <img src="assets/images/footerimg.png" alt="Download on the App Store">
        </a>
      </div>
      <div class="social-icons">
        <!-- Make sure to add alt text for accessibility -->
        <a href="#" class="facebook-icon">
          <img src="assets/images/fb.png" alt="Facebook">
        </a>
        <a href="#" class="twitter-icon">
          <img src="assets/images/twitter.png" alt="Twitter">
        </a>
        <a href="#" class="instagram-icon">
          <img src="assets/images/ig.png" alt="Instagram">
        </a>
      </div>
    </div>

    <!-- Explore section -->
    <div class="footer-section explore-section">
      <h1>Explore</h1> <!-- Changed to h2 for proper heading hierarchy -->
      <ul>
        <!-- List items for navigation links -->
        <li><a href="#">New Inventory</a></li>
        <li><a href="#">Used Cars</a></li>
        <li><a href="#">Special Offers</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Locations</a></li>
      </ul>
    </div>

    <!-- Company section -->
    <div class="footer-section company-section">
      <h1>Company</h1>
      <ul>
        <li><a href="#">About MotorEmpire</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Partnerships</a></li>
        <li><a href="#">Press</a></li>
      </ul>
    </div>

    <!-- Contact section -->
    <div class="footer-section contact-section">
      <h1>Contact</h1>

      <ul>
        <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
        <li><i class="fas fa-phone-alt"></i> +123 456 7890</li>
        <li><i class="fas fa-envelope"></i> contact@motorempire.com</li>

        <li> <a href="mailto:someone@example.com">Send email</a></p></li>
    </ul>
    </div>

    <!-- Legal section -->
    <div class="footer-section legal-section">
      <h1>Legal</h1>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Legal Notice</a>
    </div>
  </div>

  <!-- Footer bottom section for copyright -->
  <div class="footer-bottom">
    <p>&copy; 2024 MotorEmpire. ALL RIGHTS RESERVED.</p>
  </div>
</footer>
<!-- Footer End -->




 <!--SWIPER JS-->
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




 <!--Scripta per JS-->
 <script>

//Swiper JS per slider t featured 
var swiper = new Swiper(".FeatureSlider",
 {
    grabCursor:true,
    spaceBetween:30,
    centeredSlides:true,
    loop: true,
    autoplay:{
        delay:2000,
        disableOnInteraction:false,
    },
    pagination: 
    { 
        el: ".swiper-pagination",
        clickable: true,
    },
    //Qikjo per Responsive -- mi bo boxes te Featured Cars qe kur ti bojsh slide me t dal tjetra
    breakpoints: {
        0: {
            slidesPerView:1,
        },
        768: {
            slidesPerView:2,
        },
        1024: {
            slidesPerView:3,
        },
    }
});


 </script> 

</body>

</html>