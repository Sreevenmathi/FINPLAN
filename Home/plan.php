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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
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


    
    <!-- Page Header End -->

<!-- Financial Plans Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Plans</p>
            <h1 class="text-uppercase mb-4">Explore Financial Plans</h1>
            <p>Choose a plan that best suits your financial needs and goals. From budgeting to saving, these plans will guide you in managing your finances effectively.</p>
        </div>
        
        <div class="row g-5">
            <!-- Plan 1 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img height=300px; src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.HgcCRaTVkrFsH1fm8g-NPgAAAA%26pid%3DApi&f=1&ipt=69dbd6c80d31ae7a717409485d89141ae0fa9dcd21fd6cfdfc18f83c66b85cbc&ipo=images" class="card-img-top" alt="50/30/20 Rule">
                    <div class="card-body">
                        <h5 class="card-title">50/30/20 Rule</h5>
                        <p class="card-text">The 50/30/20 rule allocates 50% of income to essentials, 30% to discretionary spending, and 20% to savings and debt repayment. This plan helps in balanced budgeting for overall financial health.</p>
                    </div>
                </div>
            </div>
            
            <!-- Plan 2 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img height=300px; src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FI%2F91QPG949OzL._AC_SL1500_.jpg&f=1&nofb=1&ipt=305e25d4fabe7e575c72590a65ce3694c8d97c633c00006763eecf6d4b2f463d&ipo=images" class="card-img-top" alt="Envelope Budgeting System">
                    <div class="card-body">
                        <h5 class="card-title">Envelope Budgeting System</h5>
                        <p class="card-text">With the envelope system, allocate funds into categories like groceries, rent, and entertainment using envelopes. This helps prevent overspending by restricting spending within budget limits.</p>
                    </div>
                </div>
            </div>
            
            <!-- Plan 3 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img height=300px; src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ispringsolutions.com%2Fblog%2Fwp-content%2Fuploads%2F2019%2F03%2Fpreview-5.jpg&f=1&nofb=1&ipt=1e9d54f8cb7a886a18e40a016e0f87d1cb4ef95e04e330f5244b7c2fc1bb593e&ipo=images" class="card-img-top" alt="70/20/10 Rule">
                    <div class="card-body">
                        <h5 class="card-title">70/20/10 Rule</h5>
                        <p class="card-text">This plan allocates 70% of income to living expenses, 20% to savings and investments, and 10% to debt repayments. It’s a straightforward plan for managing long-term financial goals.</p>
                    </div>
                </div>
            </div>
            
            <!-- Plan 4 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img height=300px; src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi0.wp.com%2Fbooks-that-can-change-your-life.net%2Fwp-content%2Fuploads%2F2020%2F03%2F80-20-rule.png%3Fresize%3D1024%252C512%26ssl%3D1&f=1&nofb=1&ipt=e77dff669cdc3d14f4719a2223416918d183484a3fba5465313c7c754cc3bd46&ipo=images" class="card-img-top" alt="80/20 Rule">
                    <div class="card-body">
                        <h5 class="card-title">80/20 Rule</h5>
                        <p class="card-text">The 80/20 rule is simple: 80% of your income goes towards expenses, while 20% is saved. It’s an easy plan to follow if you want a straightforward budgeting method.</p>
                    </div>
                </div>
            </div>
            
            <!-- Plan 5 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img height=300px; src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.educba.com%2Facademy%2Fwp-content%2Fuploads%2F2020%2F10%2FZero-Based-Budgeting.jpg&f=1&nofb=1&ipt=9d7f3261fe297b100c577031245ed685989d537957d0ae502a0586002037bbd9&ipo=images" class="card-img-top" alt="Zero-Based Budgeting">
                    <div class="card-body">
                        <h5 class="card-title">Zero-Based Budgeting</h5>
                        <p class="card-text">This budgeting plan allocates every dollar to a specific category, including savings and expenses, resulting in a zero balance at the end of each month for meticulous financial control.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Financial Plans End -->

    






    <!-- Footer Start -->
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
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>