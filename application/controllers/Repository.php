<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repository extends CI_Controller {

	private $data = null;

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('repository_model');
	}

	public function search() {

		$this->form_validation->set_rules('search','','required');
		$this->form_validation->set_rules('truncate','','required|trim');
		$this->form_validation->set_rules('states','','');
		$this->form_validation->set_rules('truncate-text','','required');

		if ($this->form_validation->run()) {

			if (empty($this->input->post("states"))) {

				$this->data['search'] = $this->repository_model->return_data_by_truncate($this->input->post("search"),
				$this->input->post("truncate"),$this->input->post("truncate-text"));

			}else {

				$this->data['search'] = $this->repository_model->return_repository_by_sigla($this->input->post("search"),
				$this->input->post("truncate"),$this->input->post("truncate-text"),$this->input->post("states"));
			}

			if (!empty($this->data['search'])) {

				$this->session->set_flashdata('sucess_msg_repository','Link encontrado com sucesso!');

			}else {

				$this->session->set_flashdata('error_msg_repository','Link não encontrado!!');

				redirect('user/sigin');
			}

			if ($this->input->post('type')==='dashboard') {
				
				$this->load->view('admin/dashboard',$this->data);

				return;
			}


			$this->load->view('login',$this->data);

		}else {

			redirect('user/sigin#ancora-repository');
		}
		
	}
}