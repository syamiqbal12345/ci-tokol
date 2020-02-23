<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
      // ambil data where
      $parsing['kategoris'] = $this->kategori_model->get_all();

      // parsing data
      $this->load->view('seller/v_kategori', $parsing);
   }

   public function tambah()
   {
      $this->form_validation->set_rules('nama', 'Nama kategori', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('seller/v_kategori_tambah');
      } else {

         // insert data
         $this->kategori_model->go_insert();

         // notif
         $this->session->set_flashdata('notif', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data kategori telah berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

         // kehalaman utama
         redirect(site_url('seller/kategori'));
      }
   }

   public function ubah($id_kat)
   {
      // ambil data where
      $where = array('id_kat' => $id_kat);
      $parsing['kategori'] = $this->kategori_model->get_where($where);

      // parsing data
      $this->load->view('seller/v_kategori_ubah', $parsing);
   }

   public function update($id_kat)
   {
      // update data
      $this->kategori_model->go_update($id_kat);

      // notif
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data kategori telah berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // kehalaman utama
      redirect(site_url('seller/kategori'));
   }

   public function hapus($id_kat)
   {
      // delete data
      $this->kategori_model->go_delete($id_kat);

      // notif
      $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data kategori telah berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // kehalaman utama
      redirect(site_url('seller/kategori'));
   }
}

/* End of file Kategori.php */
