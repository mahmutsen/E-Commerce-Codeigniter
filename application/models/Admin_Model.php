<?php
class Admin_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function login($email,$sifre){
		$this->db->SELECT('*');
		$this->db->FROM('kullanicilar');
		$this->db->WHERE('email',$email);
		$this->db->WHERE('sifre',$sifre);
		$this->db->limit(1); // sonuç satır limiti 1 yapıldı
		$query = $this->db->get();
		
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	public function musterilogin($email,$sifre){
		$this->db->SELECT('*');
		$this->db->FROM('musteriler');
		$this->db->WHERE('email',$email);
		$this->db->WHERE('sifre',$sifre);
		$this->db->limit(1); // sonuç satır limiti 1 yapıldı
		$query = $this->db->get();
		
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
}
