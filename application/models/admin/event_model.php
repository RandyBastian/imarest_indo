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

		function masuk_event($nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab){
			return $this->db->query("INSERT INTO event(nama_event,lat_event,lang_event, id_kota_event,id_negara_event,tanggal_mulai_event,tanggal_akhir_event,jam_mulai_event,jam_akhir_event,tipe_event,register_event,pic_event) VALUES ('".$nama."','".$lat."','".$lang."','".$kota."','".$negara."','".$tanggal_awal."','".$tanggal_akhir."','".$jam_awal."','".$jam_akhir."','".$tipe."','".$link."','".$gab."')");	
		}

		function getAllNegara()
	    {
	        $query = $this->db->query("SELECT * FROM negara");
	        return $query->result();
	    }

	    function getAllKota()
	    {
	        $query = $this->db->query("SELECT * FROM kota");
	        return $query->result();
	    }

	}
 ?>