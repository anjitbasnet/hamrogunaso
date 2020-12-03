<?php
include 'layouts/header2.php';
$admin_id = $_GET['ref'];

if(deleteAdminUser($conn,$admin_id))
{

   showSuccessMsg('User Deleted Successfully !!!');
      redirection('manageadminuser.php');
}
?>