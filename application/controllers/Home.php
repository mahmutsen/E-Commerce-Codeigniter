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
	public function uyepanel()
	{
		$query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
		$id=$this->session->musteri_oturum_data['Id'];
		$query=$this->db->query("SELECT * FROM musteriler WHERE Id=$id");
		$data["veri2"]=$query->result();
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için göndermek zorundayız
		$data["kategori"]=$sorgu->result();
		
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/uye_paneli');
		$this->load->view('/_footer');
	}
	
	public function guncellekaydet()
	{
	$id=$this->session->musteri_oturum_data['Id'];	
    $data=array(
		'adi' => $this->input->post('adi'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email')
		);
		$this->Database_Model->update_data("musteriler",$data,$id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."Home/uyepanel"); 
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
	public function hakkimizda()
	{
		$query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
		
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için göndermek zorundayız
		$data["kategori"]=$sorgu->result();
		
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/hakkimizda');
		$this->load->view('/_footer');
	}
	public function iletisim()
	{
		$query=$this->db->get("ayarlar");
        $data["veri"]=$query->result();
		
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");//Kategori kısmı header da olduğu için göndermek zorundayız
		$data["kategori"]=$sorgu->result();
		
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/iletisim');
		$this->load->view('/_footer');
	}
	public function mesaj_ekle()
	{
		$data=array (
		'adsoy' => $this->input->post('adsoy'),
		'tel' => $this->input->post('tel'),
		'email' => $this->input->post('email'),
		'konu' => $this->input->post('konu'),
		'mesaj' => $this->input->post('mesaj'),
		'Ip'=>$_SERVER['REMOTE_ADDR']
		);
		$this->Database_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("mesaj","Mesajınız Başarı ile Alındı.Teşekkürler...");
		redirect(base_url()."Home/bizeyazin");
	}
	public function kategori($id)
	{
		//$result=$this->Database_Model->get_kategori($id);
		//if($result)
		//{
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
		$sorgu1 = $sorgu->row();
		$data["katadi"] = $sorgu1;
		$data["veri"]=$sorgu->result();
		
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
		//$query=$this->db->get("platform");//veritabanından platform tablosunu cek.
		//$data["veri"]=$query->result();
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
		$data["veri"]=$sorgu->result();
		
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
	
	public function sepete_ekle($id)
	{
		$data=array (
			'musteri_id' => $this->session->musteri_oturum_data['Id'],
			'urun_id' => $id,
			'miktar' => $this->input->post('miktar')
		);
		$this->Database_Model->insert_data("sepet",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("mesaj","Ürün Sepete Eklendi");
		redirect(base_url()."Home/urun_detay/$id");
	}
	public function sepetim()
	{
		
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		$musteri_id=$this->session->musteri_oturum_data['Id'];
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$query=$this->db->query("SELECT * FROM musteriler WHERE Id=$musteri_id limit 1");
		$data["musteri"]=$query->result();

		$query=$this->db->query(
			"SELECT sepet.*, oyunlar.adi as oyunad,oyunlar.resim as oyunres, oyunlar.sfiyat as oyunfiyat
			FROM sepet
			INNER JOIN oyunlar ON oyunlar.id=sepet.urun_id
			WHERE sepet.musteri_id=$musteri_id
			order by oyunad");
		$data["sepet"]=$query->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/uye_sepet');
		$this->load->view('/_footer');

	}
	public function siparis_tamamla()
	{
		$musteri_id=$this->session->musteri_oturum_data['Id'];
		$data=array (
			'adsoy' => $this->input->post('adsoy'),
			'adres' => $this->input->post('adres'),
			'tel' => $this->input->post('tel'),
			'sehir' => $this->input->post('sehir'),
			'tutar' => $this->input->post('tutar'),
			'musteri_id'=>$musteri_id,
			'ip'=>$_SERVER['REMOTE_ADDR']
		);
		$siparis_id=$this->Database_Model->insert_data("siparisler",$data); // ekleme fonk. dataları gönder
		if($siparis_id)
		{
			$query=$this->db->query(
				"SELECT sepet.*, oyunlar.adi as oyunad, oyunlar.sfiyat as oyunfiyat
				FROM sepet
				INNER JOIN oyunlar ON oyunlar.id=sepet.urun_id
				WHERE sepet.musteri_id=$musteri_id
				order by oyunad");
			$veriler=$query->result();
			foreach ($veriler as $rs)
			{
				$data=array (
				'musteri_id'=>$this->session->musteri_oturum_data['Id'],
				'siparis_id'=>$siparis_id,
				'urun_id'=>$rs->Id,
				'adi' => $rs->oyunad,
				'miktar' => $rs->miktar,
				'fiyat' => $rs->oyunfiyat,
				'tutar' => $rs->miktar* $rs->oyunfiyat
				);
				$this->Database_Model->insert_data("siparis_urunler",$data);	
			}
		}
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$musteri_id");
		
		$this->session->set_flashdata("mesaj","Siparişiniz Tamamlanmıştır<br>Teşekkürler");
		redirect(base_url()."Home/siparislerim");
	}
	public function siparislerim()
	{
		$musteri_id=$this->session->musteri_oturum_data['Id'];
		$query=$this->db->query("SELECT * FROM siparisler WHERE musteri_id=$musteri_id");
		$data["siparislerim"]=$query->result();
		
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
	
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/uye_siparisler');
		$this->load->view('/_footer');

	}
	public function siparis_detay($id)
	{
		$musteri_id=$this->session->musteri_oturum_data['Id'];
		$query=$this->db->query("SELECT * FROM siparisler WHERE Id=$id");
		$data["siparis"]=$query->result();
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$id");
		$data["urunler"]=$query->result();
		
		$query=$this->db->get("ayarlar");//veritabanından ayarlar tablosunu cek.
        $data["veri"]=$query->result();
		
		
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["kategori"]=$sorgu->result();
		//platform
		$ps=$this->db->query("SELECT * FROM platform WHERE ust_id=6");
		$xbox=$this->db->query("SELECT * FROM platform WHERE ust_id=7");
		$data["ps"]=$ps->result();
		$data["xbox"]=$xbox->result();
		
		$this->load->view('/_header',$data);
		$this->load->view('/uye_siparis_detay');
		$this->load->view('/_footer');

	}
}
