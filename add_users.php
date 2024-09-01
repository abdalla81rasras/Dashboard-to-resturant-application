<?php
include "inc/connection.php";
include "inc/Functions.php";
include "inc/header.php";
?>
                <div class="navbar-nav nv w-100">
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_users.php" class="dropdown-item mb-1">View Users</a>
                            <a href="add_users.php" class="dropdown-item active">Add Users</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-square me-2"></i>Snaks</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_snaks.php" class="dropdown-item mb-1">View Snaks</a>
                            <a href="add_snaks.php" class="dropdown-item">Add Snaks</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-hamburger me-2"></i>Burgers</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_burger.php" class="dropdown-item mb-1">View Burgers</a>
                            <a href="add_burger.php" class="dropdown-item">Add Burgers</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-people-carry me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_orders.php" class="dropdown-item mb-1">View Orders</a>
                            <a href="add_orders.php" class="dropdown-item">Add Orders</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-location-arrow me-2"></i>Locations</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_location.php" class="dropdown-item mb-1">View Locations</a>
                            <a href="add_location.php" class="dropdown-item">Add Locations</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        <?php
            include "inc/navbar.php";
           ?>

            <div class="container-fluid pt-4 px-4">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_all_users" value="<?php echo $id_all_users; ?>">
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-12">
                            <?php if($update==true): ?>
                                <h3 class="text-secondary alert-link">Update Informations User :</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Informations User :</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="id_user" class="form-control" value="<?php echo htmlspecialchars($id_user); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">ID User</label>
                                    <div class="text-primary mt-1"><?php echo $errors['id_user'] ?></div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="full_name" class="form-control" value="<?php echo htmlspecialchars($full_name); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Full Name</label>
                                    <div class="text-primary mt-1"><?php echo $errors['full_name'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Email</label>
                                    <div class="text-primary mt-1"><?php echo $errors['email'] ?></div> 
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">User Name</label>
                                    <div class="text-primary mt-1"><?php echo $errors['username'] ?></div>   
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($phone); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Phone Number</label>
                                    <div class="text-primary mt-1"><?php echo $errors['phone'] ?></div>     
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="location" class="form-control" value="<?php echo htmlspecialchars($location); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Location</label>
                                    <div class="text-primary mt-1"><?php echo $errors['location'] ?></div>     
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-2">
                        <div class="col-md-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_user" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_user" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-2 col-xl-2">
                            <button name="cansel_user" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>
            </div>

<?php 
    include "inc/footer.php";
?>