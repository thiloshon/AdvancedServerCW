<?php

/**
 * Library for managing 'also viewed by user' feature.
 * This is also called collaborative filtering.
 */
class Collaborative_filter_library
{
	function __construct()
	{
		$this->ci = &get_instance();
	}

	/**
	 * Record a book view by a user.
	 */
	public function add_book_view($book_id)
	{
		if (!($this->ci->session->has_userdata('user_uid'))) {
			$user_id = uniqid('', true);
			$this->ci->session->set_userdata('user_uid', $user_id);

		} else {
			$user_id = $this->ci->session->userdata('user_uid');
		}

		$this->ci->Book_view_model->add_book_view($book_id, $user_id);
	}

	/**
	 * Get the related books to the bookID given.
	 */
	public function get_related_books($book_id)
	{
		// Sub Query
		$this->ci->db->select('c.book_id')
			->from('book_views a')
			->join('book_views b', 'a.book_id=b.book_id')
			->join('book_views c', 'b.user_id=c.user_id')
			->where('a.book_id', $book_id)
			->where('c.book_id!=', $book_id)
			->group_by("c.book_id")
			->order_by('COUNT(*)', 'DESC')
			->limit(6);
		$subQuery = $this->ci->db->get_compiled_select();

		// Main Query
		$also_viewed = $this->ci->db->select('*')
			->from('library_books')
			->where("isbn IN ($subQuery)", NULL, FALSE)
			->get();

		return $also_viewed->custom_result_object('Book_model');
	}
}
