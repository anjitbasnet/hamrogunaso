<?php

function createComplain ($conn,$data)
{
	$data['comp_status'] ='Pending';  
	$data['comp_added_by']= $_SESSION['user']['id'];
	$data['comp_date'] = date('Y-m=d H:i:s');
	//print_r($data);
	$stmtInsert= $conn->prepare("INSERT INTO tbl_complain (`comp_date`,  `comp_types_of_complain`,
	`comp_image`, `comp_complain_description`, `comp_status`, `comp_added_by`, `dept_id`)
     VALUES (:comp_date, :comp_types_of_complain, :comp_image, :comp_complain_description, :comp_status, :comp_added_by, :dept_id)");
	$stmtInsert->bindParam(':comp_date', $data['comp_date']);
	$stmtInsert->bindParam(':comp_types_of_complain',$data['comp_types_of_complain']);
	$stmtInsert->bindParam(':comp_image',$data['comp_image']);
	$stmtInsert->bindParam(':comp_complain_description', $data['comp_complain_description']);
	$stmtInsert->bindParam(':comp_status', $data['comp_status']);
	$stmtInsert->bindParam(':comp_added_by', $data['comp_added_by']);
	$stmtInsert->bindParam(':dept_id', $data['dept_id']);
	if($stmtInsert->execute())
		return true;


	return false;


}

function getAllComplain($conn)
{
    $stmtSelect = $conn->prepare("SELECT * FROM tbl_complain INNER JOIN tbl_user ON tbl_complain.comp_added_by=tbl_user.user_id INNER JOIN tbl_department ON tbl_complain.dept_id=tbl_department.dept_id");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function getAllComplainById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_complain WHERE comp_id=:comp_id");
	$stmtSelect->bindParam(':comp_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function getOwnComplain($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_complain WHERE comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function updateComplain($conn,$data)
{
	$data['comp_reviewed_by']= $_SESSION['admin']['id'];
	$data['comp_reviewed_date'] = date('Y-m=d H:i:s');
	print_r($data);
	$stmtUpdate = $conn->prepare('UPDATE tbl_complain SET comp_status=:comp_status, comp_remark=:comp_remark, comp_reviewed_by=:comp_reviewed_by, comp_reviewed_date=:comp_reviewed_date WHERE comp_id=:comp_id');
	$stmtUpdate->bindParam(':comp_status', $data['comp_status']);
	$stmtUpdate->bindParam(':comp_remark', $data['comp_remark']);
    $stmtUpdate->bindParam(':comp_reviewed_by', $data['comp_reviewed_by']);
	$stmtUpdate->bindParam(':comp_reviewed_date', $data['comp_reviewed_date']);
	$stmtUpdate->bindParam(':comp_id', $data['comp_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function approveComplain($conn,$data)
{
	$data['comp_reviewed_by']= $_SESSION['admin']['id'];
	$data['comp_reviewed_date'] = date('Y-m=d H:i:s');
	$data['comp_status'] ='approved';

	$stmtUpdate = $conn->prepare('UPDATE tbl_complain SET comp_status=:comp_status, comp_image=:comp_image, comp_remark=:comp_remark, comp_reviewed_by=:comp_reviewed_by, comp_reviewed_date=:comp_reviewed_date WHERE comp_id=:comp_id');
	$stmtUpdate->bindParam(':comp_status', $data['comp_status']);
	$stmtUpdate->bindParam(':comp_image',$data['comp_image']);
	$stmtUpdate->bindParam(':comp_remark', $data['comp_remark']);
    $stmtUpdate->bindParam(':comp_reviewed_by', $data['comp_reviewed_by']);
	$stmtUpdate->bindParam(':comp_reviewed_date', $data['comp_reviewed_date']);
	$stmtUpdate->bindParam(':comp_id', $data['comp_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}
function denyComplain($conn,$data)
{
	$data['comp_reviewed_by']= $_SESSION['admin']['id'];
	$data['comp_reviewed_date'] = date('Y-m=d H:i:s');
	$data['comp_status'] ='rejected';

	$stmtUpdate = $conn->prepare('UPDATE tbl_complain SET comp_status=:comp_status, comp_remark=:comp_remark, comp_reviewed_by=:comp_reviewed_by, comp_reviewed_date=:comp_reviewed_date WHERE comp_id=:comp_id');
	$stmtUpdate->bindParam(':comp_status', $data['comp_status']);
	$stmtUpdate->bindParam(':comp_remark', $data['comp_remark']);
    $stmtUpdate->bindParam(':comp_reviewed_by', $data['comp_reviewed_by']);
	$stmtUpdate->bindParam(':comp_reviewed_date', $data['comp_reviewed_date']);
	$stmtUpdate->bindParam(':comp_id', $data['comp_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function getReviewedBy($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_id=:admin_id");
	$stmtSelect->bindParam(':admin_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
	{
		$admin = $stmtSelect->fetch();
		echo $admin['admin_fname']." ".$admin['admin_lname'];
	}

	return false;
}
