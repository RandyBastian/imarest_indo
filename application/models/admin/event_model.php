<?php 
	/**
	* 
	*/
	class Event_model extends CI_Model
	{
		
		function get_all_event()
		{
			return $this->db->query("SELECT * FROM event;");
		}

		function get_all_paging_sorting_event($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM event ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}

		function get_neg()
		{
			return $this->db->query("SELECT DISTINCT negara.nama_negara AS DisplayText, negara.id_negara AS Value FROM negara;");
		}

		function get_kota()
		{
			return $this->db->query("SELECT DISTINCT kota.nama_kota AS DisplayText, kota.id_kota AS Value FROM kota;");
		}

	}
 ?>