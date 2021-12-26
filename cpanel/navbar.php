<?php session_start(); require('../lib/lib.php') ?>
<div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php if (isset($_SESSION['taikhoan'])) { $username = $_SESSION['taikhoan']; echo '.';avt($username); }else{echo 'assets/images/users/avatar-null.gif';} ?>" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <?php if (isset($_SESSION['taikhoan'])) {
                                    echo $_SESSION['taikhoan'];
                                }else{
                                    echo 'Null';
                                }?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome ! <?php if (isset($_SESSION['taikhoan'])) {
                                    echo $_SESSION['taikhoan'];
                                }else{
                                    echo 'Null';
                                }?></h6>
                            </div>

                            <!-- item-->
                            <a href="extras-profile.php" class="dropdown-item notify-item">
                                <i class="remixicon-account-circle-line"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="remixicon-settings-3-line"></i>
                                <span>Settings</span>
                            </a> -->

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="?thoat=thoat" class="dropdown-item notify-item">
                                <i class="remixicon-logout-box-line"></i>
                                <span>Logout</span>
                            </a>
                            <?php if (isset($_GET['thoat'])) {
                                    unset($_SESSION['taikhoan']);
                                    header("location: index.php");
                                } ?>
                        </div>
                    </li>
        

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="../public/image/logo_new.png" alt="" height="50">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets\images\logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
    
                </ul>
            </div>