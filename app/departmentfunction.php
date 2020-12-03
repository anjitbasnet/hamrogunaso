<?php
function createDepartment($conn,$data)
{
	$stmtInsert = $conn->prepare("INSERT INTO tbl_department (`dept_name`, `dept_status`)
     VALUES (:dept_name,:dept_status)");
	$stmtInsert->bindParam(':dept_name', $data['dept_name']);
	$stmtInsert->bindParam(':dept_status', $data['dept_status']);
	if($stmtInsert->execute())
		return true;

	return false;


}
function getAllDepartment($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_department ");//INNER JOIN tbl_complain ON tbl_department.dept_id=tbl_complain.comp_department");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function getAllDepartmentById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_department WHERE dept_id=:dept_id");
	$stmtSelect->bindParam(':dept_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}
function updateDepartment($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE tbl_department SET dept_name=:dept_name, dept_status=:dept_status WHERE dept_id=:dept_id');
	$stmtUpdate->bindParam(':dept_name', $data['dept_name']);
	$stmtUpdate->bindParam(':dept_status', $data['dept_status']);
    $stmtUpdate->bindParam(':dept_id', $data['dept_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteDepartment($conn,$id)
{
	$stmtDelete = $conn->prepare("DELETE FROM tbl_department WHERE dept_id=:dept_id");
	$stmtDelete->bindParam(':dept_id',$id);
	if($stmtDelete->execute())
		return true;

	return false;
}
