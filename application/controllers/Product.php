<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:53 PM
 */
class Product extends CI_Controller
{

	/**
	 *
	 */
	public function index()
	{

		$session_id = session_id();
		$book_id = $this->input->get('book_id');

		$this->db->where('ID', $book_id);
		$res = $this->db->get('Libooks');

		$rs['book'] = $res->result_array()[0];
		$res->free_result();

		$data = array(
			'Session_id' => $session_id,
			'book_id' => $book_id
		);

		$this->db->insert('session', $data);


		$query = 'SELECT * FROM Libooks WHERE ID IN (SELECT c.book_id 
FROM `session` a
JOIN `session` b ON a.book_id=b.book_id
JOIN `session` c ON b.Session_id=c.Session_id
WHERE a.`book_id`=' . $book_id . ' AND c.book_id!=' . $book_id . ' GROUP BY c.book_id
ORDER BY COUNT(*) DESC)';

		$also_viewed = $this->db->query($query);
		$rs['also_viewed'] = $also_viewed->result_array();


		if (!($this->session->has_userdata('cart_items'))){
			$cart_items = array('cart_items' => array());
			$this->session->set_userdata($cart_items);
		}

		$this->load->view('product_page', $rs);
	}
}
