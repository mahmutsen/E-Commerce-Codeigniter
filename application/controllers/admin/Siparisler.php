<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
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
		$query=$this->db->get("siparisler");
        $data["veri"]=$query->result();
		$this->load->view('admin/siparis_liste',$data);
	}
	public function yeni()
	{
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Yeni'");
        $data["veri"]=$query->result();
		$this->load->view('admin/siparis_liste',$data);
	}
	public function onayli()
	{
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Onayli'");
        $data["veri"]=$query->result();
		$this->load->view('admin/siparis_liste',$data);
	}
	public function kargo()
	{
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Kargoda'");
        $data["veri"]=$query->result();
		$this->load->view('admin/siparis_liste',$data);
	}

	public function view($id)
	{
		$query=$this->db->query("SELECT * FROM siparisler WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/siparis_goster',$data);
	}
	public function guncelle($id)
	{
		$data=array (
		'admin_aciklama' => $this->input->post('admin_aciklama'),
		'durum'=> $this->input->post('durum')
		);	
		$this->Database_Model->update_data("siparisler",$data,$id);
		$this->session->set_flashdata('mesaj','Notunuz güncellendi.');
		redirect(base_url()."admin/Siparisler/view/$id");
	}
}