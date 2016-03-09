<?php 
	/**
	* 
	*/
	class Faq_model extends CI_Model
	{
		function get_all_faq()
		{
			return $this->db->query("SELECT * FROM faq;");
		}

		function get_all_paging_sorting_faq($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM faq ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_faq($judul,$isi){
			return $this->db->query("INSERT INTO faq(question, answer) VALUES ('".$judul."','".$isi."');");	
		}
		
		function get_create_faq(){
			return $this->db->query("SELECT * FROM faq WHERE faq.id_faq = LAST_INSERT_ID();");
		}

		function post_update_faq($id,$ques,$answer){
			return $this->db->query("UPDATE faq SET faq.question = '".$ques."', faq.answer = '".$answer."' WHERE faq.id_faq = '".$id."';");
		}

		function post_delete_faq($id){
			return $this->db->query("DELETE FROM faq WHERE faq.id_faq = '".$id."'; ");	
		}



		function get_all_kota()
		{
			return $this->db->query("SELECT * FROM kota;");
		}

		function get_all_paging_sorting_kota($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM kota ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_kota($judul){
			return $this->db->query("INSERT INTO kota(nama_kota) VALUES ('".$judul."');");	
		}
		
		function get_create_kota(){
			return $this->db->query("SELECT * FROM kota WHERE kota.id_kota = LAST_INSERT_ID();");
		}

		function post_update_kota($id,$answer){
			return $this->db->query("UPDATE kota SET kota.nama_kota = '".$answer."' WHERE kota.id_kota = '".$id."';");
		}

		function post_delete_kota($id){
			return $this->db->query("DELETE FROM kota WHERE kota.id_kota = '".$id."'; ");	
		}



		function get_all_negara()
		{
			return $this->db->query("SELECT * FROM negara;");
		}

		function get_all_paging_sorting_negara($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM negara ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_negara($judul){
			return $this->db->query("INSERT INTO negara(nama_negara) VALUES ('".$judul."');");	
		}
		
		function get_create_negara(){
			return $this->db->query("SELECT * FROM negara WHERE negara.id_negara = LAST_INSERT_ID();");
		}

		function post_update_negara($id,$answer){
			return $this->db->query("UPDATE negara SET negara.nama_negara = '".$answer."' WHERE negara.id_negara = '".$id."';");
		}

		function post_delete_negara($id){
			return $this->db->query("DELETE FROM negara WHERE negara.id_negara = '".$id."'; ");	
		}
	}
 ?>