<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{
	public function GetMahasiswa($table){
		$res=$this->db->get($table); // kode ini berfungsi untuk memilih tabel yang akan ditampilkan
		return $res->result_array(); // kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
	}

	public function Insert($table,$data){
		$res = $this->db->insert($table, $data); // kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
		return $res; // kode ini digunakan mengembalikan hasil $res
	}

	public function Update($table, $data, $where){
		$res = $this->db->update($table, $data, $where); // kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
		return $res;
	}

	public function Delete($table, $where){
		$res = $this->db->delete($table, $where); // kode ini digunakan untuk menghapus record yang sudah ada
		return $res;
	}
}
?>