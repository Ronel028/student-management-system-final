
<?php include_once('../partials/head.php') ?>
    
    <!-- this page for admin only    -->
    <?php 
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] !== "Admin"){
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/student/student_list.php");
            }
        }
    ?>
    
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
                                    <h2>Add Student</h2>
                                </div>

                                <!-- content -->
                                <!-- student list -->
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add new student</h4>
                                            <p class="card-description">Personal information</p>

                                            <!-- add student form -->
                                            <form class="form-sample">
                                                <div>
                                                    <div>
                                                        <div class="form-group">
                                                            <label for="studentNumber">Student ID Number</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="studentNumber"
                                                                name="studentNumber"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="fname">First Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="fname"
                                                                name="fname"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="mname">Middle Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="mname"
                                                                name="mname"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="lname">Last Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="lname"
                                                                name="lname"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select id="gender" class="form-control px-2" name="gender">
                                                                <option selected disabled>---SELECT GENDER---</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dateOfBirth">Date of Birth</label>
                                                            <input 
                                                                type="date" 
                                                                class="form-control py-0 px-2"
                                                                id="dateOfBirth"
                                                                name="dateOfBirth"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cstatus">Civil Status</label>
                                                            <select class="form-control" id="cstatus" name="cstatus">
                                                                <option selected disabled>---SELECT CIVIL STATUS---</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Widowed">Widowed</option>
                                                                <option value="Separated">Separated</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nationality">Nationality</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="nationality"
                                                                name="nationality"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <div class="form-group">
                                                            <label for="course">Course</label>
                                                            <select id="course" class="form-control px-2" name="course">
                                                                <option selected disabled>---SELECT COURSE---</option>
                                                                <option value="BSIT">BSIT(Bachelor of Science in Information Technology)</option>
                                                                <option value="BSBA">BSBA(Bachelor of Science in Business Administration)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                <p class="card-description mt-3">
                                                    Contact
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber">Phone Number</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="phoneNumber"
                                                                name="phoneNumber"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="email"
                                                                name="email"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-description mt-3">
                                                    Address
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="street">Street</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="street"
                                                                name="street"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="city"
                                                                name="city"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="stateProvince">State/Province</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="stateProvince"
                                                                name="stateProvince"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="postalCode">Zip/Postal Code</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="postalCode"
                                                                name="postalCode"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-description mt-3">
                                                    Parent/Guardian Contact Information
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="p_name">Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="p_name"
                                                                name="p_name"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="p_address">Address</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="p_address"
                                                                name="p_address"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="p_number">Phone Number</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="p_number"
                                                                name="p_number"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="p_email">Email</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="p_email"
                                                                name="p_email"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-end">
                                                    <button 
                                                        type="submit" 
                                                        class="text-light btn-primary border-0 py-2 px-3"
                                                    >
                                                        ADD STUDENT
                                                    </button>
                                                </div>
                                            </form>
                                            <!-- add student form -->
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