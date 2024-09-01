<?php
include "inc/connection.php";
include "inc/Functions.php";
include "inc/header.php";

?>
                <div class="navbar-nav nv w-100">
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_users.php" class="dropdown-item mb-1">View Users</a>
                            <a href="add_users.php" class="dropdown-item">Add Users</a>
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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-location-arrow me-2"></i>Locations</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_location.php" class="dropdown-item mb-1">View Locations</a>
                            <a href="add_location.php" class="dropdown-item active">Add Locations</a>
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
                    <input type="hidden" name="id_location" value="<?php echo $id_location; ?>">
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-12">
                            <?php if($update==true): ?>
                                <h3 class="text-secondary alert-link">Update Location :</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Location :</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputGroupFile">Select Image</label>
                                    <input type="file" name="img_location" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputGroupFile">
                                </div>
                                <div class="text-primary mt-1"><?php echo $errors['img_location'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-primary my-2"><?php echo $errors['edit_img_location'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_location ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_location" class="form-control" value="<?php echo htmlspecialchars($title_location); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Title</label>
                                    <div class="text-primary mt-1"><?php echo $errors['title_location'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="phonen_location" class="form-control" value="<?php echo htmlspecialchars($phonen_location); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Phone Number</label>
                                    <div class="text-primary mt-1"><?php echo $errors['phonen_location'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-2">
                        <div class="col-md-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_location" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_location" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-2 col-xl-2">
                            <button name="cansel_location" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>            
            </div>

<?php 
    include "inc/footer.php";
?>