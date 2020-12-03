<?php
session_start();
include '../app/call.php';
if(!checkAdminLogin())
{
redirect('login.php');
}
 $userInfo= getAllAdminUserById($conn,$_SESSION['admin']['id']);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style type="text/css">
        .modal-backdrop{
            z-index: -1;
        }
       /* .header-desktop{
            z-index: -2;
        }*/
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
     
        <!-- END HEADER MOBILE-->
   <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <?php if(!empty($userInfo['admin_image'])): ?>          
                              <div class="follow-ava">
                                  <img src="<?php echo $userInfo['admin_image']; ?>" height="200px">
                              </div>
                              <?php endif; ?>
                                        </div>
                                        <div class="content">
                                           <p><?php echo $userInfo['admin_fname']." ".$userInfo['admin_lname'];  ?></p>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <?php if(!empty($userInfo['admin_image'])): ?>          
                              <div class="follow-ava">
                                  <img src="<?php echo $userInfo['admin_image']; ?>" height="150px">
                              </div>
                              <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <p><?php echo $userInfo['admin_fname']." ".$userInfo['admin_lname'];  ?></p>
                                                    </h5>
                                                     <p><?php echo $userInfo['admin_email']; ?></p>

                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Profile</a>
                                                </div> -->
                                                
                                                <div class="account-dropdown__item">
                                                     <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->