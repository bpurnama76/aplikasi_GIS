<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_users');
        $this->load->library('ssp');
    }


    function data() {
		// nama tabel
        $table = 'tbl_user';
        // nama PK
        $primaryKey = 'id_user';
        // list field
        $columns = array(
            array('db' => 'foto', 
                'dt'   => 'foto',
                'formatter' => function( $d) {
                    return "<img width='50px' class='rounded-circle' src='". base_url()."/uploads/".$d."'>";}),
            array('db' => 'nama_user', 'dt' => 'nama_user'),
            array('db' => 'telpon', 'dt' => 'telpon'),
            array('db' => 'email', 'dt' => 'email'),
            array(
                'db' => 'id_user',
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
        $this->template->load('template','users/list');

    }

    function add()
    {
        if (isset($_POST['submit'])) {
            $upload_foto = $this->upload_foto();

            $this->Model_users->add($upload_foto);
            redirect('users');

        } else {
            $this->template->load('template','users/add');
        }

    }

    function edit() 
    {
        if (isset($_POST['submit'])) {
            $upload_foto = $this->upload_foto();

            $this->Model_users->edit($upload_foto);
            redirect('users');
        } else {
            $id                  = $this->uri->segment(3);
            $data['data_users']  = $this->db->get_where('tbl_user',array('id_user'=>$id))->row_array();
            $this->template->load('template','users/edit',$data);
        }

    }

    function delete() 
    {
        $id_delete = $this->uri->segment(3);
        if (!empty($id_delete)) {

            $this->db->where('id_user',$id_delete);
            $this->db->delete('tbl_user');
            redirect('users');
        }
    }

    function upload_foto() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 2048;
        $this->load->library('upload', $config);

            //proses upload

        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}