
<?php include_once('../partials/head.php') ?>
    
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
                                    <?php if ($_SESSION['role'] === 'teacher') { ?>
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
                                                <form class="forms-sample">
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
                                                        <label for="exampleInputEmail3">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword4">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Gender</label>
                                                        <select class="form-control" id="exampleSelectGender">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>File upload</label>
                                                        <input type="file" name="img[]" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                            <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1">City</label>
                                                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea1">Textarea</label>
                                                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                                    <button class="btn btn-light">Cancel</button>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- add user form -->

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