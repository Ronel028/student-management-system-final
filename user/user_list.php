
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
                                            <h2>User List</h2>
                                            <form class="search-form d-flex align-items-center gap-3" action="#">
                                                <i class="icon-search"></i>
                                                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                            </form>
                                        </div>
        
                                        <?php include_once('./services/getUser.php') ?>
        
                                        <!-- content -->
                                        <!-- student list -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Role</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if ($userData > 0) { ?>
                                                                <?php foreach($userData as $user) { ?>
                                                                    <tr>
                                                                        <td class="py-1">
                                                                            <img src="./img/default/default_profile.png" alt="user image">
                                                                        </td>
                                                                        <td><?php echo $user['fname']." ".$user['lname'] ?></td>
                                                                        <td><?php echo $user['email'] ?></td>
                                                                        <td>
                                                                            <?php 
                                                                                if($user['role'] === "admin_admin"){
                                                                                    echo "admin";
                                                                                }else{
                                                                                    echo $user['role'];
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-warning btn-md m-0">Edit</button>
                                                                            <button type="button" class="btn btn-danger btn-md m-0">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- student list -->
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