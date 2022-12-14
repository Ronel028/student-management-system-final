
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
                                    <h2>Course</h2>
                                    <form class="search-form d-flex align-items-center gap-3" action="#">
                                        <i class="icon-search"></i>
                                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                    </form>
                                </div>

                                <?php include_once('./services/getCourse.php') ?>

                                <div class="mb-3">
                                    <button 
                                        class="btn btn-primary m-0 d-flex items-center text-light"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#course"
                                    >
                                        <i class="mdi mdi-plus m-0 me-1 d-flex align-items-center"></i>
                                        Add Course
                                    </button>
                                </div>

                                <!-- content -->
                                <!-- student list -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Abbreviation</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php if (count($courseList) > 0) { ?>
                                                        <?php foreach ($courseList as $course) { ?>
                                                            <tr>
                                                                <td><?php echo $course['course'] ?></td>
                                                                <td><?php echo $course['abbreviation'] ?></td>
                                                                <td class="d-flex items-center">
                                                                    <button 
                                                                        class="btn btn-success btn-fw m-0 d-flex align-items-center"
                                                                        id="studentData"
                                                                        data-user-id=""
                                                                    >
                                                                        <i class="mdi mdi-eye m-0 me-1 d-flex align-items-center"></i>
                                                                        View Student Data
                                                                    </button>
                                                                    <a 
                                                                        class="btn btn-warning m-0 d-flex items-center"
                                                                        href="#"
                                                                    >
                                                                        Edit
                                                                    </a>
                                                                    <button 
                                                                        class="btn btn-danger m-0 d-flex items-center"
                                                                        id="deleteStudent"
                                                                        data-studentid=""
                                                                    >
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="3" class="text-center">No data available</td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                    </div>
                                    </div>
                                </div>
                                <!-- student list -->

                                <!-- modal -->
                                <div class="modal fade" id="course" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="title">Course</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-4">
                                                    <label for="course" class="mb-2">Course</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control px-2"
                                                        id="course"
                                                        placeholder="Ex. BSIT"
                                                        name="course"
                                                    >
                                                </div>
                                                <div>
                                                    <label for="abbreviation" class="mb-2">Abbreviation</label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control px-2"
                                                        id="abbreviation"
                                                        placeholder="Ex. Bachelor of Science in Information Technology"
                                                        name="abbreviation"
                                                    >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary m-0 text-light">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <div>
                    </div>
                </div>



                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright ?? 2021. All rights reserved.</span>
                    </div>
                </footer>
            </div>
        </div>
        
    </div>

<?php include_once('../partials/footer.php') ?>