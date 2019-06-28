<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$model = array('GajiModel','KaryawanModel');
		$helper = array('tgl_indo_helper');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function index(){
    	$data['karyawan'] = $this->KaryawanModel->lihat_karyawan();
    	$data['jabatan'] = $this->GajiModel->lihat_gaji();
		$this->load->view('templates/header');
		$this->load->view('backend/karyawan/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
    	if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'PEG-' . $generate;
			$nama = $this->input->post('nama');
			$tempatLahir = $this->input->post('tempat_lahir');
			$tanggalLahir = $this->input->post('tanggal_lahir');
			$alamat = $this->input->post('alamat');
			$tanggalGabung = $this->input->post('tanggal_gabung');
			$gajiId = $this->input->post('jabatan');
			$nomorHp = $this->input->post('nomor_hp');
			$data = array(
				'karyawan_id' => $id,
				'karyawan_nama' => $nama,
				'karyawan_tempat_lahir' => $tempatLahir,
				'karyawan_tanggal_lahir' => $tanggalLahir,
				'karyawan_alamat' => $alamat,
				'karyawan_tanggal_gabung' => $tanggalGabung,
				'karyawan_nomor_hp' => $nomorHp,
				'karyawan_gaji_id' => $gajiId
			);
			$save = $this->KaryawanModel->tambah_karyawan($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'tambah_karyawan');
				redirect('karyawan');
			}
			else{
				redirect('karyawan');
			}
		}
	}

	public function lihat($id){
		$data = $this->KaryawanModel->lihat_satu_karyawan($id);
		echo json_encode($data);
	}

	public function update(){
		if (isset($_POST['update'])){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$tempatLahir = $this->input->post('tempat_lahir');
			$tanggalLahir = $this->input->post('tanggal_lahir');
			$alamat = $this->input->post('alamat');
			$tanggalGabung = $this->input->post('tanggal_gabung');
			$gajiId = $this->input->post('jabatan');
			$nomorHp = $this->input->post('nomor_hp');
			$data = array(
				'karyawan_nama' => $nama,
				'karyawan_tempat_lahir' => $tempatLahir,
				'karyawan_tanggal_lahir' => $tanggalLahir,
				'karyawan_alamat' => $alamat,
				'karyawan_tanggal_gabung' => $tanggalGabung,
				'karyawan_nomor_hp' => $nomorHp,
				'karyawan_gaji_id' => $gajiId
			);
			$save = $this->KaryawanModel->update_karyawan($id,$data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'update_karyawan');
				redirect('karyawan');
			}
			else{
				redirect('karyawan');
			}
		}
	}

	public function hapus($id){
		$hapus = $this->KaryawanModel->hapus_karyawan($id);
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'hapus_karyawan');
			redirect('karyawan');
		}else{
			redirect('karyawan');
		}
	}

}
