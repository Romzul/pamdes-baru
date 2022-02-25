<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelanggan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_Pelanggan');
    }
	public function index()
	{
		$data ['pelanggan'] = $this->M_Pelanggan->tampil_pelanggan();
		$this->load->view('home/partial/home_header');
        $this->load->view('pelanggan/data_pelanggan',$data);
        $this->load->view('home/partial/home_footer');
	}
}
