  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kriteria
      </h1>
    </section>

 <!-- Main content -->
    <section class="content">
      <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bobot Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  
          <th class="text-center" width="40px">No</th>
          <th class="text-center">Penghasilan Orang tua</th>
          <th class="text-center">Jumlah Tanggungan Orang tua</th>
          <th class="text-center">Jarak Rumah ke sekolah</th>
          <th class="text-center">Nilai Akademik</th>
          <th class="text-center">Nilai Non Akademik</th>
          <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($bobot as $row) {
                  
                  ?>
                <tr>
                  <td align="center"><?php echo $nomor=$nomor+1; ?></td>
         <td align="center"><?php echo $row->w1; ?></td>
         <td align="center"><?php echo $row->w2; ?></td>
         <td align="center"><?php echo $row->w3; ?></td>
         <td align="center"><?php echo $row->w4; ?></td>
         <td align="center"><?php echo $row->w5; ?></td>
         <td align="center"><?php echo "<a href=".$base_url."Bobot/ class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?></td>
                </tr>
                <?php
                }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
     </div>
      
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penilaian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>Kriteria/tambah" class="btn btn-success">+ Data Penilaian</a>
         <br>
         <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
          <th class="text-center" width="40px">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Penghasilan Orang tua</th>
          <th class="text-center">Jumlah Tanggungan Orang tua</th>
          <th class="text-center">Jarak rumah ke Sekolah</th>
          <th class="text-center">Nilai Akademik</th>
          <th class="text-center">Nilai Non Akademik</th>
          <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($kriteria as $row) {
                  
                  ?>
                <tr>
                  <td align="center"><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nama_siswa; ?></td>
         <td align="center"><?php echo $row->c1; ?></td>
         <td align="center"><?php echo $row->c2; ?></td>
         <td align="center"><?php echo $row->c3; ?></td>
         <td align="center"><?php echo $row->c4; ?></td>
         <td align="center"><?php echo $row->c5; ?></td>
         <td align="center">    <a href="<?php echo $base_url . 'Kriteria/delete?id=' . $row->nisn; ?>" 
       class="btn btn-sm btn-danger" 
       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
        <i class="fa fa-trash"></i>
    </a>  
         <?php echo "<a href=".$base_url."Kriteria/edit?id=$row->nisn class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?></td>
                </tr>
                <?php
                }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
     </div>

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