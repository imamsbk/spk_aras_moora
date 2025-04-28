<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class hitung extends CI_Controller {

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
		$data_siswa = $this->db->query("SELECT * from tabel_kriteria left join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
		//$data_tahun = $this->db->query("SELECT DISTINCT FROM tabel_kriteria DESC")->result();

		$data['kriteria'] = $data_siswa;
		//$data['tahun'] = $data_tahun;
		$data['base_url'] = base_url();
		$data['page'] = "perhitungan";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('proses_hitung',$data);
		$this->load->view('template/footer',$data);
	}
}