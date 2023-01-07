
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

                                <!-- title -->
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    <h2>Student List</h2>
                                    <form class="search-form d-flex align-items-center gap-3" action="#">
                                        <i class="icon-search"></i>
                                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                    </form>
                                </div>

                                <?php include_once('./services/getStudent.php') ?>

                                <!-- content -->
                                <!-- student list -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Photo</th>
                                                        <th>Name</th>
                                                        <th>Course</th>
                                                        <th>Gender</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($studentList > 0) { ?>
                                                        <?php foreach ($studentList as $student) { ?>
                                                            <tr>
                                                                <td class="py-1">
                                                                    <img 
                                                                        src="<?php if ($student['photo'] !== "default.png") { ?>
                                                                                ./img/<?php echo $student['photo'] ?>
                                                                            <?php } else { ?>
                                                                                ./img/default/<?php echo $student['photo'] ?>
                                                                            <?php } ?>" 
                                                                        alt="<?php echo $student['fname']." ".$student['lname'] ?>"
                                                                    >
                                                                </td>
                                                                <td><?php echo $student['fname']." ".$student['lname'] ?></td>
                                                                <td><?php echo $student['course'] ?></td>
                                                                <td><?php echo $student['gender'] ?></td>
                                                                <td>
                                                                    <button class="btn btn-outline-success btn-fw m-0 d-flex align-items-center">
                                                                        <i class="mdi mdi-eye m-0 me-1 d-flex align-items-center"></i>
                                                                        View Student Data
                                                                    </button>
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