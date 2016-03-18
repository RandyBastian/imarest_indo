<?php 
	/**
	* 
	*/
	class Careers_model extends CI_Model
	{
		function get_all_careers()
		{
			return $this->db->query("SELECT * FROM careers;");
		}

		function get_all_paging_sorting_careers($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM careers ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_careers($judul,$isi){
			return $this->db->query("INSERT INTO careers(judul_careers, isi_careers) VALUES ('".$judul."','".$isi."');");	
		}
		
		function get_create_careers(){
			return $this->db->query("SELECT * FROM careers WHERE careers.id_careers = LAST_INSERT_ID();");
		}

		function post_update_careers($id,$judul,$isi){
			return $this->db->query("UPDATE careers SET careers.judul_careers = '".$judul."', careers.isi_careers = '".$isi."' WHERE careers.id_careers = '".$id."';");
		}

		function post_delete_careers($id){
			return $this->db->query("DELETE FROM careers WHERE careers.id_careers = '".$id."'; ");	
		}
	}
 ?>