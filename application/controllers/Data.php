<?php

/**
* 
*/
class Data extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('ssp');
	}

	function data() {
		// nama tabel
        $table = 'view_kepemilikan_izin';
        // nama PK
        $primaryKey = 'nomor_izin';
        // list field
        $columns = array(
            array('db' => 'nama_user', 'dt' => 'nama_user'),
            array('db' => 'lokasi_bangunan', 'dt' => 'lokasi_bangunan'),
            array('db' => 'status_tanah', 'dt' => 'status_tanah'),
            array('db' => 'nomor_izin', 'dt' => 'nomor_izin'),
            array(
                'db' => 'nomor_izin',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                    anchor('users/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-success"').'
                    '.anchor('users/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-danger"');
                }
                )
            );

        $sql_details = array(
            'user'  => $this->db->username,
            'pass'  => $this->db->password,
            'db'    => $this->db->database,
            'host'  => $this->db->hostname
            );

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
	}

	function index() 
	{
		$this->template->load('template','data/info');
	}

	function list_simb()
	{
		$this->template->load('template','data/list_simb');	
	}

}