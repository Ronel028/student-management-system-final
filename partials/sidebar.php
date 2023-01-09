<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="../dashboard/dashboard.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- only the admin role can see this code -->
        <?php if (isset($_SESSION['role'])) { ?>
            <?php if ($_SESSION['role'] === 'Admin') { ?>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#toggle-user" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon fa-solid mdi mdi-account-multiple"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="toggle-user">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../user/user_list.php">Users List</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../user/add_user.php">Add User</a></li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        <?php } ?>
        

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#toggle-student" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon fa-solid fa-graduation-cap"></i>
                <span class="menu-title">Students</span>
                <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="toggle-student">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="../student/student_list.php">Student List</a></li>

                    <!-- this is visible for admin user only -->
                    <?php if (isset($_SESSION['role'])) { ?>
                        <?php if ($_SESSION['role'] === "Admin") { ?>
                            <li class="nav-item"> <a class="nav-link" href="../student/add_student.php">Add Student</a></li>
                        <?php } ?>
                    <?php } ?>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Forms and Datas</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">pages</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">help</li>
        <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>