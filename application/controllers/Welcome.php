<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 *
	 */
	public function index()
	{
		$data['books'] = $this->Book_model->get_all_books_as_categories();

		$this->load->view('components/header', array('title' => 'Welcome!'));
		$this->load->view('home_page', $data);
	}
}
