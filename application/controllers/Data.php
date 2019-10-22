<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('ssp');
        $this->load->model('Model_data');
	}

	function data() {
		// nama tabel
        $table = 'view_kepemilikan_izin';
        // nama PK
        $primaryKey = 'nomor_izin';
        // list field
        $columns = array(
            array('db' => 'nomor_izin', 'dt' => 'nomor_izin'),
            array('db' => 'nama_user', 'dt' => 'nama_user'),
            array('db' => 'lokasi_bangunan', 'dt' => 'lokasi_bangunan'),
            array('db' => 'status_tanah', 'dt' => 'status_tanah'),
            array('db' => 'nama_kategori', 'dt' => 'kategori'),
            array(
                'db' => 'nomor_izin',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return 
                    anchor('data/edit_simb/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-success"').'
                    '.anchor('data/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-danger"');
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

    function add_simb()
    {
        if (isset($_POST['submit'])) {
            $this->Model_data->add_simb();
            redirect('data/list_simb');
        } else {
            $this->template->load('template','data/add_simb');    
        }
         
    }

    function edit_simb()
    {
        if (isset($_POST['submit'])) {
            $this->Model_data->edit_simb();
            redirect('data/list_simb');
        } else {
            $id_edit = $this->uri->segment(3);
            $data['simb'] = $this->db->get_where('tbl_izin',array('nomor_izin'=>$id_edit))->row_array();
            $this->template->load('template','data/edit_simb',$data);  
        }
    }

    function delete() 
    {
        $id_delete = $this->uri->segment(3);
        if (!empty($id_delete)) {

            $this->db->where('nomor_izin',$id_delete);
            $this->db->delete('tbl_izin');
            redirect('data/list_simb');
        }
    }

}