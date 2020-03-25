<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Karachi");
	}


	public function index($page = 'signin')
	{
		if($this->session->userdata('user_session_data'))
		{
			return redirect(base_url('dashboard'));
		}

		if (!file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst('Forcast');
		$this->load->view($page, $data);
	}

	
	public function do_signin()
	{
		$data = array
		(
			'email'    => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);

		$result = $this->HomeModel->user_auth($data);

		if($result)
		{
			$user_data = array(
				'user_session_data' => (array) $result
			);
			$this->session->set_userdata($user_data);
			redirect(base_url('dashboard'));
		}
		else
		{
			$this->session->set_flashdata('danger', 'Invalid Credentials');
			redirect(base_url());
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('user_session_data');
		redirect(base_url());
	}


	public function signup($page = 'signup')
	{
		if($this->session->userdata('user_session_data'))
		{
			return redirect(base_url('dashboard'));
		}
		
		if (!file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst('Weather Api');
		$this->load->view($page, $data);
	}


	public function do_signup()
	{
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('phone', 'Phone', 'required');

		if ($this->form_validation->run() == FALSE) 
		{
			$page = 'signup';
			$data['title']  = ucfirst($page);
			$this->load->view($page, $data);
		} 
		else 
		{
			
			$data['full_name']  = $this->input->post('full_name');
			$data['email'] 		= $this->input->post('email');
			$data['password']	= md5($this->input->post('password'));
			$data['phone'] 		= $this->input->post('phone');
			$data['created_at'] = date_time();

			if($_FILES && $_FILES['profile_pic'] && $_FILES['profile_pic']['name']!="")
			{
				$_FILES['profile_pic']['name'] = rename_file($_FILES['profile_pic']['name']);
				$file_upload_status = image_upload('profile_pic','user_images');
				if($file_upload_status['status']){
					$file = $file_upload_status['file_name'];
					$data['profile_pic'] = $file;

				} else {
					echo "fail";
				}

			}

			$this->HomeModel->add_user($data);	
			$this->session->set_flashdata('success', 'SignUp Successfully.');
			redirect(base_url());
		}
		
	}

	public function dashboard($page = 'dashboard')
	{
		if(!$this->session->userdata('user_session_data')){
			return redirect(base_url());
		}
		if (!file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$api_url = 'https://api.darksky.net/forecast/4343e3fd6fecf0ea30ab86864213226e/31.5204,-74.3587';
		$forcast = json_decode(file_get_contents($api_url));
		$data['temp'] = $forcast->currently->temperature;
		
		$data['title'] = ucfirst($page);
		$this->load->view($page, $data);
	}


	

	


    
}
