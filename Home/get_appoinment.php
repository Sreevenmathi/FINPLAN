<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_conn.php');
session_start();

if (!isset($_SESSION['id'])) {
    echo "<script> alert('Login First');</script>";
    ?><script> location.replace("fin_advisor.php"); </script><?php
    die();
} else {
    $userid = $_SESSION['id'];
    echo $userid;
}

// Check if advisor_id is set in the GET request
if (isset($_POST['id'])) {
    $advisor_id = $_POST['id'];
} else {
    echo "<script>location.replace('fin_advisor.php');</script>";
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FINPLAN - Appointment Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start  <i class="fa fa-cut me-3"></i> -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase">FINPLAN</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="fin_advisor.php" class="nav-item nav-link">FINANCIAL ADVISORS</a>
                <a href="resource.php" class="nav-item nav-link">RESOURCES</a>
                <a href="plan.php" class="nav-item nav-link">PLANS</a>
                <!--<a href="service.php" class="nav-item nav-link">SERVICES</a>
                <a href="testimonial.php" class="nav-item nav-link">Testimonial</a> -->
                <a href="about.php" class="nav-item nav-link">About US</a>
                <a href="contact.php" class="nav-item nav-link">Contact US</a>
            </div>

            <?php 
                    session_status() === PHP_SESSION_ACTIVE ?: session_start();
                     if (!isset($_SESSION['id'])) {  ?>
                        <a href="../User_Dashboard/signup.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">SIGNIN<i class="fa fa-arrow-right ms-3"></i></a>
                        <?php
                      }
                      else{  ?>
                     
                      <a  class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block" href="../User_Dashboard/index.php" class="dropdown-item">DASHBOARD</a>
                      <?php
                      }
                    ?>
          </div>
    </nav>
    <!-- Navbar End -->

  <!-- Appointment Form Start -->
  <div class="container-xxl py-5" style="background-color: #1c1c1e; color: #f5f5f7;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-uppercase" style="color: #ffa500; font-weight: bold;">Book an Appointment</h2>
                <p class="text-muted">Schedule a session with your chosen Financial Advisor</p>
            </div>
            <form method="post" action="app.php" class="row g-4">
                <input type="hidden" name="advisor_id" value="<?php echo $advisor_id; ?>">
                <input type="hidden" name="user" value="<?php echo $userid; ?>">

                <!-- Date Input -->
                <div class="col-md-6">
                    <label class="form-label" style="color: #f5f5f7;">Appointment Date</label>
                    <input type="date" name="date" class="form-control" required style="border: 2px solid #ffa500; border-radius: 10px; padding: 15px;">
                </div>

                <!-- Time Input -->
                <div class="col-md-6">
                    <label class="form-label" style="color: #f5f5f7;">Preferred Time</label>
                    <input type="time" name="time" class="form-control" required style="border: 2px solid #ffa500; border-radius: 10px; padding: 15px;">
                </div>

                <!-- Purpose of Appointment -->
                <div class="col-md-6">
                    <label class="form-label" style="color: #f5f5f7;">Purpose of Appointment</label>
                    <input type="text" name="purpose" class="form-control" required style="border: 2px solid #ffa500; border-radius: 10px; padding: 15px;" placeholder="Why are you scheduling the appointment?">
                </div>

                <!-- Additional Information Input -->
                <div class="col-md-6">
                    <label class="form-label" style="color: #f5f5f7;">Additional Information</label>
                    <textarea name="additional_info" class="form-control" rows="4" style="border: 2px solid #ffa500; border-radius: 10px; padding: 15px;" placeholder="Provide any details you'd like the advisor to know."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-warning" name="submit" style="font-weight: bold; color: #1c1c1e; padding: 15px 40px; border-radius: 50px; font-size: 16px; transition: all 0.3s ease;">
                        Book Appointment
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Appointment Form End -->
    <!-- Footer (same as previous) -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Get In Touch</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>123 Street, New York, USA</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+012 345 67890</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for the latest updates!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 rounded-pill ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 mt-1 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-light py-4">
            <div class="container text-center">
                <p class="mb-0">&copy; <a href="#" class="text-light">Your Site Name</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
