<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Track Complain Status</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        
                                            <tr>
                                                <th>S.No</th> 
                                                <th>Complain Date</th>
                                                <th>Complain Description</th>
                                                <th>Reviewed BY</th>
                                                <th>Reviewed Date</th>
                                                <th>Remark</th>
                                                <th>Status</th>
                                            </tr>
                                        
                                        <tbody>
                             <?php $User = getOwnComplain($conn,$_SESSION['user']['id']);
                              if($User){
                              foreach($User as $key => $comp):
                              
                              ?>

                              <tr>
                               <td><?php echo ++$key;?></td>
                               <td><?php echo $comp['comp_date'];?></td>
                               <td><?php echo $comp['comp_types_of_complain'];?></td>
                                
                                <td><?php echo empty($comp['comp_reviewed_by']) ? 'N/A' : getReviewedBy($conn,$comp['comp_reviewed_by']);?></td>
                                <td><?php echo $comp['comp_reviewed_date'];?></td>
                                
                                
                                  
                                

                                 <td><?php if($comp['comp_remark']=='') echo 'N/A'; 
                                        else echo $comp['comp_remark'];?></td> 


                                  <td>
                                    <?php if($comp['comp_status']=='approved'):?>
                                    <span class="badge badge-success">Approved</span>
                                    <?php elseif($comp['comp_status']=='rejected'):?>
                                    <span class="badge badge-danger">Rejected</span>
                                    <?php else: ?>
                                      <span class="badge  badge-warning">Pending</span>
                                    <?php endif; ?> 
                                  </td>

                               
                              <?php endforeach; } else {?> 
                                    <tr>
                                      <td colspan="7">No Complaints Found</td>
                                      
                                    </tr>

                                 <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
