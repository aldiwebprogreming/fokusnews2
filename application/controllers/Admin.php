<?php 
	

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
	 	parent::__construct();
	 	if ($this->session->userdata('username') == NULL) {
				redirect('admin/');
			}

			$this->load->library('form_validation');

	}

	function dashboard(){

		if ($this->session->rule == 'Admin') {
			
			$data['jml_berita'] = $this->db->get_where('tbl_post',['kode_jurnalis' => $this->session->kode_user])->num_rows();
		}else{
			$data['jml_berita'] = $this->db->get('tbl_post')->num_rows();
		}

		
		$data['jml_video'] = $this->db->get('tbl_post_video')->num_rows();
		$data['jml_admin'] = $this->db->get('tbl_admin')->num_rows();

		$this->load->view('template_admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');


	}



	function upload_berita(){

		$this->form_validation->set_rules('judul', 'Judul berita', 'required|trim');
		$this->form_validation->set_rules('isi_berita', 'Isi berita', 'required|trim');

		if ($this->form_validation->run() == false) {
			
		$this->load->view('template_admin/header');
		$this->load->view('admin/upload_berita');
		$this->load->view('template_admin/footer');

		}else{

			$config['upload_path']          = './assets_admin/img/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['min_size']             = 0;
			$config['min_width']            = 0;
			$config['min_height']           = 0;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('admin/upload_berita');
		 	}

		 	$gambar = $_FILES['gambar']['name'];

		 	$kode = rand(1, 100000);
			$kode_berita = "BR".$kode;

			$string = $this->input->post('judul');
	    	$dok1 = str_replace('?', '', $string);
	    	$dok2 = str_replace('!', '', $dok1);
	    	$dok3 = str_replace(',', '', $dok2);
	    	$dok4 = str_replace('.', '', $dok3);
	    	$dok5 = str_replace('/', '', $dok4);
	    	$dok6 = str_replace('%', '', $dok5);
	    	$slug = str_replace(' ', '-', $dok6);

			$data = [

				'kode_berita' => $kode_berita,
				'kode_jurnalis' => $this->session->kode_user,
				'nama_jurnalis' => $this->session->username,
				'judul_berita' =>$this->input->post('judul'),
				'slug' =>$slug,
				'isi_berita' => $this->input->post('isi_berita'),
				'kategori_berita' => $this->input->post('kategori_berita'),
				'images' => $gambar,
				'status' =>1,
				'date' => date('d-m-Y'),

			];

			$input = $this->db->insert('tbl_post', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!!", "Post Berita Berhasil", "success" );');
			redirect('admin/upload_berita');
		}



	}

	function Tambah_admin(){

	$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[5]|matches[pass2]', ['matches' => 'Password dont match!','min_length' => 'Password too short!'
       		 ]);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

        if ($this->form_validation->run() ==  false) {
        	
        	$this->load->view('template_admin/header');
			$this->load->view('admin/tambah_admin');
			$this->load->view('template_admin/footer');
        }else{

        	$data = [

        		'username' => $this->input->post('username'),
        		'pass' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
        		'rule' => $this->input->post('rule'),
        	];

        	$input = $this->db->insert('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!!", "Admin Berita Berhasil Ditambah", "success" );');
			redirect('admin/tambah_admin');

        }

		
	}


	function sosial_media(){

		$this->load->view('template_admin/header');
		$this->load->view('admin/sosial_media');
		$this->load->view('template_admin/footer');

		if ($this->input->post('kirim')) {
			$data = [

				'facebook' => $this->input->post('facebook'),
				'instagram' => $this->input->post('instagram'),
				'youtube' => $this->input->post('youtube'),

			];

			$input = $this->db->insert('tbl_sosial_media', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!!", "Data Berhasil Ditambah", "success" );');
			redirect('admin/sosial_media');


		}

	}

	function tambah_iklan(){

			$this->load->view('template_admin/header');
			$this->load->view('admin/tambah_iklan');
			$this->load->view('template_admin/footer');

		if ($this->input->post('kirim')) {
			
			$config['upload_path']          = './assets_admin/iklan/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('admin/tambah_iklan');
		 	}

		 	$gambar = $_FILES['gambar']['name'];

		 	$kode = rand(1, 100000);
			$kode_berita = "iklan-".$kode;

			$data = [

				'kode_iklan' => $kode_berita,
				'judul_iklan' =>$this->input->post('judul'),
				'ket_iklan' => $this->input->post('ket_iklan'),
				'mulai_iklan' => $this->input->post('mulai_iklan'),
				'berakhir_iklan' => $this->input->post('berakhir_iklan'),
				'gambar' => $gambar,
				'status' =>1,

			];

			$input = $this->db->insert('tbl_iklan', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!!", "Post Berita Berhasil", "success" );');
			redirect('admin/data_iklan');
		}
	}

		function data_post(){
			if ($this->session->rule == 'Admin') {
				$data['berita'] = $this->db->get_where('tbl_post',['kode_jurnalis' => $this->session->kode_user])->result_array();
				$this->load->view('template_admin/header');
				$this->load->view('admin/data_post1', $data);
				$this->load->view('template_admin/footer');
				}else{
				$data['berita'] = $this->db->get_where('tbl_post',['status' => 1])->result_array();
				$this->load->view('template_admin/header');
				$this->load->view('admin/data_post', $data);
				$this->load->view('template_admin/footer');
			}
			
			
		}


	function data_pengajuan_berita(){


		$data['berita'] = $this->db->get_where('tbl_post',['status' => 0])->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/data_pengajuan_berita', $data);
		$this->load->view('template_admin/footer');
	}

	function hapus_calon_jurnalis(){

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_daftar_jurnalis');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
				redirect('admin/data_daftar_jurnalis');


	}


	function setujui_berita(){
		$kode_berita = $this->input->post('kode_berita');
		$this->db->where('kode_berita',$kode_berita);
		$this->db->update('tbl_post',['status' => 1]);

		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil disetujui", "success");');
				redirect('admin/data_pengajuan_berita/');

	}

		function data_admin(){
			$data['admin'] = $this->db->get('tbl_admin')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_admin', $data);
			$this->load->view('template_admin/footer');
		}

		function data_sosial_media(){
			$data['sosial'] = $this->db->get('tbl_sosial_media')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_sosialmedia', $data);
			$this->load->view('template_admin/footer');
		}

		function data_komentar(){
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_komentar');
			$this->load->view('template_admin/footer');
		}

		function data_iklan(){
			$data['iklan'] = $this->db->get('tbl_iklan')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_iklan', $data);
			$this->load->view('template_admin/footer');
		}


		function hapus_post(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_post');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
				redirect('admin/data_post');
		}

		function hapus_admin(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_admin');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
				redirect('admin/data_admin');
		}

		function hapus_sosialM(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_sosial_media');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
				redirect('admin/data_sosial_media');
		}

		function hapus_iklan(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_iklan');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
				redirect('admin/data_iklan');
		}

		function hapus_post_video(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_post_video');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
				redirect('admin/data_video');
		}


		function edit_post($id){
			$data['data'] = $this->db->get_where('tbl_post',['kode_berita' => $id])->row_array();
			
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_berita',$data);
			$this->load->view('template_admin/footer');

		}




		function act_editberita(){

			$kode = $this->input->post('kode_berita');

			$config['upload_path']          = './assets_admin/img/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
		 		redirect('admin/upload_berita');
		 	}

		 	$gambar = $_FILES['gambar']['name'];


				$data = [

					'judul_berita' => $this->input->post('judul'),
					'isi_berita' => $this->input->post('isi_berita'),
					'images' => $gambar,
					'kategori_berita' => $this->input->post('kategori_berita'),
				];

				$this->db->where('kode_berita', $kode);
				$this->db->update('tbl_post', $data);

				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil diupdate", "success" );');
		 		redirect('admin/data_post');

			
		}


		function edit_sosialmedia($id){
			$data['data'] = $this->db->get_where('tbl_sosial_media',['id' => $id])->row_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_sosialmedia',$data);
			$this->load->view('template_admin/footer');

			if ($this->input->post('kirim')) {
				$data = [

					'facebook' => $this->input->post('facebook'),
					'instagram' => $this->input->post('instagram'),
					'youtube' => $this->input->post('youtube'),
				];

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('tbl_sosial_media', $data);

				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil diupdate", "success" );');
		 		redirect('admin/data_sosial_media');


			}

			
		}

		function edit_iklan($id){
			$data['data'] = $this->db->get_where('tbl_iklan',['kode_iklan' => $id])->row_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_iklan',$data);
			$this->load->view('template_admin/footer');

			if ($this->input->post('edit')) {

			$config['upload_path']          = './assets_admin/iklan/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
		 		redirect("admin/edit-ikalan/$id");
		 	}

		 	$gambar = $_FILES['gambar']['name'];

		 	$data = [

				'judul_iklan' =>$this->input->post('judul'),
				'ket_iklan' => $this->input->post('ket_iklan'),
				'mulai_iklan' => $this->input->post('mulai_iklan'),
				'berakhir_iklan' => $this->input->post('berakhir_iklan'),
				'gambar' => $gambar,
				'status' =>1,

			];

				$this->db->where('kode_iklan', $id);
				$this->db->update('tbl_iklan', $data);

				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil diupdate", "success" );');
		 		redirect('admin/data_iklan');


			}

			
		}
		

		function post_video(){

			$this->load->view('template_admin/header');
			$this->load->view('admin/post_video');
			$this->load->view('template_admin/footer');

			if ($this->input->post('kirim')) {

				$kode = rand(1, 100000);
				$kode_post = "video-".$kode;

			$string = $this->input->post('judul_post');
	    	$dok1 = str_replace('?', '', $string);
	    	$dok2 = str_replace('!', '', $dok1);
	    	$dok3 = str_replace(',', '', $dok2);
	    	$dok4 = str_replace('.', '', $dok3);
	    	$dok5 = str_replace('/', '', $dok4);
	    	$dok6 = str_replace('%', '', $dok5);
	    	$slug = str_replace(' ', '-', $dok6);
				
				$data = [
					'kode_post' => $kode_post,
					'judul_post' => $this->input->post('judul_post'),
					'slug' => $slug,
					'keterangan_post' => $this->input->post('keterangan_post'),
					'link' => $this->input->post('link'),
					'status' => 1,
					'date' => date('d-m-Y'),
				];

				$input = $this->db->insert('tbl_post_video', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil post", "success" );');
		 		redirect('admin/data_video');
			}

		}

		function data_video(){

			$data['video'] = $this->db->get('tbl_post_video')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/data_video', $data);
			$this->load->view('template_admin/footer');

		}


		function edit_video($kode){
			$data['video'] = $this->db->get_where('tbl_post_video', ['kode_post' => $kode])->row_array()
;			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_video', $data);
			$this->load->view('template_admin/footer');

			if ($this->input->post('edit')) {
				$data =[

					'judul_post' => $this->input->post('judul_post'),
					'keterangan_post' => $this->input->post('keterangan_post'),
					'link' => $this->input->post('link'),
					'status' => 1,
				];

				$this->db->where('kode_post', $kode);
				$this->db->update('tbl_post_video', $data);

				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil diupdate", "success" );');
		 		redirect('admin/data_video');


			}

		}


		function status_trending(){

				$id = $this->input->post('id');
				if ($this->input->post('status') == '') {

				$data = [
					'status_berita' => 'trending',
				];

			}else{

				$data = [
					'status_berita' => '',
				];

			}

				$this->db->where('id', $id);
				$this->db->update('tbl_post', $data);

				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil diupdate", "success" );');
		 		redirect('admin/data_post');


		}



		function tentang_kami(){
			$data['tentang'] = $this->db->get('tbl_tentang_kami')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/tentang_kami', $data);
			$this->load->view('template_admin/footer');
		}


		function input_tentang_kami(){


			$this->load->view('template_admin/header');
			$this->load->view('admin/input_tentang_kami');
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

			if (isset($kirim)) {
				$data = [

				'isi' => $this->input->post('isi')

				];

				$input = $this->db->insert('tbl_tentang_kami', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di input", "success" );');
		 		redirect('admin/tentang_kami');

			}
		}

		function hapus_tentang_kami(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_tentang_kami');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 		redirect('admin/tentang_kami');


		}


		function redaksi(){
			$data['redaksi'] = $this->db->get('tbl_redaksi')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/redaksi', $data);
			$this->load->view('template_admin/footer');
		}


		function input_redaksi(){


			$this->load->view('template_admin/header');
			$this->load->view('admin/input_redaksi');
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

			if (isset($kirim)) {
				$data = [

				'isi' => $this->input->post('isi')

				];

				$input = $this->db->insert('tbl_redaksi', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di input", "success" );');
		 		redirect('admin/redaksi');

			}
		}

		function hapus_redaksi(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_redaksi');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 		redirect('admin/redaksi');


		}

		function pedoman_media(){
			$data['media'] = $this->db->get('tbl_pedoman_media')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/pedoman_media', $data);
			$this->load->view('template_admin/footer');
		}


		function input_pedoman_media(){


			$this->load->view('template_admin/header');
			$this->load->view('admin/input_pedoman_media');
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

			if (isset($kirim)) {
				$data = [

				'isi' => $this->input->post('isi')

				];

				$input = $this->db->insert('tbl_pedoman_media', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di input", "success" );');
		 		redirect('admin/pedoman_media');

			}
		}

		function hapus_pedoman_media(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_pedoman_media');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 		redirect('admin/pedoman_media');


		}

		function disclaimer(){
			$data['media'] = $this->db->get('tbl_disclaimer')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/disclaimer', $data);
			$this->load->view('template_admin/footer');
		}


		function input_disclaimer(){


			$this->load->view('template_admin/header');
			$this->load->view('admin/input_disclaimer');
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

			if (isset($kirim)) {
				$data = [

				'isi' => $this->input->post('isi')

				];

				$input = $this->db->insert('tbl_disclaimer', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di input", "success" );');
		 		redirect('admin/disclaimer');

			}
		}

		function hapus_disclaimer(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_disclaimer');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 		redirect('admin/disclaimer');


		}

		function ket_iklan(){
			$data['iklan'] = $this->db->get('tbl_ket_iklan')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/ket_iklan', $data);
			$this->load->view('template_admin/footer');
		}


		function input_ket_iklan(){


			$this->load->view('template_admin/header');
			$this->load->view('admin/input_ket_iklan');
			$this->load->view('template_admin/footer');

			$kirim = $this->input->post('kirim');

			if (isset($kirim)) {
				$data = [

				'isi' => $this->input->post('isi')

				];

				$input = $this->db->insert('tbl_ket_iklan', $data);
				$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di input", "success" );');
		 		redirect('admin/ket_iklan');

			}
		}

		function hapus_ket_iklan(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_ket_iklan');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 		redirect('admin/ket_iklan');


		}

		function data_jurnalis(){

		$data['daftar'] = $this->db->get_where('tbl_daftar_jurnalis',['status' => 1])->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/data_jurnalis', $data);
		$this->load->view('template_admin/footer');

		}

		function hapus_jurnalis(){

			$id = $this->input->post('id');

			$this->db->where('id', $id);
			$this->db->delete('tbl_daftar_jurnalis');
			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil di hapus", "success" );');
		 	redirect('admin/data_jurnalis');

		}


		function data_daftar_jurnalis(){

			$data['daftar'] = $this->db->get_where('tbl_daftar_jurnalis',['status' => 0])->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_daftar_jurnalis', $data);
			$this->load->view('template_admin/footer');
		}

		function act_setuju_jurnalis(){

			$id = $this->input->post('id');
			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$kode_user = $this->input->post('kode_user');

			$this->db->where('id', $id);
			$update = $this->db->update('tbl_daftar_jurnalis',['status' => 1]);

			if ($update == true) {
				// jika update status jurnalisnya berhasil maka jurnalis akan didaftarkan juga ke admin dengan status rule admin
				$data = [
					'kode_user' => $kode_user,
					'username' => $nama,
					'pass' => password_hash('fokusnews', PASSWORD_DEFAULT),
					'rule' => 'Admin',
				];

			$this->db->insert('tbl_admin', $data);
			$this->sendEmail($email, $nama);

			$this->session->set_flashdata('message', 'swal("Sukses", "Data berhasil disetujui", "success" );');
		 	redirect('admin/data_daftar_jurnalis');
			}
		}


		function sendEmail($email, $nama){

            
         $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'aldiiit593@gmail.com',
            'smtp_pass' => 'jmgtfhyvdxqqiuyy',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];


            $this->load->library('email', $config);
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");

            $this->email->from('aldiiit593@gmail.com', 'FOKUSNEWS');
            $this->email->to($email);

            $this->email->subject('FOKUSNEWS');

            // $slug = str_replace(" ", "%", $paket);

            // $get1 = file_get_contents(base_url("email/email.php?bonus=$bonus&&kode_user=$kode_user&&date_create=$date_create&&kode_produk=$kode_produk&&paket=$slug&&harga=$harga"));
                    
            $this->email->message("

            	<h3>Selamat anda behasil disetujui sebagai jurnalis fokusnews.</h3>
            	<p>Login dengan akun anda</p>
           		<label>Username : $nama</label><br>
           		<label>Password : fokusnews <label><br>
           		<h5>Kami menyarankan untuk mengubah password anda untuk keamanan akun anda</h5>
           		<a href='localhost/fokusnews/admin/'>LOGIN SEKARANG JUGA</a>
            	");

            if (!$this->email->send()){
           $this->session->set_flashdata('message', 'swal("Gagal!!", "Pengiriman email anda gagal", "error" );');
            redirect('admin/data_daftar_jurnalis');
        }else{
            echo 'Your e-mail has been sent!';
        }
    }



    function profil(){


    	$kode_jurnalis = $this->session->kode_user;
    	$data['data'] = $this->db->get_where('tbl_daftar_jurnalis',['kode_jurnalis' => $kode_jurnalis])->row_array();
    	$this->load->view('template_admin/header');
    	$this->load->view('admin/profil', $data);
    	$this->load->view('template_admin/footer');
    }


    function ubah_password(){


    	$pass = $this->db->get_where('tbl_admin',['kode_user' => $this->session->kode_user])->row_array();

    	$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[5]|matches[pass2]', ['matches' => 'Password dont match!','min_length' => 'Password too short!'
       		 ]);
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

        if ($this->form_validation->run() ==  false) {

    	$this->load->view('template_admin/header');
    	$this->load->view('admin/ubah_pass');
    	$this->load->view('template_admin/footer');

    }else{

    	if (password_verify($this->input->post('pass_lama'), $pass['pass'])) {

    		$this->db->where('kode_user', $this->session->kode_user);
	    	$edit = $this->db->update('tbl_admin',['pass' =>password_hash( $this->input->post('pass2'), PASSWORD_DEFAULT)]);
	    	$this->session->set_flashdata('message', 'swal("Sukses!!", "Password berhasi diubah", "success" );');
	    		redirect('admin/dashboard/');

    	}else{

    		$this->session->set_flashdata('message', 'swal("Gagal!!", "Password lama tidak cocok", "error" );');
	    		redirect('admin/ubah_password/');
    	}

    }
    	

    }



    function string(){

		

		

    	// echo $string="contoh kalimat?!"."<br>";
    	// $dok = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    	// $dok2 = str_replace('?', '', $string);
    	// $dok3 = str_replace('!', '', $dok2);
    	// echo $dok4 = str_replace(' ', '-', $dok3);
    }





	}






 ?>