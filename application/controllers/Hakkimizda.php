<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');//configdeki base_url fonksiyonunun kütüphanesini ekledik.Artık http://localhost/yasoppu gösteriyor
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Database_Model');
		
	}
	public function index()
	{
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		
		$query=$this->db->get("oyunlar");
		$data["yeniler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM oyunlar WHERE cikis_yili>=2017");
		$data["slider"]=$query->result();
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		
		$data['menu']="home";
		//$query=$this->db->get("oyunlar");
		//$data["coksatanlar"]=$query->result();
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/_slider');
		$this->load->view('/_main_content');
		$this->load->view('/_footer');
	}
	public function sayfa_yok()
	{
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için göndermek zorundayız
		$data["kategori"]=$sorgu->result();
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/sayfa_bos');
		$this->load->view('/_footer');
	}
	public function urun_detay($id)
	{
		$result=$this->Database_Model->get_oyun($id);
		if($result)
		{
			$data["veri"]=$result; 
			$sorgu=$this->db->query("SELECT * FROM oyunlar_resim WHERE oyun_id=$id");
			$data["veriler"]=$sorgu->result();
			$data['menu']="detay";
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için gönderdim
			$data["kategori"]=$sorgu->result();
			//platform
			$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
			$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
			$data["ps"]=$ps->result();
			$data["xbox"]=$xbox->result();
		
			$this->load->view('/_header',$data);
			$this->load->view('urun_detay');
			$this->load->view('/_footer');
		}
	}
	public function bizeyazin()
	{
		$query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
		$data['menu']="bizeyazin";
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için göndermek zorundayız
		$data["kategori"]=$sorgu->result();
		
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/bize_yazin');
		$this->load->view('/_footer');
	}
	public function mesaj_ekle()
	{
		$data=array (
		'adsoy' => $this->input->post('adsoy'),
		'tel' => $this->input->post('tel'),
		'email' => $this->input->post('email'),
		'konu' => $this->input->post('konu'),
		'mesaj' => $this->input->post('mesaj')
		);
		$this->Database_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
		
		$adsoy=$this->input->post('adsoy');
		$email=$this->input->post('email');
		//email ayarlarını veritabanından okuma
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		
		$config = Array(   //email server ayarları
		'protocol'=>'smtp',
		'smtp_host'=>$data["veri"][0]->smtpserver,
		'smtp_port'=>$data["veri"][0]->smtpport,
		'smtp_user'=>$data["veri"][0]->smtpemail,
		'smtp_pass'=>$data["veri"][0]->password,
		'mailtype'=>'html',
		'charset'=>'utf-8',
		'wordwrap'=>TRUE,
		'newline'=>"r\n"
		);
		
		//istedigimiz şekilde mail içeriğini oluşturabiliriz
		$mesaj="Değerli: ".$adsoy."<br>Göndermiş olduğunuz mesaj alınmıştır.<br>En kısa sürede sizinle iletişime geçilecektir.<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="Gönderdiğiniz mesaj aşağıdaki gibidir<br>===================================<br>";
		$mesaj.=$this->input->post('mesaj');
		
		//Email Gönderme
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail);//degistirebiliriz
		$this->email->to($email);//""
		$this->email->subject($data["veri"][0]->name."Form alındı Mesajı");
		$this->email->message($mesaj);
		
		//Mail gönder
		if($this->email->send())
			$this->session->set_flashdata("email_send","Email başarı ile gönderildi.");
		else{
			$this->session->set_flashdata("email_send","Mesajınız gönderilemedi ");
			show_error($this->email->print_debugger());
		}
		$this->session->set_flashdata("sonuc","Mesajınız Başarı ile gönderilmiştir.En kısa sürede sizinle iletişime geçilecektir. ");
		redirect(base_url()."Home/bizeyazin");
	}
	public function kategori($id)
	{
		//$result=$this->Database_Model->get_kategori($id);
		//if($result)
		//{
			
			
			$query=$this->db->get("kategoriler");
			$data["veri"]=$query->result();
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
			$data["kategori"]=$sorgu->result();
			
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
			$sorgu1 = $sorgu->row();
			$data["katadi"] = $sorgu1;
			
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=$id");
			$data["altkat"] = $sorgu->result();
			
			$sorgu=$this->db->query("SELECT * FROM oyunlar WHERE kategori=$id");
			$data["veriler"]=$sorgu->result(); 
			//platform
			$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
			$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
			$data["ps"]=$ps->result();
			$data["xbox"]=$xbox->result();
			
			
		if($data['veriler']){
			$data["menu"]="kategoriler";
			$this->load->view('/_header',$data);
			
			$this->load->view('kategori');
			$this->load->view('/_footer');
		}
		else
			redirect(base_url()."home/sayfa_yok");
		}
		public function platform($id)
		{
			$query=$this->db->get("platform");//veritabanından platform tablosunu cek.
			$data["veri"]=$query->result();
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//kategoriler için
			$data["kategori"]=$sorgu->result();
		//platform
			$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
			$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
			$data["ps"]=$ps->result();
			$data["xbox"]=$xbox->result();
			
			$sorgu=$this->db->query("SELECT * FROM platform WHERE Id=$id");
			$sorgu1 = $sorgu->row();
			$data["platadi"] = $sorgu1;
			$sorgu=$this->db->query("SELECT * FROM oyunlar WHERE platform_id=$id");
			$data["veriler"]=$sorgu->result();
			
		if($data['veriler']){
			$data["menu"]="platform";
			$this->load->view('/_header',$data);
			
			$this->load->view('platform');
			$this->load->view('/_footer');
		}else
			redirect(base_url()."home/sayfa_yok");
		}
		
}
