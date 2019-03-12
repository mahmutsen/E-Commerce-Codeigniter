<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musteriler extends CI_Controller {
	
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
		$query=$this->db->get("musteriler");
        $data["veri"]=$query->result();
		$this->load->view('admin/musteri_liste',$data);
	}
	
	public function guncellekaydet($Id)
	{ 

    $data=array (
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->update_data("musteriler",$data,$Id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Musteriler"); 
		
	}
	
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM musteriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/musteri_duzenle',$data);
	}
	
	
	
	public function view($id)
	{
		$sorgu=$this->db->query("SELECT * FROM musteriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/musteri_goster',$data);
	}
		
	
}