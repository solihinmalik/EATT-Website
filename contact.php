<!DOCTYPE html>
<html lang="en">

<head>

  <!-- <script src="mapToggle.js"></script> -->

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact EATT</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/logo-XM-small.png" rel="icon" />


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
  <link href="assets/css/welcomeIB.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
          <h1 class="text-light">
            <a href="index.php"><span><img src="assets/img/logo-XM.png" alt="Logo ZNN"></span></a>
          </h1>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php">Bonus XM</a></li>
            <li class="dropdown">
              <a href="#"><span>Rebate</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="rebate.php">Rebate</a></li>
                <li><a href="">XM</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto " href="welcomeIB.php">Welcome IB</a></li>
            <li><a class="nav-link scrollto " href="contact.php">Contact</a></li>
          </ul>
          <div id="indicator"></div>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header>
  <!-- End Header -->

  <main id="main">

  <section id="projectsection">
    <!-- ======= Join Kami ======= -->
    <section style="padding:50px;">
      
    <div class="row justify-content-center text-center mb-5 mt-3">
        <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Komuniti Team EATT</h2>

            <p style="color:black"> Untuk langkah selanjutnya, anda perlu menghubungi Admin Team EATT dan memberikan <b>nombor akaun trading</b> anda</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <a href="https://t.me/xmrebatemalaysia" target="_blank" class="contact-link">
                <div class="contact-detail">
                <span>
                    <i class="fas fa-envelope contact-icon"></i>
                </span>
                <h5>Group Rebate XM</h5>
                </div>
            </a>
            </div>
            <div class="col-md-4">
            <a href="https://t.me/TeamEATT" target="_blank" class="contact-link">
                <div class="contact-detail">
                <h5>Admin EATT</h5>
                <i class="fas fa-phone contact-icon"></i>
                </div>
            </a>
            </div>
            <div class="col-md-4">
            <a href="https://t.me/EATTChannelv2" target="_blank" class="contact-link" target="_blank">
                <div class="contact-detail">
                <h5>Channel Team EATT Malaysia</h5>
                <i class="fab fa-telegram-plane contact-icon"></i>
                </div>
            </a>
            </div>
        </div>
    </div>
        
    </section>

  </section>
  
  <div class="banner">
    <div class="banner-text">
        <p>Jangan lepaskan peluang untuk berhubung terus dengan kami! Sertai komuniti Telegram kami untuk mendapatkan maklumat terkini dan manfaat eksklusif. Hubungi kami hari ini untuk maklumat lanjut atau bantuan segera!</p>
    </div>
  </div>


  </main>
  <!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">

            <div class="logo-container">
              <a href="assets/img/logo-XM.png" target="_blank">
                <img src="assets/img/logo-XM.png" alt="ZNN Logo" class="image">
              </a>
            </div>

            <br>
            <br>
            <br>

            <p class="company-desc">
              Team EATT XM - VIP XM adalah kumpulan elit dalam XM Global Limited yang memberikan layanan eksklusif dan manfaat istimewa kepada pelanggan VIP mereka. Anggota kumpulan ini menikmati akses ke alat perdagangan canggih, analisis pasar khusus, dan sokongan peribadi yang disesuaikan untuk membantu mereka mencapai kejayaan dalam perdagangan.
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>
            <br> Kuala Lumpur
            <br> Wilayah Persekutuan Kuala Lumpur
            <br> Malaysia
            <br>
            <br>
            <strong>Phone:</strong> +6011-19320515<br />
            <strong>Email:</strong>
            <a href="mailto:habibxmtrader@gmail.com">habibxmtrader@gmail.com</a><br />

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
              <a class="telegram" href="https://t.me/TeamEATT" target="_blank"><i class="bx bxl-telegram"></i></a>
              <a class="facebook" href="https://www.facebook.com/ik.habib94" target="_blank"><i class="bx bxl-facebook"></i></a>
            </div>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        2023
        &copy; Copyright <strong><span>Team EATT XM VIP</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by Muhammad Nur Solihin Bin Malik Radzuan
      </div>
    </div>
  </footer>
  <!-- End Footer -->

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




</body>

</html>