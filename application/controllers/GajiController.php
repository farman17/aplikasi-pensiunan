<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GajiController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('GajiModel');
		$this->load->helper('nominal');
	}

	public function index(){
		$data['gaji'] = $this->GajiModel->lihat_gaji();
		$this->load->view('templates/header');
		$this->load->view('backend/gaji/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'GJI-' . $generate;
			$jabatan = $this->input->post('jabatan');
			$gaji = $this->input->post('gaji');
			$data = array(
				'gaji_id' => $id,
				'gaji_jabatan' => $jabatan,
				'gaji_jumlah' => $gaji
			);
			$save = $this->GajiModel->tambah_gaji($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'tambah_gaji');
				redirect('gaji');
			}
			else{
				redirect('gaji');
			}
		}
	}

	public function updateForm($id){
		$data = $this->GajiModel->lihat_satu_gaji($id);
		echo json_encode($data);
	}

	public function update(){
		if (isset($_POST['update'])){
			$id = $this->input->post('id');
			$jabatan = $this->input->post('jabatan');
			$gaji = $this->input->post('gaji');
			$data = array(
				'gaji_jabatan' => $jabatan,
				'gaji_jumlah' => $gaji
			);
			$update = $this->GajiModel->update_gaji($id,$data);
			if ($update > 0){
				$this->session->set_flashdata('alert', 'update_gaji');
				redirect('gaji');
			}
			else{
				redirect('gaji');
			}
		}
	}

	public function hapus($id){
		$hapus = $this->GajiModel->hapus_gaji($id);
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'hapus_gaji');
			redirect('gaji');
		}else{
			redirect('gaji');
		}
	}
}
