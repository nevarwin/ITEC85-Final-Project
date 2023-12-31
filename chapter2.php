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

  <title>ITEC85 - Network Security</title>
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
        <h2>Network Security</h2>
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
              <p><a href="#1">What is network security?</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p><a href="#2">Types of network security technologies</a></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#3">Related security technologiesRelated security
                  technologies</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#4">A zero trust approach to network security</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#5">Enterprise network security solutions</a>
              </p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <p>
                <a href="#6">Related solutions</a>
              </p>
            </div>
          </div>
          <div class="col-lg-8">
            <img src="assets/img/course-2.jpg" class="img-fluid" alt="" />
            <h3 id="1">What is network security?</h3>
            <p>
              Network security is the field of cybersecurity focused on
              protecting computer networks from cyber threats. Network
              security has three chief aims: to prevent unauthorized access to
              network resources; to detect and stop cyberattacks and security
              breaches in progress; and to ensure that authorized users have
              secure access to the network resources they need, when they need
              them.
            </p>

            <!-- 2nd Section -->
            <h3 id="2">Types of network security technologies</h3>
            <p>
              Network security systems work at two levels: at the perimeter
              and inside the network. <br /><br />
              At the perimeter, security controls try to stop cyberthreats
              from entering the network. But network attackers sometimes break
              through, so IT security teams also put controls around the
              resources inside the network, like laptops and data. Even if
              attackers get in, they won't have free reign. This
              strategy—layering multiple controls between hackers and
              potential vulnerabilities—is called "defense in depth."
              <br /><br />
              To build network security systems, security teams combine the
              following tools:
            </p>
            <ul>
              <li>
                <strong>Firewalls</strong>
                <p>
                  A firewall is software or hardware that stops suspicious
                  traffic from entering or leaving a network while letting
                  legitimate traffic through. Firewalls can be deployed at the
                  edges of a network or used internally to divide a larger
                  network into smaller subnetworks. If one part of the network
                  is compromised, hackers are still shut off from the rest.
                  <br /><br />
                  There are different types of firewalls with different
                  features. Basic firewalls use packet filtering to inspect
                  traffic. More advanced next-generation firewalls (NGFWs) add
                  intrusion prevention, AI and machine learning, application
                  awareness and control, and threat intelligence feeds for
                  extra protection.
                </p>
              </li>
              <li>
                <strong>Network access control (NAC)</strong>
                <p>
                  Network access control (NAC) solutions act like gatekeepers,
                  authenticating and authorizing users to determine who is
                  allowed into the network and what they can do inside.
                  "Authentication" means verifying that a user is who they
                  claim to be. "Authorization" means granting authenticated
                  users permission to access network resources.
                  <br /><br />
                  NAC solutions are often used to enforce role-based access
                  control (RBAC) policies, in which users' privileges are
                  based on their job functions. For example, a junior
                  developer might be able to view and edit code but not push
                  it live. In contrast, senior developers could read, write,
                  and push code to production. RBAC helps prevent data
                  breaches by keeping unauthorized users away from assets they
                  are not permitted to access.
                  <br /><br />
                  In addition to authenticating users, some NAC solutions can
                  do risk assessments on users' endpoints. The goal is to keep
                  unsecured or compromised devices from accessing the network.
                  If a user tries to enter the network on a device with
                  outdated anti-malware software or incorrect configurations,
                  the NAC will deny access. Some advanced NAC tools can
                  automatically fix non-compliant endpoints.
                </p>
              </li>
              <li>
                <strong>Intrusion detection and prevention systems (IDPSs)</strong>
                <p>
                  An intrusion detection and prevention system
                  (IDPS)—sometimes called an intrusion prevention system
                  (IPS)—can be deployed directly behind a firewall to scan
                  incoming traffic for security threats. These security tools
                  evolved from intrusion detection systems (IDSs), which only
                  flagged suspicious activity for review. IDPSs have the added
                  ability to automatically respond to possible breaches, such
                  as by blocking traffic or resetting the connection. IDPSs
                  are particularly effective at detecting and blocking brute
                  force attacks and denial of service (DoS) or distributed
                  denial of service (DDoS) attacks.
                </p>
              </li>
              <li>
                <strong>Virtual private networks (VPNs)</strong>
                <p>
                  A virtual private network (VPN) protects a user's identity
                  by encrypting their data and masking their IP address and
                  location. When someone uses a VPN, they no longer connect
                  directly to the internet but to a secure server that
                  connects to the internet on their behalf.
                  <br /><br />
                  VPNs can help remote workers securely access corporate
                  networks, even through unsecured public wifi connections
                  like those found in coffee shops and airports. VPNs encrypt
                  a user's traffic, keeping it safe from hackers who might
                  want to intercept their communications.
                  <br /><br />
                  Instead of VPNs, some organizations use zero trust network
                  access (ZTNA). Rather than using a proxy server, ZTNA uses
                  zero-trust access control policies to securely connect
                  remote users. When remote users log into a network through
                  ZTNA, they don't gain access to the whole network. Instead,
                  they only gain access to the specific assets they're
                  permitted to use, and they must be reverified every time
                  they access a new resource. See 'A zero trust approach to
                  network security' below for a closer look at how zero trust
                  security works.
                </p>
              </li>
              <li>
                <strong>Application security</strong>
                <p>
                  Application security refers to the steps security teams take
                  to protect apps and application programming interfaces
                  (APIs) from network attackers. Because many companies today
                  use apps to carry out key business functions or process
                  sensitive data, apps are a common target for cybercriminals.
                  And because so many business apps are hosted in public
                  clouds, hackers can exploit their vulnerabilities to break
                  into private company networks.
                  <br /><br />

                  Application security measures defend apps from malicious
                  actors. Common application security tools include web
                  application firewalls (WAFs), runtime application
                  self-protection (RASP), static application security testing
                  (SAST), and dynamic application security testing (DAST).
                </p>
              </li>
              <li>
                <strong>Email security</strong>
                <p>
                  The IBM Security X-Force Threat Intelligence Index found
                  that phishing is the most common initial cyberattack vector.
                  Email security tools can help thwart phishing attacks and
                  other attempts to compromise users' email accounts. Most
                  email services have built-in security tools like spam
                  filters and message encryption. Some email security tools
                  feature sandboxes, isolated environments where security
                  teams can inspect email attachments for malware without
                  exposing the network.
                </p>
              </li>
            </ul>

            <!-- Common information security threats -->
            <h3 id="3">Related security technologies</h3>
            <p>
              While the following tools are not strictly network security
              tools, network administrators often use them to protect areas
              and assets on a network.
            </p>
            <ul>
              <li>
                <strong>Data loss prevention (DLP)</strong>
                <p>
                  refers to information security strategies and tools that
                  ensure sensitive data is neither stolen nor accidentally
                  leaked. DLP includes data security policies and
                  purpose-built technologies that track data flows, encrypt
                  sensitive information, and raise alerts when suspicious
                  activity is detected.
                </p>
              </li>
              <li>
                <strong>Endpoint security solutions</strong>
                <p>
                  protect any devices that connect to a network—laptops,
                  desktops, servers, mobile devices, IoT devices—against
                  hackers who try to use them to sneak into the network.
                  Antivirus software can detect and destroy trojans, spyware,
                  and other malicious software on a device before it spreads
                  to the rest of the network. Endpoint detection and response
                  (EDR) solutions are more advanced tools that monitor
                  endpoint behavior and automatically respond to security
                  events. Unified endpoint management (UEM) software allows
                  companies to monitor, manage, and secure all end-user
                  devices from a single console.
                </p>
              </li>
              <li>
                <strong>Web security solutions</strong>
                <p>
                  such as secure web gateways, block malicious internet
                  traffic and keep users from connecting to suspicious
                  websites and apps.
                </p>
              </li>
              <li>
                <strong> Network segmentation </strong>
                <p>
                  is a way of breaking large networks down into smaller
                  subnetworks, either physically or through software. Network
                  segmentation can limit the spread of ransomware and other
                  malware by walling off a compromised subnetwork from the
                  rest of the network. Segmentation can also help keep
                  legitimate users away from assets they shouldn't access.
                </p>
              </li>

              <li>
                <strong> Cloud security </strong>
                <p>
                  solutions protect data centers, apps, and other cloud assets
                  from cyberattacks. Most cloud security solutions are simply
                  standard network security measures—like firewalls, NACs, and
                  VPNs— applied to cloud environments. Many cloud service
                  providers build security controls into their services or
                  offer them as add-ons.
                </p>
              </li>

              <li>
                <strong>User and entity behavior analytics (UEBA) </strong>
                <p>
                  uses behavioral analytics and machine learning to flag
                  abnormal user and device activity. UEBA can help catch
                  insider threats and hackers who have hijacked user accounts.
                </p>
              </li>
            </ul>

            <!-- A zero trust approach to network security -->
            <h3 id="4">A zero trust approach to network security</h3>
            <ul>
              <li>
                <p>
                  Traditional company networks were centralized, with key
                  endpoints, data, and apps located on premises. Traditional
                  network security systems focused on keeping threats from
                  breaching the network's perimeter. Once a user got in, they
                  were treated as trustworthy and granted practically
                  unrestricted access.
                  <br /><br />
                  However, as organizations pursue digital transformation and
                  adopt hybrid cloud environments, networks are becoming
                  decentralized. Now, network resources exist across cloud
                  data centers, on-site and remote endpoints, and mobile and
                  IoT devices.
                  <br /><br />
                  Perimeter-based security controls are less effective in
                  distributed networks, so many IT security teams are shifting
                  to zero-trust network security frameworks. Instead of
                  focusing on the perimeter, zero-trust network security
                  places security controls around individual resources. Users
                  are never implicitly trusted. Every time a user tries to
                  access a resource, they must be authenticated and
                  authorized, regardless of whether they're already on the
                  company network. Authenticated users are granted
                  least-privilege access only, and their permissions are
                  revoked as soon as their task is done.
                  <br /><br />
                  Zero trust network security relies on granular access
                  policies, continuous validation, and data gathered from as
                  many sources as possible — including many of the tools
                  outlined above — to ensure that only the right users can
                  access the right resources for the right reasons at the
                  right time.
                </p>
              </li>
            </ul>

            <!-- Enterprise network security solutions -->
            <h3 id="5">Enterprise network security solutions</h3>
            <p>
              While a defense-in-depth approach can protect a company's
              network, it also means the IT security team has to manage a
              number of separate security controls. Enterprise network
              security platforms can help streamline network security
              management by integrating disparate security tools and allowing
              security teams to monitor the whole network from a single
              console. Common network security platforms include:
            </p>
            <ul>
              <li>
                <strong>Information and event management (SIEM) </strong>collects information from internal security tools, aggregates
                it in a central log, and flags anomalies.
              </li>
              <li>
                <strong>Security orchestration, automation, and response
                  (SOAR)</strong>
                solutions collect and analyze security data and allow security
                teams to define and execute automated responses to
                cyberthreats..
              </li>
              <li>
                <strong>Network detection and response (NDR) </strong>tools
                use AI and machine learning to monitor network traffic and
                detect suspicious activity.
              </li>
              <li>
                <strong>Extended detection and response (XDR)</strong> is an
                open cybersecurity architecture that integrates security tools
                and unifies security operations across all security
                layers—users, endpoints, email, applications, networks, cloud
                workloads and data. With XDR, security solutions that aren’t
                necessarily designed to work together can interoperate
                seamlessly on threat prevention, detection, investigation and
                response. XDR can also automate threat detection, incident
                triage, and threat hunting workflows.
              </li>
            </ul>

            <!-- Related solutions -->
            <h3 id="6">Related solutions</h3>
            <ul>
              <li>
                <strong>IBM Security® QRadar® NDR</strong>
                <p>
                  Catch hidden threats lurking in your network, before it’s
                  too late. IBM Security QRadar Network Detection and Response
                  (NDR) helps your security teams by analyzing network
                  activity in real time. It combines depth and breadth of
                  visibility with high-quality data and analytics to fuel
                  actionable insights and response.
                </p>
              </li>
              <li>
                <strong>Network security solutions</strong>
                <p>
                  Safeguard your entire network with next-generation network
                  security solutions that intelligently recognize even unknown
                  threats, and adapt to prevent them in real time.
                </p>
              </li>
              <li>
                <strong>Network security services</strong>
                <p>
                  Extend your team with proven security skills, expertise and
                  solutions for protecting your infrastructure and network
                  from sophisticated cybersecurity threats.
                </p>
              </li>
            </ul>

            <strong><i>Reference:</i></strong>
            <i>https://www.ibm.com/topics/network-security</i>
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