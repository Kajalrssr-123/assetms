<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller {
    public function dashboard(){
        $this->load->model('queries');
        $admin=$this->queries->viewalldept();
        $this->load->view('dashboard',['admin'=>$admin]);
    }
        public function dashboarduser(){
            $this->load->view('dashboarduser');
    }
    public function adddept(){
        $this->load->view('adddept');
    }
    public function createdept(){
        $this->form_validation->set_rules('collegename','College Name','required');
		$this->form_validation->set_rules('deptname','Deptartment Name','required');
        $this->form_validation->set_rules('classname','Class Name','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('queries');
            if($this->queries->makedept($data)){
				$this->session->set_flashdata('message','Department added successfully');
				return redirect("Admin/adddept");
			}
			else{
				$this->session->set_flashdata('message','Failed to add department');
				return redirect("Admin/adddept");
			}
        }
		else{
			$this->adddept();
		}
    }
    public function addasset(){
        $this->load->model('queries');
        $d = $this->queries->getdept();
        $c = $this->queries->getclass();
        $this->load->view('addasset',['d'=> $d,'c'=> $c]);
    }
    public function createasset(){
        $this->form_validation->set_rules('assetname','Asset Name','required');
		$this->form_validation->set_rules('deptname','Deptartment Name','required');
        $this->form_validation->set_rules('classname','Class Name','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('queries');
            if($this->queries->makeasset($data)){
				$this->session->set_flashdata('message','Asset added successfully');
				return redirect("Admin/addasset");
			}
			else{
				$this->session->set_flashdata('message','Failed to add asset');
				return redirect("Admin/addasset");
			}
        }
		else{
			$this->addasset();
		}
    }
    
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("user_id"))
            return redirect("welcome/login");
    }
}