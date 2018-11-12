<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Cart Controller responsible for a single book view.
 */
class Cart extends CI_Controller
{

	/**
	 * Base route.
	 */
	public function index()
	{
		$data['cart_items'] = $this->cart_library->get_cart_items();

		$this->load->view('components/header', array('title' => 'Your Cart'));
		$this->load->view('shopping_cart', $data);
	}

	/**
	 * Updating of cart.
	 */
	public function update_item()
	{
		$book_id = $this->input->get('book_id');
		$qty = $this->input->get('new_qty');

		$this->cart_library->update_cart_item($book_id, $qty);

		redirect('/cart');
	}

	/**
	 * Deleting cart item.
	 */
	public function delete_item()
	{
		$book_id = $this->input->get('item');

		$data['cart_items'] = $this->cart_library->delete_cart_item($book_id);

		redirect('/cart');
	}
}
