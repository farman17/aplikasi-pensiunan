<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GajiModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_gaji(){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->order_by('gaji_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_gaji($data){
		$this->db->insert('sigaka_gaji', $data);
		return $this->db->affected_rows();
	}

	public function lihat_satu_gaji($id){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->where('gaji_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_gaji($id,$data){
		$this->db->where('gaji_id',$id);
		$this->db->update('sigaka_gaji',$data);
		return $this->db->affected_rows();
	}

	public function hapus_gaji($id){
		$this->db->where('gaji_id', $id);
		$this->db->delete('sigaka_gaji');
		return $this->db->affected_rows();
	}


}
