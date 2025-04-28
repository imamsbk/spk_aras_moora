<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Proses Hitung ARAS
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
                <button type="submit" value="Aras" name="simpan" class="btn btn-success">Proses Hitung ARAS</button>
            </div>
          </div>
        </form>
        <br>
        <hl>
        <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>MATRIKS KEPUTUSAN</h5>
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
                if (isset($_POST['simpan']) ) {
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
            <h5>Step 1 -  MENCARI NILAI ALTERNATIF OPTIMAL</h5>
          </div>
          <div class="box-body">
            
                <?php 
                if (isset($_POST['simpan']) ) { 
        $query = $this->db->query("SELECT * from tabel_kriteria inner join tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
             
            ?>
      
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
          if (isset($_POST['simpan']) ) {
            
            $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn ")->result();
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
         

          <?php
          if (isset($_POST['simpan'])) {
            
            $kriteria = $this->db->query("SELECT * from tabel_kriteria LEFT JOIN tabel_siswa on tabel_kriteria.nisn=tabel_siswa.nisn")->result();
            
            //nilai max
            $this->db->select_min('c1');
            $min1 = $this->db->get('tabel_kriteria')->row();
          
            $this->db->select_max('c2');
            $max2 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_max('c3');
            $max3 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_max('c4');
            $max4 = $this->db->get('tabel_kriteria')->row();
            
            $this->db->select_max('c5');
            $max5 = $this->db->get('tabel_kriteria')->row();

            //nilai total
            $this->db->select_sum('c1');
            $tot1 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c2');
            $tot2 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c3');
            $tot3 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c4');
            $tot4 = $this->db->get('tabel_kriteria')->row();

            $this->db->select_sum('c5');
            $tot5 = $this->db->get('tabel_kriteria')->row();



            $total1= ($tot1->c1)+($min1->c1);
            $total2= ($tot2->c2)+($max2->c2);
            $total3= ($tot3->c3)+($max3->c3);
            $total4= ($tot4->c4)+($max4->c4);
            $total5= ($tot5->c5)+($max5->c5);

            ?>

            <tfooter>
              <tr>
              <td colspan="2">NILAI OPTIMAL</td>
              <td align="center"><?= $min1->c1; ?></td>
              <td align="center"><?= $max2->c2; ?></td>
              <td align="center"><?= $max3->c3; ?></td>
              <td align="center"><?= $max4->c4; ?></td>
              <td align="center"><?= $max5->c5; ?></td>
              </tr>
              <tr>
              <td colspan="2">TOTAL</td>
              <td align="center"><?= $total1; ?></td>
              <td align="center"><?= ($tot2->c2)+($max2->c2); ?></td>
              <td align="center"><?= ($tot3->c3)+($max3->c3); ?></td>
              <td align="center"><?= ($tot4->c4)+($max4->c4); ?></td>
              <td align="center"><?= ($tot5->c5)+($max5->c5); ?></td>
              </tr>
            </tfooter>
          
            <?php
          }
          
          ?>
         </table>
        </div>
      </div>
    </div>


    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Step 2 -  NORMALISASI COST</h5>
          </div>
          <div class="box-body">

    
    <?php 
if (isset($_POST['simpan'])) { 
    // Ambil data siswa & kriteria
    $kriteria = $this->db->query("SELECT * FROM tabel_kriteria 
                                  INNER JOIN tabel_siswa ON tabel_kriteria.nisn = tabel_siswa.nisn")->result();

    // Kosongkan tabel normalisasi terlebih dahulu (optional)
    $this->db->query("DELETE FROM tabel_normalisasi");

    $nomor = 0;
?>

<div class="box-body">
  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama Siswa</th>
        <th class="text-center">C1 (Normalisasi)</th>
        <th class="text-center">C2</th>
        <th class="text-center">C3</th>
        <th class="text-center">C4</th>
        <th class="text-center">C5</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach ($kriteria as $row) {
        // Normalisasi hanya untuk C1
        $cost1 = 1 / $row->c1;

        // Simpan ke tabel_normalisasi
        $this->db->query("INSERT INTO tabel_normalisasi (nisn, c1, c2, c3, c4, c5) 
                          VALUES ('$row->nisn', '$cost1', '$row->c2', '$row->c3', '$row->c4', '$row->c5')");
    ?>
        <tr>
          <td align="center"><?= ++$nomor; ?></td>
          <td><?= $row->nama_siswa; ?></td>
          <td align="center"><?= round($cost1, 4); ?></td>
          <td align="center"><?= $row->c2; ?></td>
          <td align="center"><?= $row->c3; ?></td>
          <td align="center"><?= $row->c4; ?></td>
          <td align="center"><?= $row->c5; ?></td>
        </tr>
    <?php 
      } // end foreach
    ?>
    </tbody>
  </table>
</div>

<?php 
} // end if simpan
?>

</table>
        </div>
      </div>
    </div>







    <hr>
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Step 3 -  NORMALISASI MATRIKS</h5>
          </div>
     
       <?php 
                if (isset($_POST['simpan'])) { 
        $query = $this->db->query("SELECT * from tabel_normalisasi inner join tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
             
            ?>
      
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
        if (isset($_POST['simpan'])) {
          
            $kriteria = $this->db->query("SELECT * from tabel_normalisasi LEFT JOIN tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
            $nomor = 0;
        foreach($kriteria as $row){
         
          $cost0 = (($min1->c1));

        $this->db->select_sum('c1');
            $tott1 = $this->db->get('tabel_normalisasi')->row();
            $tc1 = ($tott1->c1)+($min1->c1);



             $xij1 = ($row->c1)/($tc1);
              //$xij1 = ($cost1)/($total1);
              $xij2 = ($row->c2)/($total2);
              $xij3 = ($row->c3)/($total3); 
              $xij4 = ($row->c4)/($total4);
              $xij5 = ($row->c5)/($total5);


              $xijsi1 = ($cost0)/($tc1);
              $xijsi2 = ($max2->c2)/($total2);
              $xijsi3 = ($max3->c3)/($total3);
              $xijsi4 = ($max4->c4)/($total4);
              $xijsi5 = ($max5->c5)/($total5);

            ?>

       
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_siswa; ?></td>
          <td align="center"><?php echo round($xij1,3); ?></td>
          <td align="center"><?php echo round($xij2,3); ?></td>
          <td align="center"><?php echo round($xij3,3); ?></td>
          <td align="center"><?php echo round($xij4,3); ?></td>
          <td align="center"><?php echo round($xij5,3); ?></td>
          </tr>
      <?php
               }}
            }
      ?>
              </tbody>
        <tfooter>
        <tr>
          <td colspan="2">A0</td>
          <td align="center"><?php echo round($xijsi1,4); ?></td>
          <td align="center"><?php echo round($xijsi2,4); ?></td>
          <td align="center"><?php echo round($xijsi3,4); ?></td>
          <td align="center"><?php echo round($xijsi4,4); ?></td>
          <td align="center"><?php echo round($xijsi5,4); ?></td>

      </tr>
      </tfooter>
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
            <h5><i>Step 4 -  NORMALISASI TERBOBOT</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
                 if (isset($_POST['simpan'])) { 
        $query = $this->db->query("SELECT * from tabel_normalisasi inner join tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
             
            ?>
      
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
                if (isset($_POST['simpan'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_normalisasi LEFT JOIN tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
            $nomor = 0;
        foreach($kriteria as $row){

      
          $nb1 = (($row->c1))/($tc1)*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          //$nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb4 = (($row->c4)/(($tot4->c4)+($max4->c4)))*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);

          $nbsi1 = ($xijsi1)*($bobot_c1);
          $nbsi2 = ($xijsi2)*($bobot_c2);
          $nbsi3 = ($xijsi3)*($bobot_c3);
          $nbsi4 = ($xijsi4)*($bobot_c4);
          $nbsi5 = ($xijsi5)*($bobot_c5);


            ?>
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_siswa; ?></td>
          <td align="center"><?php echo round($nb1,4); ?></td>
          <td align="center"><?php echo round($nb2,4); ?></td>
          <td align="center"><?php echo round($nb3,4); ?></td>
          <td align="center"><?php echo round($nb4,4); ?></td>
          <td align="center"><?php echo round($nb5,4); ?></td>
          </tr>
        <?php
                 }
              }}
        ?>
            
              </tbody>
        <tfooter>
        <tr>
          <td colspan="2">Calculate Si</td>
          <td align="center"><?php echo round($nbsi1,4); ?></td>
          <td align="center"><?php echo round($nbsi2,4); ?></td>
          <td align="center"><?php echo round($nbsi3,4); ?></td>
          <td align="center"><?php echo round($nbsi4,4); ?></td>
          <td align="center"><?php echo round($nbsi5,4); ?></td>

      </tr>
      </tfooter>
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
            <h5><i>Step 4 -  Optimize Value Si</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
                 if (isset($_POST['simpan'])) { 
        $query = $this->db->query("SELECT * from tabel_normalisasi inner join tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Si</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_normalisasi LEFT JOIN tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
            $nomor = 0;
        foreach($kriteria as $row){

          $nb1 = (($row->c1))/($tc1)*($bobot_c1);
          //$nb1 = (($row->c1)/(($tot1->c1)+($max1->c1)))*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          //$nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb4 = (($row->c4)/(($tot4->c4)+($max4->c4)))*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);

          $nbsi1 = ($xijsi1)*($bobot_c1);
          $nbsi2 = ($xijsi2)*($bobot_c2);
          $nbsi3 = ($xijsi3)*($bobot_c3);
          $nbsi4 = ($xijsi4)*($bobot_c4);
          $nbsi5 = ($xijsi5)*($bobot_c5);

          $si1 = $nb1+$nb2+$nb3+$nb4+$nb5;
          $sit = $nbsi1+$nbsi2+$nbsi3+$nbsi4+$nbsi5;
        
            ?>
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_siswa; ?></td>
          <td align="center"><?php echo round($si1,4); ?></td>
          </tr>
        
        
          
      <?php
               }
            }}
      ?></tbody>
       <tfooter>
              <tr>
              <td colspan="2">Si Total</td>
              <td align="center"><?php echo round($sit,4); ?></td>
              </tr>
          </tfooter>
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
            <h5><i>Step 5 -  Utility Ki</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
      <?php 
      // Hapus semua data sebelum memasukkan yang baru
        $this->db->query("TRUNCATE TABLE tabel_aras");

                 if (isset($_POST['simpan'])) { 
        $query = $this->db->query("SELECT * from tabel_normalisasi inner join tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
             
            ?>
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Ki</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan'])) { 
        $kriteria = $this->db->query("SELECT * from tabel_normalisasi JOIN tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();
        $nomor = 0;          
        foreach($kriteria as $row){ 
		   
        
         
          $nb1 = (($row->c1))/($tc1)*($bobot_c1);
          //$nb1 = (($row->c1)/(($tot1->c1)+($max1->c1)))*($bobot_c1);
          $nb2 = (($row->c2)/(($tot2->c2)+($max2->c2)))*($bobot_c2);
          $nb3 = (($row->c3)/(($tot3->c3)+($max3->c3)))*($bobot_c3);
          //$nb4 =  (1/($row->c4))/($tc4)*($bobot_c4);
          $nb4 = (($row->c4)/(($tot4->c4)+($max4->c4)))*($bobot_c4);
          $nb5 = (($row->c5)/(($tot5->c5)+($max5->c5)))*($bobot_c5);
                
          $ki = (($nb1)+($nb2)+($nb3)+($nb4)+($nb5))/($sit);
        	$rangking = $this->db->query("INSERT INTO tabel_aras (nisn, rangking_aras) values ('$row->nisn','$ki')");
			
          $this->db->order_by('rangking_aras', 'DESC');
          $this->db->group_by('tabel_aras.rangking_aras');
          $kandidat = $this->db->get('tabel_aras')->result();
				  
		
		  ?>           
      
          <tr>
          <td align="center"><?php echo $nomor=$nomor+1; ?></td>
          <td><?php echo $row->nama_siswa; ?></td>
          <td align="center"><?php echo $ki; ?></td>
          </tr>
      <?php
	  
           }
            }}
      ?></tbody>
      
            </table>
          </div>
        </div>
      </div>
    </div>
        
    <div class="row">
    <div class="span11">
      <div class="box">
          <div class="box-header"> <span class="icon"><i class="icon-th"></i></span>
            <h5><i>ARAS SORTED DATA</small></h5>
          </div>
          <div class="box-body">
            <table class="table table-bordered data-table">
     
      
              <div class="box-body">
            <table class="table table-bordered data-table">
          <thead>
          <tr>
          
            <th class="text-center">Ki</th>
          <th class="text-center">Rank</th>
          </tr>
          </thead>
          <tbody>
              <?php 
                if (isset($_POST['simpan']) ) {
				$kriteria = $this->db->query("SELECT * from tabel_normalisasi LEFT JOIN tabel_siswa on tabel_normalisasi.nisn=tabel_siswa.nisn")->result();

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
                
              }}
            ?></tbody>
      
            </table>
          </div>
        </div>
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