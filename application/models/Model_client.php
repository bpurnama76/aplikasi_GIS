<?php

use GuzzleHttp\Client;

class Model_client extends CI_Model
{
	function get_imb() {
		//return $this->db->get('view_kepemilikan_izin')->result_array();
		$client 	= new Client();
		$response 	= $client->request('GET', 'http://ajcorp.id/restci/users/',
			[
			'auth'  => ['admin','1234'],
			'query' => [
				'AJKEY' => 'akimilaku']
			]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
	}
}