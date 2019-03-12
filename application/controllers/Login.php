<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');//configdeki base_url fonksiyonunun kütüphanesini ekledik.Artık http://localhost/yasoppu gösteriyor
		$this->load->library('session');
		$this->load->model('Admin_Model');
		$this->load->model('Database_Model');
		$this->load->database();
	}
	public function index()
	{
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		
		$data['menu']="home";
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('login_formu');
		$this->load->view('/_footer');
	}
	public function log_in()
	{
		$email=$this->input->post('email',TRUE);//XSS filtering kullanildi
		$sifre=$this->input->post('sifre',TRUE);
		
		$result=$this->Admin_Model->musterilogin($email,$sifre); // kıyaslama yapan modelimize gönderiyoruz
		if($result){
			//modelden gelen kullanıcı(result) var ise bilgileri session(oturum) dizisine aktar
			$sess_dizi=array(
			'Id'=>$result[0]->Id,
			'adi'=>$result[0]->adi,
			'email'=>$result[0]->email,
			'telefon'=>$result[0]->telefon,
			'sifre'=>$result[0]->sifre,
			'yetki'=>$result[0]->yetki,
			'durum'=>$result[0]->durum,
			'adres'=>$result[0]->adres,
			'sehir'=>$result[0]->sehir,
			'tarih'=>$result[0]->tarih,
			'aciklama'=>$result[0]->aciklama
			);
			//Dizi verileri codeigniter session kütüphanesi değişkenlerine atanıyor
			$this->session->set_userdata('musteri_oturum_data',$sess_dizi); // bu bilgilere ulaşılmak istenirse oturum_data değişkenine ulaşıcaz
			redirect(base_url().'Home');
		}
		else{
			$this->session->set_flashdata("login_hata","Geçersiz Email ya da Şifre!");
			redirect(base_url().'Login');
			//return false
		}
	}
	public function log_out()
	{		
		$this->session->unset_userdata('musteri_oturum_data');
		$this->session->sess_destroy();
		redirect(base_url().'Home');
		
	}
}