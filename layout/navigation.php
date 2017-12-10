
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama'] ?></div>
                    <div class="email"><?php echo $_SESSION['username'] ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <?php 
                                if (isset($_GET['page'])) {
                                    if($_GET['page'] == 'customer') {
                                        echo '<li><a href="index.php?page=customer&menu=editprofile"><i class="material-icons">person</i>Profile</a></li>' ;
                                    } elseif($_GET['page'] == 'admin') {
                                        echo '<li><a href="index.php?page=admin&menu=editprofile"><i class="material-icons">person</i>Profile</a></li>' ;
                                    } elseif($_GET['page'] == 'maskapai') {
                                        echo '<li><a href="index.php?page=maskapai&menu=editprofile"><i class="material-icons">person</i>Profile</a></li>' ;
                                    }
                                }

                             ?>

                            <li role="seperator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    
                    <?php 
                    if (isset($_GET['page'])){
                        if ($_GET['page'] == 'customer') {
                            include 'navcustomer.php';
                        } elseif ($_GET['page'] == 'admin'){
                            include 'navadmin.php';
                        } elseif ($_GET['page'] == 'maskapai'){
                            include 'navmaskapai.php';
                        }
                    } else {
                        include 'login.php';
                    }

                     ?>

                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    