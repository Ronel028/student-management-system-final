<?php include_once('../partials/head.php') ?>

    <div class="container-scroller">
        <!-- navigation -->
        <?php include_once('../partials/navigation.php') ?>

        <div class="container-fluid page-body-wrapper">
            <!-- sidebar -->
            <?php include_once("../partials/sidebar.php") ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Information</h4>
                                    <?php include_once('./userProfile/userProfile.php') ?>
                                    <p class="card-description mb-4">
                                        Profile Information
                                    </p>
                                    <div class="forms-sample">
                                        <div class="w-100 d-flex align-items-center justify-content-center">
                                            <div class="form-group w-75 d-flex align-items-center justify-content-center rounded-circle p-1 bg-secondary">
                                                <img 
                                                src="<?php if ($user['photo'] === "default.png") { ?>
                                                            ./img/default/<?php echo $user['photo'] ?>
                                                        <?php } else { ?>
                                                            ./img/<?php echo $user['photo'] ?>
                                                        <?php } ?>" 
                                                class="w-100 rounded-circle" alt="">
                                            </div>
                                        </div>
                                        <div class="mb-4 text-center">
                                            <h4 class="m-0 fw-bolder">Name</h4>
                                            <p><?php echo $user['fname']." ".$user['lname'] ?></p>
                                        </div>
                                        <div class="mb-4 text-center">
                                            <h4 class="m-0 fw-bolder">Email</h4>
                                            <p><?php echo $user['email'] ?></p>
                                        </div>
                                        <div class="mb-4 text-center">
                                            <h4 class="m-0 fw-bolder">Gender</h4>
                                            <p><?php echo $user['gender'] ?></p>
                                        </div>
                                        <div class="w-100">
                                            <button type="button" class="btn btn-primary w-100">Update Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Profile</h4>
                                    <p class="card-description">
                                        Profile Information
                                    </p>
                                    <form class="forms-sample">
                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="fname">First Name</label>
                                                <input 
                                                    type="text" 
                                                    class="px-2 form-control" 
                                                    id="fname" 
                                                    placeholder="First Name"
                                                    name="fname" 
                                                    value="<?php echo $user['fname'] ?>"
                                                >
                                            </div>
                                            <div class="col form-group">    
                                                <label for="lname">Last Name</label>
                                                <input 
                                                    type="text" 
                                                    class="px-2 form-control" 
                                                    id="lname" 
                                                    placeholder="Last Name"
                                                    name="lname" 
                                                    value="<?php echo $user['lname'] ?>"
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input 
                                                type="email" 
                                                class="px-2 form-control" 
                                                id="email" 
                                                placeholder="Email"
                                                name="email"
                                                value="<?php echo $user['email'] ?>"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="px-2 form-control">
                                                <option 
                                                    value="Male"
                                                    <?php if ($user['gender'] === "Male") { ?>
                                                        selected
                                                    <?php } ?>
                                                >
                                                    Male
                                                </option>
                                                <option 
                                                    value="Female"
                                                    <?php if ($user['gender'] === "Female") { ?>
                                                        selected
                                                    <?php } ?>
                                                >
                                                    Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_image">Photo</label>
                                            <input type="file" class="px-2 h-auto form-control" id="user_image">
                                        </div>
                                        <div class="w-100 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
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

        </div>
    </div>

<?php include_once('../partials/footer.php') ?>