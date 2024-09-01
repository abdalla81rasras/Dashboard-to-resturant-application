 <?php 
 include "connection.php";
 ?>
            <style>
                .shearch{
                    border-top-right-radius: 0px;
                    border-bottom-right-radius: 0px;
                }

                .btn-search{
                    border-top-left-radius: 0px;
                    border-bottom-left-radius: 0px;
                    border-left: 1px solid #F99225;
                }
            </style>
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                    <img src="img/Website Logo.png" style="width:50px;">
                </a>
                <a href="#" class="sidebar-toggler text-primary flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="col-4 d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0 shearch" type="search" name="search" id="search" value=""  placeholder="search">
                    <button class="btn btn-transperent bg-dark btn-search" onclick="return toPages();"><i class="fa fa-search"></i></button>
                </div>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <?php 
                            $query="SELECT `order_name` FROM `orders`";
                            $result=mysqli_query($conn , $query);                           
                        ?>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <?php  while($row=mysqli_fetch_assoc($result)): ?>
                                <a href="view_orders.php" class="dropdown-item">
                                    <h6 class="fw-normal text-primary mb-0"><?php echo $row['order_name']; ?></h6>
                                    <small class="text-primary">minutes ago</small>
                                </a>
                                <hr class="dropdown-divider">
                            <?php  endwhile; ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/Website Logo.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Clever Mind</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item text-primary">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <script src="js/searech.js"> </script>
            <!-- Navbar End -->