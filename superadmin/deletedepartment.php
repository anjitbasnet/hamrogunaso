
<?php
include 'layouts/header2.php';

$dept_id = $_GET['ref'];

if(deleteDepartment($conn,$dept_id))
{

   showSuccessMsg('Department Deleted Successfully !!!');
      redirection('managedepartment.php');
}