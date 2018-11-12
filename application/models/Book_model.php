<?php

/**
 * Class Book_model Used to map and interact with books DB table.
 */
class Book_model extends CI_Model
{
	public $title;
	public $author;
	public $publisher;
	public $category;
	public $price;
	public $isbn;
	public $band;
	public $copies_held;
	public $copies_out;
	public $image_url;

	/**
	 * Add a new book to the DB.
	 *
	 * @param $title
	 * @param $author
	 * @param $publisher
	 * @param $category
	 * @param $price
	 * @param $isbn
	 * @param $copies_held
	 */
	public function add_a_new_book($title, $author, $publisher, $category, $price, $isbn, $copies_held)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->category = $category;
		$this->price = $price;
		$this->isbn = $isbn;
		$this->band = "Brown";
		$this->copies_held = $copies_held;
		$this->copies_out = 0;

		$this->db->insert('library_books', $this);
	}

	/**
	 * Get books grouped into their category.
	 *
	 * @return array Books in Book_model object.
	 */
	public function get_all_books_as_categories()
	{
		$all_books = $this->get_all_books();

		$categories = array();
		foreach ($all_books as $book) {
			$categories[$book->category][] = $book;
		}

		return $categories;
	}

	/**
	 * Get the complete books from DB. Use with caution.
	 *
	 * @return mixed Books in Book_model object.
	 */
	public function get_all_books()
	{
		$res = $this->db->get('library_books');
		return $res->custom_result_object('Book_model');
	}

	/**
	 * Get a book details from its ISBN.
	 * @param $id The ISBN of the book.
	 * @return mixed Book in Book_model object.
	 */
	public function get_book_by_id($id)
	{
		$this->db->where('isbn', $id);
		$res = $this->db->get('library_books');

		return $res->custom_row_object(0, 'Book_model');
	}

	/**
	 * Get books based on a category with DB limits.
	 *
	 * @param $category_id The category to get books.
	 * @param $limit Number of books to return.
	 * @param $start DB row index to start.
	 * @return mixed Books in Book_model object.
	 */
	public function get_books_by_category($category_id, $limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->where('category', $category_id);
		$res = $this->db->get('library_books');

		//$res->free_result(); for performance

		return $res->custom_result_object('Book_model');
	}

	/**
	 * Count the number of books in a category.
	 */
	public function count_by_category($category_id)
	{
		$this->db->where('category', $category_id);
		$this->db->from("library_books");

		return $this->db->count_all_results();

	}

	/**
	 * Search for a book based on a keyword in title or author.
	 */
	public function search_for_a_book($keyword)
	{

		$this->db->like('title', $keyword);
		$this->db->or_like('author', $keyword);

		$res = $this->db->get('library_books');

		return $res->custom_result_object('Book_model');
	}
}
