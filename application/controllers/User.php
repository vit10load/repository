<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('repository_model');
		$this->load->library('session');

	}

	public function index() {

		$this->load->view("register.php");
	}

	public function register_user(){

		$user=array(
			'user_name'=>$this->input->post('user_name'),
			'user_email'=>$this->input->post('user_email'),
			'user_password'=>md5($this->input->post('user_password')),
			'user_age'=>$this->input->post('user_age'),
			'user_mobile'=>$this->input->post('user_mobile'),
			'user_type'=>$this->input->post('user_type')
		);
		
		$email_check=$this->user_model->email_check($user['user_email']);

		if(!($email_check) AND ($this->input->post('user_password_confirm')
			===$this->input->post('user_password') AND $this->input->post('codigo')==='18ff3401-66Cf-475b-ba96-da35cc1f8064')){

			$this->user_model->register_user($user);

		$this->session->set_flashdata('success_msg', '');

		redirect('user/sigin');

	}
	else{

		$this->session->set_flashdata('error_msg', '');

		redirect('user/signup');


	}

}

public function sigin() {

	$data['repository'] = $this->repository_model->return_all_repositorys();

	$this->load->view("login",$data);

}

function login_user(){ 

	$user_login=array(

		'user_email'=>$this->input->post('user_email'),
		'user_password'=>md5($this->input->post('user_password'))

	); 

	$data['users']=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);

	if (!empty($data['users'])) {

		$this->session->set_userdata('user_id',$data['users'][0]['user_id']);

		$this->session->set_userdata('user_email',$data['users'][0]['user_email']);

		$this->session->set_userdata('user_name',$data['users'][0]['user_name']);

		$this->session->set_userdata('user_age',$data['users'][0]['user_age']);

		$this->session->set_userdata('user_mobile',$data['users'][0]['user_mobile']);

		$this->session->set_userdata('user_type',$data['users'][0]['user_type']);

			//TODO: FAZER REDIRECT PARA DASHBOARD

		redirect('admin/dashboard');

	}else {

		$this->session->set_flashdata('error_msg_login', '');

		redirect('user/sigin');
	}


}


public function return_user_name() {

	$name = $this->input->post('user_name');

	$data['arr']=$this->user_model->return_user_by_name($name);

	$this->load->view('user_profile.php',$data);
}

public function profile(){

	$this->load->view('profile.php');

}

public function logout(){

	$this->session->sess_destroy();

	redirect('user/sigin', 'refresh');
}

public function exclude_user(){

	$id = $this->input->post('user_id');

	$this->user_model->excluir_usuario($id);

	redirect('user/login_user');
}

public function list_user(){

	$this->return_user_name();
}


public function update_user(){

	$user_id = $this->input->post('user_id');
	$name = $this->input->post('user_name');
	$user_email = $this->input->post('user_email');
	$user_age = $this->input->post('user_age');

	$user_mobile = $this->input->post('user_mobile');
	$user_type = $this->input->post('user_type');

	$data  = array(
		'user_name' => $name,
		'user_email' => $user_email,
		'user_age' => $user_age,
		'user_mobile' => $user_mobile,
		'user_type' => $user_type
	);

	$this->user_model->update_user_by_id($data,$user_id);

	redirect('user/list_user');
}

}
