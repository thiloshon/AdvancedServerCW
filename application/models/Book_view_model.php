<?php

/**
 * Class Book_view_model Used to map and interact with book_views DB table.
 */
class Book_view_model extends CI_Model
{
	public $user_id;
	public $book_id;

	/**
	 * Add a book view to DB.
	 *
	 * @param $book_id The book ID user is viewing.
	 * @param $user_id The User ID assigned.
	 */
	public function add_book_view($book_id, $user_id)
	{
		$this->user_id = $user_id;
		$this->book_id = $book_id;

		$this->db->insert('book_views', $this);
	}
}
