<?php
class Students extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('student');
	}

	function signup()
	{

		$data['fname'] = $this->input->post('fname'); 
		$data['lname'] = $this->input->post('lname');
		$data['name'] = $data['fname'].' '.$data['lname'];
		$data['email'] = $this->input->post('email'); 
		$data['password'] = $this->input->post('password'); 
		$data['cpassword'] = $this->input->post('cpassword');

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('fname','First Name', 'required|trim|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('lname','Last Name', 'required|trim|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('email','Email Address', 'required|trim|valid_email|is_unique[students.email]');
		$this->form_validation->set_rules('password','Password', 'required|trim|alpha_numeric|min_length[8]');
		$this->form_validation->set_rules('cpassword','Password', 'required|trim|alpha_numeric|min_length[8]|matches[password]');
		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('err_msg',validation_errors());
		    echo 'error';

		}else{

			$data['password'] = md5($data['password']);
			$id = $this->student->add_student($data);

			$this->session->set_userdata(
											array(
													'fname'    => $data['fname'],
													'email'    => $data['email'],
													'id'       => $id
												)
										);


			echo print_r($this->session->all_userdata());
		}
	}

	function login()
	{
		$data['email'] = $this->input->post('email'); 
		$data['password'] = $this->input->post('password');

		$this->form_validation->set_rules('email','Email Address', 'required|trim|valid_email');
		$this->form_validation->set_rules('password','Password', 'required|trim|alpha_numeric|min_length[8]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('err_msg',validation_errors());
		    echo 'error';
		}else{

			$data['password'] = md5($data['password']);
			if($this->student->authenticated($data)){

				$id = $this->student->get_id($data['email']);

				$this->session->set_userdata(
												array(	
														'email'    => $data['email'],
														'id'       => $id
													)
											);


				echo print_r($this->session->all_userdata());
			}
			else{
				$this->session->set_flashdata('err_msg','Please check the entered details');
		    	echo 'error';
			}
		}
	}

	public function logout()
	{

		$array_items = array('id' => '', 'email' => '');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('home','refresh');
	}
	

}
