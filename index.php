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

  <title>ITEC85 Information Assurance and Security 1</title>
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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br />Leading Tomorrow</h1>
      <h2>
        Harness the Power of Knowledge: Empowering You with Information
        Security Mastery
      </h2>
      <a href="courses.php" class="btn-get-started">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Information Security and Assurance Hub</h3>
            <p>
              Information Security and Assurance Hub is a web-based resource
              dedicated to providing students with essential knowledge and
              tools in information security. Our goal is to enhance your
              understanding of security principles, techniques, and best
              practices. Join us on this transformative learning journey to
              gain valuable insights and practical skills in protecting data
              and mitigating risks in the digital realm.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose ITEC85?</h3>
              <p>
                Gain essential knowledge and practical skills in information
                security with Information Security and Assurance Hub. Our
                curated resources and interactive modules provide valuable
                insights into protecting data and mitigating risks. Join us
                for a transformative learning experience in the dynamic field
                of information security.
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Comprehensive Knowledge</h4>
                    <p>
                      Our platform offers a wide range of resources covering
                      fundamental concepts and advanced topics in information
                      security. From risk management to cryptography and
                      ethical hacking, you'll gain a comprehensive
                      understanding of the field.
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Practical Insights</h4>
                    <p>
                      We bridge the gap between theory and application by
                      providing real-world examples, case studies, and
                      practical tips. Our interactive modules and curated
                      content empower you with actionable insights to protect
                      data and mitigate risks effectively.
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Transformative Learning Experience</h4>
                    <p>
                      Join us on a transformative learning journey where
                      you'll have access to engaging learning materials and
                      opportunities for knowledge-sharing. Expand your skills,
                      make informed decisions, and contribute to the security
                      of information systems in our interconnected world.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c"></i>
              <h3>Fundamentals of Information</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff"></i>
              <h3>Network Security</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368"></i>
              <h3>Cryptography</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff"></i>
              <h3>Web Application Security</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff"></i>
              <h3>Risk Management</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f"></i>
              <h3>Risk Management</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828"></i>
              <h3>Cloud Security</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61"></i>
              <h3>Social Engineering</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>
                  <!--   -->
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

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3>
                  <a href="chapter1.php">Network Security</a>
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

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="..." />
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Security</h4>

                </div>

                <h3><a href="chapter1.php">Cryptography</a></h3>
                <p>
                  Gain insights into the world of cryptography, understanding
                  encryption algorithms, digital signatures, and secure key
                  management to safeguard sensitive information, ensure secure
                  communication, and protect data from unauthorized access.
                </p>
              </div>
            </div>
          </div>
          <!-- End Course Item-->
        </div>
      </div>
    </section>
    <!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Raven C. Solis</h4>
                <span>Network Security</span>
                <p>
                  This person is a leader in network security, who helps
                  others protect the information systems from cyber attacks.
                  They have the skills and knowledge to enforce strong
                  controls and handle any threats that may compromise the
                  confidentiality, integrity, and availability of the data.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Armil Balatbat</h4>
                <span>Ethical Hacking</span>
                <p>
                  An ethical hacker is a mentor who teaches others how to find
                  and fix security flaws, perform rigorous penetration tests,
                  and suggest practical solutions, while promoting a
                  respectful and ethical attitude towards cybersecurity.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Ydrian Velarde</h4>
                <span>Cryptography</span>
                <p>
                  This individual is an experienced cryptography mentor, who
                  teaches others how to use encryption, key management, and
                  security standards.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-4.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Elizalyn Bayan</h4>
                <span>Cryptography</span>
                <p>
                  This individual is an experienced cryptography mentor, who
                  teaches others how to use encryption, key management, and
                  security standards.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Trainers Section -->
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