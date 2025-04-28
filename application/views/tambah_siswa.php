<!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <h1>
        Tambah Siswa
      </h1>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Siswa</h3>
                </div>
                <!-- /.box-header --> 
                <div class="box-body">
                    <!-- Memeriksa jika ada pesan error di flash data -->
                    <?php if ($this->session->flashdata('error_message')): ?>
                    <script type="text/javascript">
                        alert("<?php echo $this->session->flashdata('error_message'); ?>");
                    </script>
                    <?php endif; ?>

                    <form action="<?php echo $base_url; ?>siswa/simpan" method="post" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">NISN</label>
                            <div class="controls">
                                <input type="text" class="form-control" name="nisn" placeholder="nisn" value="<?php echo isset($nisn) ? $nisn : ''; ?>" />
                            </div>

                            <label class="control-label">Nama Siswa</label>
                            <div class="controls">
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa" value="<?php echo isset($nama_siswa) ? $nama_siswa : ''; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo isset($jenis_kelamin) && $jenis_kelamin == 'Laki-laki' ? 'checked' : ''; ?> />
                                    Laki-laki
                                </label>
                                <label>
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo isset($jenis_kelamin) && $jenis_kelamin == 'Perempuan' ? 'checked' : ''; ?> />
                                    Perempuan
                                </label>
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-actions">
                            <button type="submit" name="submit" value="Simpan" class="btn btn-success">Simpan</button>
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
