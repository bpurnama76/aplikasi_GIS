<?php
/**
* 
*/
class Client extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_client','client');
	}
	function index() {
		$data['list'] = $this->client->get_imb();
		$this->template->load('template','client/list_imb',$data);
	}
}