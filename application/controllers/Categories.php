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
    	$category = $this->input->get('category_id');

		$this->db->where('Genre', $category);
		$res = $this->db->get('Libooks');

		$categories = $this->db->get('Categories');

		$rs['books'] = $res->result_array();
		$rs['category'] = $category;
		$rs['categories'] = $categories->result_array();


		$res->free_result();

        $this->load->view('categories_page', $rs);
    }
}
