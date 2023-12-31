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

  <title>ITEC85 - Web Application Security</title>
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
        <h2>Web Application Security</h2>
        <p>
          Gain insights into securing web applications from vulnerabilities
          and attacks. Explore techniques to mitigate common web-based
          threats, such as cross-site scripting (XSS), SQL injection, and
          session hijacking. Learn best practices for secure coding, input
          validation, and implementing access controls.
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
              <p><a href="#1">What is Web Application Security?</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#2">What are common web application security risks?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">What are important web application security strategies?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#4">What application security best practices should
                  organizations expect from their vendors?</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-details4.svg" class="img-fluid" alt="" />

            <!-- 1st -->
            <h3 id="1">What is Web Application Security?</h3>
            <p>
              Web application security is the practice of protecting websites,
              applications, and APIs from attacks. It is a broad discipline,
              but its ultimate aims are keeping web applications functioning
              smoothly and protecting business from cyber vandalism, data
              theft, unethical competition, and other negative consequences.
              <br />
              <br />
              The global nature of the Internet exposes web applications and
              APIs to attacks from many locations and various levels of scale
              and complexity. As such, web application security encompasses a
              variety of strategies and covers many parts of the software
              supply chain.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">What are common web application security risks?</h3>
            <p>
              Web applications may face a number of attack types depending on
              the attacker’s goals, the nature of the targeted organization’s
              work, and the application’s particular security gaps. Common
              attack types include:
            </p>
            <ul>
              <li>
                <p>
                  <strong> Zero-day vulnerabilities:</strong>These are
                  vulnerabilities unknown to an application’s makers, and
                  which thus do not have a fix available. We now see more than
                  20,000 every year. Attacks look to exploit these
                  vulnerabilities quickly, and often follow up by seeking to
                  evade protections put in place by security vendors.
                </p>
              </li>
              <li>
                <p>
                  <strong> Cross site scripting (XSS):</strong> XSS is a
                  vulnerability that allows an attacker to inject client-side
                  scripts into a webpage in order to access important
                  information directly, impersonate the user, or trick the
                  user into revealing important information.
                </p>
              </li>
              <li>
                <p>
                  <strong>SQL injection (SQi):</strong> SQi is a method by
                  which an attacker exploits vulnerabilities in the way a
                  database executes search queries. Attackers use SQi to gain
                  access to unauthorized information, modify or create new
                  user permissions, or otherwise manipulate or destroy
                  sensitive data.
                </p>
              </li>
              <li>
                <p>
                  <strong>Denial-of-service (DoS)</strong> and distributed
                  denial-of-service (DDoS) attacks: Through a variety of
                  vectors, attackers are able to overload a targeted server or
                  its surrounding infrastructure with different types of
                  attack traffic. When a server is no longer able to
                  effectively process incoming requests, it begins to behave
                  sluggishly and eventually deny service to incoming requests
                  from legitimate users.
                </p>
              </li>
              <li>
                <p>
                  <strong>Memory corruption:</strong> Memory corruption occurs
                  when a location in memory is unintentionally modified,
                  resulting in the potential for unexpected behavior in the
                  software. Bad actors will attempt to sniff out and exploit
                  memory corruption through exploits such as code injections
                  or buffer overflow attacks.
                </p>
              </li>
              <li>
                <p>
                  <strong>Buffer overflow:</strong> Buffer overflow is an
                  anomaly that occurs when software writing data to a defined
                  space in memory known as a buffer. Overflowing the buffer’s
                  capacity results in adjacent memory locations being
                  overwritten with data. This behavior can be exploited to
                  inject malicious code into memory, potentially creating a
                  vulnerability in the targeted machine.
                </p>
              </li>
              <li>
                <p>
                  <strong>Cross-site request forgery (CSRF):</strong> Cross
                  site request forgery involves tricking a victim into making
                  a request that utilizes their authentication or
                  authorization. By leveraging the account privileges of a
                  user, an attacker is able to send a request masquerading as
                  the user. Once a user’s account has been compromised, the
                  attacker can exfiltrate, destroy or modify important
                  information. Highly privileged accounts such as
                  administrators or executives are commonly targeted.
                </p>
              </li>
              <li>
                <p>
                  <strong>Credential stuffing:</strong>Attackers may use bots
                  to quickly input large numbers of stolen username and
                  password combinations into a web application’s login portal.
                  If this practice gives the attacker access to a real user’s
                  account, they may steal the user’s data or make fraudulent
                  purchases in the user’s name.
                </p>
              </li>
              <li>
                <p>
                  <strong>Page scraping:</strong>Attackers may also use bots
                  to steal content from webpages on a large scale. They may
                  use this content to gain a pricing advantage over a
                  competitor, imitate the page owner for malicious purposes,
                  or other reasons.
                </p>
              </li>
              <li>
                <p>
                  <strong>API abuse:</strong> APIs, or Application Programming
                  Interfaces, are software that allow two applications to
                  communicate with each other. Like any type of software, they
                  may have vulnerabilities that allow attackers to send
                  malicious code into one of the applications or intercept
                  sensitive data as it moves from one application to another.
                  This is an increasingly common attack type as API use
                  increases. The OWASP API Top ten list succinctly summarized
                  key API security risks organizations face today.
                </p>
              </li>
              <li>
                <p>
                  <strong>Shadow APIs:</strong> Development teams work quickly
                  to meet business objectives, frequently building and
                  publishing APIs without informing security teams. These
                  unknown APIs may expose sensitive company data, operating in
                  the “shadows” as security teams tasked with protecting APIs
                  are unaware of their existence.
                </p>
              </li>
              <li>
                <p>
                  <strong>Third-party code abuse:</strong> Many modern web
                  applications use a variety of third-party tools — for
                  example, an ecommerce site using a third-party payment
                  processing tool. If attackers find a vulnerability in one of
                  these tools, they may be able to compromise the tool, and
                  steal the data it processes, prevent it from functioning, or
                  use it to inject malicious code elsewhere in the
                  application. Magecart attacks, which skim credit card data
                  from payment processors, are an example of this attack type.
                  These attacks are also considered to be browser supply chain
                  attacks.
                </p>
              </li>
              <li>
                <p>
                  <strong>Attack surface misconfigurations:</strong> An
                  organization’s attack surface is its entire IT footprint
                  that could be susceptible to cyberattacks: servers, devices,
                  SaaS, and cloud assets that are accessible from the
                  Internet. This attack surface can remain vulnerable to
                  attack due to certain elements being overlooked or
                  misconfigured.
                </p>
              </li>
            </ul>

            <!-- 3rd  -->
            <h3 id="3">
              What are important web application security strategies?
            </h3>
            <p>
              As mentioned, web application security is a broad,
              always-changing discipline. As such, the discipline’s best
              practices change as new attacks and vulnerabilities emerge. But
              the modern Internet threat landscape is active enough that no
              organization will be able to get by without certain ‘table
              stakes’ security services that map to their business’ specific
              needs:
            </p>
            <ul>
              <li>
                <p>
                  <strong>DDoS mitigation:</strong> DDoS mitigation services
                  sit between a server and the public Internet, using
                  specialized filtration and extremely high bandwidth capacity
                  to prevent surges of malicious traffic from overwhelming the
                  server. These services are important because many modern
                  DDoS attacks deliver enough malicious traffic to overwhelm
                  even the most resilient servers.
                </p>
              </li>
              <li>
                <p>
                  <strong>Web Application Firewall (WAF):</strong> WAFs filter
                  out traffic known or suspected to be taking advantage of web
                  application vulnerabilities. They are important because new
                  vulnerabilities emerge too quickly and quietly for nearly
                  all organizations to catch on their own.
                </p>
              </li>

              <li>
                <p>
                  <strong>API gateways:</strong> API gateways help identify
                  overlooked 'shadow APIs' and block traffic known or
                  suspected to target API vulnerabilities. They also help
                  manage and monitor API traffic.
                </p>
              </li>

              <li>
                <p>
                  <strong>DNSSEC:</strong> DNSSEC is a protocol that
                  guarantees a web application's DNS traffic is safely routed
                  to the correct servers, so users are not intercepted by an
                  on-path attacker.
                </p>
              </li>

              <li>
                <p>
                  <strong>Encryption certificate management:</strong> In
                  encryption certificate management, a third party manages key
                  elements of the SSL/TLS encryption process, such as
                  generating private keys, renewing certificates, and revoking
                  certificates due to vulnerabilities. This removes the risk
                  of those elements going overlooked and exposing private
                  traffic.
                </p>
              </li>

              <li>
                <p>
                  <strong>Bot management:</strong> Bot management uses machine
                  learning and other specialized detection methods to
                  distinguish automated traffic from human users and prevent
                  the former from accessing a web application.
                </p>
              </li>

              <li>
                <p>
                  <strong>Client-side security:</strong> Client-side security
                  checks for new third-party JavaScript dependencies and
                  third-party code changes, helping organizations catch
                  malicious activity sooner.
                </p>
              </li>

              <li>
                <p>
                  <strong>Attack surface management:</strong> Actionable
                  attack surface management tools should provide a single
                  place to map your attack surface, identify potential
                  security risks, and mitigate risks with a few clicks.
                </p>
              </li>
            </ul>

            <!-- 4th  -->
            <h3 id="4">
              What application security best practices should organizations
              expect from their vendors?
            </h3>
            <p>
              Web developers can design and build applications in ways that
              prevent attackers from accessing private data, fraudulently
              accessing user accounts, and performing other malicious actions.
              The OWASP Top 10 list captures the most common application
              security risks developers should be aware of. Practices to
              prevent these risks include:
            </p>
            <ul>
              <li>
                <p>
                  <strong>Requiring input validation:</strong> Blocking
                  improperly formatted data from passing through the
                  application's workflows helps prevent malicious code from
                  entering the application via an injection attack.
                </p>
              </li>

              <li>
                <p>
                  <strong>Using up-to-date encryption:</strong> Storing user
                  data in an encrypted fashion, along with using HTTPS to
                  encrypt transmission of inbound and outbound traffic, helps
                  prevent attackers from stealing data.
                </p>
              </li>

              <li>
                <p>
                  <strong>Offering strong authentication and authorization:</strong>
                  Building in and enforcing controls for strong passwords,
                  offering multi-factor authentication options including hard
                  keys, offering access control options, and other practices
                  make it harder for attackers to fraudulently access user
                  accounts and move laterally within your application.
                </p>
              </li>

              <li>
                <p>
                  <strong>Keeping track of APIs:</strong> Tools exist to
                  identify overlooked 'shadow APIs' that could constitute an
                  attack surface, but API security becomes easier when APIs
                  never get overlooked in the first place.
                </p>
              </li>

              <li>
                <p>
                  <strong>Documenting code changes:</strong> Documenting code
                  changes helps security and developer teams fix newly
                  introduced vulnerabilities sooner.
                </p>
              </li>
            </ul>

            <strong><i>Reference:</i></strong>
            <i>https://www.cloudflare.com/learning/security/what-is-web-application-security/</i>
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