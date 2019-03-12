<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');//configdeki base_url fonksiyonunun kütüphanesini ekledik.Artık http://localhost/yasoppu gösteriyor
		$this->load->library('session');
		$this->load->model('Admin_Model');
		$this->load->database();
	}
	public function index()
	{
		$this->load->view('admin/login_formu');
		
	}
	public function log_in()
	{
		$email=$this->input->post('email',TRUE);//XSS filtering kullanildi
		$sifre=$this->input->post('password',TRUE);
		
		$result=$this->Admin_Model->login($email,$sifre); // kıyaslama yapan modelimize gönderiyoruz
		if($result){
			//modelden gelen kullanıcı(result) var ise bilgileri session(oturum) dizisine aktar
			$sess_dizi=array(
			'Id'=>$result[0]->Id,
			'adsoy'=>$result[0]->adsoy,
			'email'=>$result[0]->email,
			'yetki'=>$result[0]->yetki,
			'durum'=>$result[0]->durum
			);
			//Dizi verileri codeigniter session kütüphanesi değişkenlerine atanıyor
			$this->session->set_userdata('oturum_data',$sess_dizi); // bu bilgilere ulaşılmak istenirse oturum_data değişkenine ulaşıcaz
			redirect(base_url().'admin/home');
		}
		else{
			$this->session->set_flashdata("login_hata","Geçersiz Email ya da Şifre!");
			$this->load->view('admin/login_formu');
			//return false
		}
	}
	public function log_out()
	{		
		$this->session->unset_userdata('oturum_data');
		$this->session->sess_destroy();
		redirect(base_url().'admin/Login');
		
	}
}