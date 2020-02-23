<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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
      $parsing['produks'] = $this->produk_model->get_all();

      // parsing data
      $this->load->view('seller/v_produk', $parsing);
   }

   public function tambah()
   {
      // konfig validasi
      $this->form_validation->set_rules('nama', 'Nama produk', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      $this->form_validation->set_rules('kat_id', 'Kategori', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      $this->form_validation->set_rules('harga', 'Harga', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      $this->form_validation->set_rules('diskon', 'Diskon', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      $this->form_validation->set_rules('berat', 'Berat', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      $this->form_validation->set_rules('stok', 'Stok', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));
      if (empty($_FILES['gambar']['name'])) {
         $this->form_validation->set_rules('gambar', 'Gambar', 'required|trim', array(
            'required' => '%s harus diisi.'
         ));
      }
      $this->form_validation->set_rules('deskripsi', 'Deskripsi produk', 'required|trim', array(
         'required' => '%s harus diisi.'
      ));

      // jalankan validasi
      if ($this->form_validation->run() == FALSE) {
         // ambil data kategori 
         $parsing['kategoris'] = $this->kategori_model->get_all();
         $this->load->view('seller/v_produk_tambah', $parsing);
      } else {
         // insert data
         $this->produk_model->go_insert();

         // notif
         $this->session->set_flashdata('notif', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data produk telah berhasil ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

         // kehalaman utama
         redirect(site_url('seller/produk'));
      }
   }

   public function ubah($slug_produk)
   {
      // ambil data where
      $where = array('slug_produk' => $slug_produk);
      $parsing['produk']      = $this->produk_model->get_where($where);
      $parsing['kategoris']   = $this->kategori_model->get_all();

      // parsing data
      $this->load->view('seller/v_produk_ubah', $parsing);
   }

   public function update($id_produk)
   {
      // update data
      $this->produk_model->go_update($id_produk);

      // notif
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data produk telah berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // kehalaman utama
      redirect(site_url('seller/produk'));
   }

   public function hapus($id_produk)
   {
      // delete data
      $this->produk_model->go_delete($id_produk);

      // notif
      $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data produk telah berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // kehalaman utama
      redirect(site_url('seller/produk'));
   }
}

/* End of file Produk.php */
