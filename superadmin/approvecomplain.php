 <?php include 'layouts/header2.php';


$comp_id = $_GET['ref'];

if(isset($_POST['savebtn']))
{
  
   if(approveComplain($conn,$_POST))
   {
   showSuccessMsg('Complain approved Successfully !!!');
       redirection('viewcomplain.php');
}

}
$userInfo= getAllComplainById($conn,$comp_id);

?>
<?php include 'layouts/sidebar2.php';?>

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
                                           <?php if(isset($_SESSION ['showmsg'])) echo $_SESSION['showmsg']; unset($_SESSION[
                            'showmsg']);?>
                                        <form action="" id="addForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        
                          
                                           
                                  <div class="form-group">
                                      <label class="control-label col-lg-2">Complain description</label>
                                      <div class="col-lg-10">
                                      <input type="text" name="comp_complain_description" value="<?php echo $userInfo['comp_complain_description'];?>"class="form-control" id="comp_complain_description" readonly>
                                    </div>
                                  </div>

                                     <div style="padding: 30px;"> </div>
                                    <?php if(!empty($userInfo['comp_image'])): ?>
                                     
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="content">Image</label>
                                          <div class="col-lg-10">
                                              <img src="../user/<?php echo $userInfo['comp_image']; ?>" height="150px">
                                            </div>
                                      </div>
                                <?php endif; ?>
                              
                                   
                                   <div style="padding: 30px; clear: both;"> </div>

                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="content">Remarks</label>
                                          <div class="col-lg-10">
                                              <textarea name="comp_remark" class="form-control"  id="comp_remark" placeholder="Enter your remarks"></textarea>
                                            </div>
                                     </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="savebtn">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                         <input type="hidden" name="comp_id" value="<?php echo $userInfo['comp_id']; ?>">
                                    </div>
                                </div>
                                
                            </div>
                       
                           
                           
                            
                          
                            
                            
                            
                            
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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

        if(!validateText($('#comp_remark').val(),'comp_remark')
            
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
