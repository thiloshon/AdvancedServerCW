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
			$this->load->view('admin_category');
		}
	}


	public function new_category()
	{
		if (is_null($this->input->get('newCategory'))) {
			$this->load->view('admin_category');

		} else{
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

			$this->load->view('admin_book', $data);
		} else{

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

		if ($searchKeyword == "" | is_null($searchKeyword)) {
			$this->load->view('admin_search', array("results" => array()));

		} else{
			$rs['results'] = $this->Book_model->search_for_a_book($searchKeyword);

			$this->load->view('admin_search', $rs);
		}

	}

}
