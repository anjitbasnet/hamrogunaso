<?php include 'layouts/header2.php';


$dept_id = $_GET['ref'];

if(isset($_POST['savebtn']))
{
   if(updateDepartment($conn,$_POST))
   {
   showSuccessMsg('Department Updated Successfully !!!');
      redirection('managedepartment.php');
}

}
$userInfo= getAllDepartmentById($conn,$dept_id);

?>
<?php include 'layouts/sidebar2.php';?>
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Department</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form role="form" id="addForm" method="POST">
                                <div class="form-group">
                                      <label for="exampleInputEmail1">Department name</label>

                                      <input type="text"  name="dept_name" value="<?php echo $userInfo['dept_name'];?>" class="form-control" id="dept_name">
                                      
                                  </div>
                                 

                                 <div class="form-group">
                                      <label for="exampleInputPassword1">status</label>
                                        <select class="form-control" name="dept_status" id="dept_status">
                                       
                                        <option <?php if($userInfo['dept_status']=='active') echo 'selected="selected"';?> value="active">Active</option>
                                        <option <?php if($userInfo['dept_status']=='in_active') echo 'selected="selected"';?> value="in_active">Inactive</option>
                                    </select>
                                </div>
                                  
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <input type="hidden" name="dept_id" value="<?php echo $userInfo['dept_id']; ?>">
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

        if(!validateText($('#dept_fname').val(),'dept_name')
            ||!validateText($('#dept_status').val(),'dept_status')
            )
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