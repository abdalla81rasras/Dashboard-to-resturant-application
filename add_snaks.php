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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-square me-2"></i>Snaks</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_snaks.php" class="dropdown-item mb-1">View Snaks</a>
                            <a href="add_snaks.php" class="dropdown-item active">Add Snaks</a>
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
                    <input type="hidden" name="id_snaks" value="<?php echo $id_snaks; ?>">
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-12">
                            <?php if($update==true): ?>
                                <h3 class="text-secondary alert-link">Update Snak :</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Snak :</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="snack_name" class="form-control" value="<?php echo htmlspecialchars($snack_name); ?>" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Snack Name</label>
                                    <div class="text-primary mt-1"><?php echo $errors['snack_name'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="snack_meal_price" class="form-control" value="<?php echo htmlspecialchars($snack_meal_price); ?>" min="0" step="0.00001" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Snack Meal Price ( JOD )</label>
                                    <div class="text-primary mt-1"><?php echo $errors['snack_meal_price'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-md-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="snack_sandwich_price" class="form-control" value="<?php echo htmlspecialchars($snack_sandwich_price); ?>" min="0" step="0.00001" id="floatingInput" placeholder=" ">
                                    <label for="floatingInput">Snack Sandwich Price ( JOD )</label>
                                    <div class="text-primary mt-1"><?php echo $errors['snack_sandwich_price'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-2">
                        <div class="col-md-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_snack" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_snack" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-2 col-xl-2">
                            <button name="cansel_snack" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>            
            </div>

<?php 
    include "inc/footer.php";
?>