<?php 
	/**
	* 
	*/
	class Event_model extends CI_Model
	{
		
		function get_all_event()
		{
			return $this->db->query("SELECT * FROM event WHERE (event.tipe_event LIKE '%Course%' OR event.tipe_event LIKE '%Confrence%') ;");
		}

		function get_all_paging_sorting_event($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM event WHERE (event.tipe_event LIKE '%Course%' OR event.tipe_event LIKE '%Confrence%') ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
		}

		function get_all_training()
		{
			return $this->db->query("SELECT * FROM event WHERE  event.tipe_event LIKE '%Training%' ;");
		}

		function get_all_paging_sorting_training($jtStartIndex,$jtPageSize,$jtSorting)
		{
			return $this->db->query("SELECT * FROM event WHERE event.tipe_event LIKE '%Training%' ORDER BY '".$jtSorting."' LIMIT ".$jtStartIndex.",".$jtPageSize.";");
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

	    function get_data_event($id){
			return $this->db->query("SELECT * FROM event WHERE event.id_event = '".$id."';");	
		}

				 // update_without_training($id,$nama,$pie[0],$pie[1],$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link)
		function update_without_training($id,$nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link){
			return $this->db->query("UPDATE event SET event.nama_event = '".$nama."', event.lat_event = '".$lat."',  event.lang_event = '".$lang."', event.id_kota_event = '".$kota."', event.id_negara_event = '".$negara."', event.tanggal_mulai_event= '".$tanggal_awal."',event.tanggal_akhir_event= '".$tanggal_akhir."',event.jam_mulai_event= '".$jam_awal."', event.jam_akhir_event='".$jam_akhir."',event.tipe_event='".$tipe."',event.register_event = '".$link."' WHERE event.id_event = '".$id."';");
		}

		function update_with_training($id,$nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab){
			return $this->db->query("UPDATE event SET event.nama_event = '".$nama."', event.lat_event = '".$lat."',  event.lang_event = '".$lang."', event.id_kota_event = '".$kota."', event.id_negara_event = '".$negara."', event.tanggal_mulai_event= '".$tanggal_awal."',event.tanggal_akhir_event= '".$tanggal_akhir."',event.jam_mulai_event= '".$jam_awal."', event.jam_akhir_event='".$jam_akhir."',event.tipe_event='".$tipe."',event.register_event = '".$link."', event.pic_event = '".$gab."' WHERE event.id_event = '".$id."';");
		}

		function update_without_event($id,$nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link){
			return $this->db->query("UPDATE event SET event.nama_event = '".$nama."', event.lat_event = '".$lat."',  event.lang_event = '".$lang."', event.id_kota_event = '".$kota."', event.id_negara_event = '".$negara."', event.tanggal_mulai_event= '".$tanggal_awal."',event.tanggal_akhir_event= '".$tanggal_akhir."',event.jam_mulai_event= '".$jam_awal."', event.jam_akhir_event='".$jam_akhir."',event.tipe_event='".$tipe."',event.register_event = '".$link."' WHERE event.id_event = '".$id."';");
		}

		function update_with_event($id,$nama,$lat,$lang,$kota,$negara,$tanggal_awal,$tanggal_akhir,$jam_awal,$jam_akhir,$tipe,$link,$gab){
			return $this->db->query("UPDATE event SET event.nama_event = '".$nama."', event.lat_event = '".$lat."',  event.lang_event = '".$lang."', event.id_kota_event = '".$kota."', event.id_negara_event = '".$negara."', event.tanggal_mulai_event= '".$tanggal_awal."',event.tanggal_akhir_event= '".$tanggal_akhir."',event.jam_mulai_event= '".$jam_awal."', event.jam_akhir_event='".$jam_akhir."',event.tipe_event='".$tipe."',event.register_event = '".$link."', event.pic_event = '".$gab."' WHERE event.id_event = '".$id."';");
		}

	}
 ?>