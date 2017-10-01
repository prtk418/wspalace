<?php
class Student extends CI_Model
{

	function add_student($data)
	{
		$student['name'] = $data['name'];
		$student['email'] = $data['email'];
		$student['password'] = $data['password'];

		$q = $this->db->insert('students',$student);
		
		return $this->get_id($student['email']);
	}

	function authenticated($data)
	{
		$email = $data['email'];
		$password = $data['password'];

		$query = $this->db->get_where('students',array('email' => $email,'password' => $password));

		if($query->num_rows() == 1)
			return true;
		else
			return false;

	}

	function get_id($email)
	{
		$q = $this->db->get_where('students',array('email' => $email))->result_array();
		return $q[0]['id'];
	}

}