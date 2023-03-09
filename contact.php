
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut Icon" type="icon" href="images/mylogo.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;0,800;1,500&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css" class="rel" media="all">
<link rel="stylesheet" href="mystyles.css" class="rel">
<title>Message Sent Successfully</title>
</head>
<body>

<!-- Navigation bar -->
<header>
    <div class="navbar">
    <a href="index.html"><img src="images/mylogo.png"></a>
    <div class="menu-items" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="services.html">Services</a>
            <a href="projects.html">Projects</a>
            <a href="contactpage.html">Contact</a>
            <a href="quote.html" class="mybtn">Get a Quote</a>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
    </div>
</header>


<body>
    
<!-- Carousel Section -->
<div class="service-header">
    <h1>Message Sent Successfully</h1>
</div>

<!-- PHP Contact Backend -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = test_input($_POST["name"]);
  $name = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);

  // Set recipient email address
  $to = "info@realmelevators.com";

  // Set email subject
  $subject = "New form submission from $name";

  // Set email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Set email message
  $body = "<p><strong>Name:</strong> $name</p>";
  $body .= "<p><strong>Phone:</strong> $phone</p>";
  $body .= "<p><strong>Email:</strong> $email</p>";
  $body .= "<p><strong>Subject:</strong> $subject</p>";
  $body .= "<p><strong>Message:</strong> $message</p>";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo " ";
  } else {
    echo "Oops! Something went wrong.";
  }
}

// Helper function to sanitize form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<!-- end of PHP backend codes -->
<p style="color:green; text-align:center; margin: 30px; font-size: 20px;">Your message was sent successfully! Our team will reach out to you shortly! <br>
Do you have a project to assign to our experts to handle it for you? Fill the form below...</p>




     <!-- Contact section / requeting quote-->
     <section class="quote" id="quote">
        <h2 class="title">Reach out to our Experts</h2>
                <div class="container">
                    <form action="submit_form.php" method="POST">
                    <div class="row">
                    <div class="col-25">
                    <label for="fname" >Full Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="fullname" placeholder="Your name.." required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                    <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="Email address.." required>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                    <label for="services">Select the Service</label>
                    </div>
                    <div class="col-75">
                    <select id="services" name="services">
                            <option value="Web Development">Web Development</option>
                            <option value="Software Development">Software Development</option>
                            <option value="App Development">App Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="IT Consultation">IT Consultation</option>
                            <option value="Data Entry">Data Entry</option>
                            <option value="Photography">Photography</option>
                            <option value="Software Installation">Software Installation</option>
                            <option value="Cybersecurity service">Cybersecurity services</option>
                            <option value="Hardware Configuration">Hardware Configuration</option>
                            <option value="Database Development">Database Development</option>
                            <option value="Videography">Videography</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Writing">Writing</option>
                            <option value="Other">Other</option>
                    </select>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-25">
                            <label for="subject">Describe your Project</label>
                            </div>
                            <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Describe your request here..." style="height:200px" required></textarea>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <input type="submit" id="message" value="Submit a Request">
                    </div>
                    </form>
                </div>
    </section>







<!---this is the footer-->
<footer>
    <div class="footer-container">
        <div class="footer-card">
    <img src="images/mylogo.png">
    <h3>Realm Elevators Company</h3>
    <p>We are top IT company in Kenya which provides <br>businesses with the tools and 
        technology they need <br>to achieve their goals.</p>
        </div>
        <div class="footer-card">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contactpage.html">Contact Us</a></li>
                <li><a href="Privacy Policy.html">Privacy Policies</a></li>
                <li><a href="Terms and Conditions.html">Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="footer-card">
            <h3>Social Media Accounts <br><span>Reach us through social media!</span></h3>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100083023307947&mibextid=ZbWKwL"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/realm_elevators?t=dEGgPAMdshyoagHUhRDFLQ&s=09"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="http://www.linkedin.com/in/realm-elevators-company-8b3760267"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                <li><a href="https://t.me/realmelevators"><i class="fa fa-telegram"></i> Telegram</a></li>
            </ul>
        </div>
        <div class="footer-card">
            <h3>Do you have any query? <br><span>Get help now!</span></h3>
            <ul>
                <li>Call/SMS 22/7:</li>
                <li style="color: #00ffff;">+254746092415 or +254115580891 or <br>+254707967928</li>
                <li>Email us: info@realmelevators.com</li>
                <button><a href="quote.html" style="color: #fff;">Get a Quote</a></button>
            </ul>
        </div>
    </div>

    <!--this button for whatsapp-->
<div class="whatsapp-icon" id="whatsappus">
    <a href="https://wa.me/254778235045"><i class="fa fa-whatsapp"></i> Chat us Now</i></a>
</div>

    <div class="scrolltotop">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-long-arrow-up"></i></button>
        </div>
        <p class="copyrights">All rights reserved &#169; Realm Elevators Company - <span id="year"></span><script>
        document.getElementById("year").innerHTML=new Date().getFullYear();
        </script></p>
    </footer>
    <!---javascript for scroll to top button-->
    <script>
        // Get the button:
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    
    
    <!---javascript for closing and opening menu on small screens-->
    <script>
        var navLinks=document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right='0';
        }
        function hideMenu(){
            navLinks.style.right='-220px';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
    
    <!--this is scrollreveal js--->  
    <script src="https://unpkg.com/scrollreveal"></script>
    </script>
    </body>
    </html>




