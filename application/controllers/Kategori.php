<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
   public function index()
   {
      $parsing['kategoris'] = $this->kategori_model->get_all();
      $this->load->view('v_kategori', $parsing);
   }
}

/* End of file Kategori.php */
