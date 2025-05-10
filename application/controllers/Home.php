<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Home extends CI_Controller {

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

		// Ambil data siswa
		$data['siswa'] = $this->db->get('tabel_siswa')->result();
		$data['jumlah_siswa'] = $this->db->count_all('tabel_siswa');

		// Ambil data kriteria
		$data['kriteria'] = $this->db->get('tabel_kriteria')->result();
		$data['jumlah_kriteria'] = $this->db->count_all('tabel_kriteria');

		$data['aras'] = $this->db->get('tabel_aras')->result();
		$data['jumlah_aras'] = $this->db->count_all('tabel_aras');

		$data['moora'] = $this->db->get('tabel_moora')->result();
		$data['jumlah_moora'] = $this->db->count_all('tabel_moora');


		$data['base_url'] = base_url();
		$data['page'] = "home";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('index',$data);
		$this->load->view('template/footer',$data);
	}
}