<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:35 PM
 */
class Categories extends CI_Controller {

    /**
     *
     */
    public function index()
    {
        $this->load->view('categories_page');
    }
}
