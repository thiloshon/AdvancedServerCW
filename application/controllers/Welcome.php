<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 *
	 */
	public function index()
	{

        $res = $this->db->get('Libooks');


        // foreach ($query->result('User') as $user) direct to model

        $rs['books'] = $res->result_array();
        $res->free_result();

		$this->load->view('home_page', $rs);
	}
}
