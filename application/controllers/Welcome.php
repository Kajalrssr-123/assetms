<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	public function index()
	{
		$this->load->model('queries');
		$chkAdminExist = $this->queries->chkAdminExist();
		$this->load->view('home',['chkAdminExist'=>$chkAdminExist]);
	}
	public function adminRegister(){
		$this->load->view('register');
		
	}
	public function adminSignup(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$data = $this->input->post();
			$data['password']=$this->input->post('password');
			$this->load->model('queries');
			if($this->queries->registerAdmin($data)){
				$this->session->set_flashdata('message','Registered successfully');
				return redirect("Welcome/adminregister");
			}
			else{
				$this->session->set_flashdata('message','Failed to register');
				return redirect("Welcome/adminregister");
			}
		}
		else{
			$this->adminRegister();
		}
	}
	public function login(){
		if($this->session->userdata('user_id'))
			return redirect("Admin/dashboard");
		$this->load->view('login');
	}
	public function signin(){
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		
		if($this->form_validation->run()){
			$email =$this->input->post('email');
			$password =$this->input->post('password');
			
			$this->load->model('queries');
			$userExist = $this->queries->adminExist($email,$password);

			if($userExist){
				$sessionData =array(
				'user_id'=>$userExist->user_id,
				'username'=>$userExist->username,
				'email'=>$userExist->email,
				'admin_id'=>$userExist->admin_id);
				$this->session->set_userdata($sessionData);
				if($userExist->admin_id==1){
					return redirect('Admin/dashboard');
				}
				if($userExist->admin_id!=1){
					return redirect('Admin/dashboarduser');
				}
			}
			else{
				$this->session->set_flashdata('message','Email or Password is Incorrect');
				return redirect('welcome/login');
			}
	}
	else{
		$this->login();
	}
}
public function logout(){
	$this->session->unset_userdata('user_id');
	return redirect('welcome/login');
}
}
