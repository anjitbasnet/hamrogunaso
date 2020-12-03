<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Department</h3>
                                <?php if(isset($_SESSION['showmsg'])): echo $_SESSION['showmsg']; unset($_SESSION['showmsg']); endif ; ?>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        
                                            <tr>
                                                 <th>S.NO.</th>
                                                <th>Department Name</th>
                                                <th>status</th>
                                                <th>Action</th>
                                               </tr>
                                               <tbody>
                           <?php $Users = getAllDepartment($conn);
                              /*
                              echo'<prev>';
                              print_r($adminUsers); 
                              echo'</pre>';*/
                              if($Users):
                              foreach($Users as $key => $dept):
                              
                              ?>
                              <tr>
                               <td><?php echo ++$key;?></td> 
                                <td><?php echo $dept['dept_name'];?></td>
                               <td>  <?php if($dept['dept_status']=='active'):?>
                                    <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                      <span  class="badge badge-danger">Inactive</span> 
                                    <?php endif; ?> 
                                  </td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="editdepartment.php?ref=<?php echo $dept['dept_id'];?> ">Edit<i class="icon_plus_alt2"></i></a>
                                      

                                      <a href="#" data-url="deletedepartment.php?ref=<?php echo $dept['dept_id'];?>" class="btn btn-xs btn-danger confirm" >Delete
                                <i class="icon-edit bigger-120"></i>
                             </a>
                                  </div>
                                  </td>
                              </tr>
                            <?php endforeach;?>

                            <?php else : ?>
                              <tr>
                                <td colspan="4"> No Department Found</td>
                              </tr>
                            <?php endif; ?>
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

    <script type="text/javascript">

      $('.confirm').click(function(event){
          event.preventDefault();
           var res = confirm('Are sure to delete?');
          
           if(res)
           {
            window.location.href= $(this).data("url")
           }
      });
     
    </script>


</body>

</html>
<!-- end document-->
