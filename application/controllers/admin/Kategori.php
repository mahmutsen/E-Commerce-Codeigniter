<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
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
		$query=$this->db->get("kategoriler");
        $data["veri"]=$query->result();
		$this->load->view('admin/kategori_liste',$data);
	}
	public function ekle()
	{
		$this->load->view('admin/kategori_ekle');
		
	}
	
	public function eklekaydet()
	{

    $data=array(
		'ust_id' => $this->input->post('ust_id'),
		'adi' => $this->input->post('adi'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'resim' => $this->input->post('resim'),
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->insert_data("kategoriler",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Ekleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Kategori"); 
		
	}
	public function guncellekaydet($Id)
	{ 

    $data=array (
		'adi' => $this->input->post('adi'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'resim' => $this->input->post('resim'),
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->update_data("kategoriler",$data,$Id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Kategori"); 
		
	}
	
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kategori_duzenle',$data);
	}
	
	public function delete($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id=$id");
		$this->session->set_flashdata("sonuc",": Kayıt Silme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Kategori"); 
	}
	
	public function view($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kategori_goster',$data);
	}
		
	
}