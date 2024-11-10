<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_conn.php');
session_start();
if (!isset($_SESSION['aId2'])) {
    echo "<script> alert('Login First');</script>";
    ?><script> location.replace("../Home/index.php"); </script><?php
    die();
} else {
    $Adid = $_SESSION['aId2'];
   // echo $userid;
}

// Query to fetch financial advisors
$sql = "SELECT user_id , date, purpose,additional_info FROM appointments WHERE  advisor_id ='$Adid'";
$result = $connection->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FINPLAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        

  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">FIN-PLAN</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <!-- Appointment Section -->
                    <a href="view_appoin.php" class="nav-item nav-link"><i class="fa fa-calendar-check me-2"></i>APPOINTMENTS</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
          <!-- Navbar Start -->
          <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Advisor</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <form action="advsr_logout.php" method="post">
                                <button type="submit" name="logout" class="dropdown-item">
                                    Logout <i class="fa fa-arrow-right ms-3"></i>
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


 <!-- Form Start -->

        <form>
            <div class="container-fluid pt-4 px-4 ">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12 ">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Appointments</h6>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0 ">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">User email</th>
                                            <th scope="col">Date </th>
                                            <th scope="col">Purose</th>
                                            <th scope="col">Additional Info</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
if ($result->num_rows > 0) {
    // Loop through each row in the query result
    while ($row = $result->fetch_assoc()) {
        // Calculate progress based on monthly contribution
       
        
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date']) . "</td>";
        echo "<td>" . htmlspecialchars($row['purpose']) . "</td>";
        echo "<td>" . htmlspecialchars($row['additional_info']) . "</td>";
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7' class='text-center'>No goals found.</td></tr>";
}
?>
</tbody>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                                          
                </div>
            </div>
        </form>    
            <!-- Form End -->





         



           <!-- Footer Start -->
           <div class="container-fluid bg-secondary fixed-bottom position-relative text-light   p-0 footer mt-5 pt-4 px-4  wow fadeIn" data-wow-delay="0.1s">
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
                        <a class="btn btn-link" href="">About Us</a><br>
                        <a class="btn btn-link" href="">Contact Us</a><br>
                        <a class="btn btn-link" href="">Our Services</a><br>
                        <a class="btn btn-link" href="">Terms & Condition</a><br>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-uppercase mb-4">Newsletter</h4>
                        <div class="position-relative mb-4">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">nnUp</button>
                        </div>
                        <div class="d-flex pt-1 m-n1">
                            <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row bg-dark">
                        <div class="col-md-6  text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">FINPLAN</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="">FINPLAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>