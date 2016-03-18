<?php 
	/**
	* 
	*/
	class Halaman_model extends CI_Model
	{
		function get_all_halaman()
		{
			return $this->db->query("SELECT * FROM halaman;");
		}

		function get_all_paging_sorting_halaman($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM halaman ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_halaman($judul,$isi){
			return $this->db->query("INSERT INTO halaman(judul_halaman, isi_halaman) VALUES ('".$judul."','".$isi."');");	
		}
		
		function get_create_halaman(){
			return $this->db->query("SELECT * FROM halaman WHERE halaman.id_halaman = LAST_INSERT_ID();");
		}

		function post_update_halaman($id,$judul,$isi){
			return $this->db->query("UPDATE halaman SET halaman.judul_halaman = '".$judul."', halaman.isi_halaman = '".$isi."' WHERE halaman.id_halaman = '".$id."';");
		}

		function post_delete_halaman($id){
			return $this->db->query("DELETE FROM halaman WHERE halaman.id_halaman = '".$id."'; ");	
		}
	}
 ?>