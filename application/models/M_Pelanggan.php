<?php

class M_Pelanggan extends CI_Model{

	function getDataPelanggan(){
		$query = $this->db->get('pelanggan');
		return $query->result();
	}

	function tampil_pelanggan(){
		$hsl=$this->db->query("SELECT id_pelanggan,nama_pelanggan,kategori FROM pelanggan");
		return $hsl;
	}

	function simpan_pelanggan($data){
		$this->db->insert('pelanggan',$data);
	}

}
