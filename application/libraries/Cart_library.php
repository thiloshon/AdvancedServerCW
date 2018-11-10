<?php

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 10-Nov-18
 * Time: 3:10 PM
 */
class Cart_library
{
	function __construct()
	{
		$this->ci = &get_instance();
	}

	public function add_book_to_cart($book_id, $quantity, $title)
	{
		$this->initiate_cart();

		$newdata = array(
			'book_id' => $book_id,
			'qty' => $quantity,
			'book_name' => $title
		);

		$temp = $this->ci->session->cart_items;
		$temp[$book_id] = $newdata;

		$this->ci->session->set_userdata('cart_items', $temp);
	}

	public function initiate_cart()
	{
		if (!($this->ci->session->has_userdata('cart_items'))) {
			$cart_items = array('cart_items' => array());
			$this->ci->session->set_userdata($cart_items);
		}
	}

	public function get_cart_items()
	{
		return $this->ci->session->cart_items;
	}


}
