<?php include_once("./services/insertUser.php") ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REGISTER</title>
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
                <h6 class="fw-light">Register new user.</h6>
                <form class="pt-3" method="POST">
                    <div class="row">
                        <div class="form-group col">
                            <input 
                                type="text" 
                                class="form-control form-control-lg ps-3" 
                                name="fname" 
                                id="fname" 
                                placeholder="First name"
                            >
                        </div>
                        <div class="form-group col">
                            <input 
                                type="text" 
                                class="form-control form-control-lg ps-3" 
                                name="lname" 
                                id="lname" 
                                placeholder="Last Name"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="role" id="role" class="form-control form-control-lg">
                            <option selected disabled>---Role---</option>
                            <option value="admin">Administrator</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input 
                            type="email" 
                            class="form-control form-control-lg" 
                            id="email" 
                            name="email" 
                            placeholder="Email"
                        >
                    </div>
                    <div class="form-group">
                        <input 
                            type="password" 
                            class="form-control form-control-lg" 
                            id="password" 
                            name="password" 
                            placeholder="Password"
                        >
                    </div>
                    <div class="form-group">
                        <input 
                            type="password" 
                            class="form-control form-control-lg" 
                            id="retypePassword" 
                            name="retypePassword" 
                            placeholder="Retype Password"
                        >
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-end">
                        <button 
                            type="submit" 
                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                            name="register"
                        >
                            REGISTER
                        </button>
                    </div>
                    <div class="text-center mt-4 fw-light">
                        Have an account? <a href="./login.php" class="text-primary">Sign in</a>
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
