<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {
	
 public function __construct()
        {
                parent::__construct();
                //$this->load->helper ('url') ;
				$this->load->database ();
				$this->load->model ('Database_Model');
				$this->load->library ('session');
				$this->load->helper(array('form', 'url'));
				if(! $this->session->userdata('oturum_data')){
					redirect(base_url()."admin/Login");	
				}
		}

	public function index()
	{
		$query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
		$this->load->view('admin/ayarlar_liste',$data);
		
	}
	
	
	public function guncellekaydet($Id)
	{ 

    $data=array (
		'adi' => $this->input->post('adi'),
		'keywords' => $this->input->post('keywords'),
		'name' => $this->input->post('name'),
		'smtpserver' => $this->input->post('smtpserver'),
		'smtpport' => $this->input->post('smtpport'),
		'smtpemail' => $this->input->post('smtpemail'),
		'password' => $this->input->post('password'),
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'fax' => $this->input->post('fax'),
		'email' => $this->input->post('email'),
		'hakkimizda' => $this->input->post('hakkimizda'),
		'iletisim' => $this->input->post('iletisim'),
		'facebook' => $this->input->post('facebook'),
		'twitter' => $this->input->post('twitter'),
		'instagram' => $this->input->post('instagram'),
		'pinterest' => $this->input->post('pinterest'),
		'aciklama' => $this->input->post('aciklama')
		);
		$this->Database_Model->update_data("ayarlar",$data,$Id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Ayarlar"); 
		
	}
	
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/ayarlar_duzenle',$data);
	}
}