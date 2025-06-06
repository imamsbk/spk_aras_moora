
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MI AL-AMANAH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"  position= fixed>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="asset/dist/img/logokemenag.png" class="img-circle30" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" >MENU NAVIGASI</li>
        <li <?php if($page=="home"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?php if($page=="siswa"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Siswa">
            <i class="fa fa-group"></i> <span>Data Siswa</span>
          </a>
        </li>
        <li <?php if($page=="kriteria"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Kriteria">
            <i class="fa fa-bookmark"></i> <span>Data Kriteria</span>
          </a>
        </li>
        <li <?php if($page=="perhitungan_aras"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Aras">
            <i class="fa fa-calendar"></i> <span>Perhitungan <i>ARAS</i></span>
          </a>
        </li>
         <li <?php if($page=="perhitungan"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Hitung">
            <i class="fa fa-calendar"></i> <span>Perhitungan <i>MOORA</i></span>
          </a>
        <li <?php if($page=="laporan"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Laporan">
            <i class="fa fa-book"></i> <span>Hasil Perhitungan</span>
          </a>
        </li>
      
        <li>
          <a href="<?php echo $base_url; ?>Logout">
            <i class="fa fa-close"></i> <span>Keluar</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <style>
  .main-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh; /* Sidebar tetap penuh di layar */
      overflow-y: auto; /* Tambahkan scroll jika kontennya panjang */
      z-index: 1000; /* Pastikan di atas elemen lain */
  }

  .content-wrapper {
      margin-left: 230px; /* Sesuaikan dengan lebar sidebar */
      padding: 20px;
  }

  /* Untuk tampilan scrollbar agar lebih halus */
  .main-sidebar::-webkit-scrollbar {
      width: 6px;
  }

  .main-sidebar::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 3px;
  }

  .main-sidebar::-webkit-scrollbar-thumb:hover {
      background: #555;
  }
</style>


