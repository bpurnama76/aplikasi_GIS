<?php
/**
* 
*/
class Model_data extends CI_Model
{
	
	function add_simb()
	{
		$data = array(
			'nomor_izin'		=> $this->input->post('nomor_izin',TRUE),
			'id_user'			=> $this->input->post('user',TRUE),
			'luas_bangunan'		=> $this->input->post('luas',TRUE),
			'status_tanah'		=> $this->input->post('status_tanah',TRUE),
			'kategori'			=> $this->input->post('kategori',TRUE),
			'longitude'			=> $this->input->post('longitude',TRUE),
			'latitude'			=> $this->input->post('latitude',TRUE),
			'lokasi_bangunan'	=> $this->input->post('lokasi_bangunan',TRUE),
			'tanggal_izin'			=> $this->input->post('tanggal',TRUE)
			);
		$this->db->insert('tbl_izin',$data);
	}

	function edit_simb()
	{
		
	}
}