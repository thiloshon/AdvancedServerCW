<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Categories Controller responsible for categories page.
 */
class Categories extends CI_Controller
{

	/**
	 * Base route.
	 */
	public function index()
	{
		$category_id = $this->uri->segment(2, 'all');
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// pagination setup
		$config['base_url'] = 'http://localhost/AdvancedServerCW/Categories/' . $category_id;
		$config['reuse_query_string'] = TRUE;
		$config['total_rows'] = $this->Book_model->count_by_category($category_id);
		$config['per_page'] = 5;

		$this->pagination->initialize($config);


		// Populating data for view

		$data['category'] = $category_id;
		$data['categories'] = $this->Category_model->get_all_categories();
		$data['books'] = $this->Book_model->get_books_by_category($category_id, $config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('components/header', array('title' => 'Categories'));
		$this->load->view('categories_page', $data);
	}
}
