<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                          <div class="col-md-12"> 
                            
                       
                            </div>
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">View Complain</h3>
                                 
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                       
                                           <tr>
                                 <th>S.No.</th>
                                 <th>Added By</th>
                                  <th>Date</th>
                                  <th> Department</th>
                                  <th>Type Of Complain</th>
                                  <!-- <th>complain description</th> -->
                                 <th>Status</th>
                                 <th> Action</th>
                              </tr>
                                      <tbody>
                             <?php $User = getAllComplain($conn);
                              //dump($User);
                              if($User){
                              foreach($User as $key => $comp):
                              
                              ?>
                              <tr>
                               <td><?php echo ++$key;?></td>
                                <td><?php echo ucwords($comp['user_fname']." ".$comp['user_lname']);?></td>
                                <td><?php echo $comp['comp_date'];?></td>
                                <td><?php echo ucwords($comp['dept_name']);?></td>
                                <td><?php echo $comp['comp_types_of_complain'];?></td>
                                <!-- <td><?php echo $comp['comp_complain_description'];?></td> -->
                                <td>
                                    <?php if($comp['comp_status']=='approved'):?>
                                    <span class="badge badge-success">Approved</span>
                                    <?php elseif($comp['comp_status']=='rejected'):?>
                                    <span class="badge badge-danger">Rejected</span>
                                    <?php else: ?>
                                      <span class="badge  badge-warning">Pending</span>
                                    <?php endif; ?> 
                                  </td>

                              <td>
                                  <div class="btn-group">
                                    <button data-toggle="modal" data-target="#largeModal<?php echo $comp['comp_id']; ?>" class="btn btn-primary"><i class="icon_check_alt2"></i>View</button>
                                      

                                      <a class="btn btn-success" href="approvecomplain.php?ref=<?php echo $comp['comp_id'];?>"><i class="icon_check_alt2"></i>Approve</a>
                                      <a class="btn btn-danger" href="denycomplain.php?ref=<?php echo $comp['comp_id'];?>"><i class="icon_close_alt2"></i>Deny</a>
                                      

                                  </div>
                                  </td>
                              </tr>
                                <!-- modal large -->
                                <div  class="modal fade" id="largeModal<?php echo $comp['comp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content" style="margin-top: 100px;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="largeModalLabel">Complain Description</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>
                                          <?php echo $comp['comp_complain_description'];?>
                                        </p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                       
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end modal large -->
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
                            <div class="col-md-12">
                                <div class="copyright">
                                   <p>Copyright © 2018 Hamro Gunaso. All rights reserved.</p>
                                </div>
                            </div>
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
