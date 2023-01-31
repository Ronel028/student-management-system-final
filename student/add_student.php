
<?php include_once('../partials/head.php') ?>
    
    <!-- this page for admin only    -->
    <?php 
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] !== "Admin"){
                header("Location: http://".$_SERVER['HTTP_HOST']."/sms/student/student_list.php");
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

                                            <!-- error message if have -->
                                            <p id="msg">
                                                <!-- error here -->
                                            </p>

                                            <!-- add student form -->
                                            <form class="form-sample" id="student_form" name="student_form" enctype="multipart/form-data">
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
                                                                <option value="">---SELECT GENDER---</option>
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
                                                                <option value="">---SELECT CIVIL STATUS---</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Widow">Widow</option>
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
                                                    <div class="form-group">
                                                        <label for="student_photo">Photo</label>
                                                        <input 
                                                            type="file" 
                                                            class="form-control h-auto px-2" 
                                                            id="student_photo" 
                                                            name="student_photo"
                                                        >
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- get course from database -->
                                                    <?php include_once('./services/getCourse.php') ?> 
                                                    <div class="form-group">
                                                        <label for="course">Course</label>
                                                        <select id="course" class="form-control px-2" name="course">
                                                            <option value="">---SELECT COURSE---</option>
                                                            <?php if (count($courseList) > 0) { ?>
                                                                <?php foreach ($courseList as $course) { ?>
                                                                    <option value="<?php echo $course['course'] ?>(<?php echo $course['abbreviation'] ?>)">
                                                                        <?php echo $course['course'] ?>(<?php echo $course['abbreviation'] ?>)
                                                                    </option>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </select>
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
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-end">
                                                    <button 
                                                        type="submit" 
                                                        class="text-light btn-primary border-0 py-2 px-3"
                                                        name="add_student"
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

    <!-- code for submit form data and avoid reload page -->
    <script>

        const studentForm = document.querySelector("#student_form")
        const message = document.querySelector("#msg")

        studentForm.addEventListener('submit', async(e) =>{
            e.preventDefault()

            const insertStudent = await fetch('./services/insertStudent.php', {
                method: 'post',
                body: new FormData(studentForm)
            })
            const response = await insertStudent.json()
            if(response.error){
                message.textContent = response.error
                message.classList.add("text-danger")
                message.classList.remove("text-success")
            }else{
                message.textContent = response.status
                message.classList.remove("text-danger")
                message.classList.add("text-success")

                setTimeout(() =>{
                    message.textContent = ""
                }, 4000)

                // reset all the input field
                document.querySelector("#studentNumber").value = ""
                document.querySelector("#fname").value = ""
                document.querySelector("#mname").value = ""
                document.querySelector("#lname").value = ""
                document.querySelector("#gender").selectedIndex = 0
                document.querySelector("#dateOfBirth").value = ""
                document.querySelector("#cstatus").selectedIndex = 0
                document.querySelector("#nationality").value = ""
                document.querySelector("#student_photo").value = ""
                document.querySelector("#course").selectedIndex = 0
                document.querySelector("#phoneNumber").value = ""
                document.querySelector("#email").value = ""
                document.querySelector("#street").value = ""
                document.querySelector("#city").value = ""
                document.querySelector("#stateProvince").value = ""
                document.querySelector("#postalCode").value = ""
            }
        });
    </script>

<?php include_once('../partials/footer.php') ?>