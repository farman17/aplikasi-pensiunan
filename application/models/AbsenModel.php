<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AbsenModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_absen(){
		$this->db->select('*');
		$this->db->from('sigaka_absen');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_absen.absen_karyawan_id');
		$this->db->order_by('absen_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_absen($data){
		$this->db->insert('sigaka_absen', $data);
		return $this->db->affected_rows();
	}
}
