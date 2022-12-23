
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
                                    <?php if ($_SESSION['role'] !== 'Admin') { ?>
                                        <p class="text-danger">This page is for admin role only.</p>
                                    <?php } else { ?>
                                        <!-- title -->
                                        <div class="statistics-details d-flex align-items-center justify-content-between">
                                            <h2>User List</h2>
                                            <div class="d-flex align-items-center gap-4">
                                                <a class="fs-6 fw-light text-dark" href="./user_list.php">Show all user</a>
                                                <form class="search-form d-flex align-items-center gap-3" action="./searchUser.php" method="GET">
                                                    <i class="icon-search"></i>
                                                    <input type="search" class="form-control px-2" name="search_user" placeholder="Search Here" title="Search here">
                                                </form>
                                            </div>
                                        </div>

                                        <div class="card-title">
                                            <!-- session display if the user reg. successfull -->
                                            <?php if(isset($_SESSION['registerUser'])) { ?>
                                                <?php
                                                    echo $_SESSION['registerUser'];
                                                    unset($_SESSION['registerUser'])
                                                ?>
                                            <?php } ?>

                                            <!-- session display if the user update. successfull -->
                                            <?php if(isset($_SESSION['updateUser'])) { ?>
                                                <?php
                                                    echo $_SESSION['updateUser'];
                                                    unset($_SESSION['updateUser'])
                                                ?>
                                            <?php } ?>

                                            <!-- session display if the user update password successfull -->
                                            <?php if(isset($_SESSION['updatePassword'])) { ?>
                                                <?php
                                                    echo $_SESSION['updatePassword'];
                                                    unset($_SESSION['updatePassword'])
                                                ?>
                                            <?php } ?>

                                        </div>
        
                                        <!-- search user -->
                                        <?php

                                            include_once('../database/config.php');

                                            $searchUser = $_GET['search_user'];

                                            $userData = array();

                                            $sql = "SELECT id, fname, lname, role, email, photo FROM account WHERE fname LIKE '%$searchUser%' OR lname LIKE '%$searchUser%'";

                                            $getUser = $connection->query($sql);

                                            if($getUser->num_rows > 0){
                                                for($i = 0; $i < $getUser->num_rows; $i++){
                                                    $users = $getUser->fetch_assoc();
                                                    $userData[] = $users;
                                                }
                                            }
                                        ?>
        
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
                                                            <?php if (count($userData) > 0) { ?>
                                                                <?php foreach($userData as $user) { ?>
                                                                    <tr>
                                                                        <td class="py-1">
                                                                            <img 
                                                                                <?php if($user['photo'] !== "default.png") {?>
                                                                                    src=<?php echo "img/".$user['photo'] ?>
                                                                                <?php } else { ?>
                                                                                    src=<?php echo "img/default/".$user['photo'] ?>
                                                                                <?php } ?>
                                                                                alt=<?php echo $user['fname']." ".$user['lname'] ?>
                                                                            >
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
                                                                            <a href="./update_user_password.php?userID=<?php echo $user['id'] ?>" class="btn btn-primary text-light btn-md m-0">Change Password</a>
                                                                            <a href="./update_user.php?userID=<?php echo $user['id'] ?>" class="btn btn-warning btn-md m-0">Edit</a>
                                                                            <button type="button" onclick="deleteUser(<?php echo $user['id'] ?>)" class="btn btn-danger btn-md m-0" id="delete_user">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr>
                                                                    <td colspan="5"class="py-3 text-center">No data Found</td>
                                                                </tr>
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

    <script>
        const deleteUser = async(id) =>{
            if(id){
                if(window.confirm("Do you want to delete this user?")){
                    const getUserID = await fetch(`./services/deleteUser.php?userID=${id}`, {
                        method: 'delete'
                    })
                    const response = await getUserID.json();
                    console.log(response)
                    if(response === "success"){
                        window.location.reload()
                    }
                }
            }
        }
    </script>

<?php include_once('../partials/footer.php') ?>