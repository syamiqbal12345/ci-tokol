<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
   private $_table = 'user';

   public function get_all()
   {
      $this->db->order_by('id_user', 'DESC');
      return $this->db->get($this->_table)->result();
   }

   public function get_where($data = array())
   {
      return $this->db->get_where($this->_table, $data)->row();
   }

   public function get_count($data = array())
   {
      return $this->db->get_where($this->_table, $data)->num_rows();
   }

   public function go_update_profile($id)
   {
      // jika tidak ada data image
      $data1 = array(
         'nama_lengkap' => ucwords($this->input->post('nama_lengkap', TRUE)),
         'username'     => $this->input->post('username', TRUE),
      );

      // jika ada data image
      $data2 = array(
         'nama_lengkap' => ucwords($this->input->post('nama_lengkap', TRUE)),
         'username'     => $this->input->post('username', TRUE),
         'avatar'       => $this->_upload_image(),
      );

      // cek inputan gambar ada atau tidak
      if (empty($_FILES["avatar"]["name"])) {

         // kembalikan nilai
         return $this->db->where('id_user', $id)->update($this->_table, $data1);
      } else {

         // ambil data untuk dihapus
         $row_gambar = $this->user_model->get_where(['id_user' => $id]);
         unlink("./upload/user/$row_gambar->avatar");

         // kembalikan nilai
         return $this->db->where('id_user', $id)->update($this->_table, $data2);
      }
   }

   public function go_update_password($id)
   {
      $data = array(
         'password' => md5($this->input->post('password1', TRUE)),
      );

      return $this->db->where('id_user', $id)->update($this->_table, $data);
   }

   /**
    * function membuat upload image yang hanya dapat diakses di dalam class ini
    * dan terdapat fitur untuk compress ukuran pixel gambar
    */
   private function _upload_image()
   {
      $config['upload_path']          = './upload/user';
      $config['allowed_types']        = 'jpg|png|jpeg';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('avatar')) {
         $gbr = $this->upload->data();

         // config compress image
         $config['image_library'] = 'gd2';
         $config['source_image'] = './upload/user/' . $gbr['file_name'];
         $config['create_thumb'] = FALSE;
         $config['maintain_ratio'] = FALSE;
         $config['quality'] = '100%';
         $config['width'] = 125;
         $config['height'] = 125;
         $config['new_image'] = './upload/user/' . $gbr['file_name'];

         // load library resize codeigniter
         $this->load->library('image_lib', $config);
         $this->image_lib->resize();

         return $this->upload->data("file_name");
      }
   }

   public function go_insert()
   {
      $data = array(
         'nama_lengkap'    => ucwords($this->input->post('name', TRUE)),
         'email_user'   => $this->input->post('email', TRUE),
         'pass_user'    => password_hash('123456', PASSWORD_DEFAULT),
         'img_user'     => 'default.png',
         'role_id'      => 1
      );

      return $this->db->insert($this->_table, $data);
   }

   public function go_delete($id)
   {
      return $this->db->where('id_user', $id)->delete($this->_table);
   }
}

/* End of file User_model.php */
