<?php
session_start();

include("connection.php");

$name = isset($_SESSION['studentName']);

if (isset($_GET['logout'])) {
  // Log out the student
  session_unset();
  session_destroy();
  header("Location: loginStudent.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ITEC85 - Courses</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="https://img.icons8.com/ios-filled/50/40C057/security-shield-green.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">ITEC85</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="forum.php">Forum</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <?php if (isset($_SESSION['studentName'])) : ?>
        <a href="?logout=true" class="get-started-btn">Logout</a>
      <?php else : ?>
        <a href="loginStudent.php" class="get-started-btn">Login</a>
      <?php endif; ?>
    </div>
  </header>
  <!-- End Header -->

  <main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>
          Explore our comprehensive range of information security courses
          designed to equip you with the knowledge and skills needed to
          navigate the complex landscape of cybersecurity. From fundamentals
          to advanced topics, each course offers valuable insights and
          practical techniques to protect data, mitigate risks, and ensure the
          security of digital systems.
        </p>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch py-2">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>
                </div>
                <h3>
                  <a href="chapter1.php">Fundamentals of Information Security</a>
                </h3>
                <p>
                  Explore the foundational concepts and principles of
                  information security, including risk management, threat
                  modeling, and security controls, to protect valuable data
                  and systems.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 py-2">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>
                </div>
                <h3>
                  <a href="chapter2.php">Network Security</a>
                </h3>
                <p>
                  Learn how to protect computer networks from unauthorized
                  access, attacks, and data breaches. Understand different
                  network security measures, such as firewalls, intrusion
                  detection systems, and encryption, to ensure the
                  confidentiality, integrity, and availability of network
                  resources.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 py-2">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3><a href="chapter3.php">Cryptography</a></h3>
                <p>
                  Learn how to protect computer networks from unauthorized
                  access, attacks, and data breaches. Understand different
                  network security measures, such as firewalls, intrusion
                  detection systems, and encryption, to ensure the
                  confidentiality, integrity, and availability of network
                  resources.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 py-2">
            <div class="course-item">
              <img src="assets/img/course-4.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3><a href="chapter4.php">Web Application Security</a></h3>
                <p>
                  Gain insights into securing web applications from
                  vulnerabilities and attacks. Explore techniques to mitigate
                  common web-based threats, such as cross-site scripting
                  (XSS), SQL injection, and session hijacking. Learn best
                  practices for secure coding, input validation, and
                  implementing access controls.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 py-2">
            <div class="course-item">
              <img src="assets/img/course-5.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3>
                  <a href="chapter5.php">Incident Response and Forensics</a>
                </h3>
                <p>
                  Learn how to effectively respond to and investigate security
                  incidents. Develop skills to identify, contain, eradicate,
                  and recover from cyber threats. Explore digital forensics
                  techniques to gather evidence, analyze security breaches,
                  and support legal investigations.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 py-2">
            <div class="course-item">
              <img src="assets/img/course-6.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3><a href="chapter6.php">Ethical Hacking</a></h3>
                <p>
                  Delve into the world of ethical hacking and learn how to
                  identify and fix vulnerabilities in computer systems.
                  Understand the techniques used by hackers and use them
                  ethically to strengthen security. Master tools and
                  methodologies for penetration testing, vulnerability
                  assessment, and risk analysis.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->
        </div>
      </div>
    </section>
    <!-- End Popular Courses Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ITEC 85</h3>
            <p>
              Cavite State University CCAT Campus <br />
              BSInfoTech 402-A<br />
              Final Project <br /><br />
              <strong>Phone:</strong> 09121212123<br />
              <strong>Email:</strong> raven.solis@cvsu.edu.ph<br />
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="index.php">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="about.php">About us</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="courses.php">Courses</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter1.php">Information Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter2.php">Network Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter3.php">Cryptography</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter4.php">Web Application Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter5.php">Incident Response and Forensics</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>
              Stay informed and secure with our Network Security Newsletter!
              Get the latest updates, insights, and tips to protect your
              digital assets.
            </p>
            <form action="" method="post">
              <input type="email" name="email" /><input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ITECH 85</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>