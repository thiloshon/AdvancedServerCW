<?php

/**
 * Library for simple cart manipulations.
 */
class Cart_library
{
	function __construct()
	{
		$this->ci = &get_instance();
	}

	/**
	 * Add a book to the cart.
	 *
	 * @param $book_id
	 * @param $quantity
	 * @param $title
	 * @param $price
	 * @param $url
	 */
	public function add_book_to_cart($book_id, $quantity, $title, $price, $url)
	{
		$this->initiate_cart();

		$newdata = array(
			'book_id' => $book_id,
			'qty' => $quantity,
			'book_name' => $title,
			'price' => $price,
			'url' => $url
		);

		$temp = $this->get_cart_items();
		$temp[$book_id] = $newdata;

		$this->ci->session->set_userdata('cart_items', $temp);
	}

	/**
	 * Initiate session variables for the cart.
	 */
	private function initiate_cart()
	{
		if (!($this->ci->session->has_userdata('cart_items'))) {
			$cart_items = array('cart_items' => array());
			$this->ci->session->set_userdata($cart_items);
		}
	}

	/**
	 * Get the items in cart.
	 */
	public function get_cart_items()
	{
		$this->initiate_cart();
		return $this->ci->session->cart_items;
	}

	/**
	 * Change the item details in the cart.
	 *
	 * @param $book_id
	 * @param $quantity
	 * @return mixed
	 */
	public function update_cart_item($book_id, $quantity)
	{
		$items = $this->get_cart_items();

		$items[$book_id]['qty'] = $quantity;
		$this->ci->session->set_userdata('cart_items', $items);

		return $this->get_cart_items();
	}

	/**
	 * Delete an item from cart.
	 *
	 * @param $book_id
	 * @return mixed
	 */
	public function delete_cart_item($book_id)
	{
		$items = $this->get_cart_items();

		unset($items[$book_id]);

		$this->ci->session->set_userdata('cart_items', $items);

		return $this->get_cart_items();
	}

	/**
	 * Get number of items in cart.
	 */
	public function get_cart_count()
	{
		$this->initiate_cart();
		return sizeof($this->ci->session->cart_items);
	}

	/**
	 * Get total price of the items in cart.
	 */
	public function get_current_amount()
	{
		$sum = 0;
		foreach ($this->get_cart_items() as $key => $value) {
			if (isset($value['price']))
				$sum += ($value['price'] * $value['qty']);
		}
		return $sum;
	}
}
