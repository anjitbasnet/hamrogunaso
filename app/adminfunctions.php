<?php
function createAdminUser($conn,$data)
{
	$data['admin_password'] = md5($data['admin_password']);
	$stmtInsert = $conn->prepare("INSERT INTO tbl_admin (`admin_fname`, `admin_lname`, `admin_email`,
     `admin_contact`, `admin_password`, `admin_image`, `admin_role`, `admin_status`)
     VALUES (:admin_fname, :admin_lname, :admin_email, :admin_contact, :admin_password, :admin_image, :admin_role, :admin_status)");
	$stmtInsert->bindParam(':admin_fname', $data['admin_fname']);
	$stmtInsert->bindParam(':admin_lname', $data['admin_lname']);
	$stmtInsert->bindParam(':admin_email', $data['admin_email']);
	$stmtInsert->bindParam(':admin_contact', $data['admin_contact']);
	$stmtInsert->bindParam(':admin_password',$data['admin_password']);
	$stmtInsert->bindParam(':admin_image',$data['admin_image']);
	$stmtInsert->bindParam(':admin_role', $data['admin_role']);
	$stmtInsert->bindParam(':admin_status', $data['admin_status']);
	if($stmtInsert->execute())
		return true;


	return false;


}


function getAllAdminUsers($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_admin");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}

function getAllAdminUserById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_id=:admin_id");
	$stmtSelect->bindParam(':admin_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function updateAdminUser($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE tbl_admin SET admin_fname=:admin_fname, admin_lname=:admin_lname, admin_email=:admin_email,
    admin_contact=:admin_contact, admin_image=:admin_image, admin_role=:admin_role, admin_status=:admin_status WHERE admin_id=:admin_id');
	$stmtUpdate->bindParam(':admin_fname', $data['admin_fname']);
	$stmtUpdate->bindParam(':admin_lname', $data['admin_lname']);
	$stmtUpdate->bindParam(':admin_email', $data['admin_email']);
	$stmtUpdate->bindParam(':admin_contact', $data['admin_contact']);
	$stmtUpdate->bindParam(':admin_image', $data['admin_image']);
	$stmtUpdate->bindParam(':admin_role', $data['admin_role']);
	$stmtUpdate->bindParam(':admin_status', $data['admin_status']);
    $stmtUpdate->bindParam(':admin_id', $data['admin_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteAdminUser($conn,$id)
{
 $stmtDelete = $conn->prepare("DELETE FROM tbl_admin WHERE admin_id=:admin_id");
 $stmtDelete ->bindparam(':admin_id',$id);
 if($stmtDelete->execute())
 	return true;

 return false;
}



function createUser($conn,$data)
{
	$data['user_password'] = md5($data['user_password']);
	$stmtInsert = $conn->prepare("INSERT INTO tbl_user (`user_fname`, `user_lname`, `user_email`,
     `user_contact`, `user_gender`, `user_password`, `user_image`, `user_role`, `user_status`)
     VALUES (:user_fname, :user_lname, :user_email, :user_contact, :user_gender, :user_password, :user_image, :user_role, :user_status)");
	$data['user_status'] = 'active';
	$stmtInsert->bindParam(':user_fname', $data['user_fname']);
	$stmtInsert->bindParam(':user_lname', $data['user_lname']);
	$stmtInsert->bindParam(':user_email', $data['user_email']);
	$stmtInsert->bindParam(':user_contact', $data['user_contact']);
	$stmtInsert->bindParam(':user_gender', $data['user_gender']);
	$stmtInsert->bindParam(':user_password',$data['user_password']);
	$stmtInsert->bindParam(':user_image',$data['user_image']);
	$stmtInsert->bindParam(':user_role', $data['user_role']);
	$stmtInsert->bindParam(':user_status', $data['user_status']);
	if($stmtInsert->execute())
		return true;


	return false;

}

function getAllUsers($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_user");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}

function getAllUserById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_user WHERE user_id=:user_id");
	$stmtSelect->bindParam(':user_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function updateUser($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE tbl_user SET user_fname=:user_fname, user_lname=:user_lname, user_email=:user_email,
    user_contact=:user_contact,user_gender=:user_gender,user_image=:user_image, user_role=:user_role, user_status=:user_status WHERE user_id=:user_id');
	$stmtUpdate->bindParam(':user_fname', $data['user_fname']);
	$stmtUpdate->bindParam(':user_lname', $data['user_lname']);
	$stmtUpdate->bindParam(':user_email', $data['user_email']);
	$stmtUpdate->bindParam(':user_contact', $data['user_contact']);
	$stmtUpdate->bindParam(':user_gender', $data['user_gender']);
	$stmtUpdate->bindParam(':user_image', $data['user_image']);
	$stmtUpdate->bindParam(':user_role', $data['user_role']);
	$stmtUpdate->bindParam(':user_status', $data['user_status']);
    $stmtUpdate->bindParam(':user_id', $data['user_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteUser($conn,$id)
{
	$stmtDelete = $conn->prepare("DELETE FROM tbl_user WHERE user_id=:user_id");
	$stmtDelete->bindParam(':user_id',$id);
	if($stmtDelete->execute())
		return true;

	return false;
}

function countAllComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countPendingComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='pending'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countApprovedComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='approved'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countRejectedComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='rejected'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countDepartment($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_Department");
	$stmtSelect->execute();
	   if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function countcomplainbydept($conn,$dept_id){

	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE dept_id=$dept_id");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();                            
}

function getComplainPercentageByDepartment($conn,$dept_id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain");
	$stmtSelect->execute();
	$totalComplain = $stmtSelect->rowCount();


	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE dept_id=:dept_id");
	$stmtSelect->bindParam(':dept_id',$dept_id);
	$stmtSelect->execute();
	$departmentTotal =  $stmtSelect->rowCount();   


	return $precentage = ($departmentTotal/$totalComplain)*100;
}

function countOwnComplain($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_complain WHERE comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnApprovedComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='approved' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnPendingComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='pending' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnRejectedComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='rejected' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}