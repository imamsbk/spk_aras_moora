 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-delete');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const url = this.getAttribute('data-url');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        });
    });
});
</script>

      <h1>
        Data Siswa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      </div>
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>Siswa/tambah" class="btn btn-success">+ Tambah Siswa</a>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($siswa as $row) {
                  
                  ?>
                <tr>
                  <td><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nisn; ?></td>
         <td><?php echo $row->nama_siswa; ?></td>
         <td><?php echo $row->jenis_kelamin; ?></td>

         <td>
<?php
echo '<a href="Siswa/delete?nisn=' . $row->nisn . '" class="btn btn-sm btn-danger btn-delete" data-url="' . base_url('Siswa/delete?nisn=' . $row->nisn) . '">
    <i class="fa fa-trash"></i>
</a>';
?>

         <?php echo "<a href=Siswa/edit?nisn=$row->nisn class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?>
         </td>
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