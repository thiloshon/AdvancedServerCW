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

		$temp = $this->get_cart_items();
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
		$this->initiate_cart();
		return $this->ci->session->cart_items;
	}

	public function update_cart_item($book_id, $quantity)
	{
		$items = $this->get_cart_items();

		$items[$book_id]['qty'] = $quantity;
		$this->ci->session->set_userdata('cart_items', $items);

		return $this->get_cart_items();
	}

	public function delete_cart_item($book_id)	{
		$items = $this->get_cart_items();

		unset($items[$book_id]);

		$this->ci->session->set_userdata('cart_items', $items);

		return $this->get_cart_items();
	}

}
