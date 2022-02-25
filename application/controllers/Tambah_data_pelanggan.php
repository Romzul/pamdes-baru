<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_data_pelanggan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_Pelanggan');
    }
	public function index()
	{
		$queryAllPelanggan = $this->M_Pelanggan->getDataPelanggan();
		$DATA = array('queryAllPelanggan' => $queryAllPelanggan);
		$this->load->view('home/partial/home_header');
        $this->load->view('pelanggan/tambah_data_pelanggan', $DATA);
        $this->load->view('home/partial/home_footer');

	}

	function tambah_pelanggan(){
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$j_kelamin = $this->input->post('j_kelamin');
		$desa = $this->input->post('desa');
		$kecamatan = $this->input->post('kecamatan');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kategori = $this->input->post('kategori');
		$meter_pertama = $this->input->post('meter_pertama');
		$tggl_pemasangan = $this->input->post('tggl_pemasangan');
		
		$ArrInsert = array(
			'nama_pelanggan' => $nama_pelanggan,
			'j_kelamin'	=> $j_kelamin,
			'desa' => $desa,
			'kecamatan'	=> $kecamatan,
			'rt'	=> $rt,
			'rw'	=> $rw,
			'kategori'	=> $kategori,
			'meter_pertama'	=> $meter_pertama,
			'tggl_pemasangan'	=> $tggl_pemasangan
		);

		$this->M_Pelanggan->simpan_pelanggan($ArrInsert);
		redirect(base_url('data_pelanggan'));
	}
}
