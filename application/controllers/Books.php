<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Books Controller responsible for a single book view.
 */
class Books extends CI_Controller
{

	/**
	 * Base route.
	 */
	public function index()
	{
		$book_id = $this->uri->segment(2, null);

		if (is_null($book_id)) {
			show_404();

		} else {
			$book = $this->Book_model->get_book_by_id($book_id);

			// performing also viewed feature
			$this->collaborative_filter_library->add_book_view($book_id);
			$related_books = $this->collaborative_filter_library->get_related_books($book_id);

			// setting data for view
			$rs['book'] = $book;
			$rs['also_viewed'] = $related_books;
			$rs['success_message'] = "";

			// form validation
			$this->form_validation->set_rules('quantity', 'Quantity', 'required');

			if ($this->form_validation->run()) {
				$book_quantity = $this->input->post('quantity');
				$this->cart_library->add_book_to_cart($book->isbn, $book_quantity, $book->title, $book->price, $book->image_url);

				$rs['success_message'] = "Item was added to your cart";
			}

			$this->load->view('components/header', array('title' => 'Product Page'));
			$this->load->view('book_page', $rs);
		}
	}
}
