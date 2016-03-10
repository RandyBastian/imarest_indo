<?php 
	/**
	* 
	*/
	class Resource_model extends CI_Model
	{
		
		function get_all_resource()
		{
			return $this->db->query("SELECT * FROM resource;");
		}

		function get_all_paging_sorting_resource($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM resource ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}

		

		function tambah_resource($judul,$isi,$gab){
			return $this->db->query("INSERT INTO resource(judul_resource,isi_resource,pic_resource) VALUES ('".$judul."','".$isi."','".$gab."')");	
		}

		
	}
 ?>