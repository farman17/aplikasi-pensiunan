<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PinjamController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
//		$model = array('GajiModel');
		$helper = array('tgl_indo','nominal');
//		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = array(
//			'gaji' => $this->GajiModel->lihat_gaji()
		);
		$this->load->view('templates/header');
		$this->load->view('backend/pinjam/index',$data);
		$this->load->view('templates/footer');
	}
}
