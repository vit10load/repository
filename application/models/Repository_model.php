<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Repository_model extends CI_model {

	public function __construct(){
		parent::__construct();
	}

	public function createRepository($data){

		return $this->db->insert('repository',$data);
	}

	public function return_repository_by_description($data) {


		$this->db->select('*');
		$this->db->from('repository');
		$this->db->like('description',$data);
		$this->db->or_like('description',$data,'after');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		} else {

			return null;
		}

	}

	private function return_repository_by_description_not($data){

		$this->db->select('*');
		$this->db->from('repository');
		$this->db->not_like('description',$data);
		$this->db->or_not_like('description',$data,'both');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		} else {

			return null;
		}
	}

	public function return_data_by_truncate($data,$truncate,$textTruncate){
		
		$arrTruncate = array("description" => $data, "description" => $textTruncate);

		if ($truncate === 'AND') {
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->like($arrTruncate);
		}elseif ($truncate === 'OR') {
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->like('description',$data,'after');
			$this->db->or_like('description',$textTruncate,'after');
		}elseif($truncate === 'NOT'){
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->not_like('description',$data,'after');
			$this->db->or_not_like('description',$textTruncate,'after');
		}

		$query = $this->db->get();

		$val = ($query->num_rows() > 0) ? $query->result() : NULL;

		return $val;
	}

	public function return_repository_by_sigla($data,$truncate,$textTruncate,$sigla){

		$arrTruncate = array(
			"description" => $data, 
			"description" => $textTruncate,
			"sigla" => $sigla
		);

		if ($truncate === 'AND') {
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->like($arrTruncate);
		}elseif ($truncate === 'OR') {
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->like($arrTruncate,'after');
			$this->db->or_like('sigla',$sigla);
		}elseif($truncate === 'NOT'){
			$this->db->select('*');
			$this->db->from('repository');
			$this->db->not_like($arrTruncate);
			$this->db->or_not_like('sigla',$sigla);
		}

		$query = $this->db->get();

		$val = ($query->num_rows() > 0) ? $query->result() : NULL;

		return $val;
	}

	public function return_repository_by_link($link){

		$this->db->select('*');
		$this->db->from('repository');
		$this->db->like('link',$name);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		} else {

			return false;
		}

	}

	public function return_repository_by_id($id){

		$this->db->select('*');
		$this->db->from('repository');
		$this->db->where('id_repository',$id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		} else {

			return false;
		}

	}

	public function return_all_repositorys(){

		$this->db->select('*');
		$this->db->from('repository');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		}else {

			return false;
		}
	}

	public function delete_repository($id){

		return $this->db->delete('repository',array('id_repository' => $id));
	}

	public function update_repository($data,$id){

		$this->db->where('id_repository',$id);

		$this->db->update('repository',$data);
	}

}