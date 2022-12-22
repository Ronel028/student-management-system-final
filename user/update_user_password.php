
<?php include_once('../partials/head.php') ?>
<?php include_once('./services/update_password.php') ?>
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

                                        <!-- condition if user id are have a data -->
                                            <!-- title -->
                                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                                    <h2>Update Password -> <?php echo $userData['fname']." ".$userData['lname'] ?></h2>
                                            </div>
        
                                            <!-- add user form -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">New Password</h4>

                                                    <!-- error display here if have -->
                                                    <?php if (count($error) > 0) { ?>
                                                        <div class="card-title bg-danger py-2 px-1 rounded">
                                                            <ul class="m-0 text-light">
                                                                <?php foreach ($error as $err) { ?>
                                                                    <li><?php echo $err ?></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    <?php } ?>

                                                        <!-- form for add new user -->
                                                        <form method="POST">
                                                            <div>
                                                                <div class="form-group">
                                                                    <label for="u_fname">Password</label>
                                                                    <input 
                                                                        type="password"
                                                                        class="form-control px-2" 
                                                                        id="u_password" 
                                                                        name="u_password" 
                                                                        placeholder="Password"
                                                                    >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="u_fname">Retype Password</label>
                                                                    <input 
                                                                        type="password"
                                                                        class="form-control px-2" 
                                                                        id="u_retypePassword" 
                                                                        name="u_retypePassword" 
                                                                        placeholder="Retype Password"
                                                                    >
                                                                </div>
                                                            </div>
                                                            <button 
                                                                type="submit" 
                                                                class="btn btn-primary me-2 text-light" 
                                                                name="update_password"
                                                            >
                                                                Update Password
                                                            </button>
                                                        </form>
                                                        <!-- form for add new user -->
                                                </div>
                                            </div>
                                        <!-- condition if user id are have a data -->

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