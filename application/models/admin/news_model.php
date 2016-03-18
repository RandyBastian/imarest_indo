<?php 
	/**
	* 
	*/
	class News_model extends CI_Model
	{
		
		function get_all_news()
		{
			return $this->db->query("SELECT * FROM news;");
		}

		function get_all_paging_sorting_news($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM news ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}

		function tambah_news($judul,$isi,$gab){
			return $this->db->query("INSERT INTO news(judul_news,isi_news,pic_news) VALUES ('".$judul."','".$isi."','".$gab."')");	
		}

		function get_data_news($id){
			return $this->db->query("SELECT * FROM news WHERE news.id_news = '".$id."';");	
		}

		function update_wtihpic_news($id,$judul,$isi,$gab){
			return $this->db->query("UPDATE news SET news.judul_news = '".$judul."', news.isi_news = '".$isi."', news.pic_news = '".$gab."' WHERE news.id_news = '".$id."';");
		}
		
		function update_news($id,$judul,$isi){
			return $this->db->query("UPDATE news SET news.judul_news = '".$judul."', news.isi_news = '".$isi."' WHERE news.id_news = '".$id."';");
		}
	}
 ?>