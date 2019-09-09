<?php 
/**
* 
*/
class Users extends CI_Controller
{

    function __construct()
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
        $this->template->load('template','data/users');

    }

    function add_users()
    {
        if (isset($_POST['submit'])) {

            $this->Model_users->add();
            redirect('users');

        } else {
            $this->template->load('template','data/add_users');
        }
                
    }

    function edit() 
    {
        if (isset($_POST['submit'])) {
            $this->Model_users->edit();
            redirect('users');
        } else {
            $id                 = $this->uri->segment(3);
            $data['data_users']  = $this->db->get_where('tbl_user',array('id_user'=>$id))->row_array();
            $this->template->load('template','data/edit_users',$data);
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
}