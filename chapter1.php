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

  <title>ITEC85 - Fundamentals of Information Security:</title>
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
        <h2>Fundamentals of Information Security</h2>
        <p>
          Explore the foundational concepts and principles of information
          security, including risk management, threat modeling, and security
          controls, to protect valuable data and systems.
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
              <p><a href="#1">Fundamentals of Information Security</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p><a href="#2">Key elements of information security</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">Three pillars of information security: the CIA triad</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p><a href="#4">Common information security threats</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#5">Technologies used for information security</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#6">Information security and your organization</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-1.jpg" class="img-fluid" alt="" />
            <h3 id="1">Fundamentals of Information Security</h3>
            <p>
              Information security, often abbreviated (InfoSec), is a set of
              security procedures and tools that broadly protect sensitive
              enterprise information from misuse, unauthorized access,
              disruption, or destruction. InfoSec encompasses physical and
              environmental security, access control, and cybersecurity. It
              often includes technologies like cloud access security brokers
              (CASB), deception tools, endpoint detection and response (EDR),
              and security testing for DevOps (DevSecOps), among others.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">Key elements of information security</h3>
            <p>
              InfoSec comprises a range of security tools, solutions, and
              processes that keep enterprise information secure across devices
              and locations, helping to protect against cyberattacks or other
              disruptive events.
            </p>
            <ul>
              <li>
                <strong>Application security</strong>
                <p>
                  Policies, procedures, tools, and best practices enacted to
                  protect applications and their data.
                </p>
              </li>
              <li>
                <strong>Cloud security</strong>
                <p>
                  Policies, procedures, tools, and best practices enacted to
                  protect all aspects of the cloud, including systems, data,
                  applications, and infrastructure.
                </p>
              </li>
              <li>
                <strong>Cryptography</strong>
                <p>
                  An algorithm-based method of securing communication meant to
                  ensure only intended recipients of a specific message can
                  view and decipher it.
                </p>
              </li>
              <li>
                <strong>Disaster recovery</strong>
                <p>
                  A method to reestablish functional technological systems in
                  the wake of an event like a natural disaster, cyberattack,
                  or another disruptive event.
                </p>
              </li>
              <li>
                <strong>Incident response</strong>
                <p>
                  An organization’s plan for responding to, remediating, and
                  managing the aftermath of a cyberattack, data breach, or
                  another disruptive event.
                </p>
              </li>
              <li>
                <strong>Infrastructure security</strong>
                <p>
                  Security that encompasses an organization’s entire
                  technological infrastructure, including both hardware and
                  software systems.
                </p>
              </li>
              <li>
                <strong>Vulnerability management</strong>
                <p>
                  The process an organization takes to identify, assess, and
                  remediate vulnerabilities in its endpoints, software, and
                  systems.
                </p>
              </li>
            </ul>

            <!-- Common information security threats -->
            <h3 id="3">
              Three pillars of information security: the CIA triad
            </h3>
            <p>
              Confidentiality, integrity, and availability make up the
              cornerstones of strong information protection, creating the
              basis for an enterprise’s security infrastructure. The CIA triad
              offers these three concepts as guiding principles for
              implementing an InfoSec plan.
            </p>
            <ul>
              <li>
                <strong>Confidentiality</strong>
                <p>
                  Privacy is a major component of InfoSec, and organizations
                  should enact measures that allow only authorized users
                  access to information. Data encryption, multi-factor
                  authentication, and data loss prevention are some of the
                  tools enterprises can employ to help ensure data
                  confidentiality.
                </p>
              </li>
              <li>
                <strong>Integrity</strong>
                <p>
                  Enterprises must maintain data’s integrity across its entire
                  lifecycle. Enterprises with strong InfoSec will recognize
                  the importance of accurate, reliable data, and permit no
                  unauthorized user to access, alter, or otherwise interfere
                  with it. Tools like file permissions, identity management,
                  and user access controls help ensure data integrity.
                </p>
              </li>
              <li>
                <strong>Availability</strong>
                <p>
                  InfoSec involves consistently maintaining physical hardware
                  and regularly completing system upgrades to guarantee that
                  authorized users have dependable, consistent access to data
                  as they need it.
                </p>
              </li>
            </ul>

            <!-- Common information security threats -->
            <h3 id="4">Common information security threats</h3>
            <ul>
              <li>
                <strong>Advanced persistent threat (APT) attack:</strong>
                <p>
                  A sophisticated cyberattack occurring over a prolonged
                  period, during which an undetected attacker (or group) gains
                  access to an enterprise’s network and data.
                </p>
              </li>
              <li>
                <strong>Botnet:</strong>
                <p>
                  Derived from the term “robot network,” a botnet comprises a
                  network of connected devices an attacker infects with
                  malicious code and controls remotely.
                </p>
              </li>
              <li>
                <strong>Distributed denial-of-service (DDoS) attack:</strong>
                <p>
                  DDoS attacks utilize botnets to overwhelm an organization’s
                  website or application, resulting in a crash or a denial of
                  service to valid users or visitors.
                </p>
              </li>
              <li>
                <strong>Drive-by download attack:</strong>
                <p>
                  A malicious piece of code that automatically downloads onto
                  a user’s device upon visiting a website, making that user
                  vulnerable to further security threats.
                </p>
              </li>
              <li>
                <strong>Exploit kit:</strong>
                <p>
                  A comprehensive set of tools that utilize exploits to detect
                  vulnerabilities and infect devices with malware.
                </p>
              </li>
              <li>
                <strong>Insider threat:</strong>
                <p>
                  The possibility that an organizational insider will exploit
                  authorized access, intentionally or not, and harm or make
                  vulnerable the organization’s systems, networks, and data.
                </p>
              </li>
              <li>
                <strong>Man-in-the-middle (MitM) attack:</strong>
                <p>
                  A malicious attacker interrupts a line of communication or
                  data transfer, impersonating a valid user, in order to steal
                  information or data.
                </p>
              </li>
              <li>
                <strong>Phishing attack:</strong>
                <p>
                  Phishing attacks impersonate legitimate organizations or
                  users in order to steal information via email, text message,
                  or other communication methods.
                </p>
              </li>
              <li>
                <strong>Ransomware:</strong>
                <p>
                  A malware extortion attack that encrypts an organization or
                  person’s information, preventing access until a ransom is
                  paid.
                </p>
              </li>
              <li>
                <strong>Social engineering:</strong>
                <p>
                  Cyberattacks that originate with human interaction, in which
                  the attacker gains a victim’s trust through baiting,
                  scareware, or phishing, gathers personal information, and
                  utilizes the information to carry out an attack.
                </p>
              </li>
              <li>
                <strong>Social media attack:</strong>
                <p>
                  Cyberattacks that target social media platforms, exploiting
                  the platforms as delivery mechanisms, or stealing user
                  information and data.
                </p>
              </li>
              <li>
                <strong>Viruses and worms:</strong>
                <p>
                  Malicious, undetected malware that can self-replicate across
                  a user’s network or system.
                </p>
              </li>
            </ul>

            <!-- Technologies used for information security -->
            <h3 id="5">Technologies used for information security</h3>
            <ul>
              <li>
                <strong>Cloud access security brokers (CASB):</strong>
                <p>
                  Security policy enforcement points positioned between
                  enterprise users and cloud service providers that combine
                  multiple different security policies, from authentication
                  and credential mapping to encryption, malware detection, and
                  more. CASBs function across authorized and unauthorized
                  applications, and managed and unmanaged devices.
                </p>
              </li>
              <li>
                <strong>Data loss prevention (DLP):</strong>
                <p>
                  Data loss prevention encompasses policies, procedures,
                  tools, and best practices enacted to prevent the loss or
                  misuse of sensitive data. Key tools include encryption, or
                  transforming plain text into ciphertext via an algorithm,
                  and tokenization, or assigning a set of random numbers to a
                  piece of data and using a token vault database to store the
                  relationship.
                </p>
              </li>
              <li>
                <strong>Endpoint detection and response (EDR):</strong>
                <p>
                  EDR is a security solution that utilizes a set of tools to
                  detect, investigate, and respond to threats in endpoint
                  devices.
                </p>
              </li>
              <li>
                <strong>Microsegmentation:</strong>
                <p>
                  Microsegmentation divides data centers into multiple,
                  granular, secure zones or segments, mitigating risk levels.
                </p>
              </li>
              <li>
                <strong>Security testing for DevOps (DevSecOps):</strong>
                <p>
                  DevSecOps is the process of integrating security measures at
                  every step of the development process, increasing speed and
                  offering improved, more proactive security processes.
                </p>
              </li>
              <li>
                <strong>User and entity behavior analytics (UEBA):</strong>
                <p>
                  UEBA is the process of observing typical user behavior and
                  detecting actions that stray outside normal bounds, helping
                  enterprises identify potential threats.
                </p>
              </li>
            </ul>

            <!-- Information security and your organization -->
            <h3 id="6">Information security and your organization</h3>
            <p>
              Enterprises can employ information security management systems
              (ISMS) to standardize security controls across an organization,
              setting up custom or industry standards to help ensure InfoSec
              and risk management. Employing a systematic approach toward
              InfoSec will help proactively protect your organization from
              unnecessary risk and allow your team to efficiently remediate
              threats as they arise.
            </p>
            <strong>Responding to information security threats</strong>
            <p>
              Once your security team has been altered to an InfoSec threat,
              complete the following steps:
            </p>
            <ul>
              <li>
                Gather your team and reference your incident response plan.
              </li>
              <li>Identify the source of the threat.</li>
              <li>Perform actions to contain and remediate the threat.</li>
              <li>Evaluate any damage.</li>
              <li>Notify relevant parties.</li>
            </ul>

            <strong><i>Reference:</i></strong>
            <i>https://www.microsoft.com/en-us/security/business/security-101/what-is-information-security-infosec</i>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <!-- <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-bs-toggle="tab"
                    href="#tab-1"
                    >Modi sit est</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2"
                    >Unde praesentium sed</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3"
                    >Pariatur explicabo vel</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4"
                    >Nostrum qui quasi</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5"
                    >Iusto ut expedita aut</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Fundamentals of Information Security</h3>
                      <p class="fst-italic">
                        Qui laudantium consequatur laborum sit qui ad sapiente
                        dila parde sonata raqer a videna mareta paulona marka
                      </p>
                      <p>
                        Et nobis maiores eius. Voluptatibus ut enim blanditiis
                        atque harum sint. Laborum eos ipsum ipsa odit magni.
                        Incidunt hic ut molestiae aut qui. Est repellat minima
                        eveniet eius et quis magni nihil. Consequatur dolorem
                        quaerat quos qui similique accusamus nostrum rem vero
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/course-details-tab-1.png"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Et blanditiis nemo veritatis excepturi</h3>
                      <p class="fst-italic">
                        Qui laudantium consequatur laborum sit qui ad sapiente
                        dila parde sonata raqer a videna mareta paulona marka
                      </p>
                      <p>
                        Ea ipsum voluptatem consequatur quis est. Illum error
                        ullam omnis quia et reiciendis sunt sunt est. Non
                        aliquid repellendus itaque accusamus eius et velit ipsa
                        voluptates. Optio nesciunt eaque beatae accusamus lerode
                        pakto madirna desera vafle de nideran pal
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/course-details-tab-2.png"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                      <p class="fst-italic">
                        Eos voluptatibus quo. Odio similique illum id quidem non
                        enim fuga. Qui natus non sunt dicta dolor et. In
                        asperiores velit quaerat perferendis aut
                      </p>
                      <p>
                        Iure officiis odit rerum. Harum sequi eum illum corrupti
                        culpa veritatis quisquam. Neque necessitatibus illo
                        rerum eum ut. Commodi ipsam minima molestiae sed
                        laboriosam a iste odio. Earum odit nesciunt fugiat sit
                        ullam. Soluta et harum voluptatem optio quae
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/course-details-tab-3.png"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>
                        Fuga dolores inventore laboriosam ut est accusamus
                        laboriosam dolore
                      </h3>
                      <p class="fst-italic">
                        Totam aperiam accusamus. Repellat consequuntur iure
                        voluptas iure porro quis delectus
                      </p>
                      <p>
                        Eaque consequuntur consequuntur libero expedita in
                        voluptas. Nostrum ipsam necessitatibus aliquam fugiat
                        debitis quis velit. Eum ex maxime error in consequatur
                        corporis atque. Eligendi asperiores sed qui veritatis
                        aperiam quia a laborum inventore
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/course-details-tab-4.png"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>
                        Est eveniet ipsam sindera pad rone matrelat sando reda
                      </h3>
                      <p class="fst-italic">
                        Omnis blanditiis saepe eos autem qui sunt debitis porro
                        quia.
                      </p>
                      <p>
                        Exercitationem nostrum omnis. Ut reiciendis repudiandae
                        minus. Omnis recusandae ut non quam ut quod eius qui.
                        Ipsum quia odit vero atque qui quibusdam amet. Occaecati
                        sed est sint aut vitae molestiae voluptate vel
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/img/course-details-tab-5.png"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <!-- End Cource Details Tabs Section -->
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