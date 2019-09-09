<?php
/**
* 
*/
class Model_users extends CI_Model
{
	
	public $table = "tbl_user";

	function add()
	{
		$data = array (
			'nama_user'			=> $this->input->post('nama_user',TRUE),
			'tempat_lahir'		=> $this->input->post('tempat_lahir',TRUE),
			'tanggal_lahir'		=> $this->input->post('tanggal_lahir',TRUE),
			'agama'				=> $this->input->post('agama',TRUE),
			'pekerjaan'			=> $this->input->post('pekerjaan',TRUE),
			'gender'			=> $this->input->post('gender',TRUE),
			'status'			=> $this->input->post('status',TRUE),
			'telpon'			=> $this->input->post('telpon',TRUE),
			'email'				=> $this->input->post('email',TRUE),
			);
		$this->db->insert($this->table,$data);
	}
}