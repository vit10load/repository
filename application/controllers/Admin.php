<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $data = null;

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('repository_model');

		$this->data['repo'] = $this->repository_model->return_all_repositorys();
	}

	public function dashboard(){

		if ($this->session->has_userdata('user_id') != null) {

			$this->load->view('admin/dashboard', $this->data);

		}else {

			redirect('user/sigin');
		}

	}

	public function create() {

		$this->form_validation->set_rules('region', '', 'required|min_length[5]');
		$this->form_validation->set_rules('description', '', 'required|min_length[5]');
		$this->form_validation->set_rules('link', '', 'required|min_length[5]');
		$this->form_validation->set_rules('states','','required|max_length[2]|trim');

		if ($this->form_validation->run()) {
			
			$data = array(

				'region' => $this->input->post('region'),
				'description' => $this->input->post('description'),
				'link' => $this->input->post('link'),
				'sigla' => $this->input->post('states')
			);


			if ($this->repository_model->createRepository($data)) {

				$this->session->set_flashdata('success_msg', 'Repositório cadastrado com sucesso!');

			}else {

				$this->session->set_flashdata('error_msg','Erro ao cadastrar repositório!');
			}

			redirect('admin/dashboard');

		}else {
			
			$this->session->set_flashdata('error_msg','Erro ao cadastrar repositório!');

			redirect('admin/dashboard');
		}

	}

	public function delete(){


		$val = ($this->repository_model->delete_repository($this->input->post('id_repo'))==true) ? $this->session->set_flashdata('success_msg','Excluido com sucesso!')
		: $this->session->set_flashdata('error_msg','Falha Na Operação!');

		if($val){

			redirect('admin/dashboard');

		}else {

			redirect('admin/dashboard');
		}

	}

	public function repository(){

		$id = $this->input->post('id_repo');

		$this->data['data_update'] = $this->repository_model->return_repository_by_id($id);

		$this->dashboard();

	}

	public function update(){

		$this->form_validation->set_rules('region', '', 'required|min_length[5]');
		$this->form_validation->set_rules('description', '', 'required|min_length[5]');
		$this->form_validation->set_rules('link', '', 'required|min_length[5]');

		if ($this->form_validation->run()) {
			
			$data = array(

				'region' => $this->input->post('region'),
				'description' => $this->input->post('description'),
				'link' => $this->input->post('link')
			);


			if ($this->repository_model->update_repository($data,$this->input->post('id_repo'))) {

				$this->session->set_flashdata('success_msg', 'Repositório atualizado com sucesso!');

			}else {

				$this->session->set_flashdata('error_msg','Falha ao atualizar repositório!');
			}

			redirect('admin/dashboard');

		}else {
			
			$this->session->set_flashdata('error_msg','Falha ao atualizar repositório!');

			redirect('admin/dashboard');
		}
	}

	// TODO: Fazer a parte de profile mas ainda não é necessário
	public function profile(){

	}
}