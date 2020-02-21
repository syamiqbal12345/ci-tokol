<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function index()
   {
      // config validation
      $this->form_validation->set_rules(
         'username',
         'Username',
         'required|trim',
         array(
            'required' => '%s harus diisi.'
         )
      );
      $this->form_validation->set_rules(
         'password',
         'Password',
         'required|trim',
         array(
            'required' => '%s harus diisi.'
         )
      );

      // jika validasi ada yg error
      if ($this->form_validation->run() == FALSE) {
         $this->load->view('seller/v_auth');
      }
      // jika validasi tidak ada yg error
      else {
         $this->_login();
      }
   }

   private function _login()
   {
      $where = array(
         'username'   => $this->input->post('username', TRUE),
         'password'   => md5($this->input->post('password', TRUE))
      );

      // cek data where dari database
      $cek = $this->user_model->get_count($where);

      // jika data ditemukan
      if ($cek == 1) {

         // ambil data where dari database
         $user = $this->user_model->get_where($where);

         // buat session
         $data_session = array(
            'id_user'         => $user->id_user,
            'nama_lengkap'    => $user->nama_lengkap,
            'username'        => $user->username,
            'avatar'          => $user->avatar,
            'status'          => 'login',
         );

         $this->session->set_userdata($data_session);

         // ke halaman admin
         redirect(site_url('seller/beranda'));
      } else {
         // notif alert
         $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Ooppps !</strong> Akun anda tidak ditemukan di dalam sistem !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

         // ke halaman auth
         redirect(site_url('seller/auth'));
      }
   }

   public function logout()
   {
      // hapus session login
      $this->session->sess_destroy();

      // ke halaman auth
      redirect(site_url('seller/auth'));
   }

   // function untuk mengubah data profil user admin yang login
   public function profil()
   {
      // cek session status login
      if ($this->session->userdata('status') != 'login') {
         redirect(site_url('seller/auth'));
      } else {
         // tampilakan halam profil
         $this->load->view('seller/v_profil');
      }
   }

   // function untuk mengubah data profil user admin yang login
   public function change_password()
   {
      // cek session login
      if ($this->session->userdata('status') != 'login') {
         redirect(site_url('seller/auth'));
      } else {

         // konfig validasi
         $this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[6]|matches[password2]', [
            'required' => "%s harus diisi.",
            'matches' => "Password baru dan ulang password harus sama.",
            'min_length' => "%s minimal 6 karakter."
         ]);
         $this->form_validation->set_rules('password2', 'Ulang Password', 'required|trim|matches[password1]', [
            'required' => "%s harus diisi.",
            'matches' => "Password baru dan ulangi password harus sama."
         ]);

         // jika validasi ada yg error
         if ($this->form_validation->run() == FALSE) {
            // tampilakan halaman change_password
            $this->load->view('seller/v_change_password');
         } else {

            // update password
            $update  = $this->user_model->go_update_password($this->session->userdata('id_user'));

            if ($update) {
               // ambil data where pada database
               $where = array(
                  'id_user'   => $this->session->userdata('id_user'),
               );
               $user = $this->user_model->get_where($where);

               // buat session
               $data_session = array(
                  'id_user'         => $user->id_user,
                  'nama_lengkap'    => $user->nama_lengkap,
                  'username'        => $user->username,
                  'avatar'          => $user->avatar,
                  'status'          => 'login',
               );
               $this->session->set_userdata($data_session);
            }

            // buat notif
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat !</strong> Password anda berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            // ke halaman admin
            redirect(site_url('seller/auth/change-password'));
         }
      }
   }

   public function change_profile($id_user)
   {
      // lakukan update
      $update = $this->user_model->go_update_profile($id_user);

      // jika update berhasil
      if ($update) {

         // ambil data where dari database
         $where = array(
            'id_user'   => $id_user,
         );
         $user = $this->user_model->get_where($where);

         // buat session
         $data_session = array(
            'id_user'         => $user->id_user,
            'nama_lengkap'    => $user->nama_lengkap,
            'username'        => $user->username,
            'avatar'          => $user->avatar,
            'status'          => 'login',
         );
         $this->session->set_userdata($data_session);
      }

      // buat notif
      $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat !</strong> Profil anda berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // ke halaman admin
      redirect(site_url('seller/auth/profil'));
   }
}

/* End of file Auth.php */
