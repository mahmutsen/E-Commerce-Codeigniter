<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
	
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
		$query=$this->db->get("kullanicilar");
        $data["veri"]=$query->result();
		$this->load->view('admin/k_liste',$data);
	}
	public function ekle()
	{
		$this->load->view('admin/kullanici_ekle');
		
	}
	
	public function eklekaydet()
	{

    $data=array(
		'adsoy' => $this->input->post('adsoy'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->insert_data("kullanicilar",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Ekleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Kullanicilar"); 
		
	}
	public function guncellekaydet($Id)
	{ 

    $data=array (
		'adsoy' => $this->input->post('adsoy'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->update_data("kullanicilar",$data,$Id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/kullanicilar"); 
		
	}
	
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_duzenle',$data);
	}
	
	public function delete($id)
	{
		$this->db->query("DELETE FROM kullanicilar WHERE Id=$id");
		$this->session->set_flashdata("sonuc",": Kayıt Silme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Kullanicilar"); 
	}
	
	public function view($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_goster',$data);
	}
		
	
}