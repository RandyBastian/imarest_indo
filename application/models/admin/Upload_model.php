<?php 
	/**
	* 
	*/
	class Upload_model extends CI_Model
	{
		function get_all_upload()
		{
			return $this->db->query("SELECT * FROM galeri;");
		}

		function cari_folder($id){
			return $this->db->query("SELECT galeri.letak_folder FROM galeri WHERE galeri.id_galeri = '".$id."'");	
		}

		function get_all_paging_sorting_upload($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM galeri ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_upload($judul,$tanggal,$upl){
			return $this->db->query("INSERT INTO galeri(nama_galeri,tanggal_buat_galeri, letak_folder) VALUES ('".$judul."','".$tanggal."','".$upl."');");	
		}
		
		function get_create_upload(){
			return $this->db->query("SELECT * FROM galeri WHERE galeri.id_galeri = LAST_INSERT_ID();");
		}

		function post_update_upload($id,$answer){
			return $this->db->query("UPDATE galeri SET galeri.nama_galeri = '".$answer."' WHERE galeri.id_galeri = '".$id."';");
		}

		function post_delete_upload($id){
			return $this->db->query("DELETE FROM galeri WHERE galeri.id_galeri = '".$id."'; ");	
		}
	}

 ?>