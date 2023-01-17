
<?php include_once('../partials/head.php') ?>
<?php ob_start() ?>
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

                                <!-- import update student file -->
                                <?php include_once("./services/updateStudent.php") ?>

                                <!-- title -->
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    <h2>Update Student -> <?php echo $student['fname'].' '. $student['lname'] ?></h2>
                                </div>


                                <!-- content -->
                                <!-- student list -->
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-description">Personal information</p>

                                            <!-- error message if have -->
                                            <p id="msg">
                                                <!-- error here -->
                                            </p>

                                            <!-- add student form -->
                                            <form class="form-sample" id="student_form" name="student_form" enctype="multipart/form-data" method="post">
                                                <div>
                                                    <div>
                                                        <div class="form-group">
                                                            <label for="u_studentNumber">Student ID Number</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_studentNumber"
                                                                name="u_studentNumber"
                                                                value="<?php echo $student['student_id'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="u_fname">First Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_fname"
                                                                name="u_fname"
                                                                value="<?php echo $student['fname'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="u_mname">Middle Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_mname"
                                                                name="u_mname"
                                                                value="<?php echo $student['mname'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="u_lname">Last Name</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_lname"
                                                                name="u_lname"
                                                                value="<?php echo $student['lname'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_gender">Gender</label>
                                                            <select class="form-control px-2" id="u_gender" name="u_gender">
                                                                <option 
                                                                    value="Male"
                                                                    <?php if ($student['gender'] === "Male") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                Male
                                                                </option>
                                                                <option 
                                                                    value="Female"
                                                                    <?php if ($student['gender'] === "Female") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                    Female
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_dateOfBirth">Date of Birth</label>
                                                            <input 
                                                                type="date" 
                                                                class="form-control py-0 px-2"
                                                                id="u_dateOfBirth"
                                                                name="u_dateOfBirth"
                                                                value="<?php echo $student['dateOfBirth'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_cstatus">Civil Status</label>
                                                            <select class="form-control" id="u_cstatus" name="u_cstatus">
                                                                <option 
                                                                    value="Single"
                                                                    <?php if ($student['civilStatus'] === "Single") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                    Single
                                                                </option>
                                                                <option 
                                                                    value="Married"
                                                                    <?php if ($student['civilStatus'] === "Married") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                    Married
                                                                </option>
                                                                <option 
                                                                    value="Widow"
                                                                    <?php if ($student['civilStatus'] === "Widow") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                    Widow
                                                                </option>
                                                                <option 
                                                                    value="Separated"
                                                                    <?php if ($student['civilStatus'] === "Separated") { ?>
                                                                        selected
                                                                    <?php } ?>
                                                                >
                                                                    Separated
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_nationality">Nationality</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_nationality"
                                                                name="u_nationality"
                                                                value="<?php echo $student['nationality'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-group">
                                                        <label for="u_student_photo">Photo</label>
                                                        <input 
                                                            type="file" 
                                                            class="form-control h-auto px-2" 
                                                            id="u_student_photo" 
                                                            name="u_student_photo"
                                                        >
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- temporary data for course -->
                                                    <?php include_once('./services/getCourse.php'); ?>
                                                    <!-- temporary data for course -->
                                                    <div class="form-group">
                                                        <label for="u_course">Course</label>
                                                        <select id="u_course" class="form-control px-2" name="u_course">
                                                            <?php if(count($courseList) > 0 ) { ?>
                                                                <?php foreach ($courseList as $course) { ?>
                                                                    <option 
                                                                        value="<?php echo $course['course'] ?>(<?php echo $course['abbreviation'] ?>)"
                                                                        <?php $studentCourse = $course['course'].'('.$course['abbreviation'].')' ?>
                                                                        <?php if ($student['course'] === $studentCourse) { ?>
                                                                            selected
                                                                        <?php } ?>
                                                                    >
                                                                        <?php echo $course['course'] ?>(<?php echo $course['abbreviation'] ?>)
                                                                    </option>
                                                                <?php } ?>
                                                            <?php }else{ ?>
                                                                <?php 
                                                                    include_once('../database/config.php');
                                                                    
                                                                    $studentID = $_GET['studentID'];

                                                                    // get student course data query
                                                                    $getStudentCourseQuery = "SELECT course FROM student_list WHERE id=$studentID";
                                                                    $getStudentCourse = $connection->query($getStudentCourseQuery);
                                                                    $studentCourse = $getStudentCourse->fetch_assoc();

                                                                    $connection->close();
                                                                ?>
                                                                <option value="<?php echo $studentCourse['course'] ?>">
                                                                    <?php echo $studentCourse['course'] ?>
                                                                </option>
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
                                                            <label for="u_phoneNumber">Phone Number</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_phoneNumber"
                                                                name="u_phoneNumber"
                                                                value="<?php echo $student['phoneNumber'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_email">Email</label>
                                                            <input 
                                                                type="email" 
                                                                class="form-control px-2"
                                                                id="u_email"
                                                                name="u_email"
                                                                value="<?php echo $student['email'] ?>"
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
                                                            <label for="u_street">Street</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_street"
                                                                name="u_street"
                                                                value="<?php echo $student['street'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_city">City</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_city"
                                                                name="u_city"
                                                                value="<?php echo $student['city'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_stateProvince">State/Province</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_stateProvince"
                                                                name="u_stateProvince"
                                                                value="<?php echo $student['stateProvince'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="u_postalCode">Zip/Postal Code</label>
                                                            <input 
                                                                type="text" 
                                                                class="form-control px-2"
                                                                id="u_postalCode"
                                                                name="u_postalCode"
                                                                value="<?php echo $student['zipCode'] ?>"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-end">
                                                    <button 
                                                        type="submit" 
                                                        class="text-light btn-primary border-0 py-2 px-3"
                                                        name="update_student"
                                                    >
                                                        UPDATE STUDENT
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
    <!-- <script>

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
    </script> -->

<?php include_once('../partials/footer.php') ?>