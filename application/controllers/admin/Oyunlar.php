<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oyunlar extends CI_Controller {
	
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
		$sql="SELECT  platform.adi  as platadi, kategoriler.adi as katadi,oyunlar.* FROM oyunlar
				LEFT JOIN platform
				ON oyunlar.platform_id=platform.Id
				LEFT JOIN kategoriler
				ON oyunlar.kategori=kategoriler.Id
				ORDER BY oyunlar.adi";//database modele yazılıp ordan cagirabiliriz
		$query=$this->db->query($sql);
        $data["veri"]=$query->result();
		$this->load->view('admin/oyun_liste',$data);
	}
	public function ekle()
	{
		$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM platform ORDER BY adi");
		$data["platform"]=$sorgu->result();
		
		$this->load->view('admin/oyun_ekle',$data);
		
	}
	
	public function eklekaydet()
	{

    $data=array(
		'adi' => $this->input->post('adi'),
		'kategori' => $this->input->post('kategori'),
		'platform_id' => $this->input->post('platform'),
		'kisa_aciklama' => $this->input->post('kaciklama'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'afiyat' => $this->input->post('afiyat'),
		'sfiyat' => $this->input->post('sfiyat'),
		'adet' => $this->input->post('adet'),
		'cikis_yili' => $this->input->post('cikis_yili'),
		'sdurum' => $this->input->post('sdurum')
		);
		$this->Database_Model->insert_data("oyunlar",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Ekleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Oyunlar"); 
		
	}
	public function guncellekaydet($Id)
	{ 

    $data=array (
		'adi' => $this->input->post('adi'),
		'kategori' => $this->input->post('kategori'),
		'platform_id' => $this->input->post('platform'),
		'kisa_aciklama' => $this->input->post('kaciklama'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'afiyat' => $this->input->post('afiyat'),
		'sfiyat' => $this->input->post('sfiyat'),
		'adet' => $this->input->post('adet'),
		'cikis_yili' => $this->input->post('cikis_yili'),
		'sdurum' => $this->input->post('sdurum')
		);
		$this->Database_Model->update_data("oyunlar",$data,$Id); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("sonuc",": Kayıt Güncelleme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Oyunlar"); 
		
	}
	
	public function edit($id)
	{
		$result=$this->Database_Model->get_oyun($id);
		if($result)
		{
			$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sorgu->result();
			
			$sorgu=$this->db->query("SELECT * FROM platform ORDER BY adi");
			$data["platform"]=$sorgu->result();
			
			$data["veri"]=$result; 
			$this->load->view('admin/oyun_duzenle',$data);
		}
	}
	
	public function delete($id)
	{
		$this->db->query("DELETE FROM oyunlar WHERE Id=$id");
		$this->session->set_flashdata("sonuc",": Kayıt Silme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Oyunlar"); 
	}
	
	public function view($id)
	{
		$sorgu=$this->db->query("SELECT * FROM oyunlar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/oyun_goster',$data);
	}
	public function resim_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM oyunlar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/oyun_resim_ekleme_formu',$data);
	}
	public function resim_upload($id)
	{
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 300;
                $config['max_width']            = 1024;
                $config['max_height']           = 900;
				
				$this->load->library('upload', $config); //Hazırladıgımız configi upload kütüphanesine şeyettik
				if ( ! $this->upload->do_upload('userfile')) //oyun_resim_ekleme_formundanki userfile ı ayarladğımız şekilde upload ettik
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata("sonuc",":Yükleme Hatası: ".$error);
						redirect(base_url()."admin/Oyunlar/resim_ekle/$id");
                }
                else
                {
						$data=array (
							'resim'=>$this->upload->data('file_name')
						);
						$this->Database_Model->update_data("oyunlar",$data,$id); // ekleme fonk. dataları gönder
						
						$this->session->set_flashdata("sonuc",": Resim Yükleme Başarılı.");
						redirect(base_url()."admin/Oyunlar");
                }
	}	
	public function galeri_resim_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM oyunlar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM oyunlar_resim WHERE oyun_id=$id");
		$data["veriler"]=$sorgu->result();
		$this->load->view('admin/oyun_galeri_resim_ekleme_formu',$data);
	}
	public function galeri_resim_upload($id)
	{
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 600;
                $config['max_width']            = 1024;
                $config['max_height']           = 1280;
				
				$this->load->library('upload', $config); //Hazırladıgımız configi upload kütüphanesine şeyettik
				if ( ! $this->upload->do_upload('userfile')) //oyun_resim_ekleme_formundanki userfile ı ayarladğımız şekilde upload ettik
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata("sonuc",":Yükleme Hatası: ".$error);
						redirect(base_url()."admin/Oyunlar/galeri_resim_ekle/$id");
                }
                else
                {
						$data=array (
							'oyun_id'=>$id,
							'resim'=>$this->upload->data('file_name')
						);
						$this->Database_Model->insert_data("oyunlar_resim",$data,$id); // ekleme fonk. dataları gönder
						
						$this->session->set_flashdata("sonuc",": Resim Yükleme Başarılı.");
						redirect(base_url()."admin/Oyunlar/galeri_resim_ekle/$id");
                }
	}
	public function resim_delete($id,$resim_id)
	{
		$this->db->query("DELETE FROM oyunlar_resim WHERE Id=$resim_id");
		$this->session->set_flashdata("sonuc",": Kayıt Silme İşlemi Başarıyla Gerçekleştirildi.");
		redirect(base_url()."admin/Oyunlar/galeri_resim_ekle/$id"); 
	}
}