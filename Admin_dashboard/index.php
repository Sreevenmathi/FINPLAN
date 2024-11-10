<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FinPlan Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">FIN-PLAN</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>BLOGS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">ADD BLOG</a>
                            <a href="#" class="dropdown-item">VIEW BLOGS</a>
                            <a href="#" class="dropdown-item">MANAGE BLOGS</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user-check me-2"></i>ADVISORS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="fin_approve.php" class="dropdown-item">APPROVE ADVISORS</a>
                            <a href="view_fin.php" class="dropdown-item">VIEW ADVISORS</a>
                        </div>
                    </div>
                    <a href="view_feedback.php" class="nav-item nav-link"><i class="fas fa-comments me-2"></i>FEEDBACK</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
             <!-- Navbar Start sidebar-toggler -->
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
                            <img class="rounded-circle me-lg-2" src="" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           <!-- <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>-->

                          <form action="adm_logout.php" method="post">
                              <button type="submit"  name="logout"class="dropdown-item">Logout
                                <i class="fa fa-arrow-right ms-3"></i></button> 
                         </form> 
                            
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Main Content Start -->
            <div class="container-fluid pt-4 px-4">
                <h3 class="mb-4">Admin Dashboard</h3>
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-file-alt fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Blogs</p>
                                <h6 class="mb-0">12</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-user-check fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Approved Advisors</p>
                                <h6 class="mb-0">8</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Feedback Received</p>
                                <h6 class="mb-0">25</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Footer Start -->
            <div class="container-fluid bg-secondary text-light footer mt-5 pt-4 px-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">FINPLAN</a>, All Rights Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            Designed By <a class="border-bottom" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
