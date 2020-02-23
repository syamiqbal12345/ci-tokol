<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
   private $_table = 'produk';

   public function get_all()
   {
      $this->db->order_by('id_produk', 'DESC');
      return $this->db->get($this->_table)->result();
   }

   public function get_where($data = array())
   {
      return $this->db->get_where($this->_table, $data)->row();
   }

   public function go_insert()
   {
      $data = array(
         'nama_produk'     => ucwords($this->input->post('nama', TRUE)),
         'kat_id'          => $this->input->post('kat_id', TRUE),
         'slug_produk'     => url_title($this->input->post('nama'), 'dash', TRUE),
         'deskripsi'       => $this->input->post('deskripsi', TRUE),
         'harga'           => $this->input->post('harga', TRUE),
         'diskon'          => $this->input->post('diskon', TRUE),
         'stok'            => $this->input->post('stok', TRUE),
         'berat'           => $this->input->post('berat', TRUE),
         'gambar_produk'   => $this->_upload_image(),
         'dibeli'          => 0,
      );

      return $this->db->insert($this->_table, $data);
   }

   public function go_update($id)
   {
      // jika tidak ada data image
      $data1 = array(
         'nama_produk'     => ucwords($this->input->post('nama', TRUE)),
         'kat_id'          => $this->input->post('kat_id', TRUE),
         'slug_produk'     => url_title($this->input->post('nama'), 'dash', TRUE),
         'deskripsi'       => $this->input->post('deskripsi', TRUE),
         'harga'           => $this->input->post('harga', TRUE),
         'diskon'          => $this->input->post('diskon', TRUE),
         'stok'            => $this->input->post('stok', TRUE),
         'berat'           => $this->input->post('berat', TRUE),
      );

      // jika ada data image
      $data2 = array(
         'nama_produk'     => ucwords($this->input->post('nama', TRUE)),
         'kat_id'          => $this->input->post('kat_id', TRUE),
         'slug_produk'     => url_title($this->input->post('nama'), 'dash', TRUE),
         'deskripsi'       => $this->input->post('deskripsi', TRUE),
         'harga'           => $this->input->post('harga', TRUE),
         'diskon'          => $this->input->post('diskon', TRUE),
         'stok'            => $this->input->post('stok', TRUE),
         'berat'           => $this->input->post('berat', TRUE),
         'gambar_produk'   => $this->_upload_image(),
      );

      // cek inputan gambar ada atau tidak
      if (empty($_FILES["gambar"]["name"])) {

         // kembalikan nilai
         return $this->db->where('id_produk', $id)->update($this->_table, $data1);
      } else {

         // ambil data untuk dihapus
         $row_gambar = $this->produk_model->get_where(['id_produk' => $id]);
         unlink("./upload/produk/$row_gambar->gambar_produk");

         // kembalikan nilai
         return $this->db->where('id_produk', $id)->update($this->_table, $data2);
      }
   }

   public function go_delete($id)
   {
      // ambil data untuk dihapus
      $row_gambar = $this->produk_model->get_where(['id_produk' => $id]);
      unlink("./upload/produk/$row_gambar->gambar_produk");

      // kembalikan nilai
      return $this->db->where('id_produk', $id)->delete($this->_table);
   }

   /**
    * function membuat upload image yang hanya dapat diakses di dalam class ini
    * dan terdapat fitur untuk compress ukuran pixel gambar
    */
   private function _upload_image()
   {
      $config['upload_path']          = './upload/produk';
      $config['allowed_types']        = 'jpg|png|jpeg';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
         $gbr = $this->upload->data();

         // config compress image
         $config['image_library'] = 'gd2';
         $config['source_image'] = './upload/produk/' . $gbr['file_name'];
         $config['create_thumb'] = FALSE;
         $config['maintain_ratio'] = FALSE;
         $config['quality'] = '100%';
         $config['width'] = 500;
         $config['height'] = 500;
         $config['new_image'] = './upload/produk/' . $gbr['file_name'];

         // load library resize codeigniter
         $this->load->library('image_lib', $config);
         $this->image_lib->resize();

         return $this->upload->data("file_name");
      }
   }
}

/* End of file Produk_model.php */
