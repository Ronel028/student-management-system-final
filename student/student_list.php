
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

                                <!-- content -->
                                <!-- student list -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>First name</th>
                                                        <th>Amount</th>
                                                        <th>Deadline</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face1.jpg" alt="image">
                                                        </td>
                                                        <td>Herman Beck</td>
                                                        <td>$ 77.99</td>
                                                        <td>May 15, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face2.jpg" alt="image">
                                                        </td>
                                                        <td>Messsy Adam</td>
                                                        <td>$245.30</td>
                                                        <td>July 1, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face3.jpg" alt="image">
                                                        </td>
                                                        <td>John Richards</td>
                                                        <td>$138.00</td>
                                                        <td>Apr 12, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face4.jpg" alt="image">
                                                        </td>
                                                        <td>Peter Meggik</td>
                                                        <td>$ 77.99</td>
                                                        <td>May 15, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face5.jpg" alt="image">
                                                        </td>
                                                        <td>Edward</td>
                                                        <td>$ 160.25</td>
                                                        <td>May 03, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face6.jpg" alt="image">
                                                        </td>
                                                        <td>John Doe</td>
                                                        <td>$ 123.21</td>
                                                        <td>April 05, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../images/faces/face7.jpg" alt="image">
                                                        </td>
                                                        <td>Henry Tom</td>
                                                        <td>$ 150.00</td>
                                                        <td>June 16, 2015</td>
                                                    </tr>
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