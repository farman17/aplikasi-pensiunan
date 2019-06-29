<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AbsenController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$model = array('KaryawanModel','AbsenModel');
		$helper = array('tgl_indo_helper');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}
	public function index(){
		$data = array(
			'absen' => $this->AbsenModel->lihat_absen(),
			'karyawan' => json_encode($this->KaryawanModel->lihat_karyawan())
		);
		$this->load->view('templates/header');
		$this->load->view('backend/absen/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'ABS-' . $generate;
			$nama = $this->input->post('nama');
			$hari = $this->input->post('hari');
			$data = array(
				'absen_id' => $id,
				'absen_karyawan_id' => $nama,
				'absen_hari' => $hari
			);
			$save = $this->AbsenModel->tambah_absen($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'tambah_absen');
				redirect('absen');
			}
			else{
				redirect('absen');
			}
		}
	}
}
