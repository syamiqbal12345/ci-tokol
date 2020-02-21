<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
   private $_table = 'kategori';

   public function get_all()
   {
      $this->db->order_by('id_kat', 'DESC');
      return $this->db->get($this->_table)->result();
   }

   public function get_where($data = array())
   {
      return $this->db->get_where($this->_table, $data)->row();
   }

   public function go_insert()
   {
      $data = array(
         'nama_kat'     => ucwords($this->input->post('nama', TRUE)),
         'slug_kat'     => url_title($this->input->post('nama'), 'dash', TRUE),
         'gambar_kat'   => $this->_upload_image(),
      );

      return $this->db->insert($this->_table, $data);
   }

   public function go_update($id)
   {
      // jika tidak ada data image
      $data1 = array(
         'nama_kat'     => ucwords($this->input->post('nama', TRUE)),
         'slug_kat'     => url_title($this->input->post('nama'), 'dash', TRUE),
      );

      // jika ada data image
      $data2 = array(
         'nama_kat'     => ucwords($this->input->post('nama', TRUE)),
         'slug_kat'     => url_title($this->input->post('nama'), 'dash', TRUE),
         'gambar_kat'   => $this->_upload_image(),
      );

      // cek inputan gambar ada atau tidak
      if (empty($_FILES["gambar"]["name"])) {

         // kembalikan nilai
         return $this->db->where('id_kat', $id)->update($this->_table, $data1);
      } else {

         // ambil data untuk dihapus
         $row_gambar = $this->kategori_model->get_where(['id_kat' => $id]);
         unlink("./upload/kategori/$row_gambar->gambar_kat");

         // kembalikan nilai
         return $this->db->where('id_kat', $id)->update($this->_table, $data2);
      }
   }

   public function go_delete($id)
   {
      // ambil data untuk dihapus
      $row_gambar = $this->kategori_model->get_where(['id_kat' => $id]);
      unlink("./upload/kategori/$row_gambar->gambar_kat");

      // kembalikan nilai
      return $this->db->where('id_kat', $id)->delete($this->_table);
   }

   /**
    * function membuat upload image yang hanya dapat diakses di dalam class ini
    * dan terdapat fitur untuk compress ukuran pixel gambar
    */
   private function _upload_image()
   {
      $config['upload_path']          = './upload/kategori';
      $config['allowed_types']        = 'jpg|png|jpeg';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
         $gbr = $this->upload->data();

         // config compress image
         $config['image_library'] = 'gd2';
         $config['source_image'] = './upload/kategori/' . $gbr['file_name'];
         $config['create_thumb'] = FALSE;
         $config['maintain_ratio'] = FALSE;
         $config['quality'] = '100%';
         $config['width'] = 125;
         $config['height'] = 125;
         $config['new_image'] = './upload/kategori/' . $gbr['file_name'];

         // load library resize codeigniter
         $this->load->library('image_lib', $config);
         $this->image_lib->resize();

         return $this->upload->data("file_name");
      }
   }
}

/* End of file Kategori_model.php */
