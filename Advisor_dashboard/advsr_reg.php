<?php
include('db_conn.php'); // Include your database connection file

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);
    $phone= mysqli_real_escape_string($connection, $_POST['phone']);
    $qual= mysqli_real_escape_string($connection, $_POST['qual']);
    $yoe= mysqli_real_escape_string($connection, $_POST['yoe']);
    $description =mysqli_real_escape_string($connection, $_POST['bio']);
    $stat = 1; // Status of the advisor
    
    // Handle file upload
    $photo = $_FILES['profile_picture']['name'];
    $photo_tmp = $_FILES['profile_picture']['tmp_name'];
    $photo_folder = "uploads/advisors/" . $photo;

    // Check if the uploads/advisors folder exists and create if not
    if (!file_exists('uploads/advisors/')) {
        mkdir('uploads/advisors/', 0777, true);
    }

    // Check if the email already exists
    $sql = "SELECT * FROM adv_reg WHERE email ='$email'";
    $result = mysqli_query($connection, $sql);  
    $count = mysqli_num_rows($result);  

    if($count == 1) {  
        echo '<script>alert("User already exists");</script>';
        echo '<script>location.replace("advsr_reg.php");</script>';
        die();
    } elseif (!empty($name) && !empty($email) && !empty($pass) && !empty($photo)) {
        // Hash the password before storing
        $hashed_pass = md5($pass); 

        // Check for file upload errors
        if ($_FILES['profile_picture']['error'] !== UPLOAD_ERR_OK) {
            echo '<script>alert("Error uploading file: ' . $_FILES['profile_picture']['error'] . '");</script>';
        } else {
            // Move the uploaded file to the desired folder
            if(move_uploaded_file($photo_tmp, $photo_folder)) {
                // Insert the new advisor into the database
                $query = "INSERT INTO adv_reg (id, name, email, password, phone, qual, yoe, photo, description, stat) 
                          VALUES (0, '$name', '$email', '$hashed_pass','$phone','$qual','$yoe','$photo','$description','$stat')";
                $query_run = mysqli_query($connection, $query);

                if($query_run) {
                    echo '<script>alert("Successfully Registered");</script>';
                    echo '<script>location.replace("advsr_reg.php");</script>';
                } else {
                    echo '<script>alert("Data Not Saved");</script>';
                }
            } else {
                echo '<script>alert("Photo upload failed. Please check folder permissions.");</script>';
            }
        }
    } else {
        echo '<script>alert("Please fill in all fields.");</script>';
        echo '<script>location.replace("advsr_reg.php");</script>';
    }
}
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
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Registration Form Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>FINPLAN</h3>
                            </a>
                            <h3>Register as Advisor</h3>
                        </div>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingText" name="name" placeholder="John Doe" required>
        <label for="floatingText">Full Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="floatingPhone" name="phone" placeholder="+1234567890" required>
        <label for="floatingPhone">Phone Number</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingQualifications" name="qual" placeholder="Qualifications" required>
        <label for="floatingQualifications">Qualifications</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingExperience" name="yoe" placeholder="Years of Experience" required>
        <label for="floatingExperience">Years of Experience</label>
    </div>
    <div class="form-group mb-4">
        <label for="profilePicture" class="form-label">Upload Profile Picture</label>
        <input class="form-control" type="file" id="profilePicture" name="profile_picture" accept="image/*" required>
    </div>
    <div class="form-floating mb-4">
        <textarea class="form-control" id="floatingBio" name="bio" placeholder="Advisor Bio" style="height: 100px;" required></textarea>
        <label for="floatingBio">Advisor Bio</label>
    </div>
    <button type="submit" value="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
    <p class="text-center mb-0">Already have an Account? <a href="advsr_login.php">Sign In</a></p>
</form>



                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->
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
