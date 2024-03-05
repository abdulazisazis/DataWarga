<?php

include "boot.php";
$date= date('Y-m-d');
?>
<div class="container m-7">
     <div class="row justify-content-center">
     <div class="col">
    <div class="card" style="width: 10rem;">
        <img src="../img/planning.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">DATA WARGA</h5>
            <h6 class="text-dark text-center" style="text-decoration: none;">
                <p class="card-text">Hari ini : </p>
            </h6>
            <h6 class="text-center">
                <?php
                $date= date('Y-m-d');
                include "koneksi.php";
                $query = "SELECT COUNT(*) AS jumlah FROM datawarga WHERE DATE(waktu) = CURDATE()";
                $result = $konek->query($query);
                $row = $result->fetch_assoc();
                $jumlah = $row['jumlah'];
                echo $jumlah;
                ?>
            </h6>
            <div class="text-center mt-3">
                <a href="dashboard_DataWarga/data_hari_ini.php">
                    <button type="button" class="btn btn-primary rounded-5">Lihat Detail</button>
                </a>
            </div>
        </div>
    </div>
</div>


          <div class="col">
               <div class="card" style="width: 10rem;">
                    <img src="../img/research.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title text-center">DATA WARGA</h5>
                         <h6 class="text-dark text-center" style="text-decoration: none;">
                              <p class="card-text">Bulan ini : </p>
                         </h6>
                         <h6 class="text-center">
                              <?php
                $date2=date('Y-m');
                include "koneksi.php";
                $lihat = $konek->query("select waktu from datawarga where waktu like '%$date2%'");
                $jumlah = $lihat->num_rows;
                echo $jumlah;
                ?>
                         </h6>
                         <div class="text-center mt-3">
                              <a href="dashboard_DataWarga/data_bulan_ini.php">
                                   <button type="button" class="btn btn-primary rounded-5">Lihat Detail</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>

          <div class="col">
               <div class="card" style="width: 10rem;">
                    <img src="../img/analysis.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title text-center">DATA WARGA</h5>
                         <h6 class="text-dark text-center" style="text-decoration: none;">
                              <p class="card-text">Tahun ini : </p>
                         </h6>
                         <h6 class="text-center">
                              <?php
                $date2=date('Y');
                include "koneksi.php";
                $lihat = $konek->query("select waktu from datawarga where waktu like '%$date2%'");
                $jumlah = $lihat->num_rows;
                echo $jumlah;
                ?>
                         </h6>
                         <div class="text-center mt-3">
                              <a href="dashboard_DataWarga/data_tahun_ini.php">
                                   <button type="button" class="btn btn-primary rounded-5">Lihat Detail</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>

          <div class="col">
               <div class="card" style="width: 10rem;">
                    <img src="../img/male-gender.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title text-center">DATA WARGA</h5>
                         <h6 class="text-dark text-center" style="text-decoration: none;">
                              <p class="card-text">Laki-Laki : </p>
                         </h6>
                         <h6 class="text-center">
                              <?php
                include "koneksi.php";
                $date = date('Y-m');
                $query = "SELECT COUNT(*) AS jumlah FROM datawarga WHERE jeniskelamin = 'laki-laki' AND waktu LIKE '%$date%'";
                $result = $konek->query($query);
                $row = $result->fetch_assoc();
                $jumlah = $row['jumlah'];
                echo $jumlah;
                ?>
                         </h6>
                         <div class="text-center mt-3">
                              <a href="dashboard_DataWarga/jk_laki-laki.php">
                                   <button type="button" class="btn btn-primary rounded-5">Lihat Detail</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>


          <div class="col">
               <div class="card" style="width: 10rem;">
                    <img src="../img/femenine.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title text-center">DATA WARGA</h5>
                         <h6 class="text-dark text-center" style="text-decoration: none;">
                              <p class="card-text">PEREMPUAN : </p>
                         </h6>
                         <h6 class="text-center">
                              <?php
                include "koneksi.php";
                $date = date('Y-m');
                $query = "SELECT COUNT(*) AS jumlah FROM datawarga WHERE jeniskelamin = 'perempuan' AND waktu LIKE '%$date%'";
                $result = $konek->query($query);
                $row = $result->fetch_assoc();
                $jumlah = $row['jumlah'];
                echo $jumlah;
                ?>
                         </h6>
                         <div class="text-center mt-3">
                              <a href="dashboard_DataWarga/jk_perempuan.php">
                                   <button type="button" class="btn btn-primary rounded-5">Lihat Detail</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>