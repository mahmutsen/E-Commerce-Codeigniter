<?php
class Database_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function insert_data($table,$data){
		$this->db->insert($table ,$data);
		return $this->db->insert_id();
	}
	public function delete_data($table,$id){
		$this->db->where('Id',$id);
		if($this->db->delete($table))
		{
			return true;
		}
	}
	public function update_data($table,$data,$id){
		$this->db->where('Id' ,$id);
		$this->db->update($table,$data);
		return true;
	}
	public function get_oyun($id)
		{
			$sql="SELECT  platform.adi  as platadi, kategoriler.adi as katadi,oyunlar.* FROM oyunlar
				LEFT JOIN platform
				ON oyunlar.platform_id=platform.Id
				LEFT JOIN kategoriler
				ON oyunlar.kategori=kategoriler.Id
				WHERE oyunlar.Id=".$id;
			$query=$this->db->query($sql);
			if($query->num_rows() == 1) 
			{
				return $query->result(); 
			} 
			else {
				return false; 
			}
		}
	public function get_kategori($id)
		{
			$sql="SELECT  platform.adi  as platadi, kategoriler.adi as katadi,oyunlar.* FROM oyunlar
				LEFT JOIN platform
				ON oyunlar.platform_id=platform.Id
				LEFT JOIN kategoriler
				ON oyunlar.kategori=kategoriler.Id
				WHERE oyunlar.kategori=".$id;
				
			$query=$this->db->query($sql);
			if($query->num_rows() == 1) 
			{
				return $query->result(); 
			} 
			else {
				return false; 
			}
		}
}
