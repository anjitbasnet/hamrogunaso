<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>


            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
         


            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo countAllComplain($conn);?></h2>
                                    <span class="desc">Total Complain</span>
                                    <!-- <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo countApprovedComplain($conn);?></h2>
                                    <span class="desc">Approved Complain</span>
                                    <!-- <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo countPendingComplain($conn);?></h2>
                                    <span class="desc">Pending Complain</span>
                                    <!-- <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo countRejectedComplain($conn);?></h2>
                                    <span class="desc">Rejected Complain</span>
                                    <!-- <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
          
                            <div class="col-xl-12">
                                <!-- TASK PROGRESS-->
                                <div class="task-progress">
                                    <h3 class="title-3">Department Complain</h3>
                                    <div class="au-skill-container">
                                        <?php $department = getAllDepartment($conn);
                                        // print_r($department);
                              // echo'<prev>';
                              // print_r($department); 
                              // echo'</pre>';
                                   if($department):
                              foreach($department as $key => $dept):
                              
                              ?>
                         
                              <div class="au-progress">
                                            <span class="au-progress__title"><?php echo $dept['dept_name'];?></span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="<?php if(getComplainPercentageByDepartment($conn ,$dept['dept_id'])>0){
                                                    echo  getComplainPercentageByDepartment($conn ,$dept['dept_id']);}?>">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                            <?php endforeach;?>

                            <?php else : ?>
                              <tr>
                                <td colspan="4"> No Data Found</td>
                              </tr>
                            <?php endif; ?>
                              
                                        <!-- <div class="au-progress">
                                            <span class="au-progress__title">Department</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
 -->                                        
                                    </div>
                                </div>
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- USER DATA-->
                                 <div class="user-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    
                                    <div class="table-responsive table-data">
                                        <table class="table table-data2">
                                       
                                            <tr>
                                                <th>S.No</th>
                                                <th>FullName</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Gender</th>
                                                <th>Role</th>
                                                <th>status</th>
                                            </tr>
                                        
                                        <tbody>
                           <?php $Users = getAllUsers($conn);
                              /*
                              echo'<prev>';
                              print_r($adminUsers); 
                              echo'</pre>';*/
                              if($Users):
                              foreach($Users as $key => $user):
                              
                              ?>
                              <tr>
                               <td><?php echo ++$key;?></td> 
                               <td><?php echo $user['user_fname']." ".$user['user_lname'];  ?></td>
                                <td><?php echo $user['user_email'];?></td>
                                <td><?php echo $user['user_contact'];?></td>
                                <td><?php echo $user['user_gender'];?></td>
                                 
                                 
                                 <td>
                                  <?php echo ucwords($user['user_role']);?></td>
                                  <td>
                                    <?php if($user['user_status']=='active'):?>
                                    <label class="badge badge-success">Active</label>
                                    <?php else: ?>
                                      <label class="badge badge-danger">in_active</label>
                                    <?php endif; ?> 
                                  </td>
                                  </div>
                                  </td>
                              </tr>
                            <?php endforeach;?>
                                 
                                 <?php else : ?>
                              <tr>
                                <td colspan="7"> No Data Found</td>
                              </tr>
                            <?php endif; ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                <!-- END USER DATA-->
                            </div>
                          
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                               <p>Copyright © 2018 Hamro Gunaso. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->