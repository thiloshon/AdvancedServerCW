<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:46 PM
 */
class Cart extends CI_Controller
{

	/**
	 *
	 */
	public function index()
	{

		$data['cart_items'] = $this->cart_library->get_cart_items();

		$this->load->view('components/header', array('title' => 'Your Cart'));
		$this->load->view('shopping_cart', $data);
	}

	public function update_item()
	{
		$book_id = $this->input->get('book_id');
		$qty = $this->input->get('new_qty');

		$this->cart_library->update_cart_item($book_id, $qty);

		redirect('/cart');
	}

	public function delete_item()
	{
		$book_id = $this->input->get('item');

		$data['cart_items'] = $this->cart_library->delete_cart_item($book_id);

		redirect('/cart');
	}
}
