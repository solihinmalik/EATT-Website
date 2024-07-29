<!DOCTYPE html>
<html lang="en">

<head>

  <!-- <script src="mapToggle.js"></script> -->

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-znn-small.png" rel="icon" />


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/ContactStlye.css" rel="stylesheet">



</head>

<body>

  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.php"><span><img src="assets/img/logo-ZNN.png" alt="Logo ZNN"></span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>

          <!-- <li><a href="team.php">Organisations</a></li> -->
          <li class="dropdown">
            <a href="#"><span>Apply</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="active" href="jobvacancy.php">Job Vacancy</a></li>
              <li><a href="internship.php">Internship Opportunities</a></li>
            </ul>
          </li>
          <li><a href="activity.php">Events</a></li>
          <li><a class="active" href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      <div class="container">
        <div class="row justify-content-center">
          <!-- Map -->
          <div class="col-lg-5 contact-container">

            <div align="center" style="margin-bottom:20px;">
              <h2 class="section-heading">Where we are located?</h2>
              <span class="text">ZNN Technology Centre Sdn Bhd has established its presence in two key locations, with
                branches strategically located in Selangor and Johor, allowing for wider coverage and accessibility to
                their services and expertise</span>
            </div>

            <div align="center" class="buttons">
              <a href="#" onclick="divVisibility('Div1');">Johor</a> |
              <a href="#" onclick="divVisibility('Div2');">Selangor</a>
              <!-- <a href="#" onclick="divVisibility('Div3');">Penang</a> |  -->
            </div><br>

            <div class="map" style="border-radius:10px;">
              <div class="container-fluid p-0 " id="Div1">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.370052894271!2d103.62769867482955!3d1.54382686092195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da76953393a669%3A0x652c34672ab2bf!2sZNN%20Technology%20Centre%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1691888606799!5m2!1sen!2smy"
                  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
              <div class="container-fluid p-0" id="Div2" style="display: none;">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.190549881917!2d101.70341367482797!3d3.043549153793002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4aa7e49b4381%3A0x85a021a73df0a4fe!2sZNN%20Technology%20Centre%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1691889008143!5m2!1sen!2smy"
                  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
              <div class="container-fluid p-0 " id="Div3" style="display: none;">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2566293690206!2d100.30415017483175!3d5.377787835416366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac177ba382261%3A0x5a7fbe2279f9716!2sZNN%20Technology%20Centre%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1691888870007!5m2!1sen!2smy"
                  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>

          </div>

          <!-- Info Box -->
          <div class="col-lg-6 align-items-center contact-container container-glass mobile1" style="margin-left: 20px;">
            <center>
              <img src="assets/img/contact-customer.png" alt="" width="35%">
            </center>

            <div align="center" style="margin-bottom:20px;">
              <h2 class="section-heading">How to contact us?</h2>
              <span class="text">Reach out to us through our various communication channels: call, WhatsApp, Facebook,
                or email. We're here to hear from you!</span>
            </div>

            <div class="row contact-right-container justify-content-center">

              <div class="info-box" style="margin: 10px;">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/icons/icon-gmail.png" alt="" width="80%" height="80%" />
                  </div>
                  <div class="col">
                    <h3>Email</h3>
                    <p><a href="mailto:znntechsb@gmail.com">znntechsb@gmail.com</a></p>
                  </div>
                </div>
              </div>

              <div class="info-box" style="margin: 10px;">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/icons/icon-call.png" alt="" width="80%" height="80%" />
                  </div>
                  <div class="col">
                    <h3>Call</h3>
                    <p>+607-595 30745</p>
                  </div>
                </div>
              </div>

              <div class="info-box" style="margin: 10px;">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/icons/icon-facebook.png" alt="" width="100%" height="100%" />
                  </div>
                  <div class="col">
                    <h3>Facebook</h3>
                    <p><a href="https://www.facebook.com/ZNNTECH">ZNN Technology Centre</a></p>
                  </div>
                </div>
              </div>

              <div class="info-box" style="margin: 10px;">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/icons/icon-whatsapp.png" alt="" width="100%" height="100%" />
                  </div>
                  <div class="col">
                    <h3>WhatsApp</h3>
                    <p>+011-62647004</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <!-- End Map Section -->

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    var divs = ["Div1", "Div2", "Div3", "Div4", "Div5", "Div6"];
    var visibleDivId = null;
    function divVisibility(divId) {
      if (visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for (i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if (visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }

  </script>




  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">

            <div class="logo-container">
              <a href="assets/img/ZNNlogo.png" target="_blank">
                <img src="assets/img/ZNNlogo.png" alt="ZNN Logo" class="image">
              </a>
            </div>

            <br>
            <br>
            <br>

            <p class="company-desc">
              ZNN Technology Centre Sdn Bhd established its operation in December 2006.
              As a 100% Bumiputera company, ZNN Technology Centre Sdn Bhd are moving aggressively
              to address the evolving challenges of Software Developer.

            </p>

          </div>




          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>
            <div align="center" class="buttons">
              <a href="contact.php?location=Div1">Johor</a> |
              <a href="contact.php?location=Div2">Selangor</a>

            </div>

            No 3A & 3B, Jalan Pendidikan 8,
            <br> U-Point Business Centre,
            <br> Taman Universiti, 81300 Skudai, Johor
            <br>
            <br>
            <strong>Phone:</strong> +607-595 30745<br />
            <strong>Email:</strong>
            <a href="mailto:znntechsb@gmail.com">znntechsb@gmail.com</a><br />

            </p>

          </div>

          <script>
            // Get the location parameter from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const locationParam = urlParams.get('location');

            // Show the corresponding map based on the location parameter
            if (locationParam === 'Div1') {
              divVisibility('Div1');
            } else if (locationParam === 'Div2') {
              divVisibility('Div2');
            } else if (locationParam === 'Div3') {
              divVisibility('Div3');
            }
          </script>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Business Hour</h4>
            <p>
              Monday - Thursday : 8.00 AM - 5.30PM
              <br> Friday : 8.30 AM - 12.30PM

            <div class="social-links mt-3">
              <a class="instagram" href="mailto:znntechsb@gmail.com"><i class="bx bx-envelope"></i></a>
              <a class="facebook" href="https://www.facebook.com/ZNNTECH" target="_blank"><i
                  class="bx bxl-facebook"></i></a>
            </div>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        2023
        &copy; Copyright <strong><span>ZNN Technology Centre Sdn Bhd</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by VIT'23
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

</body>

</html>