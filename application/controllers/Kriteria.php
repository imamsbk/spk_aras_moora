<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Kriteria extends CI_Controller {

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
		$data_kriteria = $this->db->query("SELECT * from tabel_kriteria left join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
		$tabel_bobot = $this->db->query("SELECT * from tabel_bobot")->result();
		$data['kriteria'] = $data_kriteria;
		$data['bobot'] = $tabel_bobot;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_santri = $this->db->query("SELECT * from tabel_siswa")->result();
		$data['siswa'] = $data_santri;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('tambah_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

public function proses_simpan(){
	if(!$this->session->logged_in){
		redirect("Login");
	}

	$this->db->db_debug = false;

	$nisn = addslashes($this->input->post("nisn"));
	$c1 = addslashes($this->input->post("c1"));
	$c2 = addslashes($this->input->post("c2"));
	$c3 = addslashes($this->input->post("c3"));
	$c4 = addslashes($this->input->post("c4"));
	$c5 = addslashes($this->input->post("c5"));

	// Validasi hanya boleh angka 1–5
	$valid = [$c1, $c2, $c3, $c4, $c5];
	foreach($valid as $v){
		if (!in_array($v, ['1','2','3','4','5'])) {
			$data = [
				'status' => 'error',
				'message' => 'Semua nilai C1–C5 harus antara 1 sampai 5!'
			];
			$this->load->view('alert_redirect', $data);
			return;
		}
	}

	$sql = "INSERT INTO tabel_kriteria VALUES ('$nisn', '$c1', '$c2', '$c3', '$c4', '$c5')";
	$simpan = $this->db->query($sql);

	if (!$simpan) {
		$db_error = $this->db->error();

		if (strpos($db_error['message'], 'Duplicate') !== false) {
			$data = [
				'status' => 'error',
				'message' => 'Data dengan NISN tersebut sudah ada!'
			];
		} else {
			$data = [
				'status' => 'error',
				'message' => 'Terjadi kesalahan saat menyimpan data!'
			];
		}

		$this->load->view('alert_redirect', $data);
	} else {
	$data = [
		'status' => 'success',
		'message' => 'Data berhasil disimpan!'
	];
	$this->load->view('alert_redirect', $data);
}
}



public function delete(){
	if(!$this->session->logged_in){
		redirect("Login");
	}

	$this->db->db_debug = false;

	$id = addslashes($this->input->get("id"));
	$delete = $this->db->query("DELETE FROM tabel_kriteria WHERE nisn='$id'");

	if (!$delete) {
		$data = [
			'status' => 'error',
			'message' => 'Gagal menghapus data!'
		];
	} else {
		$data = [
			'status' => 'success',
			'message' => 'Data berhasil dihapus!'
		];
	}

	$this->load->view('alert_redirect', $data);
}


	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$id = addslashes($this->input->get("id"));
		$data_kriteria = $this->db->query("SELECT * from tabel_kriteria left join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn where tabel_kriteria.nisn='$id'")->result();
		$data_siswa = $this->db->query("SELECT * from tabel_siswa")->result();
		$data['kriteria'] = $data_kriteria;
		$data['siswa'] = $data_siswa;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

public function proses_edit() {
    if (!$this->session->logged_in) {
        redirect("Login");
    }

    $id = addslashes($this->input->post("nisn"));
    $c1 = addslashes($this->input->post("c1"));
    $c2 = addslashes($this->input->post("c2"));
    $c3 = addslashes($this->input->post("c3"));
    $c4 = addslashes($this->input->post("c4"));
    $c5 = addslashes($this->input->post("c5"));

    $sql = "UPDATE tabel_kriteria SET c1=$c1, c2=$c2, c3=$c3, c4=$c4, c5=$c5 WHERE nisn='$id'";
    $simpan = $this->db->query($sql);

    $data = [
        'status' => $simpan ? 'success' : 'error',
        'message' => $simpan ? 'Data berhasil diedit' : 'Gagal mengedit data',
        'redirect' => base_url('Kriteria')
    ];

    $this->load->view('alert_redirect', $data);
}


}