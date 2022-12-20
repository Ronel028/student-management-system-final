
<?php include_once('../partials/head.php') ?>
<?php include_once('./services/addUser.php') ?>
    <?php ob_start(); ?>
    <div class="container-scroller">

        <!-- navigation -->
        <?php include_once("../partials/navigation.php") ?>

        <div class="container-fluid page-body-wrapper">
            <!-- sidebar -->
            <?php include_once("../partials/sidebar.php") ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">

                                <?php if (isset($_SESSION['role'])) { ?>
                                    <?php if ($_SESSION['role'] === 'Teacher') { ?>
                                        <p class="text-danger">This page is for admin role only.</p>
                                    <?php } else { ?>
                                        <!-- title -->
                                        <div class="statistics-details d-flex align-items-center justify-content-between">
                                            <h2>Add User</h2>
                                        </div>
        
                                        <!-- add user form -->
                                        <div class="card">
                                            <div class="card-body">

                                                <h4 class="card-title">New User</h4>

                                                <!-- add user error display -->
                                                <?php if (count($errorList) > 0) { ?>
                                                    <div class="card-title bg-danger py-2 px-1 rounded">
                                                        <ul class="m-0 text-light">
                                                            <?php foreach ($errorList as $error) { ?>
                                                                <li><?php echo $error ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                <?php } ?>

                                                <!-- form for add new user -->
                                                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-6 form-group">
                                                            <label for="fname">First Name</label>
                                                            <input type="text" class="form-control px-2" id="fname" name="fname" placeholder="First Name">
                                                        </div>
                                                        <div class="col-6 form-group">
                                                            <label for="lname">Last Name</label>
                                                            <input type="text" class="form-control px-2" id="lname" name="lname" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <select class="form-control" id="role" name="role">
                                                            <option selected disabled>--Select Role--</option>
                                                            <option value="Admin">Administrator</option>
                                                            <option value="Teacher">Teacher</option>
                                                            <option value="Student">Student</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input type="email" class="form-control px-2" id="email" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control px-2" id="password" name="password" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="retypePassword">Retype Password</label>
                                                        <input type="password" class="form-control px-2" id="retypePassword" name="retypePassword" placeholder="Retype Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gender">Gender</label>
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option selected disabled>--Select Gender--</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_photo">File upload</label>
                                                        <input type="file" class="form-control h-auto px-2" id="user_photo" name="user_photo">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary me-2 text-light" name="add_user">Add New User</button>
                                                </form>
                                                <!-- form for add new user -->

                                            </div>
                                        </div>

                                    <?php } ?>
                                <?php } ?>

                            </div>
                        <div>
                    </div>
                </div>



                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                    </div>
                </footer>
            </div>
        </div>
        
    </div>

<?php include_once('../partials/footer.php') ?>