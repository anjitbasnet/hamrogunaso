 
 <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-blue.png" alt="KIST" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                   <?php if(!empty($userInfo['user_image'])): ?>          
                              <div class="image img-cir img-120">
                                  <img src="<?php echo $userInfo['user_image']; ?>" height="50x">
                              </div>
                              <?php endif; ?>
                     <p><?php echo ucwords($userInfo['user_fname']." ".$userInfo['user_lname']);  ?></p>
                        
               

                <div>
                                    <?php if($userInfo['user_status']=='active'):?>
                                    <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                      <span class="badge  badge-danger">Inactive</span>
                                    <?php endif; ?> 
                        </div>
                        
                            <div class="account-dropdown__item">
                                                    <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
</div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-home"></i>Home
                                
                            </a>
                            <li class="has-sub">
                            <a class="js-arrow" href="registercomplain.php">
                                <i class="fas  fa-file-text"></i>Register complain
                               
                            </a>
                        </li>
                        
                         <li class="has-sub">
                            <a class="js-arrow" href="trackcomplainstatus.php">
                                <i class="fas  fa-dot-circle-o"></i>Track Complain Status
                               
                            </a>
                           
                        </li>
                        
                    
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->