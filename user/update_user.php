
<?php include_once('../partials/head.php') ?>
<?php include_once('./services/updateUser.php') ?>
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
                                        <?php if ($row > 0) { ?>
                                            <?php  //$userData = $user->fetch_assoc() ?>
                                            <!-- title -->
                                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                                    <h2>Update User -> <?php echo $userData['fname']." ".$userData['lname'] ?></h2>
                                            </div>
        
                                            <!-- add user form -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Update User</h4>

                                                    <!-- form for add new user -->
                                                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-6 form-group">
                                                                    <label for="u_fname">First Name</label>
                                                                    <input 
                                                                        type="text" 
                                                                        class="form-control px-2" 
                                                                        id="u_fname" 
                                                                        name="u_fname" 
                                                                        placeholder="First Name"
                                                                        value=<?php echo $userData['fname'] ?>
                                                                    >
                                                                </div>
                                                                <div class="col-6 form-group">
                                                                    <label for="u_lname">Last Name</label>
                                                                    <input 
                                                                        type="text" 
                                                                        class="form-control px-2" 
                                                                        id="u_lname" 
                                                                        name="u_lname" 
                                                                        placeholder="Last Name"
                                                                        value=<?php echo $userData['lname'] ?>
                                                                    >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="u_role">Role</label>
                                                                <select class="form-control" id="u_role" name="u_role">
                                                                    <option selected disabled>--Select Role--</option>
                                                                    <option 
                                                                        value="Admin"
                                                                        <?php if ($userData['role'] === "Admin") { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                        Administrator
                                                                    </option>
                                                                    <option 
                                                                        value="Teacher"
                                                                        <?php if ($userData['role'] === "Teacher") { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                        Teacher
                                                                    </option>
                                                                    <option 
                                                                        value="Student"
                                                                        <?php if ($userData['role'] === "Student") { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                        Student
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="u_email">Email address</label>
                                                                <input 
                                                                    type="email" 
                                                                    class="form-control px-2" 
                                                                    id="u_email" 
                                                                    name="u_email" 
                                                                    placeholder="Email"
                                                                    value=<?php echo $userData['email'] ?>
                                                                >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="u_gender">Gender</label>
                                                                <select class="form-control" id="u_gender" name="u_gender">
                                                                    <option selected disabled>--Select Gender--</option>
                                                                    <option 
                                                                        value="Male"
                                                                        <?php if ($userData['gender'] === "Male") { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                        Male
                                                                    </option>
                                                                    <option 
                                                                        value="Female"
                                                                        <?php if ($userData['gender'] === "Female") { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                    Female
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="u_user_photo">File upload</label>
                                                                <input type="file" class="form-control h-auto px-2" id="u_user_photo" name="u_user_photo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary me-2 text-light" name="update_user">Update User</button>
                                                        </form>
                                                        <!-- form for add new user -->
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <p class="text-danger">No data found</p>
                                        <?php } ?>
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