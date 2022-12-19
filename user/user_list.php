
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
                                            <form class="search-form d-flex align-items-center gap-3" action="#">
                                                <i class="icon-search"></i>
                                                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                            </form>
                                        </div>

                                        <div>
                                            <?php if(isset($_SESSION['registerUser'])) { ?>
                                                <?php
                                                    echo $_SESSION['registerUser'];
                                                    unset($_SESSION['registerUser'])
                                                ?>
                                            <?php } ?>
                                            
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
                                                                            <img 
                                                                                <?php if($user['photo'] !== "") {?>
                                                                                    src=<?php echo "img/".$user['photo'] ?>
                                                                                <?php } else { ?>
                                                                                    src=<?php echo "img/default/default.png" ?>
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
                                                                            <button type="button" class="btn btn-warning btn-md m-0">Edit</button>
                                                                            <button type="button" onclick="deleteUser(<?php echo $user['id'] ?>)" class="btn btn-danger btn-md m-0" id="delete_user">Delete</button>
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

    <script>
        // const deleteUser = document.querySelector('#delete_user')
        // console.log(deleteUser)

        const deleteUser = async(id) =>{
            if(id){
                if(window.confirm("Do you want to delete this user?")){
                    console.log("User ID: " + id)
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