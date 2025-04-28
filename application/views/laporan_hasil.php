<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Hasil Perhitungan
      </h1>
    </section>

    <br>
    <br>
    <br>

    <div class="row">
    <div class="col-xs-3" style="margin-left: 50px;">
            <a href="<?php echo site_url('laporan/print_hasil'); ?>" class="btn btn-primary fa fa-print" target="_blank">
            Cetak Laporan
            </a>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
     <!--End-breadcrumbs-->
<div class="container-fluid">
<div class="row-fluid">
    <div class="span11">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          
        </div>
<body>
    <div class="container mt-4">
        <h1 class="text-center"></h1>
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
            //if (isset($_POST['simpan']) ) {
                

            $get_kandidat = $this->db->query("SELECT * from tabel_moora LEFT JOIN tabel_siswa on tabel_moora.nisn=tabel_siswa.nisn order by nilai DESC")->result();
            $a = 0;
                foreach ($get_kandidat as $key) {
                  ?>
                   <tr>
                    <td><?php echo $key->nama_siswa; ?></td>
                    <td><?php echo $key->nilai; ?></td>
                    
                    <td><?php echo $a+1; ?></td>
                  </tr>
                  <?php
                  
                  $a++;
                }
              
            ?>
            
            </tbody>
            </table>
            
          
          </div>
            <div class="col-md-6">
                <h3 class="text-center">Hasil Aras</h3>
                <table class="table table-bordered data-table style="background-color: #ffffff;"">
              
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
                //if (isset($_POST['simpan']) ) {
				$kriteria = $this->db->query("SELECT * from tabel_aras LEFT JOIN tabel_siswa on tabel_aras.nisn=tabel_siswa.nisn")->result();

				$this->db->join('tabel_siswa', 'tabel_siswa.nisn = tabel_aras.nisn');
				$this->db->order_by('rangking_aras', 'DESC');
        $this->db->group_by('tabel_aras.nisn');
				$kandidat = $this->db->get('tabel_aras')->result();

		        $a = 0;

				foreach ($kandidat as $v) {
			
                  ?>
                   <tr>
                    <td><?php echo $v->nama_siswa; ?></td>
                    <td><?php echo $v->rangking_aras; ?></td>
                    <td><?php echo $a+1; ?></td>
                  </tr>
                  <?php
                  $a++;
                
              }
            ?></tbody>
      
            </table>
            </div>
        </div>
    </div>
</body>





</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

