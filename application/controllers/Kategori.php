<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
   public function index()
   {
      $this->load->view('v_kategori');
   }
}

/* End of file Kategori.php */
