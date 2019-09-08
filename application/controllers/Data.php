<?php

/**
* 
*/
class Data extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index() 
	{
		$this->template->load('template','data/info');
	}

}