<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GajiController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$model = array('GajiModel');
		$helper = array('tgl_indo','nominal');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = array(
			'gaji' => $this->GajiModel->lihat_gaji(),
			'title' => 'Gaji'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/gaji/index',$data);
		$this->load->view('templates/footer');
	}

	public function lihat($id){
		$data = $this->GajiModel->lihat_satu_gaji_by_id($id);
		echo json_encode($data);
	}

	public function pinjam($id){
		$data = $this->GajiModel->lihat_satu_gaji_pinjam($id);
		echo json_encode($data);
	}

	public function bayar($id){
		$data = array(
			'gaji_status' => 'sudah'
		);
		$save = $this->GajiModel->update_gaji($id,$data);
		if ($save>0){
			$this->session->set_flashdata('alert', 'update_gaji');
			redirect('gaji');
		}
		else{
			redirect('gaji');
		}
	}
}
