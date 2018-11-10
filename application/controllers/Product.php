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
		$rs = array();

		if (!is_null($this->input->get('book_id'))) {

			$book_id = $this->input->get('book_id');
			$book = $this->Book_model->get_book_by_id($book_id);

			$this->collaborative_filter_library->add_book_view($book_id);
			$related_books = $this->collaborative_filter_library->get_related_books($book_id);

			$rs['book'] = $book;
			$rs['also_viewed'] = $related_books;


			if (!is_null($this->input->get('quantity'))) {
				$book_quantity = $this->input->get('quantity');

				$this->cart_library->add_book_to_cart($book->isbn, $book_quantity, $book->title);
			}

			$this->load->view('product_page', $rs);

		} else {
			echo 'choose book';
		}
	}
}
