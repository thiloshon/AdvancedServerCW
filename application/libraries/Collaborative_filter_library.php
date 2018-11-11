<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 10-Nov-18
 * Time: 1:34 PM
 */
class Collaborative_filter_library
{
	function __construct()
	{
		$this->ci = &get_instance();
	}


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

	public function get_related_books($book_id)
	{

		$query = 'SELECT * FROM library_books WHERE isbn IN (SELECT c.book_id 
FROM `book_views` a
JOIN `book_views` b ON a.book_id=b.book_id
JOIN `book_views` c ON b.user_id=c.user_id
WHERE a.`book_id`=' . $book_id . ' AND c.book_id!=' . $book_id . ' GROUP BY c.book_id
ORDER BY COUNT(*) DESC)';

		$also_viewed = $this->ci->db->query($query);

		return $also_viewed->custom_result_object('Book_model');

	}
}
