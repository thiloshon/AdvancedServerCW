<?php

/**
 * Class Admin Controller responsible for admin functionality.
 */
class Admin extends CI_Controller
{
	/**
	 * Base route.
	 */
	public function index()
	{
		if ($this->is_admin_logged_in()) {
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_category');
		} else {
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_login');
		}
	}

	/**
	 * Private function for checking if admin is logged in.
	 */
	private function is_admin_logged_in()
	{
		return isset($this->session->admin_logged_in) & ($this->session->admin_logged_in);
	}

	/**
	 * For login of admin
	 */
	public function login()
	{
		$this->form_validation->set_rules('name', 'Admin ID', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$rs['error_message'] = "";

		if ($this->form_validation->run()) {
			$id = $this->input->post('name');
			$pw = $this->input->post('password');

			if ($id == 'admin' && $pw == 'admin') {
				$this->session->set_userdata('admin_logged_in', true);
				redirect('/admin', 'refresh');

			} else {
				$rs['error_message'] = "Username, password mismatch";
			}
		}

		$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
		$this->load->view('admin/admin_login', $rs);

	}

	/**
	 * For adding new category.
	 */
	public function new_category()
	{
		if ($this->is_admin_logged_in()) {
			if (is_null($this->input->get('newCategory'))) {
				$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
				$this->load->view('admin/admin_category');

			} else {
				$id = $this->input->get('newCategoryID');
				$name = $this->input->get('newCategory');

				$this->Category_model->add_a_new_category($id, $name);

				redirect('/admin/category', 'refresh');
			}
		} else {
			redirect('/admin', 'refresh');
		}
	}

	/**
	 * For adding new book.
	 */
	public function new_book()
	{
		if ($this->is_admin_logged_in()) {
			if (is_null($this->input->get('book_name'))) {

				// For listing available categories to choose from
				$data['categories'] = $this->Category_model->get_all_categories();

				$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
				$this->load->view('admin/admin_book', $data);

			} else {
				$data = $this->input->post(array('book_name', 'author', 'publisher', 'category', 'price', 'isbn', 'copies'));
				call_user_func_array(array($this->Book_model, "add_a_new_book"), $data);

				redirect('/Admin/new_book', 'refresh');
			}
		} else {
			redirect('/admin', 'refresh');
		}
	}

	/**
	 * For searching for a book.
	 */
	public function search()
	{
		if ($this->is_admin_logged_in()) {
			$searchKeyword = $this->input->get('keyword');
			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));

			if ($searchKeyword == "" | is_null($searchKeyword)) {
				$this->load->view('admin/admin_search', array("results" => array()));

			} else {
				$rs['results'] = $this->Book_model->search_for_a_book($searchKeyword);

				$this->load->view('admin/admin_search', $rs);
			}
		} else {
			redirect('/admin', 'refresh');
		}
	}

	/**
	 * For viewing a book and its statistics.
	 */
	public function view_book()
	{
		if ($this->is_admin_logged_in()) {
			$book_id = $this->input->get('book_id');

			$book = $this->Book_model->get_book_by_id($book_id);
			$statistics = $this->user_statistics_library->get_visitors_over_time($book_id);

			$rs['book_id'] = $book_id;
			$rs['book'] = $book;
			$rs['statistics'] = $statistics;

			$this->load->view('components/admin_header', array('title' => 'Admin Portal'));
			$this->load->view('admin/admin_book_view', $rs);
		} else {
			redirect('/admin', 'refresh');
		}
	}
}
