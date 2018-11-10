<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:35 PM
 */
class Categories extends CI_Controller {

    /**
     *
     */
    public function index()
    {
		$category_id = $this->input->get('category_id');

		$data['category'] = $category_id;
		$data['categories'] = $this->Category_model->get_all_categories();
		$data['books'] = $this->Book_model->get_books_by_category($category_id);

        $this->load->view('categories_page', $data);
    }
}
