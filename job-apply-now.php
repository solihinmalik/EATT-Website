<!DOCTYPE html>
<html lang="en">

<head>


<!-- Include jQuery in the <head> section -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Chosen JS after jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

<!-- Include Chosen CSS in the <head> section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet" />



  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <div style="height:50px;">
    <br>
  </div>
  <title>Job Vacancy - Apply </title>
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
  <link href="assets/css/apply.css" rel="stylesheet">



</head>

<body style="background-image: url('assets/img/background.png');  background-size: cover;" id="apply-now-intern" class="section-bg">
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.php"><span><img src="assets/img/logo-ZNN.png" alt="Logo ZNN"></span></a>
        </h1>
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>

          
          <li class="dropdown">
            <a class="active" href="#"><span>Apply</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="jobvacancy.php">Job Vacancy</a></li>
              <li><a href="internship.php">Internship Opportunities</a></li>
            </ul>
          </li>

          <li><a href="activity.php">Events</a></li>

          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <section id="apply-now" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <div class="section-title">
          <!-- <span>JOIN OUR TEAM</span> -->
            <h2>JOIN OUR TEAM</h2>
            <p>Ready to take the next step in your career? Apply now and be part of our innovative team!</p>
          </div>
        </div>

        <div class="row">
          <div>
            <div class="aapply-box" data-aos="fade-up" data-aos-delay="100">
              <h3 class="box-title"><strong>JOB APPLICATION FORM</strong></h3>


              <!-- FORM WEB VIEW -->
              
              <form class = "table-apply-job" id="EmploymentApplication100" method="post" onsubmit="return CustomSubmit();">
                <script type="text/javascript">

                  function CustomSubmit() {
                    console.log("CustomSubmit function called");
                    var form = document.getElementById('EmploymentApplication100');
                    if (ValidateForm(form)) {
                      // Customize the email address here
                      var customEmail = 'znntechsb@gmail.com';
                      var subject = 'Job Application Submission';
                      var body = 'Dear Hiring Team,\n\nPlease find below the details of my employment application:\n\n';

                      // Include only specific fields in the email body
                      var fieldsToInclude = [
                        'Full_Name', 'Email_Address', 'Phone', 
                        'Position_Applied', 'Portfolio_Website', 'Gender',
                        'Highest_Qualification', 'Skills', 'Other_Skills'
                    
                      ];


                      
                      var inputs = form.querySelectorAll('input, select');
                      for (var i = 0; i < inputs.length; i++) {
                          var fieldName = inputs[i].name;
                          var fieldValue = inputs[i].value;
                          if (fieldName !== 'Skills'  && fieldValue) {  // Exclude 'Skills'  
                              body += fieldName + ': ' + fieldValue + '\n';
                          }
                      }

                      var skillsSelect = form.querySelector('[name="Skills"]');
                      var selectedSkills = [];

                      for (var i = 0; i < skillsSelect.options.length; i++) {
                          if (skillsSelect.options[i].selected) {
                              selectedSkills.push(skillsSelect.options[i].value);
                          }
                      }

                      if (selectedSkills.length > 0) {
                          body += 'Programming Skills: ' + selectedSkills.join(', ') + '\n';
                      }

                 


                      // Add resume attachment message
                      body += '\nPlease find the attached resume/CV below.\n';
                      body += 'Thank you.\n';


                      // Create the mailto link
                      var mailtoLink = 'mailto:' + customEmail + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

                      // Open the email client with the mailto link
                      window.location.href = mailtoLink;

                      // Prevent the form from submitting traditionally
                      return false;
                    }
                    return false;
                  }

                  function ValidateForm(frm) {
                    if (frm.Full_Name.value == "") { alert('Full name is required.'); frm.Full_Name.focus(); return false; }
                    if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
                    if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
                    if (frm.Position_Applied.value == "") { alert('Position Applied is required.'); frm.Position_Applied.focus(); return false; }
                    if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }

                    return true;
                  }


                  function showAlertAndSubmit() {
                  if (confirm("Please remember to attach your resume to the email when submitting this form.")) {
                    var form = document.getElementById('EmploymentApplication100');
                    form.submit();
                  }
                }

                $(document).ready(function() {
                    $(".chosen-select").chosen();
                  });


                </script>

                  

                  <table class="applyy" border="0" cellpadding="13" cellspacing="1">

                    <!-- FIRST ROW -->
                    <tr>
                      <td>
                        <label for="Full_Name"><b>Full Name *</b></label><br />
                        <input id="Full_Name" name="Full_Name" type="text" maxlength="100" style="width:100%;" />
                      </td>
                    
                      <td>
                        <label for="Email_Address"><b>Email *</b></label><br />
                        <input id="Email_Address" name="Email_Address" type="text" maxlength="100" style="width: 100%;" />
                      </td>
                    
                      <td>
                        <label for="Phone"><b>Phone Number *</b></label><br />
                        <input name="Phone" type="text" maxlength="50" style="width:100%;" />
                      </td>
                      
                    </tr>
                    

                    <!-- SECOND ROW -->
                    <tr>

                      <td>
                        <label for="Position_Applied"><b>Position to Apply *</b></label><br />
                        <input name="Position_Applied" type="text" maxlength="100" style="width:100%;" value="<?php echo $_GET['position'] ?? ''; ?>" />
                      </td>

                      <td>
                        <label for="Portfolio_Website"><b>Portfolio Website (if any)</b></label><br />
                        <input name="Portfolio_Website" type="text" value="http://" style="width:100%;" />
                      </td>

                      <td >
                          <label for="Gender"><b>Gender *</b></label><br />
                          <select data-placeholder="Select Gender" class="chosen-select" name="Gender" style="width:100%; height:30px;">
                          <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select> 
                       </td>

                    </tr>

                    <!-- THIRD ROW -->
                    <tr>

                    <td>
                      <label for="Highest_Qualification"><b>Highest Academic Qualification *</b></label><br />
                      <select data-placeholder="Select Highest Qualification" class="chosen-select" name="Highest_Qualification" style="width:100%;">
                        <option value=""></option>
                        <option value="SPM">SPM (Sijil Pelajaran Malaysia)</option>
                        <option value="STPM">STPM (Sijil Tinggi Persekolahan Malaysia)</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Foundation">Foundation</option>
                        <option value="Degree">Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="PhD">PhD (Doctor of Philosophy)</option>
                        <option value="Professional Certifications">Professional Certifications</option>
                        <option value="Postgraduate Diplomas and Certificates">Postgraduate Diplomas and Certificates</option>
                        <option value="Other">Other</option>
                      </select>
                    </td>
                      

                    <td >
                            <label for="Skills"><b>Programming Skills * (select up to multiple)</b></label><br />
                            <select  data-placeholder="Select Multiple Skills" multiple="true" class="chosen-select" name="Skills" style="width: 110%;">
                              <option value="Javascript">Javascript</option>
                              <option value="Python">Python</option>
                              <option value="Java">Java</option>
                              <option value="PHP">PHP</option>
                              <option value="C#">C#</option>
                              <option value="C and C++">C and C++</option>
                              <option value="SQL">SQL</option>
                              <option value="HTML">HTML</option>
                              <option value="CSS">CSS</option>
                              <option value="SWIFT">SWIFT</option>
                              <option value="NoSQL">NoSQL</option>
                              <option value="Other">Other</option>
                            </select>
                          </td>

                          <td>
                            <label for="Other_Skills"><b>Other Skills (if any)</b></label><br />
                            <input name="Other_Skills" type="text" maxlength="100" style="width:105%;" />
                          </td>
                    </tr>



                    <!-- FOURTH ROW -->

                    <tr>
                        <td>
                            <p class="application-remark">*Your application will be processed upon receiving the email.</p>
                            <button class="button-4" role="button" onclick="showAlertAndSubmit()">Send Application</button>
                        </td>
                    </tr>

                  </table>

              </form>





              
              <!-- FORM MOBILE VIEW -->
              
              <form class = "table-apply-job-mobile" id="EmploymentApplication100" method="post" onsubmit="return CustomSubmit();">
                <script type="text/javascript">

                  function CustomSubmit() {
                    console.log("CustomSubmit function called");
                    var form = document.getElementById('EmploymentApplication100');
                    if (ValidateForm(form)) {
                      // Customize the email address here
                      var customEmail = 'znntechsb@gmail.com';
                      var subject = 'Job Application Submission';
                      var body = 'Dear Hiring Team,\n\nPlease find below the details of my employment application:\n\n';

                      // Include only specific fields in the email body
                      var fieldsToInclude = [
                        'Full_Name', 'Email_Address', 'Phone', 
                        'Position_Applied', 'Portfolio_Website', 'Gender',
                        'Highest_Qualification', 'Skills', 'Other_Skills'
                    
                      ];


                      
                      var inputs = form.querySelectorAll('input, select');
                      for (var i = 0; i < inputs.length; i++) {
                          var fieldName = inputs[i].name;
                          var fieldValue = inputs[i].value;
                          if (fieldName !== 'Skills'  && fieldValue) {  // Exclude 'Skills'  
                              body += fieldName + ': ' + fieldValue + '\n';
                          }
                      }

                      var skillsSelect = form.querySelector('[name="Skills"]');
                      var selectedSkills = [];

                      for (var i = 0; i < skillsSelect.options.length; i++) {
                          if (skillsSelect.options[i].selected) {
                              selectedSkills.push(skillsSelect.options[i].value);
                          }
                      }

                      if (selectedSkills.length > 0) {
                          body += 'Programming Skills: ' + selectedSkills.join(', ') + '\n';
                      }

                 


                      // Add resume attachment message
                      body += '\nPlease find the attached resume/CV below.\n';
                      body += 'Thank you.\n';


                      // Create the mailto link
                      var mailtoLink = 'mailto:' + customEmail + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

                      // Open the email client with the mailto link
                      window.location.href = mailtoLink;

                      // Prevent the form from submitting traditionally
                      return false;
                    }
                    return false;
                  }

                  function ValidateForm(frm) {
                    if (frm.Full_Name.value == "") { alert('Full name is required.'); frm.Full_Name.focus(); return false; }
                    if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
                    if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
                    if (frm.Position_Applied.value == "") { alert('Position Applied is required.'); frm.Position_Applied.focus(); return false; }
                    if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }

                    return true;
                  }


                  function showAlertAndSubmit() {
                  if (confirm("Please remember to attach your resume to the email when submitting this form.")) {
                    var form = document.getElementById('EmploymentApplication100');
                    form.submit();
                  }
                }

                $(document).ready(function() {
                    $(".chosen-select").chosen();
                  });


                </script>

                  

                  <table class="applyy" border="0" cellpadding="13" cellspacing="1">

                    <!-- FIRST ROW -->
                    <tr>
                      <td>
                        <label for="Full_Name"><b>Full Name *</b></label><br />
                        <input id="Full_Name" name="Full_Name" type="text" maxlength="100" style="width:100%;" />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <label for="Email_Address"><b>Email *</b></label><br />
                        <input id="Email_Address" name="Email_Address" type="text" maxlength="100" style="width: 100%;" />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <label for="Phone"><b>Phone Number *</b></label><br />
                        <input name="Phone" type="text" maxlength="50" style="width:100%;" />
                      </td>
                    </tr>
                    

                    <!-- SECOND ROW -->
                    <tr>
                      <td>
                        <label for="Position_Applied"><b>Position to Apply *</b></label><br />
                        <input name="Position_Applied" type="text" maxlength="100" style="width:100%;" value="<?php echo $_GET['position'] ?? ''; ?>" />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <label for="Portfolio_Website"><b>Portfolio Website (if any)</b></label><br />
                        <input name="Portfolio_Website" type="text" value="http://" style="width:100%;" />
                      </td>
                    </tr>

                    <tr>
                      <td >
                          <label for="Gender"><b>Gender *</b></label><br />
                          <select data-placeholder="Select Gender" class="chosen-select" name="Gender" style="width:100%; height:30px;">
                          <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select> 
                       </td>
                    </tr>

                    <!-- THIRD ROW -->
                    <tr>
                    <td>
                      <label for="Highest_Qualification"><b>Highest Academic Qualification *</b></label><br />
                      <select data-placeholder="Select Highest Qualification"  name="Highest_Qualification" style="width:100%;">
                        <option value=""></option>
                        <option value="SPM">SPM (Sijil Pelajaran Malaysia)</option>
                        <option value="STPM">STPM (Sijil Tinggi Persekolahan Malaysia)</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Foundation">Foundation</option>
                        <option value="Degree">Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="PhD">PhD (Doctor of Philosophy)</option>
                        <option value="Professional Certifications">Professional Certifications</option>
                        <option value="Postgraduate Diplomas and Certificates">Postgraduate Diplomas and Certificates</option>
                        <option value="Other">Other</option>
                      </select>
                    </td>
                    </tr>

                    <tr>
                    <td >
                            <label for="Skills"><b>Programming Skills * (select up to multiple)</b></label><br />
                            <select  data-placeholder="Select Multiple Skills" multiple="true" class="chosen-select" name="Skills" style="width: 110%;">
                              <option value="Javascript">Javascript</option>
                              <option value="Python">Python</option>
                              <option value="Java">Java</option>
                              <option value="PHP">PHP</option>
                              <option value="C#">C#</option>
                              <option value="C and C++">C and C++</option>
                              <option value="SQL">SQL</option>
                              <option value="HTML">HTML</option>
                              <option value="CSS">CSS</option>
                              <option value="SWIFT">SWIFT</option>
                              <option value="NoSQL">NoSQL</option>
                              <option value="Other">Other</option>
                            </select>
                          </td>
                    </tr>

                    <tr>
                          <td>
                            <label for="Other_Skills"><b>Other Skills (if any)</b></label><br />
                            <input name="Other_Skills" type="text" maxlength="100" style="width:105%;" />
                          </td>
                    </tr>



                    <!-- FOURTH ROW -->

                    <tr>
                        <td>
                            <p class="application-remark">*Your application will be processed upon receiving the email.</p>
                            <button class="button-4" role="button" onclick="showAlertAndSubmit()">Send Application</button>
                        </td>
                    </tr>

                  </table>

              </form>


            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



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
              <!-- <a href="contact.php?location=Div3">Penang</a> -->
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


</body>

</html>