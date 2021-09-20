<?php 
	
	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			$this->load->view('login/index');
		}

		function auth(){

		  $user = $this->input->post('username');
		 $pass = $this->input->post('pass');


		$query = $this->db->get_where('tbl_admin', array('username' => $user ))->row_array();
		
			if ($query == true) {
				if (password_verify($pass, $query['pass'])) {
						
						$data = [

							'username' => $user,
							'rule' => $query['rule'],
							'kode_user' => $query['kode_user'],
						];

					$this->session->set_userdata($data);
					$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil login',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/sukksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					

				redirect('admin/dashboard/');
					
				
			} else {

				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Password anda salah',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/akun.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					redirect('admin/');

			}

		}else {

			$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Anda belum terdaftar',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/akun.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					redirect('admin/');
		}
	}

	function logout(){

		$this->session->unset_userdata('username');
			 $this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil Keluar',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/log2.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");
			redirect('admin/');
	}
	}

 ?>