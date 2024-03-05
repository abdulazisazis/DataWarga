<?php
include "koneksi.php";

$nama = $_POST['nama'];
$jk = $_POST['jeniskelamin'];
$ttl = $_POST['tempat_tanggallahir'];
$no_kk = $_POST['no_kk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$umur = $_POST['umur'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];

if ($nama == "") {
    echo "Maaf, nama wajib diisi.";
} else {
    $input = $konek->query("INSERT INTO datawarga (nama, jeniskelamin, tempat_tanggallahir, no_kk, agama, alamat, tanggal, umur, status_perkawinan, pekerjaan, pendidikan_terakhir) 
                            VALUES ('$nama', '$jk', '$ttl', '$no_kk', '$agama', '$alamat', '$tanggal', '$umur', '$status_perkawinan', '$pekerjaan', '$pendidikan_terakhir')");

    if ($input) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    } else {
        echo "Gagal menyimpan data warga: " . $konek->error;
    }
}
?>

<script>
    document.location.href = 'input.php';
</script>
