<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ITEC85 - Ethical Hacking</title>
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
        <h2>Ethical Hacking</h2>
        <p>
          Delve into the world of ethical hacking and learn how to identify
          and fix vulnerabilities in computer systems. Understand the
          techniques used by hackers and use them ethically to strengthen
          security. Master tools and methodologies for penetration testing,
          vulnerability assessment, and risk analysis.
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
              <p><a href="#1">What is Ethical Hacking?</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p><a href="#2">Ethical Hacker Responsibilities</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#7">Types of Hacking</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#8">How Do Hackers Establish a Connection to the Network?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">What is Penetration Testing?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#4">What is Kali Linux?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#5">Phases of Ethical Hacking and Penetration Testing</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#6">Areas of Penetration Testing</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-6.jpg" class="img-fluid" alt="" />
            <h3 id="1">What is Ethical Hacking?</h3>
            <p>
              Ethical hacking is the term used to describe a process of
              testing computer security to identify and exploit
              vulnerabilities. Ethical hacking aims not to damage or disrupt
              systems but to identify and fix potential vulnerabilities.
              <br /><br />
              There are many different types of ethical hacking, including
              penetration testing, vulnerability assessment, and red teaming.
              Penetration testing is the most common type of ethical hacking.
              It involves trying to breach security measures on a system using
              various techniques such as social engineering and password
              cracking. Vulnerability assessment is often used to find
              existing vulnerabilities in a system, while red teaming tests
              how well a company's security measures defend against attacks
              from outsiders. You can learn all the skills of an ethical
              hacker by enrolling in the ethical hacking certification course.
              <br /><br />
              Although ethical hacking can be a fun and exciting process, it
              is essential to take precautions when conducting it. Always use
              caution when entering any system, you do not have access to, and
              always remember that cybersecurity is everyone's responsibility.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">Ethical Hacker Responsibilities</h3>
            <p>Here are some responsibilities of an ethical hacker:</p>
            <ul>
              <li>
                <strong>Vulnerability Testing Scripts:</strong> Develop and
                deploy scripts to identify and test for vulnerabilities.
              </li>
              <li>
                <strong>Security Enhancement Tools:</strong> Build and utilize
                tools that enhance security measures.
              </li>
              <li>
                <strong>Risk Assessment:</strong> Conduct comprehensive risk
                assessments to identify potential security risks.
              </li>
              <li>
                <strong>Security Policy Establishment:</strong> Establish and
                implement effective security policies.
              </li>
              <li>
                <strong>Network Security Training:</strong> Provide training
                programs to educate staff on network security best practices.
              </li>
            </ul>

            <!-- 7th -->
            <h3 id="7">Types of Hacking</h3>
            <p>
              There are many types of hacking, but all involve breaking into a
              computer to extract or damage information. Here are the most
              common types of hacking:
            </p>
            <ul>
              <li>
                <strong>Physical hacking:</strong> Involves accessing a
                computer by physical means, such as breaking into the machine
                through its casing.
              </li>
              <li>
                <strong>System hacking:</strong> Involves penetrating a
                computer's security measures to steal data or gain control
                over the system.
              </li>
              <li>
                <strong>Wireless hacking:</strong> Refers to exploiting
                vulnerabilities in wireless networks, which can allow
                unauthorized access to networks and systems.
              </li>
              <li>
                <strong>Cyber espionage:</strong> The practice of stealing
                confidential information from another organization for
                economic gain or political purposes.
              </li>
              <li>
                <strong>Cyber terrorism:</strong> Refers to any terrorist
                activity conducted through cyber means, such as hacking into
                computer systems or releasing malicious software.
              </li>
            </ul>

            <!-- 8th -->
            <h3 id="8">
              How Do Hackers Establish a Connection to the Network?
            </h3>
            <p>
              There are many ways a hacker can establish a connection to the
              network. Some of the most common ways that hackers sneak past
              security to infiltrate business networks include:
            </p>
            <h5><strong>Weak IP Addresses</strong></h5>
            <p>
              By rapidly scanning through billions of IP combinations, hackers
              search for a weakly secured IP address and then make a
              connection once one is found. This allows them to invade an
              organization’s network using the digital address of one of their
              machines. Exploiting weak IP addresses is perhaps the easiest
              way for hackers to quickly identify weakly secured networks to
              hack.
            </p>

            <h5><strong>Phishing scams</strong></h5>
            <p>
              Email phishing scams typically masquerade as a legitimate mass
              email from a trusted authority or organization. The email will
              ask readers to click a malicious link and verify account data
              like login credentials. Once the data has been handed over,
              hackers have access to the account information they need to
              further infiltrate the network.
            </p>

            <h5><strong>Sub-par Software</strong></h5>
            <p>
              While downloading an unreputable free software solution or going
              with a really cheap and unknown option might sound like a good
              idea, you’re putting your network at serious risk by doing so.
              These sub-par solutions could enable hackers to access your
              network to obtain sensitive information or install viruses.
            </p>

            <h5><strong>Vulnerable Software</strong></h5>
            <p>
              Hackers frequently exploit vulnerable, unpatched software to
              infiltrate the target network. This is why delaying patching or
              failure to patch software altogether is so dangerous. It is
              critical that admins and IT teams track security advisories and
              apply patches as soon as they are released.
            </p>

            <h5><strong>Password Hacking</strong></h5>
            <p>
              People too often rely on default passwords that are easy to look
              up, or easy to guess options like "password123". These weakly
              designed passwords make it easier for hackers to gain access to
              accounts.
            </p>

            <!-- 3rd  -->
            <h3 id="3">What is Penetration Testing?</h3>
            <p>
              Penetration testing which is also known as pen-test is a part of
              ethical hacking, where it focuses explicitly on penetrating only
              the information systems. Now, how is penetration testing
              different from ethical hacking? Penetration testing focuses
              exclusively on information systems, while ethical hacking is a
              broad area to protect the systems. Ethical hacking has more job
              roles and responsibilities than penetration testing.
            </p>

            <!-- 4th  -->
            <h3 id="4">What is Kali Linux?</h3>
            <p>
              Kali Linux is a Debian-based operating system with advanced
              penetration testing and security auditing features. Most hackers
              also use this platform. Kali contains hundreds of tools which
              are used for various information security tasks like computer
              forensics and reverse engineering. The main features of Kali
              Linux include:
            </p>
            <ol>
              <li>600+ tools</li>
              <li>Open-source</li>
              <li>Mass customization</li>
              <li>Wide range wireless support</li>
              <li>Multi-language support</li>
              <li>Fast injections</li>
            </ol>

            <!-- 5th -->
            <h3 id="5">Phases of Ethical Hacking and Penetration Testing</h3>
            <p>
              To carry out a structured attack, ethical hacking employs
              various phases. These are:
            </p>
            <ol>
              <li>
                <strong>Reconnaissance: </strong>The attacker uses various
                hacking tools (NMAP, Hping) to obtain information about the
                target
              </li>
              <li>
                <strong>Scanning: </strong>Using tools such as NMAP and
                Nexpose, the attacker tries to spot vulnerabilities in the
                system
              </li>
              <li>
                Gain access: Here, the attacker attempts to exploit the
                vulnerability using the Metasploit tool
              </li>
              <li>
                <strong>Maintain access:</strong> Now, the attacker tries to
                install some strong backdoors into the victim’s system for
                future access (Metasploit is used again to achieve this)
              </li>
              <li>
                <strong>Clear tracks:</strong> In this stage, the attacker
                clears all evidence of the attack as no attacker likes to get
                caught
              </li>
              <li>
                <strong>Reporting: </strong>Finally, the ethical hacker
                documents a report which consists of the vulnerabilities
                spotted, the tools used to exploit, and the success rate of
                the operation
              </li>
            </ol>
            <!-- 6th -->
            <h3 id="6">Areas of Penetration Testing</h3>
            <ol>
              <li>
                <strong>Network services:</strong> It finds weaknesses and
                vulnerabilities in the security of the network infrastructure
                (for example, firewall testing)
              </li>
              <li>
                <strong>Web application:</strong> Security vulnerabilities or
                weaknesses will get discovered in web-based applications (for
                example, Outlook)
              </li>
              <li>
                <strong>Client-side:</strong> It finds vulnerabilities in
                software on a client computer, such as an employee workstation
                (for example, media player)
              </li>
              <li>
                <strong>Wireless:</strong> This test examines all the wireless
                devices which are used in a corporation (for example, tablets
                or smartphones)
              </li>
              <li>
                <strong>Social engineering:</strong> Getting confidential
                information by tricking an employee of the corporation to
                reveal such items (for example, phishing)
              </li>
            </ol>

            <strong><i>Reference:</i></strong>
            <i> https://linuxsecurity.com/features/ethical-hacking </i><br />
            <i>https://www.simplilearn.com/tutorials/cyber-security-tutorial/what-is-penetration-testing#areas_of_penetration_testing</i>
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
                <a href="chapter1.html">Information Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter2.html">Network Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter3.html">Cryptography</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter4.html">Web Application Security</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="chapter5.html">Incident Response and Forensics</a>
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