<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 08-Nov-18
 * Time: 8:55 PM
 */
class Admin extends CI_Controller
{
	public function index()
	{
		if (!is_null($this->input->post('name'))) {
			$this->load->view('admin_login');
		} else{
			$this->load->view('admin_home');
		}
	}


	public function category()
	{
		$this->load->view('admin_home');

	}

	public function book()
	{
		$this->load->view('admin_book');

	}

	public function search()
	{
		$this->load->view('admin_book');

	}

}
