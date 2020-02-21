<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      // cek session login
      if ($this->session->userdata('status') != 'login') {
         redirect(site_url('seller/auth'));
      }
   }

   public function index()
   {
      $this->load->view('seller/v_beranda');
   }
}

/* End of file Beranda.php */
