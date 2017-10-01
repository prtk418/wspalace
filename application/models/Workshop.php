<?php
class Workshop extends CI_Model
{
	function get_dashboard_workshops($id)
	{
		$workshop_objects = $this->db->select('*')
					  ->from('workshops')
					  ->join('applied_workshops' , 'applied_workshops.workshop_id = workshops.id', 'left outer')
					  ->where('student_id',$id)
					  ->get();
		return $workshop_objects->result();
	}

	function get_all_workshops()
	{
		$workshop_objects = $this->db->select('*')
					  ->from('workshops')
					  ->get();
		return $workshop_objects->result();
	}

	function get_relative_workshops($id)
	{
		$all_workshop_objects = $this->get_all_workshops();
		$applied_workshop_objects = $this->get_dashboard_workshops($id);

		foreach ($applied_workshop_objects as $key => $value) {
			foreach ($all_workshop_objects as $key_a => $value_a) {
				if($value->id == $value_a->id)
				{
					$value_a->applied = true;
				}
			}
		}

		return $all_workshop_objects;

	}

	function apply($data)
	{
		$q = $this->db->insert('applied_workshops',$data);
	}
}