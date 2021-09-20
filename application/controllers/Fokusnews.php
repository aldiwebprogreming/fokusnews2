<?php 

	/**
	 * 
	 */
	class Fokusnews extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function index(){
			$data['data'] = $this->db->get_where('tbl_post',['status' => 1])->row_array();


			// $data['new'] = $this->db->get('tbl_post',2)->result_array();
			// $data['new'] = $this->db->query("SELECT * FROM tbl_post ORDER BY id DESC limit 2")->result_array();
			$this->db->order_by("id","desc");
			$this->db->where('status',1);
            $data['new'] = $this->db->get('tbl_post',2)->result_array();

			
			$data['list'] = $this->db->get('tbl_post_video', 5)->result_array();

			// $data['berita'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() DESC limit 3")->result_array();
			$this->db->order_by("id","desc");
			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita'] = $this->db->get('tbl_post',3)->result_array();



			// $data['detail'] = $this->db->get_where('tbl_post',['slug' => $slug])->row_array();
			// $data['berita_lainya'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() limit 5")->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_lainya'] = $this->db->get('tbl_post',5)->result_array();


			// $data['berita_baru'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() LIMIT 1")->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru'] = $this->db->get('tbl_post',1)->row_array();

			// $data['berita_baru2'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() LIMIT 1")->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru2'] = $this->db->get('tbl_post',1)->row_array();

			// $data['olahraga'] = $this->db->query("SELECT * FROM tbl_post WHERE kategori_berita = 'Olahraga' ORDER BY rand() LIMIT 1")->row_array();
            $this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Olahraga');
            $data['olahraga'] = $this->db->get('tbl_post',1)->row_array();

            $this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Wisata');
            $data['wisata'] = $this->db->get('tbl_post',2)->result_array();

            $this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Wisata');
            $data['wisata'] = $this->db->get('tbl_post',2)->result_array();


			// $data['wisata'] = $this->db->query("SELECT * FROM tbl_post WHERE kategori_berita = 'Wisata' ORDER BY rand() LIMIT 2")->result_array();

			// $data['sejarah'] = $this->db->query("SELECT * FROM tbl_post WHERE kategori_berita = 'Sejarah' ORDER BY rand() LIMIT 3")->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Sejarah');
            $data['sejarah'] = $this->db->get('tbl_post',3)->result_array();


            $this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('status_berita','trending');
            $data['trending'] = $this->db->get('tbl_post',1)->row_array();


            $this->db->order_by("id","desc");
            $data['video'] = $this->db->get('tbl_post_video',4)->result_array();


			// $data['trending'] = $this->db->query("SELECT * FROM tbl_post WHERE status_berita = 'trending' ORDER BY rand() LIMIT 1")->row_array();

			// $data['video'] = $this->db->query("SELECT * FROM tbl_post_video ORDER BY id DESC LIMIT 4")->result_array();
			

			$this->load->view('template/header');
			$this->load->view('user/index', $data);
			$this->load->view('template/footer');

		}

		function beritaTerkini(){

			$this->load->view('template/header');
			$this->load->view('user/berita');
			$this->load->view('template/footer');

		}


		function detail_berita($kategori, $slug){

			$data['detail'] = $this->db->get_where('tbl_post',['slug' => $slug])->row_array();


			$this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Olahraga');
            $data['olahraga'] = $this->db->get('tbl_post',1)->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_lainya'] = $this->db->get('tbl_post',5)->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru'] = $this->db->get('tbl_post',1)->row_array();

            $this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru2'] = $this->db->get('tbl_post',1)->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Wisata');
            $data['wisata'] = $this->db->get('tbl_post',2)->result_array();

			
			$this->db->order_by("id", "desc");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Sejarah');
            $data['sejarah'] = $this->db->get('tbl_post',3)->result_array();

			

			// $data['foto'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() LIMIT 3")->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['foto'] = $this->db->get('tbl_post',3)->result_array();

			$this->db->order_by("id", "desc");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Olahraga');
            $data['olahraga2'] = $this->db->get('tbl_post',3)->result_array();

			
			$this->load->view('template/header');
			$this->load->view('user/detail_berita', $data);
			$this->load->view('template/footer');

		}

		function kategori($kategori){

			$this->db->where('status',1);
			$this->db->where('kategori_berita',$kategori);
			$data['kategori'] = $this->db->get('tbl_post')->result_array();

			$this->db->order_by("id", "desc");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','berita');
			$data['berita'] = $this->db->get('tbl_post', 3)->result_array();

			$data['title'] = $kategori;


			$this->db->order_by("rand()");
			$this->db->where('status_berita','trending');
			$this->db->where('status',1);
            $data['trending'] = $this->db->get('tbl_post',1)->result_array();

			

			$this->load->view('template/header');
			$this->load->view('user/kategori_berita', $data);
			$this->load->view('template/footer');
		}


		function api_chanel(){

			$channelId = 'UCkXmLjEr95LVtGuIm3l2dPg';
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UCdY7cjdz4h9aSO5ce-17fFA&key=AIzaSyDU7vIuSINm6JrSyhFOVu7WLPEwPOlel7k');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			 $result = curl_exec($curl);
  			curl_close($curl);

  			$result = json_decode($result, true);
  		      $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
		     $channelName = $result['items'][0]['snippet']['title'];
		     $des = $result['items'][0]['snippet']['description'];

		     echo $des;

		}


		function api_video(){


		
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCdY7cjdz4h9aSO5ce-17fFA&maxResults=5&order=date&key=AIzaSyDU7vIuSINm6JrSyhFOVu7WLPEwPOlel7k');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			 $result = curl_exec($curl);
  			curl_close($curl);

  		 $result = json_decode($result, true);
		 $data['video'] = $result['items'][0]['id']['videoId'];

		 $this->load->view('user/video', $data);


  			

		}


		function detail_video($slug){

			$data['detail'] = $this->db->get_where('tbl_post',['slug' => $slug])->row_array();
			$data['berita_lainya'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() limit 5")->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Olahraga');
            $data['olahraga'] = $this->db->get('tbl_post',1)->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_lainya'] = $this->db->get('tbl_post',5)->result_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru'] = $this->db->get('tbl_post',1)->row_array();

            $this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['berita_baru2'] = $this->db->get('tbl_post',1)->row_array();

			$this->db->order_by("rand()");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Wisata');
            $data['wisata'] = $this->db->get('tbl_post',2)->result_array();

			
			$this->db->order_by("id", "desc");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Sejarah');
            $data['sejarah'] = $this->db->get('tbl_post',3)->result_array();


			$this->db->order_by("rand()");
			$this->db->where('status',1);
            $data['foto'] = $this->db->get('tbl_post',3)->result_array();

			$this->db->order_by("id", "desc");
			$this->db->where('status',1);
			$this->db->where('kategori_berita','Olahraga');
            $data['olahraga2'] = $this->db->get('tbl_post',3)->result_array();



			$data['det_video'] = $this->db->get_where('tbl_post_video',['slug' => $slug])->row_array();

			$data['foto'] = $this->db->query("SELECT * FROM tbl_post ORDER BY rand() LIMIT 3")->result_array();
			$data['list'] = $this->db->get('tbl_post_video', 5, 10)->result_array();
			
			
			$this->load->view('template/header');
			$this->load->view('user/detail_video', $data);
			$this->load->view('template/footer');

		}

		function tentang_kami(){
			$data['tentang'] = $this->db->get('tbl_tentang_kami')->row_array();
			$this->load->view('template/header');
			$this->load->view('user/tentang_kami', $data);
			$this->load->view('template/footer');
		}

		function redaksi(){
			$data['redaksi'] = $this->db->get('tbl_redaksi')->row_array();
			$this->load->view('template/header');
			$this->load->view('user/redaksi', $data);
			$this->load->view('template/footer');
		}

		function pedoman_media(){
			$data['pedoman'] = $this->db->get('tbl_pedoman_media')->row_array();
			$this->load->view('template/header');
			$this->load->view('user/pedoman_media', $data);
			$this->load->view('template/footer');
		}

		function disclaimer(){
			$data['desclaimer'] = $this->db->get('tbl_disclaimer')->row_array();
			$this->load->view('template/header');
			$this->load->view('user/desclaimer', $data);
			$this->load->view('template/footer');
		}

		function info_iklan(){
			$data['info'] = $this->db->get('tbl_ket_iklan')->row_array();
			$this->load->view('template/header');
			$this->load->view('user/info_iklan', $data);
			$this->load->view('template/footer');
		}

		function karir(){
			
			$this->load->view('template/header');
			$this->load->view('user/karir');
			$this->load->view('template/footer');
		}

		function act_karir(){

			$config['upload_path']          = './jurnalis/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$config['upload_path']          = './jurnalis/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000000;
			$config['max_width']            = 10240;
			$config['max_height']           = 76800;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('ktp')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Anda gagal upload gambar ktp", "", "warning" );');
		 		redirect('informasi/karir');

			}elseif (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Anda gagal upload gambar foto", "", "warning" );');
		 		redirect('informasi/karir');
			}else{

				$ktp = $_FILES['ktp']['name'];
				$foto = $_FILES['foto']['name'];

				$kode = rand(1, 100000);
				$kode_jurnalis = "FKS".$kode;

				$data = [
				'kode_jurnalis' => $kode_jurnalis,
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_telp' => $this->input->post('no_telp'),
				'email' => $this->input->post('email'),
				'ktp' => $ktp,
				'foto' => $foto,
				'status' =>0,

			    ];

			    $input = $this->db->insert('tbl_daftar_jurnalis', $data);
			    $this->session->set_flashdata('message', 'swal("Sukses", "Anda berhasil mendaftar", "success" );');
		 		redirect('informasi/karir?pesan=true');

			}

			
		}
	}

 ?>