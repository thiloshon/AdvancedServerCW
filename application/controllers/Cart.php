<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:46 PM
 */
class Cart extends CI_Controller {

    /**
     *
     */
    public function index()
    {

    	$data['cart_items'] = $this->session->cart_items;

        $this->load->view('shopping_cart', $data);
    }
}
