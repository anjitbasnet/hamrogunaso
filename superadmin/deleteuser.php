
<?php
include 'layouts/header2.php';

$user_id = $_GET['ref'];

if(deleteUser($conn,$user_id))
{

   showSuccessMsg('User Deleted Successfully !!!');
      redirection('manageuser.php');
}