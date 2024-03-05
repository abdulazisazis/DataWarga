<!-- <?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query("select * from datawarga where no='$id'");
$a =$panggil->fetch_array();

?>




<?php
if (isset($_POST['simpan'])) {
@$ubah=$konek->query("update datawarga set nama='$_POST[nama]',jeniskelamin='$_POST[jeniskelamin]',tempat_tanggallahir='$_POST[tempat_tanggallahir]',no_kk='$_POST[no_kk]',status_perkawinan='$_POST[status_perkawinan]',pekerjaan='$_POST[pekerjaan]',agama='$_POST[agama]',alamat='$_POST[alamat]',umur='$_POST[umur]',pendidikan_terakhir='$_POST[pendidikan_terakhir]',tanggal='$_POST[tanggal]' where no='$id'");
?>
<script>
  document.location='tampil.php?notif=berhasil';
</script>
<?php
}

?>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempat_tanggallahir = $_POST['tempat_tanggallahir'];
    $no_kk = $_POST['no_kk'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

    if (!empty($nama) && !empty($jeniskelamin) && !empty($alamat) && !empty($umur) && !empty($tanggal)) {
        $query = "UPDATE datawarga SET ";
        $query .= "nama='$nama', ";
        $query .= "jeniskelamin='$jeniskelamin', ";
        $query .= "tempat_tanggallahir='$tempat_tanggallahir', ";
        $query .= "no_kk='$no_kk', ";
        $query .= "agama='$agama', ";
        $query .= "alamat='$alamat', ";
        $query .= "umur='$umur', ";
        $query .= "tanggal='$tanggal' ";
        $query .= "WHERE no='$id'";

        $ubah = $konek->query($query);

        if ($ubah) {
            echo "<script>alert('Berhasil mengubah data');</script>";
            echo "<script>document.location='tampil.php?notif=berhasil';</script>";
        } else {
            echo "<script>alert('Gagal mengubah data');</script>";
        }
    } else {
        echo "<script>alert('Perubahan gagal, pastikan semua input terisi');</script>";
    }
}
?> -->

<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query("select * from datawarga where no='$id'");
$a =$panggil->fetch_array();

?>

<div class="container col-5">
     <form class="mt-3" method="post">
          <div class="mb-3">
               <label for="nama" class="form-label">Nama : </label>
               <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama"
                    value="<?= $a['nama'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="jeniskelamin" class="form-label">Jenis Kelamin : </label>
               <div class="d-flex">
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="jeniskelamin" id="laki_laki"
                              value="laki-laki" <?= ($a['jeniskelamin'] == 'laki-laki') ? 'checked' : '' ?> required>
                         <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan"
                              value="perempuan" <?= ($a['jeniskelamin'] == 'perempuan') ? 'checked' : '' ?> required>
                         <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
               </div>
          </div>

          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Tempat Tanggal Lahir : </label>
               <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example"
                    aria-describedby="emailHelp" name="tempat_tanggallahir" value="<?= $a['tempat_tanggallahir'] ?>"
                    required>
          </div>

          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">NIK Kartu Keluarga : </label>
               <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="no_kk" value="<?= $a['no_kk'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Agama : </label>
               <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="agama" value="<?= $a['agama'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="alamat" class="form-label">Alamat : </label>
               <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat"
                    value="<?= $a['alamat'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="umur" class="form-label">Umur : </label>
               <input type="text" class="form-control" id="umur" aria-describedby="emailHelp" name="umur"
                    value="<?= $a['umur'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="status_perkawinan" class="form-label">Status : </label>
               <select class="form-select form-select-sm" id="status_perkawinan" name="status_perkawinan" required>
                    <option value="Menikah" <?= ($a['status_perkawinan'] == 'Menikah') ? 'selected' : '' ?>>
                         Menikah</option>
                    <option value="Belum Menikah" <?= ($a['status_perkawinan'] == 'Belum Menikah') ? 'selected' : '' ?>>
                         Belum Menikah
                    </option>
                    <option value="Bercerai" <?= ($a['status_perkawinan'] == 'Bercerai') ? 'selected' : '' ?>>
                         Bercerai</option>
               </select>
          </div>

          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Pekerjaan : </label>
               <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="pekerjaan" value="<?= $a['pekerjaan'] ?>" required>
          </div>

          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Pendidikan Terakhir : </label>
               <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="pendidikan_terakhir" value="<?= $a['pendidikan_terakhir'] ?>"
                    required>
          </div>

          <div class="mb-3">
               <label for="tanggal" class="form-label">Tanggal Input : </label>
               <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" name="tanggal"
                    value="<?= $a['tanggal'] ?>" required>
          </div>

          <div class="text-end">
               <button type="submit" class="btn btn-primary rounded-" name="simpan">Simpan</button>
          </div>
     </form>
</div>


<!-- <?php
if (isset($_POST['simpan'])) {
@$ubah=$konek->query("update datawarga set nama='$_POST[nama]',jeniskelamin='$_POST[jeniskelamin]',tempat_tanggallahir='$_POST[tempat_tanggallahir]',no_kk='$_POST[no_kk]',agama='$_POST[agama]',alamat='$_POST[alamat]',umur='$_POST[umur]',status_perkawinan='$_POST[status_perkawinan]',pekerjaan='$_POST[pekerjaan]',pendidikan_terakhir='$_POST[pendidikan_terakhir]',tanggal='$_POST[tanggal]' where no='$id'");
?>
<script>
  document.location='tampil.php?notif=berhasil';
</script>
<?php
}

?> -->

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $tanggal = $_POST['tanggal'];

    if (!empty($nama) && !empty($jeniskelamin) && !empty($alamat) && !empty($umur) && !empty($tanggal)) {
        $query = "UPDATE datawarga SET ";
        $query .= "nama='$nama',";
        $query .= "jeniskelamin='$jeniskelamin',";
        $query .= "alamat='$alamat',";
        $query .= "umur='$umur',";
        $query .= "tanggal='$tanggal' ";
        $query .= "WHERE no='$id'";

        $ubah = $konek->query($query);

        if ($ubah) {
            echo "<script>alert('Berhasil mengubah data');</script>";
            echo "<script>document.location='tampil.php?notif=berhasil';</script>";
        } else {
            echo "<script>alert('Gagal mengubah data');</script>";
        }
    } else {
        echo "<script>alert('Perubahan gagal, pastikan semua input terisi');</script>";
    }
}
?>

<script>
// Ambil elemen input tanggal
var inputTanggal = document.getElementById('tanggalInput');

// Buat objek tanggal dengan tanggal saat ini
var tanggalSaatIni = new Date();

// Format tanggal dengan format YYYY-MM-DD
var tahun = tanggalSaatIni.getFullYear();
var bulan = ('0' + (tanggalSaatIni.getMonth() + 1)).slice(-2); // Ingat bulan dimulai dari 0
var tanggal = ('0' + tanggalSaatIni.getDate()).slice(-2);

// Gabungkan tahun, bulan, dan tanggal menjadi format YYYY-MM-DD
var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

// Atur nilai input tanggal menjadi tanggal saat ini
inputTanggal.value = tanggalFormat;
</script>