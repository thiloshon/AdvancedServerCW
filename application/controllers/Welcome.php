<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome Controller responsible for a landing page of the site.
 */
class Welcome extends CI_Controller
{
	/**
	 * Base route.
	 */
	public function index()
	{
		$data['books'] = $this->Book_model->get_all_books_as_categories();

		$this->load->view('components/header', array('title' => 'Welcome to Bookery!'));
		$this->load->view('home_page', $data);
	}
}
