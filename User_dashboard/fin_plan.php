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
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../Home/index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>FIN-PLAN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                       <img class="rounded-circle" src="img/usr.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Dashboard</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <a href="view_appoinment.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>APPOINTMENTS</a>
                
                    <a href="fin_plan.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>FINANCIAL PLANS</a>
                   
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>GOALS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="view_goal.php" class="dropdown-item">MANAGE GOALS</a>
                            <a href="add_goal.php" class="dropdown-item">ADD GOALS</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>ACCOUNTS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_acc.php" class="dropdown-item">ADD ACCOUNT</a>
                            <a href="view_acc.php" class="dropdown-item">MANAGE ACCOUNTS</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>TRANSACATIONS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="view_trns.php" class="dropdown-item">MANAGE TRANSACTIONS</a>
                            <a href="add_trns.php" class="dropdown-item">ADD TRANSACATIONS</a>
                        </div>
                    </div>
                    <a href="../Home/resource.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>RESOURSES</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/usr.png" alt="" style="width: 40px; height: 40px;">
                            <!--USER NAME DISPLAY SECTION-->
                            <span class="d-none d-lg-inline-flex">USER</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- Financial Plan Form -->
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">CREATE FINANCIAL PLAN</h6>
                <form id="financialPlanForm" method="POST">
                    <!-- Monthly Income -->
                    <div class="mb-3">
                        <label for="monthlyIncome" class="form-label">MONTHLY INCOME</label>
                        <input type="number" class="form-control" id="monthlyIncome" name="monthlyIncome" placeholder="Enter your monthly income" required>
                    </div>

                    <!-- Monthly Expenses -->
                    <div class="mb-3">
                        <label for="monthlyExpenses" class="form-label">MONTHLY EXPENSES</label>
                        <input type="number" class="form-control" id="monthlyExpenses" name="monthlyExpenses" placeholder="Enter your monthly expenses" required>
                    </div>

                    <!-- Current Savings -->
                    <div class="mb-3">
                        <label for="currentSavings" class="form-label">CURRENT SAVINGS</label>
                        <input type="number" class="form-control" id="currentSavings" name="currentSavings" placeholder="Enter your current savings" required>
                    </div>

                    <!-- Financial Goals -->
                    <div class="mb-3">
                        <label for="financialGoal" class="form-label">FINANCIAL GOAL</label>
                        <input type="text" class="form-control" id="financialGoal" name="financialGoal" placeholder="e.g., Buy a House, Retirement" required>
                    </div>

                    <!-- Target Amount -->
                    <div class="mb-3">
                        <label for="targetAmount" class="form-label">TARGET AMOUNT</label>
                        <input type="number" class="form-control" id="targetAmount" name="targetAmount" placeholder="Enter the target amount" required>
                    </div>

                    <!-- Target Date -->
                    <div class="mb-3">
                        <label for="targetDate" class="form-label">TARGET DATE</label>
                        <input type="date" class="form-control" id="targetDate" name="targetDate" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Get Suggestions">
                    </div>
                </form>
            </div>
        </div>

        <!-- Financial Plan Suggestions Display -->
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">YOUR FINANCIAL PLAN SUGGESTIONS</h6>
                <hr>
                <!-- Suggestions will be displayed here -->
                <div id="planSuggestions">
                    <p class="text-muted">Please fill out the form to see your personalized financial plan suggestions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
 <!-- Form End -->


           <!-- Footer Start -->
           <div class="container-fluid bg-secondary text-light footer mt-5 pt-4 px-4 wow fadeIn" data-wow-delay="0.1s">
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
                            Designed By <a class="border-bottom" href="">MURALI KRISHNA</a>
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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#financialPlanForm').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            
            // Get form data
            var monthlyIncome = $('#monthlyIncome').val();
            var monthlyExpenses = $('#monthlyExpenses').val();
            var currentSavings = $('#currentSavings').val();
            var financialGoal = $('#financialGoal').val();
            var targetAmount = $('#targetAmount').val();
            var targetDate = $('#targetDate').val();

            // Simple calculations for suggestions
            var remainingIncome = monthlyIncome - monthlyExpenses;
            var monthsToReachGoal = (targetAmount - currentSavings) / remainingIncome;

            // Generate suggestions
            var suggestions = "<h5>Suggestions:</h5>";
            suggestions += "<ul>";
            suggestions += "<li>To achieve your goal of <strong>" + financialGoal + "</strong>, consider saving <strong>" + remainingIncome + "</strong> per month.</li>";
            suggestions += "<li>With your current savings of <strong>" + currentSavings + "</strong>, you can reach your target amount of <strong>" + targetAmount + "</strong> in approximately <strong>" + Math.ceil(monthsToReachGoal) + "</strong> months.</li>";
            suggestions += "<li>Consider adjusting your monthly expenses to save more towards your goal.</li>";
            suggestions += "</ul>";

            // Display suggestions
            $('#planSuggestions').html(suggestions);
        });
    });
</script>


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








