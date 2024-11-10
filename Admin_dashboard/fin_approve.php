<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FINPLAN - Financial Advisor Approval</title>
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
       
        <!-- Spinner End -->

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
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Financial Advisor Approval</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">
                                        <th scope="col">Advisor Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Qualification</th>
                                        <th scope="col">Approval Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('db_conn.php'); 
                                    $sql = "SELECT name,id, email,phone,qual,stat FROM adv_reg WHERE stat=1";
                                    $result = $connection->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td>" . $row['qual'] . "</td>";
                                            if($row['stat'] == 1){
                                                echo "<td> pending </td>";

                                            
                                                 echo '  <td>                                  
                                                           <form action="approve_fin.php" method="POST">
                                                              <button type="submit"  style="width: 130px;" name="id" class="btn btn-sm btn-success" value="' . htmlspecialchars($row['id']) . '">Approve</button>
                                                           </form> 

                                                           <form action="reject_fin.php" method="POST">
                                                              <button type="submit"  style="width: 130px;" name="id" class="btn btn-sm btn-danger" value="' . htmlspecialchars($row['id']) . '">Reject</button>
                                                           </form> 

                                                      </td>';
                                            }
                                            else{
                                                echo "<td> approved </td>";
                                            }
                                           
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>No financial advisors found</td></tr>";
                                    }
                                    
                                    $connection->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Content End -->
    </div>
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0 text-white">© <a class="text-white" href="#">FINPLAN</a>. All Rights Reserved. Designed by <a class="text-white" href="#">YourName</a></p>
                    </div>
                </div>
            </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>
