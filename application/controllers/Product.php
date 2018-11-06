<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:53 PM
 */

class Product extends CI_Controller {

    /**
     *
     */
    public function index()
    {

		$session_id = session_id();
		$book_id = $this->input->get('book_id');

		$this->db->where('ID', $book_id);
		$res = $this->db->get('Libooks');

		$rs['book'] = $res->result_array();
		$res->free_result();

		$data = array(
			'Session_id' => $session_id,
			'book_id' => $book_id
		);

		$this->db->insert('session', $data);


		$this->db->select('(SELECT SUM(payments.amount) FROM payments WHERE payments.invoice_id=4) AS amount_paid', FALSE);
		$query = $this->db->get('mytable');

		$cars = $this->db->query('select * from products where product_type="car"');
		$data = array();
		foreach ($cars->result() as $row) {
			$entry = array();
			$entry['prd'] = $row->product_name;
			$data[] = $entry;
		}




        $this->load->view('product_page');
    }
}
