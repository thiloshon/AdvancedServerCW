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
		if (isset($this->session->admin_logged_in) & $this->session->admin_logged_in){
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_category');
		} else {
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_login');
		}
	}

	public function login(){
		if (!is_null($this->input->post('name'))) {
			$id = $this->input->post('name');
			$pw = $this->input->post('password');

			if ($id == 'admin' && $pw == 'admin'){
				$this->session->set_userdata('admin_logged_in', true);
			}
		}

		redirect('/admin', 'refresh');
	}


	public function new_category()
	{
		if (is_null($this->input->get('newCategory'))) {
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_category');

		} else {
			$id = $this->input->get('newCategoryID');
			$name = $this->input->get('newCategory');

			$this->Category_model->add_a_new_category($id, $name);

			redirect('/admin/category', 'refresh');
		}
	}


	public function new_book()
	{
		if (is_null($this->input->get('book_name'))) {

			// For listing available categories to choose from
			$data['categories'] = $this->Category_model->get_all_categories();

			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_book', $data);

		} else {

			$title = $this->input->get('book_name');
			$author = $this->input->get('author');
			$publisher = $this->input->get('publisher');
			$category = $this->input->get('category');
			$price = $this->input->get('price');
			$isbn = $this->input->get('isbn');
			$copies_held = $this->input->get('copies');

			$this->Book_model->add_a_new_book($title, $author, $publisher, $category, $price, $isbn, $copies_held);

			redirect('/admin/book', 'refresh');
		}
	}

	public function search()
	{
		$searchKeyword = $this->input->get('keyword');
		$this->load->view('components/admin_header', array('title' => 'Admin Portal'));

		if ($searchKeyword == "" | is_null($searchKeyword)) {
			$this->load->view('admin/admin_search', array("results" => array()));

		} else {
			$rs['results'] = $this->Book_model->search_for_a_book($searchKeyword);

			$this->load->view('admin/admin_search', $rs);
		}
	}

	public function view_book()
	{

		$book_id = $this->input->get('book_id');

		$book = $this->Book_model->get_book_by_id($book_id);
		$statistics = $this->user_statistics_library->get_visitors_over_time($book_id);

		$rs['book_id'] = $book_id;
		$rs['book'] = $book;
		$rs['statistics'] = $statistics;

		$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
		$this->load->view('admin/admin_book_view', $rs);
	}
}
