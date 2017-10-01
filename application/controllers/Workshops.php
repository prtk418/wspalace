<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshops extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('workshop');
    }

	function show()
	{
		$this->load->view('header');
		if ( ! $this->session->userdata('id'))
        { 
        	$data['workshops'] = $this->workshop->get_all_workshops();
            $this->load->view('workshops',$data);
        }
        else
        {
        	$data['workshops'] = $this->workshop->get_relative_workshops($this->session->userdata('id'));
        	$this->load->view('workshops',$data);
        }
		$this->load->view('footer');

	}

	function dashboard()
	{
		if ( ! $this->session->userdata('id'))
        { 
            redirect('home', 'refresh');
        }
		$data['workshops'] = $this->workshop->get_dashboard_workshops($this->session->userdata('id'));
		$this->load->view('header');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}

	function apply()
	{
		$data['workshop_id'] = $this->input->post('w_id');
		$data['student_id'] = $this->input->post('s_id');

		if($data['student_id']){

			$this->workshop->apply($data);

			echo 'success';
		}else{

			$this->session->set_flashdata('err_msg','You must login first!!!');
		    echo 'error';

		}

	}	

}
