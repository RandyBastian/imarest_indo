<?php 
	/**
	* 
	*/
	class Kontak_model extends CI_Model
	{
		function get_all_kontak()
		{
			return $this->db->query("SELECT * FROM contact;");
		}

		function get_all_paging_sorting_kontak($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM contact ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}
		function post_create_kontak($nama,$telp,$email){
			return $this->db->query("INSERT INTO contact(nama_contact, telp_contact, email_contact) VALUES ('".$nama."','".$telp."','".$email."');");
		}
		
		function get_create_kontak(){
			return $this->db->query("SELECT * FROM contact WHERE contact.id_contact = LAST_INSERT_ID();");
		}

		function post_update_kontak($id,$nama,$telp,$email){
			return $this->db->query("UPDATE contact SET contact.nama_contact = '".$nama."', contact.telp_contact = '".$telp."', contact.email_contact = '".$email."' WHERE contact.id_contact = '".$telp."' = '".$id."';");
		}

		function post_delete_kontak($id){
			return $this->db->query("DELETE FROM contact WHERE contact.id_contact = '".$id."'; ");	
		}
	}
 ?>