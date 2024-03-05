<?php
include "boot.php";
include "koneksi.php";

if(isset($_GET['id'])) {
    $id = $konek->real_escape_string($_GET['id']);
    $query = "SELECT * FROM datawarga WHERE no='$id'";
    $result = $konek->query($query);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
?>
        <div class="container mt-2">
            <h2>Detail Data</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                    <p class="card-text"><strong>Jenis Kelamin:</strong> <?php echo $data['jeniskelamin']; ?></p>
                    <p class="card-text"><strong>Alamat:</strong> <?php echo $data['alamat']; ?></p>
                    <p class="card-text"><strong>Umur:</strong> <?php echo $data['umur']; ?></p>
                    <p class="card-text"><strong>Tanggal Input:</strong> <?php echo $data['tanggal']; ?></p>
                    <p class="card-text"><strong>Waktu:</strong> <?php echo $data['waktu']; ?></p>
                    <a href="tampil.php" class="btn btn-secondary rounded-3">Kembali</a>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak diberikan.";
}
?>
