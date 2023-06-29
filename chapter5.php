<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ITEC85 - Incident Response and Forensics</title>
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
        <h2>Incident Response and Forensics</h2>
        <p>
          Learn how to effectively respond to and investigate security
          incidents. Develop skills to identify, contain, eradicate, and
          recover from cyber threats. Explore digital forensics techniques to
          gather evidence, analyze security breaches, and support legal
          investigations.
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
              <p>
                <a href="#10">Digital Forensics and Incident Response (DFIR) Explained</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#11">How is Digital Forensics Used in the Incident Response
                  Plan</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#12">The Value of Integrated Digital Forensics and Incident
                  Response (DFIR)</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#1">Understanding the Incident Response Life Cycle</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#2">What Is the Incident Response Life Cycle?</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">The Five Phases of the Incident Response Life Cycle</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#4">Tips for Improving an Incident Response Plan</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#5">Prevent Security Incidents with an Incident Handler
                  Certification</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-details5.jpg" class="img-fluid" alt="" />

            <!-- 10th -->
            <h3 id="10">
              Digital Forensics and Incident Response (DFIR) Explained
            </h3>
            <p>
              Digital Forensics and Incident Response (DFIR) is a field within
              cybersecurity that focuses on the identification, investigation,
              and remediation of cyberattacks.
              <br /><br />
              DFIR has two main components:
            </p>
            <ul>
              <li>
                <p>
                  <strong> Digital Forensics:</strong> A subset of forensic
                  science that examines system data, user activity, and other
                  pieces of digital evidence to determine if an attack is in
                  progress and who may be behind the activity.
                </p>
              </li>
              <li>
                <p>
                  <strong> Incident Response:</strong> The overarching process
                  that an organization will follow in order to prepare for,
                  detect, contain, and recover from a data breach.
                </p>
              </li>
            </ul>
            <p>
              Due to the proliferation of endpoints and an escalation of
              cybersecurity attacks in general, DFIR has become a central
              capability within the organization’s security strategy and
              threat hunting capabilities. The shift to the cloud, as well as
              the acceleration of remote-based work, has further heightened
              the need for organizations to ensure protection from a wide
              variety of threats across all devices that are connected to the
              network.
              <br /><br />
              Though DFIR is traditionally a reactive security function,
              sophisticated tooling and advanced technology, such as
              artificial intelligence (AI) and machine learning (ML), have
              enabled some organizations to leverage DFIR activity to
              influence and inform preventative measures. In such cases, DFIR
              can also be considered a component within the proactive security
              strategy.
            </p>

            <!-- 11th -->
            <h3 id="11">
              How is Digital Forensics Used in the Incident Response Plan
            </h3>
            <p>
              Digital forensics provides the necessary information and
              evidence that the computer emergency response team (CERT) or
              computer security incident response team (CSIRT) needs to
              respond to a security incident.
              <br /><br />
              Digital forensics may include:
            </p>
            <ul>
              <li>
                <strong>File System Forensics:</strong> Analyze file systems
                on the endpoint to detect signs of compromise.
              </li>
              <li>
                <strong>Memory Forensics:</strong> Analyze memory for attack
                indicators that may not be visible in the file system.
              </li>
              <li>
                <strong>Network Forensics:</strong> Review network activity,
                including email, messaging, and web browsing, to identify
                attacks, understand cybercriminal techniques, and assess the
                extent of the incident.
              </li>
              <li>
                <strong>Log Analysis:</strong> Review and interpret activity
                logs to identify suspicious behavior or abnormal events.
              </li>
            </ul>
            <p>
              In addition to helping the team respond to attacks, digital
              forensics also plays an important role in the full remediation
              process. Digital Forensics may also include providing evidence
              to support litigation or documentation to show auditors.
              <br /><br />
              Further, analysis from the digital forensics team can help shape
              and strengthen preventative security measures. This can enable
              the organization to reduce overall risk, as well as speed future
              response times.
            </p>

            <!-- 12th -->
            <h3 id="12">
              The Value of Integrated Digital Forensics and Incident Response
              (DFIR)
            </h3>
            <p>
              While digital forensics and incident response are two distinct
              functions, they are closely related and, in some ways,
              interdependent. Taking an integrated approach to DFIR provides
              organizations with several important advantages, including the
              ability to:
            </p>

            <ul>
              <li>
                <p>
                  <strong>Timely and Precise Incident Response:</strong>
                  Respond promptly and accurately to incidents.
                </p>
              </li>

              <li>
                <p>
                  <strong>Consistent Incident Investigation:</strong> Follow a
                  standardized process for investigating and evaluating
                  incidents.
                </p>
              </li>

              <li>
                <p>
                  <strong>Data Loss and Reputation Protection:</strong>
                  Minimize the impact of cybersecurity attacks by preventing
                  data loss or theft and mitigating reputational harm.
                </p>
              </li>

              <li>
                <p>
                  <strong>Enhanced Security Protocols:</strong> Strengthen
                  existing security measures by gaining a comprehensive
                  understanding of the threat landscape and identifying
                  existing risks.
                </p>
              </li>

              <li>
                <p>
                  <strong>Efficient Recovery and Business Continuity:</strong>
                  Recover from security events swiftly and with minimal
                  disruption to business operations.
                </p>
              </li>

              <li>
                <p>
                  <strong>Support for Prosecution:</strong> Aid in the
                  prosecution of threat actors through evidence collection and
                  documentation.
                </p>
              </li>
            </ul>

            <h3 id="1">Understanding the Incident Response Life Cycle</h3>
            <p>
              Incident response management is an integral part of
              cybersecurity operations. Incident responders are the first to
              react to any security incident: They help organizations
              identify, contain, eradicate, and recover from the incident.
              Incident handlers help create incident management plans for
              detection and recovery procedures. Incident handlers—and the
              entire company—can use these plans in the event of a
              cyberattack. This article will cover what you need to know about
              the incident response life cycle and how to help businesses
              prevent, or manage the aftermath of, a cyberattack.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">What Is the Incident Response Life Cycle?</h3>
            <p>
              The incident response life cycle is a series of procedures
              executed in the event of a security incident. These steps define
              the workflow for the overall incident response process. Each
              stage entails a specific set of actions that an organization
              should complete.
            </p>
            <!-- The Five Phases of the Incident Response Life Cycle  -->
            <h3 id="3">
              The Five Phases of the Incident Response Life Cycle
            </h3>
            <p>
              There are several ways to define the incident response life
              cycle. The National Institute of Standards and Technology (NIST;
              Cichonski et al., 2012) developed a framework for incident
              handling, which is the most commonly used model. The process
              outlined in the NIST framework includes five phases:
            </p>
            <ol>
              <li>Preparation</li>
              <li>Detection and analysis</li>
              <li>Containment</li>
              <li>Eradication and recovery</li>
              <li>Post-event activity</li>
            </ol>

            <h4>1. Preparation</h4>
            <p>
              In this phase, the business creates an incident management plan
              that can detect an incident in the organization’s environment.
              The preparation step involves, for example, identifying
              different malware attacks and determining what their impact on
              systems would be. It also involves ensuring that an organization
              has the tools to respond to an incident and the appropriate
              security measures in place to stop an incident from happening in
              the first place.
            </p>

            <h4>2. Detection and Analysis</h4>
            <p>
              An incident response analyst is responsible for collecting and
              analyzing data to find any clues to help identify the source of
              an attack. In this step, analysts identify the nature of the
              attack and its impact on systems. The business and the security
              professionals it works with utilize the tools and indicators of
              compromise (IOCs) that have been developed to track the attacked
              systems.
            </p>

            <h4>3-4. Containment, Eradication, and Recovery</h4>
            <p>
              This is the main phase of security incident response, in which
              the responders take action to stop any further damage. This
              phase encompasses three steps:
            </p>
            <ul>
              <li>
                <p>
                  <strong>Containment:</strong> In this step, all possible
                  methods are used to prevent the spread of malware or
                  viruses. Actions might include disconnecting systems from
                  networks, quarantining infected systems, or blocking traffic
                  to and from known malicious IP addresses.
                </p>
              </li>
              <li>
                <p>
                  <strong>Eradication:</strong> After containing the security
                  issue in question, the malicious code or software needs to
                  be eradicated from the environment. This might involve using
                  antivirus tools or manual removal techniques. It will also
                  include ensuring that all security software is up to date in
                  order to prevent any future incidents.
                </p>
              </li>
              <li>
                <p>
                  <strong>Recovery:</strong> After eliminating the malware,
                  restoring all systems to their pre-incident state is
                  essential. This might involve restoring data from backups,
                  rebuilding infected systems, and re-enabling disabled
                  accounts.
                </p>
              </li>
            </ul>

            <h4>5. Post-Event Activity</h4>
            <p>
              The final phase of the incident response life cycle is to
              perform a postmortem of the entire incident (Cynet, 2022). This
              helps the organization understand how the incident took place
              and what it can do to prevent such incidents from happening in
              the future. The lessons learned during this phase can improve
              the organization’s incident security protocols and make its
              security strategy more robust and effective.
            </p>

            <!-- 4th -->
            <h3 id="4">Tips for Improving an Incident Response Plan</h3>
            <p>
              There are many ways to improve an organization’s incident
              management plan (HIMSS, 2022).
            </p>
            <ul>
              <li>
                <p>
                  <strong>Identify and train incident handlers:</strong>
                  Ensure that incident handlers are identified and trained to
                  effectively respond to security breaches. All employees
                  should know their responsibilities, including when to report
                  an issue, who to contact, and which tools to deploy in the
                  event of a breach.
                </p>
              </li>
              <li>
                <p>
                  <strong>Create effective communication channels:</strong>
                  Establish communication channels across teams to ensure
                  efficient reporting and coordination during incidents.
                  Assign each person a designated contact to facilitate quick
                  detection and recovery without losing valuable information
                  or data.
                </p>
              </li>
              <li>
                <p>
                  <strong>Maintain comprehensive system logs:</strong>
                  Regularly update and maintain logs for each system, ensuring
                  no gaps in data. These logs can be instrumental in
                  identifying the source of a security breach and preventing
                  similar events in the future.
                </p>
              </li>
              <li>
                <p>
                  <strong>Regularly test the incident response plan:</strong>
                  Conduct regular testing of the incident response plan to
                  keep the documentation up to date with security policy
                  changes and new technologies introduced in the
                  organization's infrastructure.
                </p>
              </li>
            </ul>

            <!-- 5th -->
            <h3 id="5">
              Prevent Security Incidents with an Incident Handler
              Certification
            </h3>
            <p>
              At the end of the day, businesses need to ensure that they have
              the appropriate resources on hand to prevent a security breach
              from occurring and to know how to handle it if one does.
              EC-Council’s Certified Incident Handler (E|CIH) certification
              program teaches cybersecurity professionals the skills they need
              to prepare for such an event and trains them to detect, analyze,
              and prepare for any security-related incident within an
              organization. Having E|CIH-certified personnel on hand can
              benefit businesses in numerous ways, including reducing damages,
              increasing response times to security breaches, and greatly
              improving security posture.
            </p>

            <strong><i>Reference:</i></strong>
            <i>https://www.cloudflare.com/learning/security/what-is-web-application-security/</i>
            <i>
              https://www.crowdstrike.com/cybersecurity-101/digital-forensics-and-incident-response-dfir/</i>
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