<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Siswa extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Users_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_siswa = $this->db->query("SELECT * from tabel_siswa")->result();
		$data['siswa'] = $data_siswa;
		$data['base_url'] = base_url();
		$data['page'] = "siswa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_siswa',$data);
		$this->load->view('template/footer',$data);
	}

	public function delete(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->get("nisn"));
		$data_siswa = $this->db->query("DELETE from tabel_siswa where nisn='$nisn'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been deleted</div>");
			redirect('Siswa');
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['page'] = "siswa";
		$data['base_url'] = base_url();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('tambah_siswa',$data);
		$this->load->view('template/footer',$data);
	}

	public function simpan()
	{
		if (!$this->session->logged_in) {
			redirect("Login");
		}
	
		// Ambil data dari input form
		$nisn = $this->input->post("nisn");
		$nama_siswa = $this->input->post("nama_siswa");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
	
		// Validasi input
		$error = '';
		if (empty($nisn)) {
			$error .= 'NISN tidak boleh kosong. ';
		}
		if (empty($nama_siswa)) {
			$error .= 'Nama Siswa tidak boleh kosong. ';
		}
		if (empty($jenis_kelamin)) {
			$error .= 'Jenis Kelamin harus dipilih. ';
		}
	
		// Jika ada error, tampilkan kembali form dengan pesan error
		if (!empty($error)) {
			// Mengirim pesan error untuk diproses oleh JavaScript
			$this->session->set_flashdata('error_message', $error);
			$data['nisn'] = $nisn;
			$data['nama_siswa'] = $nama_siswa;
			$data['jenis_kelamin'] = $jenis_kelamin;
			$this->load->view('tambah_siswa', $data);
		} else {
			// Jika tidak ada error, simpan data ke database
			$sql = "INSERT INTO tabel_siswa (nisn, nama_siswa, jenis_kelamin) VALUES ('$nisn', '$nama_siswa', '$jenis_kelamin')";
			$query = $this->db->query($sql);
	
			if ($query) {
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
				redirect('Siswa');
			} else {
				// Jika query gagal
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\">Error: Data could not be saved!</div>");
				redirect('Siswa/tambah');
			}
		}
	}
	


	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->get("nisn"));
		$data_siswa = $this->db->query("SELECT * from tabel_siswa where nisn='$nisn'")->result();
		$data['siswa'] = $data_siswa;
		$data['base_url'] = base_url();
		$data['page'] = "siswa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_siswa',$data);
		$this->load->view('template/footer',$data);
	}

	public function submitedit(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->post("nisn"));
		$nama_siswa = addslashes($this->input->post("nama_siswa"));
		$jenis_kelamin = addslashes($this->input->post("jenis_kelamin"));

		$sql = "UPDATE tabel_siswa set
        nama_siswa='$nama_siswa',jenis_kelamin='$jenis_kelamin' where nisn='$nisn'";

        $query = $this->db->query($sql);
        if ($query) {
        	$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
			redirect('Siswa');
          
       }
	}
}