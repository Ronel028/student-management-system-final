
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
                                                                <td class="d-flex items-center">
                                                                    <button 
                                                                        class="btn btn-success btn-fw m-0 d-flex align-items-center"
                                                                        id="studentData"
                                                                        data-user-id="<?php echo $student['id'] ?>"
                                                                        data-bs-toggle="modal" 
                                                                        data-bs-target="#student"
                                                                    >
                                                                        <i class="mdi mdi-eye m-0 me-1 d-flex align-items-center"></i>
                                                                        View Student Data
                                                                    </button>
                                                                    <a 
                                                                        class="btn btn-warning m-0 d-flex items-center"
                                                                    >
                                                                        Edit
                                                                    </a>
                                                                    <a 
                                                                        class="btn btn-danger m-0 d-flex items-center"
                                                                        href="./services/deleteStudent.php?student=<?php echo $student['id'] ?>"
                                                                    >
                                                                        Delete
                                                                    </a>
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

                                <!-- modal -->
                                    <div class="modal fade" id="student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="title"></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mb-4">
                                                        <div class="col-5">
                                                            <div style="width: 100%; height: 150px;" class="border border-2 bg-secondary">
                                                                <img
                                                                    class="w-100 h-100"
                                                                    id="stu_studentPhoto" 
                                                                    src="" 
                                                                    alt=""
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <p class="fw-bold m-0">Student ID</p>
                                                            <p class="fs-6" id="stu_id"></p>
                                                        </div>
                                                    </div>
                                                    <p class="fst-italic m-0 text-dark text-center">---- Student Information ----</p>
                                                    <div class="row mb-2">
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">First Name</p>
                                                            <p class="fs-6" id="stu_fname"></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Middle Name</p>
                                                            <p class="fs-6" id="stu_mname"></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Last Name</p>
                                                            <p class="fs-6" id="stu_lname"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Gender</p>
                                                            <p class="fs-6" id="stu_gender"></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Date Of Birth</p>
                                                            <p class="fs-6" id="stu_dob"></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Civil Status</p>
                                                            <p class="fs-6" id="stu_cstatus"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Nationality</p>
                                                            <p class="fs-6" id="stu_nationality"></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="fw-bold m-0">Course</p>
                                                            <p class="fs-6" id="stu_course"></p>
                                                        </div>
                                                    </div>
                                                    <p class="fst-italic m-0 text-center">---- Contact Information ----</p>
                                                    <div class="row mb-4">
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">Contact Number</p>
                                                            <p class="fs-6" id="stu_phoneNumber"></p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">Email</p>
                                                            <p class="fs-6" id="stu_email"></p>
                                                        </div>
                                                    </div>
                                                    <p class="fst-italic m-0 text-center">---- Address ----</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">Street</p>
                                                            <p class="fs-6" id="stu_street"></p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">City</p>
                                                            <p class="fs-6" id="stu_city"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">State/Province</p>
                                                            <p class="fs-6" id="stu_state"></p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="fw-bold m-0">Zip/Postal Code</p>
                                                            <p class="fs-6" id="stu_zipCode"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- modal -->

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

    <script>
        const studentData = document.querySelectorAll("#studentData")
        console.log(studentData)
        studentData.forEach(viewData =>{
            viewData.addEventListener('click', async() =>{
                const userID = viewData.getAttribute('data-user-id')
                const getStudent = await fetch(`./services/getStudentById.php?userID=${userID}`)
                const response = await getStudent.json()

                const dob = new Date(response.Student.dateOfBirth)
                const option = { year: 'numeric', month: 'short', day: 'numeric' }

                document.querySelector("#title").textContent = "Student -> " + response.Student.fname + " " + response.Student.lname
                document.querySelector("#stu_id").textContent = response.Student.student_id
                document.querySelector("#stu_fname").textContent = response.Student.fname
                document.querySelector("#stu_mname").textContent = response.Student.mname
                document.querySelector("#stu_lname").textContent = response.Student.lname
                document.querySelector("#stu_gender").textContent = response.Student.gender
                document.querySelector("#stu_dob").textContent = dob.toLocaleDateString('en-us', option)
                document.querySelector("#stu_cstatus").textContent = response.Student.civilStatus
                document.querySelector("#stu_nationality").textContent = response.Student.nationality
                document.querySelector("#stu_course").textContent = response.Student.course
                document.querySelector("#stu_phoneNumber").textContent = response.Student.phoneNumber
                document.querySelector("#stu_email").textContent = response.Student.email
                document.querySelector("#stu_street").textContent = response.Student.street
                document.querySelector("#stu_city").textContent = response.Student.city
                document.querySelector("#stu_state").textContent = response.Student.stateProvince
                document.querySelector("#stu_zipCode").textContent = response.Student.zipCode
                if(response.Student.photo !== "default.png"){
                    document.querySelector("#stu_studentPhoto").src = `./img/${response.Student.photo}`
                }
                else{
                    document.querySelector("#stu_studentPhoto").src = `./img/default/${response.Student.photo}`
                }

            })
        })
    </script>

<?php include_once('../partials/footer.php') ?>