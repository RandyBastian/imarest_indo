<?php 
	/**
	* 
	*/
	class Video_model extends CI_Model
	{
		function get_all_video()
		{
			return $this->db->query("SELECT * FROM video;");
		}

		function get_all_paging_sorting_video($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM video ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_video($judul,$isi){
			return $this->db->query("INSERT INTO video(nama_video, link_video) VALUES ('".$judul."','".$isi."');");	
		}
		
		function get_create_video(){
			return $this->db->query("SELECT * FROM video WHERE video.id_video = LAST_INSERT_ID();");
		}

		function post_update_video($id,$ques,$answer){
			return $this->db->query("UPDATE video SET video.nama_video = '".$ques."', video.link_video = '".$answer."' WHERE video.id_video = '".$id."';");
		}

		function post_delete_video($id){
			return $this->db->query("DELETE FROM video WHERE video.id_video = '".$id."'; ");	
		}



		
	}
 ?>