 
 <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo-blue.png" alt="KIST" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                     <?php if(!empty($userInfo['admin_image'])): ?>          
                              <div class="image img-cir img-120">
                                  <img src="<?php echo $userInfo['admin_image']; ?>" height="50x">
                              </div>
                              <?php endif; ?>
                     <div class="">
                              <p><?php echo $userInfo['admin_fname']." ".$userInfo['admin_lname'];  ?></p>
                            </div>  

                       <div>
                                    <?php if($userInfo['admin_status']=='active'):?>
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
                            <a class="js-arrow" href="viewcomplain.php">
                                <i class="fas fa-list-alt"></i>view complain
                               
                            </a>
                        </li>
                        
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Admin
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="addadminuser.php">
                                        <i class="fas fa-users"></i>Add Admin User</a>
                                </li>
                                <li>
                                    <a href="manageadminuser.php">
                                        <i class="fas fa-users"></i>Manage Admin User</a>
                                </li>
                               
                                
                            </ul>
                             <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Department
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="adddepartment.php">
                                        <i class=" fas fa-building"></i>Add Department</a>
                                </li>
                                <li>
                                    <a href="managedepartment.php">
                                        <i class="fas fa-building"></i>Manage Department</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                        
                            
                                <li>
                                    <a href="manageuser.php">
                                        <i class="fas fa-users"></i>Manage User</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                    
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->