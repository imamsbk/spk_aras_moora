<!DOCTYPE html>
<html lang="id">
<head>


public function index() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		//$queryTahun = $this->db->query("SELECT DISTINCT tahun FROM tabel_moora")->result();
		//$data['thn'] = $queryTahun;
		$data['base_url'] = base_url();
		$data['page'] = "laporan";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('laporan_hasil',$data);
		$this->load->view('template/footer',$data);
	}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Dua Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }
        .panel {
            flex: 1;
            padding: 20px;
        }
        .panel-kiri {
            background-color: #f4f4f4;
        }
        .panel-kanan {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="panel panel-kiri">
        <h2>Panel Kiri</h2>
        <p>Konten untuk panel kiri.</p>
    </div>
    <div class="panel panel-kanan">
        <h2>Panel Kanan</h2>
        <p>Konten untuk panel kanan.</p>
    </div>
</body>
</html>
