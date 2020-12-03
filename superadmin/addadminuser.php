
<?php include 'layouts/header2.php';?>
<?php include 'layouts/sidebar2.php';?>
<?php if(isset($_POST['savebtn']))
{
   $image =  uploadFile($_FILES,'uploads/admin-image');
  $_POST['admin_image'] = $image;

    if(createAdminUser($conn,$_POST))
    {
       showSuccessMsg('User Created Successfully !!!');
       redirection('manageadminuser.php');
    }
}
?>
      

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Admin User</strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                      <label for="exampleInputEmail1">First name</label>
                                      <input type="text"  name="admin_fname" class="form-control" id="admin_fname" placeholder="Enter first name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Last name</label>
                                      <input type="text"  name="admin_lname" class="form-control" id="admin_lname" placeholder="Enter Last name">
                                  </div>

                                  
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="admin_email"class="form-control" id="admin_email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Contact</label>
                                      <input type="text"  name="admin_contact" class="form-control" id="admin_contact" placeholder="Enter contact">
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password"  name="admin_password" class="form-control" id="admin_password" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Confirm Password</label>
                                      <input type="password"class="form-control" id="admin_confirm_password" placeholder="Confirm Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Image</label>
                                      <input type="file"class="form-control" name="file">
                                  </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                      <select class="form-control" name="admin_role" id="admin_role">
                                        <option value=""></option>
                                        <option value="admin">Admin</option>
                                        <option value="Superadmin">SuperAdmin</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                      <label for="exampleInputPassword1">status</label>
                                      <select class="form-control" name="admin_status" id="admin_status">
                                        <option value=""></option>
                                        <option value="active">Active</option>
                                        <option value="in_active">Inactive</option>
                                    </select>
                                </div>
                                </div>
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
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
                                    <p>Copyright © 2018 yubaraj. All rights reserved.</p>
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

    function checkPassword(password,confirm_password,id,confirm_id)
    {
        if(password!=confirm_password)
        {
            $("#"+id).css({"border": "1px solid red"});
            $("#"+confirm_id).css({"border": "1px solid red"});
            $('#'+confirm_id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
                $('#'+confirm_id).css({"border": "1px solid #ddd"});
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
        
       var admin_password = $('#admin_password').val();
       var admin_confirm_password = $('#admin_confirm_password').val();
       console.log(admin_password,admin_confirm_password)
        if(!validateText($('#admin_fname').val(),'admin_fname')
            ||!validateText($('#admin_lname').val(),'admin_lname')
            ||!validateEmail($('#admin_email').val(),'admin_email')
            ||!validatePhone($('#admin_contact').val(),'admin_contact')
            ||!validateText($('#admin_password').val(),'admin_password')
            ||!checkPassword(admin_password,admin_confirm_password,'admin_password','admin_confirm_password')
            ||!validateText($('#admin_role').val(),'admin_role')
            ||!validateText($('#admin_status').val(),'admin_status')
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
<!-- end document-->
