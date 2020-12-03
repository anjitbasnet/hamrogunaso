<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>
<?php 
if(isset($_POST['savebtn']))
{

  if(!empty($_FILES['file']['name']))
   {
    $image =  uploadFile($_FILES,'uploads/comp-image');
    $_POST['comp_image'] = $image;
   }
   else
   {
      $_POST['comp_image'] ='';
   }
 

    if(createComplain($conn,$_POST))
    {
       showSuccessMsg('Complain register Successfully !!!');
    }
}

?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Complain</strong> Registration
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="addForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <?php if(isset($_SESSION ['showmsg'])) echo $_SESSION['showmsg']; unset($_SESSION[
                                        'showmsg']);?>
                          
                                            <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Type of Complain</label>
                                            <div class="col-lg-10">
                                              <input type="text" name="comp_types_of_complain" class="form-control"  id="comp_types_of_complain" placeholder="Enter your complain title">
                                            </div>
                                          </div>
                                        
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Department</label>
                                             
                                            <div class="col-lg-10">
                                                <select class="form-control" name="dept_id" id="dept_id"  value="" placeholder="choose Department ">
                                                    <option >Choose Department</option>
                                                   <?php $User= getAllDepartment($conn);
                              
                                                   /* echo'<prev>';
                                                print_r($User); 
                                                   echo'</pre>';*/
                                                foreach($User as $key => $dept):
                              
                                              ?>

                                              <option value="<?php echo $dept['dept_id'];?>" ><?php echo $dept['dept_name'];?></option>

                                                      <?php endforeach;?>
                                                </select>
                                            </div>
                                          </div>
                                           <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Image</label>
                                            <div class="col-lg-10">
                                              <input type="file" class="form-control" name="file">
                                            </div>
                                          </div>
                                        
                                          <!-- Content -->
                                            <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Complaint Description</label>
                                            <div class="col-lg-10">
                                              <textarea name="comp_complain_description" class="form-control"  id="comp_complain_description" placeholder="Enter your Complain Here"></textarea>
                                            </div>
                                          </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="savebtn">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                
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

        function validateText(text,id)
    {
        var textPattern = /^[a-zA-Z0-9!-”$%&’()*\+,\/;\[\\\]\/\s^_.`{|}~]+$/;
            if (!textPattern.test(text)) {
            $("#"+id).css({"border": "1px solid red"});
            $('#'+id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;
            }
            else
            {
                return true;
            }
    }

    $('#addForm').submit(function(){
        
        var number = /[0-9 -()+]+$/;

        if(!validateText($('#comp_types_of_complain').val(),'comp_types_of_complain')
           ||!validateText($('#comp_department').val(),'comp_department')
            ||!validateText($('#comp_complain_description').val(),'comp_complain_description'))
        {
            return false;
        }
        else
        {
            $('#addForm').submit();
        }

       
    });
      </script>

</body>

</html>
<!-- end document-->
