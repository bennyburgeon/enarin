
<?php 
if(isset($_POST['submit'])){
    
    $to = "akhilbenny.7@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message']. "\n\n  ThankYou for your Responce";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $responce= "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#e8293b" />
    <meta name="HandheldFriendly" content="true" />
    <title>ENARIN Business</title>
    <meta name="description" content="ENARIN Business">
    <meta name="keywords" content="">
    <link href="images/title-logo.jpg" rel="shortcut icon">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
    
      <!-- end inner -->
    </div>
    <!-- end preloader --><div class="transition-overlay">
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
    </div>
    <!-- end transition-overlay --><div class="navigation-menu">
      <div class="bg-layers">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- end bg-layers -->
      <div class="inner" >
        <div class="menu">
          <ul>
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">About us </a>
            </li>
            <li>
              <a href="services.html">Services</a>
            </li>
            <li>
              <a href="business-projects.html">Business Projects </a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <!-- end menu -->
        <blockquote>WE EMPOWER YOUR BUSINESS!</blockquote>
      </div>
      <!-- end inner -->
    </div>
    <!-- end navigation-menu --><nav class="navbar">
      <div class="left">
        <div class="logo">
          <a href="index.html">
            <img src="images/logo.png" alt="Image">
          </a>
        </div>
      </div>
      <!-- end left -->
      <!-- end logo -->
      <div class="right">
        <div class="hamburger-menu">
          <b>MENU</b>
          <div class="hamburger" id="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- end hamburger-menu -->
      </div>
      <!-- end right -->
    </nav>
    <!-- end navbar -->
    <header class="page-header">
      <div class="video-bg">
        <video src="images/video2.mp4" muted loop autoplay></video>
      </div>
      <!-- end video-bg -->
      <div class="container">
        <h1>Hello </h1>
        <p>Send Us Your Enquiry</p>
      </div>
      <div id="ScrolDwn" class="scroll-down">
        <small>SCROLL DOWN</small>
        <span></span>
      </div>
    </header>
    <!-- end header -->
    <section class="hello">
      <div class="container">
        <div class="row">
          <div class="col-12 wow fadeIn">
            <h6>SMOOTH INTERFACE INTERACTION</h6>
            <h2 data-text="Hellow">Come visit us and say hello !!</h2>
          </div>
          <!-- end col-12 -->
          <div class="col-md-5 wow fadeIn">
            <address>
              <b>Get in Touch</b>
              <p>ENARIN Business Solutions Pvt. Ltd, <br> Santhosh, Gandhi Nagar, Ernakulam, <br> Kochi – 17, Kerala, India. </p>
            </address>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.05s">
            <address>
              <b>Call us</b>
              <p>0091 484 401 67 35 <br>
              <p>0091 858 900 30 00 <br>
              </p>
            </address>
          </div>
          <!-- end col-4 -->
          <div class="col-md-3 wow fadeIn" data-wow-delay="0.10s">
            <address>
              <b>Email Us</b>
              <a href="#">
                <p>info@enarin.com</p>
              </a>
            </address>
          </div>
          <!-- end col-4 -->
        </div>
        <!-- end row -->
        <div class="row align-items-center">
          <div class="col-lg-6 wow fadeIn">
            <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Gandhi Nagar, Ernakulam&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="640" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- end map -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.05s">
            <?php if($responce){
                echo $responce;
            }?>
            <form class="row inner" action="" id="contact" name="contact" method="post">
              
            <div class="form-group col-sm-6 col-12">
                <label>
                  <span>Your name</span>
                </label>
                <input type="text" name="name" id="name" required>
              </div>
              <!-- end form-group -->
              <div class="form-group col-sm-6 col-12">
                <label>
                  <span>Your surname</span>
                </label>
                <input type="text" name="surname" id="surname" required>
              </div>
              <!-- end form-group -->
              <div class="form-group col-sm-6 col-12">
                <label>
                  <span>Your e-mail</span>
                </label>
                <input type="text" name="email" id="email" required>
              </div>
              <!-- end form-group -->
              <div class="form-group col-sm-6 col-12">
                <label>
                  <span>Subject</span>
                </label>
                <input type="text" name="subject" id="subject" required>
              </div>
              <!-- end form-group -->
              <div class="form-group col-12">
                <label>
                  <span>Your message</span>
                </label>
                <textarea name="message" id="message" required></textarea>
              </div>
              <!-- end form-group -->
              <div class="form-group col-12">
                <button id="submit" type="submit" name="submit">SUBMIT</button>
              </div>
              <!-- end form-group -->
            </form>
            <!-- end form -->
            <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
            <!-- end success -->
            <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
            <!-- end error -->
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <footer class="footer">
      <div class="footer-quote wow fadeIn">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <img src="images/logo.png" alt="Image">
              <h2>Global Business Solutions Provider</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-contact wow fadeIn">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <address> ENARIN Business Solutions Pvt. Ltd <br> Santhosh, Gandhi Nagar, Ernakulam, <br> Kochi – 17, Kerala, India. </address>
            </div>
            <div class="col-md-4">
              <address> 0091 484 401 67 35 <br> 0091 858 900 3000 </address>
            </div>
            <div class="col-md-3">
              <address>
                <a href="#">info@enarin.com</a>
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom wow fadeIn">
        <div class="container fooTop">
          <div class="row">
            <div class="col-lg-6">
              <p class="copy">© 2022 Enarin Business Solutions </p>
            </div>
            <div class="col-lg-6 footSocial">
              <h5>Connect with us : </h5>
              <ul>
          <li>
            <a onclick='window.open("https://www.facebook.com/enarinbusiness");return false;' >Facebook</a>
          </li>
          <li>
            <a onclick='window.open("https://www.linkedin.com/company/enarin");return false;' >LinkedIn </a>
          </li>
          <li>
            <a onclick='window.open("https://www.instagram.com/enarin_business");return false;' >Instagram</a>
          </li>
          <li>
            <a onclick='window.open("https://www.youtube.com/@enarinbusiness");return false;' >YouTube</a>
          </li>
        </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/jquery.typewriter.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>