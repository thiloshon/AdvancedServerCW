<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:35 PM
 */
class Categories extends CI_Controller
{

	/**
	 *
	 */
	public function index()
	{
		$category_id = $this->uri->segment(2, 'all');

		$config['base_url'] = 'http://localhost/AdvancedServerCW/Categories/' . $category_id;
		$config['reuse_query_string'] = TRUE;
		$config['total_rows'] = $this->Book_model->count_by_category($category_id);
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['category'] = $category_id;
		$data['categories'] = $this->Category_model->get_all_categories();
		$data['books'] = $this->Book_model->get_books_by_category($category_id, $config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('components/header', array('title' => 'Categories'));
		$this->load->view('categories_page', $data);
	}
}
