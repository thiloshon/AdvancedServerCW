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

	public function get_visitors_over_time($book_id)
	{

		$date_statistics = $this->ci->db->select('COUNT(*) as y')
			->select('book_id')
			->select('date(date) as label')
			->from('book_views')
			->where('book_id', $book_id)
			->group_by("date(date)")
			->group_by('book_id')
			->get();


		return $date_statistics->result();

	}

}
