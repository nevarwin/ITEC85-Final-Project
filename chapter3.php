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

  <title>ITEC85 - Cryptography</title>
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

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Cryptography</h2>
        <p>
          Learn how to protect computer networks from unauthorized access,
          attacks, and data breaches. Understand different network security
          measures, such as firewalls, intrusion detection systems, and
          encryption, to ensure the confidentiality, integrity, and
          availability of network resources.
        </p>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center">
              <p><a href="#1">What is cryptography?</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#2">How cryptography keeps communication secret and safe</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">Types of cryptography system</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#4">Information security principles and uses of cryptography</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#5">What are cryptographic algorithms?</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-details3.svg" class="img-fluid" alt="" />
            <h3 id="1">What is cryptography?</h3>
            <p>
              As a child, you may recall using symbols to write coded messages
              to your classmates that no one else could understand. More
              seriously, codes and ciphers are used for information security
              in computer systems and networks to protect sensitive and
              commercial information from unauthorized access when it is at
              rest or in transit. Uses include anything from keeping military
              secrets to transmitting financial data safely across the
              Internet.
              <br />
              <br />
              Cryptography is an important computer security tool that deals
              with techniques to store and transmit information in ways that
              prevent unauthorized access or interference.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">
              How cryptography keeps communication secret and safe
            </h3>
            <p>
              The cryptographic process of scrambling text from a readable
              form to an unintelligible form – known as cipher text – is
              called encryption. Sending secret or private messages as cipher
              text is a typical use of cryptography. Once the cipher text is
              received, it is descrambled by the authorized recipient back to
              its readable form. The descrambling (or decryption) is performed
              with the use of an encryption key, which serves to prevent third
              parties from reading these messages.
              <br /><br />

              Encryption methods have been used by many civilizations
              throughout history to prevent non-authorized people from
              understanding messages. Julius Caesar is credited for one of the
              earliest forms of cipher – the “Caesar Cipher” – to convey
              messages to his generals. With increasing sophistication,
              cryptography now plays a vital role in ensuring the privacy,
              data confidentiality, data integrity and authentication in
              computer systems and networks. In today’s world, where the
              majority of our personal and professional communications and
              transactions are conducted online, cryptography is more
              important than ever.
            </p>

            <!-- Common information security threats -->
            <h3 id="3">Types of cryptography systems</h3>
            <p>
              Cryptography refers to the techniques and algorithms that are
              used today for secure communication and data in storage. It
              incorporates mathematics, computer science, electronics and
              digital signal processing. Broadly speaking, there are four
              types of cryptography systems:
            </p>
            <ul>
              <li>
                <p>
                  <strong>
                    Symmetric-key cryptography (or “secret key”):</strong>
                  In this type of system, both the sender and the receiver
                  share the same key, which is used to encrypt and decrypt the
                  message.
                </p>
              </li>
              <li>
                <p>
                  <strong>
                    Asymmetric-key cryptography (or “public key”):</strong>
                  In this type of cryptography system, there are two keys –
                  one public and one private; these form a pair and are
                  related mathematically. To apply asymmetric cryptography,
                  the sender uses the public key of the intended recipient to
                  encode the message, and then sends it on its way. When the
                  message arrives, only the recipient’s private key can be
                  used to decode it, meaning that a stolen message is of no
                  use to the thief without the corresponding private key.
                  Encryption mechanisms are the focus of ISO/IEC 18033, a
                  suite of International Standards that specifies a number of
                  asymmetric ciphers. The multipart series includes
                  identity-based ciphers, block ciphers, stream ciphers, and
                  homomorphic encryption.
                </p>
              </li>
              <li>
                <p>
                  <strong>Cryptographic key management:</strong> This type of
                  system is crucial for protecting the keys used in both
                  symmetric and asymmetric cryptography. It includes a set of
                  processes covering the entire “life cycle” of a key,
                  including its generation, exchange and distribution,
                  storage, use, safe destruction and replacement. If the key
                  management is weak, then the protection of encrypted data is
                  weak. There are a number of International Standards relating
                  to key management (e.g. ISO/IEC 11770) and key generation
                  (e.g. ISO/IEC 18031 and ISO/IEC 18032).
                </p>
              </li>
              <li>
                <p>
                  <strong>Cryptographic hash function:</strong> This is a
                  technique that converts a string of data of any length into
                  a hashed output (a digest of the input) of fixed length.
                  Hash functions have many applications such as in digital
                  signatures, MACs (message authentication codes), and
                  checksums (to check data corruption). International
                  Standards that specify hash functions include ISO/IEC
                  9797-2, ISO/IEC 9797-3 and ISO/IEC 10118.
                </p>
              </li>
            </ul>
            <!-- Information security principles and uses of cryptography  -->
            <h3 id="4">
              Information security principles and uses of cryptography
            </h3>
            <p>
              The key principles of information security are confidentiality,
              integrity and availability. Cryptography is an important tool
              that helps to preserve two of these principles:
            </p>
            <ul>
              <li>
                <p>
                  Data confidentiality ensures that data is not disclosed to
                  unauthorized parties. Cryptographic techniques such as
                  encryption can be used to protect the confidentiality of
                  data by making it unreadable to those who don’t have the
                  proper decryption key.
                </p>
              </li>
              <li>
                <p>
                  Data integrity ensures that data has not been modified or
                  corrupted. One example for International Standards on data
                  integrity is ISO/IEC 9797, which specifies algorithms for
                  calculating message authentication codes.
                </p>
              </li>
            </ul>
            <p>
              In addition to these key information security objectives,
              cryptography is used to achieve:
            </p>
            <h4>Entity authentication</h4>
            <p>
              By checking knowledge of a secret, entity authentication
              verifies the identity of the sender. Various crypto-based
              mechanisms and protocols can be used to achieve this, such as
              symmetric systems, digital signatures, zero-knowledge techniques
              and checksums. ISO/IEC 9798 is a series of standards that
              specifies entity authentication protocols and techniques.
            </p>
            <h4>Digital signatures</h4>
            <p>
              Used to verify the authenticity of data, digital signatures
              confirm that the data originated from the signer and has not
              been changed. They are used, for example, in email messages,
              electronic documents and online payments. International
              Standards that specify digital signature schemes include ISO/IEC
              9796, ISO/IEC 14888, ISO/IEC 18370 and ISO/IEC 20008.
            </p>
            <h4>Non-repudiation</h4>
            <p>
              Cryptographic techniques such as digital signatures can be used
              to provide non-repudiation by ensuring that the sender and
              receiver of a message cannot deny that they, respectively, sent
              or received the message. The standard ISO/IEC 13888 describes
              techniques (symmetric and asymmetric) for the provision of
              non-repudiation services.
            </p>
            <h4>Lightweight cryptography</h4>
            <p>
              Lightweight cryptography is used in applications and
              technologies that are constrained in computational complexity:
              limiting factors can be memory, power and computing resources.
              The need for lightweight cryptography is expanding in our modern
              digital world. Constrained devices – for example IoT (Internet
              of Things) sensors or actuators like the ones switching on
              appliances in a so-called smart home – use lightweight symmetric
              cryptography. ISO/IEC 29192 is an eight-part standard that
              specifies various cryptographic techniques for lightweight
              applications.
            </p>
            <h4>Digital rights management</h4>
            <p>
              Digital rights management (DRM) protects the copyright of your
              digital content. DRM uses cryptographic software to ensure that
              only authorized users can have access to the material, modify or
              distribute it.
            </p>
            <h4>Electronic commerce and online shopping</h4>
            <p>
              Secure e-commerce is made possible by the use of asymmetric-key
              encryption. Cryptography plays an important role in online
              shopping as it protects credit card information and related
              personal details, as well as customers’ purchasing history and
              transactions.
            </p>
            <h4>Digital rights management</h4>
            <p>
              Digital rights management (DRM) protects the copyright of your
              digital content. DRM uses cryptographic software to ensure that
              only authorized users can have access to the material, modify or
              distribute it.
            </p>
            <h4>Electronic commerce and online shopping</h4>
            <p>
              Secure e-commerce is made possible by the use of asymmetric-key
              encryption. Cryptography plays an important role in online
              shopping as it protects credit card information and related
              personal details, as well as customers’ purchasing history and
              transactions.
            </p>
            <h4>Cryptocurrencies and blockchain</h4>
            <p>
              A cryptocurrency is a digital currency that uses cryptographic
              techniques to secure transactions. Each cryptocurrency coin is
              validated via distributed ledger technologies (e.g. blockchain).
              A ledger, in this case, is a continuously growing list of
              records – known as blocks – that are linked together using
              cryptography.
            </p>

            <!-- What are cryptographic algorithms?  -->
            <h3 id="5">What are cryptographic algorithms?</h3>
            <p>
              A cryptographic algorithm is a math-based process for encoding
              text and making it unreadable. Cryptographic algorithms are used
              to provide data confidentiality, data integrity and
              authentication, as well as for digital signatures and other
              security purposes.
              <br /><br />
              Both DES (Data Encryption Standard) and AES (Advanced Encryption
              Standard) are popular examples of symmetric-key algorithms,
              while prominent asymmetric-key algorithms include RSA
              (Rivest-Shamir-Adleman) and ECC (elliptic curve cryptography).
            </p>
            <h4>Elliptic curve cryptography (ECC)</h4>
            <p>
              ECC is an asymmetric-key technique based on the use of elliptic
              curves, which has applications in encryption and digital
              signatures, for example. ECC technology can be used to create
              faster, smaller and more efficient cryptographic keys. Elliptic
              curve techniques are covered in the multipart standard ISO/IEC
              15946.
            </p>
            <h4>Standards for cryptography</h4>
            <p>
              Cryptography has been the subject of intense standardization
              efforts resulting in a range of International Standards that
              encapsulate the knowledge and best practice of leading experts
              in the field. Internationally agreed ways of working make
              technology more secure and interoperable. By using cryptography
              standards, developers can rely on common definitions, as well as
              proven methods and techniques.
            </p>
            <h4>Future-proofing cryptography</h4>
            <p>
              Today, we are on the edge of a quantum revolution. The advent of
              quantum computing in the coming years will provide mankind with
              processing powers on a scale that traditional computers can
              never hope to match. While this offers countless possibilities
              for complex problem-solving, it also comes with corresponding
              security threats. That very same power could undermine much of
              today’s cybersecurity – including established cryptographic
              practices.
              <br /><br />
              Quantum cryptography is a method of encryption that applies the
              principles of quantum mechanics to provide secure communication.
              It uses quantum entanglement to generate a secret key to encrypt
              a message in two separate places, making it (almost) impossible
              for an eavesdropper to intercept without altering its contents.
              Hailed as the next big revolution in secure communication
              systems, quantum cryptography has the potential to be a real
              breakthrough for data that needs to stay private far into the
              future.
              <br /><br />
              The new dawn of encryption is looking bright!
            </p>
            <strong><i>Reference:</i></strong>
            <i>https://www.iso.org/information-security/what-is-cryptography</i>
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
  <!-- End Footer --><!-- ======= Footer ======= -->
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