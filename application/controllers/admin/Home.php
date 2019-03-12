<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');//configdeki base_url fonksiyonunun kütüphanesini ekledik.Artık http://localhost/yasoppu gösteriyor
		$this->load->library('session');
		//oturum açma kontrolü. Eğer headera koysaydık, url yolu üzerinden  controllerın diğer metodlarını çağırabilirlerdi
		
		if(! $this->session->userdata('oturum_data')){
		redirect(base_url()."admin/Login");	
		}
	}
	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_main_content');
		$this->load->view('admin/_footer');
	}
}
