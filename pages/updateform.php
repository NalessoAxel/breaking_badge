<?php 
ini_set('display_errors','on');
error_reporting(E_ALL);
include('../components/functions.php');
$badges = editBadge($_GET['badgeId']);


?>




<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Dashboard</title>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/b3178bb50e.js"></script>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <nav
                class="navbar navbar-dark text-white bg-danger align-items-start sidebar sidebar-dark accordion bg-gradient-danger p-0">
                <div class="container-fluid d-flex flex-column p-0"><a
                        class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                        href="#">
                        <div class="sidebar-brand-icon rotate-n-15"><i class="fa fa-atom"></i></div>
                        <div class="sidebar-brand-text mx-3"><span>Dashboard</span></div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item"><a class="nav-link" href="profile.php"><i
                                    class="fa fa-user"></i><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link active" href="dashboard.php"><i
                                    class="fa fa-trophy"></i><span>Badges</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i
                                    class="fa fa-user-circle"></i><span>Logout</span></a></li>
                        <li class="nav-item"></li>
                    </ul>
                    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                            id="sidebarToggle" type="button"></button></div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3"
                                id="sidebarToggleTop" type="button"><i class="fa fa-bars"></i></button>
                            <ul class="nav navbar-nav flex-nowrap ml-auto">
                                <div class="d-none d-sm-block topbar-divider"></div>
                                <li class="nav-item dropdown no-arrow">
                                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                            data-toggle="dropdown" aria-expanded="false" href="#"><span
                                                class="d-none d-lg-inline mr-2 text-gray-600 small"><?php       
        foreach(profile() as $profile){ ?>
                                                <?php echo $profile['firstname'].' '.$profile['lastname'];}?></span><img
                                                class="border rounded-circle img-profile"
                                                src="../assets/img/avatar1.jpeg"></a>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a
                                                class="dropdown-item" href="#"><i
                                                    class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                                class="dropdown-item" href="#"><i
                                                    class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a
                                                class="dropdown-item" href="#"><i
                                                    class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity
                                                log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                                    class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
<div class="container">
<h3 class="m-5">Update Badge <?=$badges['name_badge']; ?></h3>
<form class="m-5" action="update.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-6 mx-2">
                                <input type="hidden" name="badgeId" value="<?=$badges['id_badge']; ?>">
                                <label for="badgeId">Badge Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="<?=$badges['name_badge']; ?>" />
                            </div>
                            
                            <div class="form-group col-3">
                                <label for="desc">Shape</label>
                                <input type="text" name="shape" class="form-control"
                                    value="<?=$badges['shape_badge']; ?>" />
                            </div>
                            <div class="form-group col-1">
                                <label for="color_badge">Color</label>
                                <input type="color" name="color" class="form-control"
                                    value="<?=$badges['color_badge']; ?>" /></p>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-10 mx-2">
                                <label for="desc">Description</label>
                                <input type="text" name="desc" class="form-control" value="<?=$badges['description_badge']; ?>">
                            </div>

                        </div>
                        <div class="form-row">
                        <div class="form-group mx-3">
                        <input type="submit" class="btn btn-danger "value="Update">
                        </div>
                        </div>
                        
                    </form>


</div>
                    

                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Carbone 2021</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <script src="../assets/bootstrap/js/jquery.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>