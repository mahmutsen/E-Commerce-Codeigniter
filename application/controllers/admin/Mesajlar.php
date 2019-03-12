<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->helper ('url') ;
				$this->load->database ();
				$this->load->model ('Database_Model');
				$this->load->library ('session');
				
				if(! $this->session->userdata('oturum_data')){
					redirect(base_url()."admin/Login");	
				}
		}

	public function index()
	{
		$query=$this->db->get("mesajlar");
        $data["veri"]=$query->result();
		$this->load->view('admin/mesaj_liste',$data);
	}
	
	
	public function delete($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE Id=$id");
		$this->session->set_flashdata("sonuc",": Kayıt Silme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Mesajlar"); 
	}
	
	public function view($id)
	{
		$this->db->query("UPDATE mesajlar SET durum='Okundu' WHERE Id=$id");
		$sorgu=$this->db->query("SELECT * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/mesaj_goster',$data);
	}
	public function guncelle($id)
	{
		$data=array (
		'adminnotu' => $this->input->post('adminnotu'),
		);	
		$this->Database_Model->update_data("mesajlar",$data,$id);
		$this->session->set_flashdata('mesaj','Notunuz güncellendi.');
		redirect(base_url()."admin/Mesajlar/view/$id");
	}
}