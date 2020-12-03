<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                          <div class="col-md-12">
                            <table class="searchtable">
                              <tr>
                                <td>
                                <input type="text" id="user_fname" name="search btn" placeholder="Search user Here">
                 
                                </td>
                                <td>
                                  <button type="button" name="searchbtn" id="searchbtn" class="btn btn-primary"> Search </button>
                                </td>

                              </tr>
                            </table>
                       
                            </div>
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">View Complain</h3>
                                 
                                
                                       
                                    
                                 
                             <div class="form-group">
                                  <label class="control-label col-lg-2">Complain </label>
                                     <div class="col-md-12" >
                                      <textarea name="comp_complain_description" class="form-control" id="comp_complain_description"><?php echo $User = getAllComplain($conn)?>;</textarea>
                                     </div>
                             
                              
                           
                              
                              
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
