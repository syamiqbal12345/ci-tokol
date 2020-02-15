<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
   public function index()
   {
      $this->load->view('seller/v_beranda');
   }
}

/* End of file Beranda.php */
