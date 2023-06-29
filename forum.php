<?php
session_start();

include("connection.php");

$name = isset($_SESSION['studentName']) ? $_SESSION['studentName'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Process the form submission and save the discussion
  if (isset($_SESSION['studentName'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Sanitize the input to prevent SQL injection
    $title = mysqli_real_escape_string($con, $title);
    $content = mysqli_real_escape_string($con, $content);
    $studentName = mysqli_real_escape_string($con, $name);

    // Insert the discussion into the database
    $query = "INSERT INTO discussions (title, content, studentName) VALUES ('$title', '$content', '$studentName')";
    $result = mysqli_query($con, $query);

    if ($result) {
      // Redirect back to the dashboard after saving the discussion
      header("Location: forum.php");
      exit;
    } else {
      // Handle the error if the query fails
      echo "Error: " . mysqli_error($con);
      // You can redirect to an error page or display an error message here
    }
  } else {
    // Redirect to login page if student is not logged in
    header("Location: loginStudent.php");
    exit;
  }
}

if (isset($_GET['logout'])) {
  // Log out the student
  session_unset();
  session_destroy();
  header("Location: loginStudent.php");
  exit;
}

// Retrieve the discussions from the database
$query = "SELECT * FROM discussions";
$result = mysqli_query($con, $query);
$discussions = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ITEC85 - Sources</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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
      <h1 class="logo me-auto"><a href="index.html">ITEC85</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="resources.html">Resources</a></li>
          <li><a class="active" href="forum.php">Forum</a></li>
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

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Forum</h2>
        <p>
          Join our Information Assurance and Security forum to protect valuable data, exchange ideas, and foster a secure digital environment. Connect with experts, discuss confidentiality, integrity, and availability of information. Let's safeguard data together!
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Recommended Books</h5>
              <a href="#1">Books</a>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Recommended Websites</h5>
              <a href="#2">Websites</a>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Recommended Online Courses</h5>
              <a href="#3">Courses</a>
            </div>
          </div>
          <div class="col-lg-8">
            <?php if (isset($_SESSION['studentName'])) : ?> <h2>Welcome, <?php echo ucfirst($name); ?></h2>
              <h3>Post a new discussion</h3>
              <form method="POST" action="">
                <div class="mb-3">
                  <label for="title" class="form-label">Discussion Title</label>
                  <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="content" class="form-label">Discussion Content</label>
                  <textarea name="content" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn get-started-btn">Post</button>
              </form>
            <?php else : ?>
              <h2>Welcome to the Discussion Forum</h2>
              <h3>Please log in to participate</h3>
              <p>Only logged-in students can post discussions. If you have an account, please log in using the login form. If you don't have an account, please sign up to gain access.</p>
              <a href="loginStudent.php" class="btn get-started-btn">Login</a>
            <?php endif; ?>

            <h3>Forum</h3>
            <?php if (!empty($discussions)) : ?>
              <div class="list-group">
                <?php foreach ($discussions as $discussion) : ?>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading"><?php echo $discussion['title']; ?></h4>
                    <p class="list-group-item-text"><?php echo $discussion['content']; ?></p>
                    <?php if (isset($discussion['studentName'])) : ?>
                      <p class="list-group-item-text">Created by: <?php echo $discussion['studentName']; ?></p>
                    <?php endif; ?>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php else : ?>
              <p>No discussions found.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cource Details Section -->
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
                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="aboutus.php">About us</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
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
                <a href="#">Information Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Network Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Cryptography</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Web Application Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Incident Response and Forensics</a>
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