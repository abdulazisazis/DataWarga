<?php
include "../boot.php";
?>
<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Warga Laki-Laki</h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>No KK</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../koneksi.php";
                        $query = "SELECT * FROM datawarga WHERE jeniskelamin = 'laki-laki'";
                        $result = $konek->query($query);

                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['jeniskelamin']; ?></td>
                            <td><?php echo $row['tempat_tanggallahir']; ?></td>
                            <td><?php echo $row['no_kk']; ?></td>
                            <td><?php echo $row['agama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['umur']; ?></td>
                        </tr>
                        <?php
                                $no++;
                            }
                        } else {
                            ?>
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data warga laki-laki yang ditemukan.</td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <a href="../dash.php">
                    <button class="btn btn-primary">keluar</button>
            </a>
        </div>
    </div>
</div>
