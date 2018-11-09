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


	public function category()
	{

		if (is_null($this->input->get('newCategory'))) {
			$this->load->view('admin_category');

		} else{
			$data = array(
				'genreID' =>  $this->input->get('newCategoryID'),
				'Title' => $this->input->get('newCategory')
			);

			$this->db->insert('categories', $data);

			redirect('/admin/category', 'refresh');

			$this->load->view('admin_category');
		}
	}



	public function book()
	{
		if (is_null($this->input->get('book_name'))) {

			$categories = $this->db->get('Categories');
			$rs['categories'] = $categories->result_array();

			$this->load->view('admin_book', $rs);

		} else{

			$data = array(
				'Title' => $this->input->get('book_name'),
				'Publisher' => $this->input->get('publisher'),
				'Band' => "Brown",
				'Genre' => $this->input->get('category'),
				'CopiesHeld' => $this->input->get('copies'),
				'CopiesOut' => 0
			);

			$this->db->insert('libooks', $data);

			redirect('/admin/book', 'refresh');

		}
	}



	public function search()
	{
		$searchKeyword = $this->input->get('keyword');

		if ($searchKeyword == "" | is_null($searchKeyword)) {
			$this->load->view('admin_search', array("results" => array()));

		} else{

			$this->db->like('Title', $searchKeyword);
			$this->db->or_like('Publisher', $searchKeyword);

			$res = $this->db->get('libooks');

			$rs['results'] = $res->result_array();

			$this->load->view('admin_search', $rs);

		}

	}

}
