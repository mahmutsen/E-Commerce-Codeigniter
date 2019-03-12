<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');//configdeki base_url fonksiyonunun kütüphanesini ekledik.Artık http://localhost/yasoppu gösteriyor
		$this->load->library('session');
		$this->load->model ('Database_Model');
		$this->load->database();
	}
	public function index()
	{
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		
		$query=$this->db->get("oyunlar");
		$data["yeniler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		
		$data['menu']="home";
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('register_formu');
		$this->load->view('/_footer');
	}
	
	public function eklekaydet()
	{
    $data=array(
		'adi' => $this->input->post('adi'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email'),
		'yetki' => 'uye',
		'telefon' => $this->input->post('telefon'),
		'sehir' => $this->input->post('sehir'),
		'adres' => $this->input->post('adres')
		);
		$this->Database_Model->insert_data("musteriler",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("login_hata",": Kayıt Ekleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."Login"); 
	}
	
}