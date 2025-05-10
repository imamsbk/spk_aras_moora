 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Penilaian
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
              
                  
                <form action="<?php echo $base_url; ?>kriteria/proses_simpan" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Siswa</label>
              <div class="controls">
                <select name="nisn" data-placeholder="Pilih Siswa..." class="form-control">
                  <?php 
                  foreach ($siswa as $data) {
                  ?>
                    <option value="<?php echo $data->nisn; ?>" ><?php echo $data->nama_siswa; ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Penghasilan Orang tua</label>
              <div class="controls">
                <input type="number" name="c1" min="1" max="5" required class="form-control">
            </div>

            </div>
             <div class="control-group">
              <label class="control-label">Jumlah Tanggungan Orang tua</label>
              <div class="controls">
                <input type="number" name="c2" min="1" max="5" required class="form-control">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Jarak Rumah ke Sekolah</label>
              <div class="controls">
                <input type="number" name="c3" min="1" max="5" required class="form-control">
              </div>
            </div>

           <div class="control-group">
              <label class="control-label">Nilai Akademik</label>
              <div class="controls">
                <input type="number" name="c4" min="1" max="5" required class="form-control">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Nilai Non Akademik</label>
              <div class="controls">
                <input type="number" name="c5" min="1" max="5" required class="form-control">
              </div>
           </div> 

  

           <div class="form-actions">
              <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
              <button type="button" onclick="history.back()" class="btn btn-danger">Kembali</button>

              
           </div>
          </form>

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
