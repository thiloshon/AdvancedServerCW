<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 10-Nov-18
 * Time: 11:58 AM
 */
class Category_model extends CI_Model
{
	public $category_id;
	public $category_name;

	public function add_a_new_category($category_id, $category_name)
	{
		$this->category_id = $category_id;
		$this->category_name = $category_name;

		$this->db->insert('book_categories', $this);
	}

	public function get_all_categories()
	{
		$categories = $this->db->get('book_categories');

		return $categories->custom_result_object('Category_model');
	}

	public function get_category_name($id)
	{
		$this->db->where('category_id', $id);
		$res = $this->db->get('book_categories');

		return $res->custom_row_object(0, 'Category_model')->category_name;
	}
}
