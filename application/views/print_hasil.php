<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cetak Laporan Hasil Perhitungan</title>
    <link rel="stylesheet" href="images/style.css" type="text/css" />
</head>
<body"> 

<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="85%">
      <table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%">
            <img src="<?php echo $base_url; ?>asset/img/logokemenag.png" width="100" height="100" />
          </td>
          <td width="80%">
            <b><font size="5"><center>MADRASAH IBTIDAIYAH UNGGUL AL - AMANAH</center></font></b>
            <font size="3"><center>Jl. Sukatani Rt 06/03 No 15 Kel. Bedahan Kec. Sawangan Kota Depok 16519</center></font>
            <font size="3"><center>NSM : 111232760138 NPSN : 69927688</center></font>
            <font size="3"><center>Email: miu_alamanah@yahoo.co.id Telp: 0896 2283 4930</center></font>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <tr>
    <td><hr color="#000000" /></td>
  </tr>

  <tr>
    <td><p align='center'><b><font size='4'>LAPORAN HASIL PERHITUNGAN</font></b></p></td>
  </tr>

  <tr>
    <td align="center">
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6">
            <h3 class="text-center">Hasil Moora</h3>
            <br>
            <table class="table table-bordered data-table" style="background-color: #ffffff;">
              <thead>
                <tr>
                  <th width="40%">Alternatif</th>
                  <th width="10%">Nilai</th>
                  <th width="10%">Peringkat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $get_kandidat = $this->db->query("SELECT * FROM tabel_moora 
                                                  LEFT JOIN tabel_siswa ON tabel_moora.nisn = tabel_siswa.nisn 
                                                  ORDER BY nilai DESC limit 2")->result();
                $a = 1;
                foreach ($get_kandidat as $key) {
                  echo "<tr>
                          <td>{$key->nama_siswa}</td>
                          <td>{$key->nilai}</td>
                          <td>{$a}</td>
                        </tr>";
                  $a++;
                }
                ?>
              </tbody>
            </table>
          </div>

          <div class="col-md-6">
            <h3 class="text-center">Hasil Aras</h3>
            <br>
            <table class="table table-bordered data-table" style="background-color: #ffffff;">
              <thead>
                <tr>
                  <th width="40%">Alternatif</th>
                  <th width="10%">Nilai</th>
                  <th width="10%">Peringkat</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $kriteria = $this->db->query("SELECT * FROM tabel_aras 
                                              LEFT JOIN tabel_siswa ON tabel_aras.nisn = tabel_siswa.nisn")->result();

                $this->db->join('tabel_siswa', 'tabel_siswa.nisn = tabel_aras.nisn');
                $this->db->order_by('rangking_aras', 'DESC');
                $this->db->group_by('tabel_aras.nisn');
                $this->db->limit(2);
                $kandidat = $this->db->get('tabel_aras')->result();

                $b = 1;
                foreach ($kandidat as $v) {
                  echo "<tr>
                          <td>{$v->nama_siswa}</td>
                          <td>{$v->rangking_aras}</td>
                          <td>{$b}</td>
                        </tr>";
                  $b++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </td>
  </tr>

  <tr>
    <td>
      <table width="200" border="0" cellspacing="0" cellpadding="0" align="right">
        <tr>
          <td>Depok, <?=date("d-m-Y"); ?></td>
        </tr>
        <tr>
          <td>Kepala Madrasah</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><u>Nuriel Khoiriyah Muharram, S.Pd</u></td>
        </tr>
      </table>
    </td>
  </tr>
</table>

<script>
  window.onload = function() {
      window.print(); // Cetak otomatis saat halaman dimuat
  };
</script>

</body>
</html>


<style>
    @media print {
        body {
            background: white !important;
            color: black !important;
        }
        
        .sidebar, .header, .footer {
            display: none !important; /* Sembunyikan elemen yang tidak perlu dicetak */
        }
    }
</style>
