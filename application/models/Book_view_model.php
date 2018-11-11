<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 10-Nov-18
 * Time: 1:39 PM
 */
class Book_view_model extends CI_Model
{
	public $user_id;
	public $book_id;

	public function add_book_view($book_id, $user_id)
	{
		$this->user_id = $user_id;
		$this->book_id = $book_id;
		// date - auto added


		$this->db->insert('book_views', $this);
	}

}
