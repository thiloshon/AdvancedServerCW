<?php

/**
 * Class Category_model Used to map and interact with categories DB table.
 */
class Category_model extends CI_Model
{
	public $category_id;
	public $category_name;

	/**
	 * Add a new category to the DB.
	 *
	 * @param $category_id The unique category ID to be added.
	 * @param $category_name The category name to be shown in site
	 */
	public function add_a_new_category($category_id, $category_name)
	{
		$this->category_id = $category_id;
		$this->category_name = $category_name;

		$this->db->insert('book_categories', $this);
	}

	/**
	 * Get the list of categories in DB.
	 *
	 * @return mixed The categories as Category_model objects.
	 */
	public function get_all_categories()
	{
		$categories = $this->db->get('book_categories');

		return $categories->custom_result_object('Category_model');
	}

	/**
	 * Get the name of a category from ID.
	 *
	 * @param $id The category ID to get name.
	 *
	 * @return mixed The name in Category_model object.
	 */
	public function get_category_name($id)
	{
		$this->db->where('category_id', $id);
		$res = $this->db->get('book_categories');

		return $res->custom_row_object(0, 'Category_model')->category_name;
	}
}
