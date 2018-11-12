<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 12-Nov-18
 * Time: 11:12 AM
 */
class User_statistics_library
{
	function __construct()
	{
		$this->ci = &get_instance();
	}

	public function get_visitors_over_time($book_id){

		$query = 'SELECT COUNT(*) as y, book_id, date(date) as label FROM book_views where book_id=' . $book_id . ' GROUP BY date(date), book_id;';

		$date_statistics = $this->ci->db->query($query);

		return $date_statistics->result();

	}

}
