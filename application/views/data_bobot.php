  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('alert')): ?>
<script>
    Swal.fire({
        icon: '<?= $this->session->flashdata('alert')['type'] ?>',
        title: '<?= $this->session->flashdata('alert')['message'] ?>',
        showConfirmButton: true
    });
</script>
<?php endif; ?>



        Edit Bobot Kriteria
      </h1>
    </section>

 <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Bobot</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <?php 
    
    foreach($bobot as $data){
  ?>
          <form action="<?php echo $base_url; ?>Bobot/simpan" method="post" class="form-horizontal">
       <div class="control-group">
              <label class="control-label">W1 :</label>
              <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data->w1; ?>" name="c1" placeholder="C1" />
              </div>
            </div>
      <div class="control-group">
              <label class="control-label">W2 :</label>
              <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data->w2; ?>" name="c2" placeholder="C2" />
              </div>
            </div>
      <div class="control-group">
              <label class="control-label">W3 :</label>
              <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data->w3; ?>" name="c3" placeholder="C3" />
              </div>
            </div>
      <div class="control-group">
              <label class="control-label">W4 :</label>
              <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data->w4; ?>" name="c4" placeholder="C4" />
              </div>
            </div>
      <div class="control-group">
              <label class="control-label">W5 :</label>
              <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data->w5; ?>" name="c5" placeholder="C5" />
              </div>
            </div>

            <br>
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

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
