<?php include 'layouts/header2.php';


$user_id = $_GET['ref'];

if(isset($_POST['savebtn']))
{
  if(!empty($_FILES['file']['name']))
   {
    $image =  uploadFile($_FILES,'../uploads/user-image');
    $_POST['user_image'] = $image;
  }
   if(updateUser($conn,$_POST))
   {
   showSuccessMsg('User Updated Successfully !!!');
      redirection('manageuser.php');
}

}
$userInfo= getAllUserById($conn,$user_id);

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
                                        <strong>Edit User</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form role="form" id="addForm" method="POST">
                                <div class="form-group">
                                      <label for="exampleInputEmail1">First name</label>
                                      <input type="text"  name="user_fname" value="<?php echo $userInfo['user_fname'];?>" class="form-control" id="user_fname" placeholder="Enter first name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Last name</label>
                                      <input type="text" name="user_lname" value="<?php echo $userInfo['user_lname'];?>"class="form-control" id="user_lname" placeholder="Enter Last name">
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="user_email" value="<?php echo $userInfo['user_email'];?>" class="form-control" id="user_email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Contact</label>
                                      <input type="text" name="user_contact" value="<?php echo $userInfo['user_contact'];?>" class="form-control" id="user_contact" placeholder="Enter contact">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label><br>
                                     <input type="radio" name="user_gender" value="male" id="user_gender"> Male <input type="radio" name="user_gender" value="female" id="user_gender"> Female <input type="radio" name="user_gender" value="other" > Other
                                  </div>
                                   <?php if(!empty($userInfo['user_image'])): ?>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Image</label>
                                     <img src="../user/<?php echo $userInfo['user_image']; ?>" height="200px">
                                  </div>
                                  <?php endif; ?>
                                   <div class="form-group">
                                      <label for="exampleInputPassword1">Role</label>
                                      <select class="form-control" name="user_role" id="user_role">
                                     
                                        <option  <?php if($userInfo['user_role']=='teacher') echo 'selected="selected"';  ?> value="teacher">teacher</option>
                                        <option  <?php if($userInfo['user_role']=='student') echo 'selected="selected"';  ?> value="student">student</option>
                                        <option  <?php if($userInfo['user_role']=='staff') echo 'selected="selected"';   ?> value="staff">staff</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                      <label for="exampleInputPassword1">status</label>
                                        <select class="form-control" name="user_status" id="user_status">
                                       
                                        <option <?php if($userInfo['user_status']=='active') echo 'selected="selected"';?> value="active">Active</option>
                                        <option <?php if($userInfo['user_status']=='in_active') echo 'selected="selected"';?> value="in_active">Inactive</option>
                                    </select>
                                </div>
                                  
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <input type="hidden" name="user_id" value="<?php echo $userInfo['user_id']; ?>">
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

    function validateEmail(email,id)
    {
        var emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

         if (!emailPattern.test(email)) {
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

    function validatePhone(phone,id)
    {
         var phonePattern = /^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/;
         if (!phonePattern.test(phone)) {
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

        if(!validateText($('#user_fname').val(),'user_fname')
            ||!validateText($('#user_lname').val(),'user_lname')
            ||!validateEmail($('#user_email').val(),'user_email')
            ||!validatePhone($('#user_contact').val(),'user_contact')
            ||!validateText($('#user_role').val(),'user_role')
            ||!validateText($('#user_status').val(),'user_status')
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