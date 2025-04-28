 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Proses Hitung MOORA
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <!--End-breadcrumbs-->
<div class="container-fluid">
<div class="row-fluid">
    <div class="span11">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          
        </div>
		<div class="widget-content nopadding">
      <form action="" method="post" class="form-horizontal">
      
          <br>
          <div class="row">
            <div class="col-xs-3">
                <button type="submit" value="Hitung" name="simpan" class="btn btn-success">Proses Hitung</button>
            </div>
          </div>
        </form>
        <br>
        <hl>
        <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5 align="left">Step 1 - Matriks Keputusan
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Siswa</th>
                  <th class="text-center">C1</th>
                  <th class="text-center">C2</th>
                  <th class="text-center">C3</th>
                  <th class="text-center">C4</th>
                  <th class="text-center">C5</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                if (isset($_POST['simpan'])){
                    

                    $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
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
                </tr>
                <?php
                }
              }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
    
    <hr>

		  <div class="row">
		  <h4 align="center">
        <?php 
        if (isset($_POST['simpan'])) {
          

            $bobot = $this->db->query("select * from tabel_bobot")->result();
            foreach($bobot as $c){
            $bobot_c1 = $c->w1;
            $bobot_c2 = $c->w2;
            $bobot_c3 = $c->w3;
            $bobot_c4 = $c->w4;
            $bobot_c5 = $c->w5;
            
            }
            
        ?>
        </h4>
      </div>
        
  <hr>
  <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Nilai Bobot</h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
					         <th>W1</th>
					         <th>W2</th>
					         <th>W3</th>
					         <th>W4</th>
                   <th>W5</th>
				</tr>
              </thead>
              <tbody>
                <?php 
			      $bobot_c1 = 0;
            $bobot_c2 = 0;
            $bobot_c3 = 0;
            $bobot_c4 = 0;	
            $bobot_c5 = 0;			
          if (isset($_POST['simpan'])) {
            $bobot = $this->db->query("select * from tabel_bobot")->result();
            foreach($bobot as $c){
            $bobot_c1 = $c->w1;
            $bobot_c2 = $c->w2;
            $bobot_c3 = $c->w3;
            $bobot_c4 = $c->w4;
            $bobot_c5 = $c->w5;

            echo "<tr>";
            echo "<td>" . round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4) ."</td>";
            echo "<td>" . round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4) ."</td>";
            echo "<td>" . round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4) ."</td>";
            echo "<td>" . round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4) ."</td>";
            echo "<td>" . round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4) ."</td>";

            $c1 = $c->w1;//round($bobot_c1/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4);
            $c2 = $c->w2;//round($bobot_c2/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4);
            $c3 = $c->w3;//round($bobot_c3/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4);
            $c4 = $c->w4;//round($bobot_c4/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4);
            $c5 = $c->w5;//round($bobot_c5/($bobot_c1+$bobot_c2+$bobot_c3+$bobot_c4+$bobot_c5),4);

          }
        }
          ?>
              </tbody>
            </table>
          </div>
        </div>
	  </div>
	  </div>
	  
	  <hr>
  <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5 align="left">Step 2 - Matriks Kinerja Ternormalisasi
          </div>
          <div class="box-body">
            
                <?php 
                if (isset($_POST['simpan'])) {
            //$pembagi = array();
            $pembagi1 = 0;
            $pembagi2 = 0;
            $pembagi3 = 0;
            $pembagi4 = 0;
            $pembagi5 = 0;

            $x1 = array();
            $x2 = array();
            $x3 = array();
            $x4 = array();
            $x5 = array();

            $i = 0;
            $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
            
            foreach ($query as $dat) {

              $pembagi1 += pow($dat->c1,2);
              $pembagi2 += pow($dat->c2,2);
              $pembagi3 += pow($dat->c3,2);
              $pembagi4 += pow($dat->c4,2);
              $pembagi5 += pow($dat->c5,2);


            }

            foreach ($query as $row) {
              $x1[$i] = (float)$row->c1/sqrt($pembagi1);
              
              $x2[$i] = ($row->c2)/(sqrt($pembagi2));
              $x3[$i] = ($row->c3)/(sqrt($pembagi3));
              $x4[$i] = ($row->c4)/(sqrt($pembagi4));
              $x5[$i] = ($row->c5)/(sqrt($pembagi5));

              $i++;
            }
            
          }
            ?>
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th width="40%">Nama Siswa</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
              </thead>
              <tbody>
            <?php
            $a = 0;
            foreach ($query as $key) {
             
              ?>
               <tr>
                <td><?php echo $key->nama_siswa; ?></td>
                <td><?php echo round($x1[$a],4); ?></td>
                <td><?php echo round($x2[$a],4); ?></td>
                <td><?php echo round($x3[$a],4); ?></td>
                <td><?php echo round($x4[$a],4); ?></td>
                <td><?php echo round($x5[$a],4); ?></td>
              </tr>
              <?php
              $a++;
            }
            
            ?>
            
              </tbody>
            </table>
          </div>
        </div>
	   </div>
	  </div>
	  
	  <hr>

    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Step 3 - Mengoptimasi Nilai Atribut</h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th width="40%">Nama</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
              </thead>
              <tbody>
            <?php
            $a = 0;
            $y1 = array();
            $y2 = array();
            $y3 = array();
            $y4 = array();
            $y5 = array();
            foreach ($query as $key) {
             
              ?>
               <tr>
                <td><?php echo $key->nama_siswa; ?></td>
                <td><?php echo round($c1 * $x1[$a],3); $y1[$a] = round($c1 * $x1[$a],3); ?></td>
                <td><?php echo round($c2 * $x2[$a],3); $y2[$a] = round($c2 * $x2[$a],3); ?></td>
                <td><?php echo round($c3 * $x3[$a],3); $y3[$a] = round($c3 * $x3[$a],3); ?></td>
                <td><?php echo round($c4 * $x4[$a],3); $y4[$a] = round($c4 * $x4[$a],3); ?></td>
                <td><?php echo round($c5 * $x5[$a],3); $y5[$a] = round($c5 * $x5[$a],3); ?></td>
              </tr>
              <?php
              $a++;
            }
            
            ?>
            
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
    
    <hr>
    
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5 align="left"><i>Step 4 - Menghitung nilai y<small><i>i</i></small>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th width="10%">No</th>
          <th width="40%">Alternatif</th>
            <th width="10%">Maximum</th>
            <th width="10%">Minimum</th>
            <th width="10%">y<small><i>i</i></small></th>
        </tr>
              </thead>
              <tbody>
            <?php
            if (isset($_POST['simpan'])) {
                $nomor = 0;
                
                $query = $this->db->query("select * from tabel_kriteria inner join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
                $cek = $this->db->query("select * from tabel_moora")->result();
                
                if(count($cek) > 0){
                  $clearall = $this->db->query("delete from tabel_moora");
                }

                $a = 0;
                foreach ($query as $key) {
                  ?>
                   <tr>
                    <td><?php echo $a + 1; ?></td>
                    <td><?php echo $key->nama_siswa; ?></td>
                    <td><?php echo $y2[$a]+$y3[$a]+$y4[$a]+$y5[$a]; ?></td>
                    <td><?php echo $y1[$a]; ?></td>
                    <td><?php echo $y2[$a]+$y3[$a]+$y4[$a]+$y5[$a] - $y1[$a]; ?></td>
                    <?php
                    //<td><?php echo $y1[$a]+$y4[$a]; </td>
                    //<td><?php echo $y2[$a]+$y3[$a]+$y5[$a] - $y1[$a]+$y4[$a]; </td>
                    ?>

                  </tr>
                  <?php
                  //$val = ($y2[$a]+$y3[$a]+$y5[$a]) - ($y1[$a]+$y4[$a]);
                  $val = ($y2[$a]+$y3[$a]+$y4[$a]+$y5[$a]) - ($y1[$a]);
                  $save = $this->db->query("INSERT INTO tabel_moora (nisn,nilai) values ('$key->nisn','$val')");
                  $a++;
                }
              }
            ?>
            
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
    
    <hr>
    
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>Step 5 - Hasil</h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
          <th width="40%">Alternatif</th>
            <th width="10%">Nilai</th>
            <th width="10%">Peringkat</th>
        </tr>
              </thead>
              <tbody>
            <?php
            if (isset($_POST['simpan']) ) {
                

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
              }
            ?>
            
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>
    
    <hr>

        <?php 
        if (isset($_POST['simpan']) ){
        ?>
        <div class="row">
          <div class="span11"></div>
        <div class="box">
          <div class="box-body">
            <?php 
            

            $get_kandidat = $this->db->query("SELECT * from tabel_moora LEFT JOIN tabel_siswa on tabel_moora.nisn=tabel_siswa.nisn order by nilai DESC limit 1")->result();
            
            if(count($get_kandidat) > 0){
              foreach ($get_kandidat as $row) {
                echo "<p>".$row->nama_siswa." Terpilih sebagai kandidat Siswa penerima beasiswa berprestasi</p>";
              }
            }
            ?>
            
        </div>
      </div>
    </div>
        <div class="widget-box">
          <div class="widget-content nopadding">
            <form method="GET" action="Laporan/cetak">
              <input type="hidden" name="t" value="">

            <button type="submit" name="cetak" class="btn btn-success">Cetak</button>
        </div>
        </div>
        <?php
        }
        }
        ?>
	  </div>
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