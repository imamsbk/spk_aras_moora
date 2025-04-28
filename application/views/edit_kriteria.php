 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Alternatif Kriteria
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                  <?php 
                  $nomor = 0;
                  foreach ($kriteria as $data) {
                  
                  ?>
                <form action="<?php echo $base_url; ?>kriteria/proses_edit" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Siswa</label>
              <div class="controls">
                <select name="nisn" data-placeholder="Pilih Siswa..." class="form-control">
                  <?php
                  foreach ($siswa as $s) {
                  
                  ?>
                    <option value="<?php echo $s->nisn; ?>" <?php if($s->nisn == $data->nisn){ echo "selected"; } ?> ><?php echo $s->nama_siswa; ?></option>
                    <?php
                    }
                    ?>
                </select>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Penghasilan Orang tua</label>
              <div class="controls">
                <input type="text" name="c1" class="form-control" value="<?php echo $data->c1; ?>">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Jumlah Tanggungan Orang tua</label>
              <div class="controls">
                <input type="text" name="c2" class="form-control" value="<?php echo $data->c2; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Jarak Rumah ke Sekolah</label>
              <div class="controls">
                <input type="text" name="c3" class="form-control" value="<?php echo $data->c3; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Nilai Akademik</label>
              <div class="controls">
                <input type="text" name="c4" class="form-control" value="<?php echo $data->c4; ?>">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Nilai Non Akademik</label>
              <div class="controls">
                <input type="text" name="c5" class="form-control" value="<?php echo $data->c5; ?>">
              </div>
            </div>

           
            
            <div class="form-actions">
              <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
              <button type="button" onclick="history.back()" class="btn btn-danger">Kembali</button>
            </div>
          </form>
                <?php
                }
                ?>
              
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
