<?php include_once('./services/loginUser.php') ?>

<!-- if user is already login he/she cannot back to this page -->
<?php
    if(isset($_SESSION['role'])){
        header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/dashboard/dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIGN IN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    </head>

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo text-center">
                    <h3>UA University</h3>
                </div>
                

                <!-- display this after you register -->
                <?php if (isset($_SESSION['registerUser'])) { ?>
                    <p class="text-success">
                        <?php
                            echo $_SESSION['registerUser'];
                            unset($_SESSION['registerUser']);
                        ?>
                    </p>
                <?php } ?> 

                <!-- display this login credentials not found -->
                <?php if (isset($_SESSION['loginError'])) { ?>
                    <p class="text-danger">
                        <?php
                            echo $_SESSION['loginError'];
                            unset($_SESSION['loginError']);
                        ?>
                    </p>
                <?php } ?> 


                <h6 class="fw-light">Sign in to continue.</h6>
                <form class="pt-3" method="POST">
                    <div class="form-group">
                        <input 
                            type="email" 
                            class="form-control form-control-lg ps-3" 
                            id="exampleInputEmail1" 
                            placeholder="Username"
                            name="email"
                        >
                    </div>
                    <div class="form-group">
                        <input 
                            type="password" 
                            class="form-control form-control-lg ps-3" 
                            id="exampleInputPassword1" 
                            placeholder="Password"
                            name="password"
                        >
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-end">
                        <button 
                            type="submit" 
                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                            name="login"
                        >
                            SIGN IN
                    </button>
                    </div>
                    <div class="text-center mt-4 fw-light">
                        Don't have an account? <a href="./register.php" class="text-primary">Create</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
