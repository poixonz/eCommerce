<?php
	
	$filepath = realpath(dirname(__FILE__));

	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');

?>

<?php


class ChangePass {
	
	private $db;
	private $fm;	
	public function __construct() {
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function changePassword($oldPass, $newPass){

		$oldPass		 = mysqli_real_escape_string($this->db->link, $oldPass);
		$newPass	 = mysqli_real_escape_string($this->db->link, $newPass);
		$pass = md5($oldPass);
		$npass = md5($newPass);
		$query = "SELECT * FROM tbl_admin WHERE adminPass = '$pass'";
		$result = $this->db->select($query);
		if($result){		

			$queryUp = "UPDATE tbl_admin 
			SET 
			adminPass = '$npass' WHERE adminPass = '$pass'";
			$result = $this->db->update($queryUp);
			if(isset($result)){
				return "<span class='success'>Updated Password Successfully !</span> ";
			}	
		} else{
			return "<span class='error'>Password didn't update successfully !</span> ";
		}

	}
}

?>