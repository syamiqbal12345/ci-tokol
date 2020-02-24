<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
   public function index()
   {
      $parsing['produks'] = $this->produk_model->get_all();
      $this->load->view('v_produk', $parsing);
   }
}

/* End of file Produk.php */
