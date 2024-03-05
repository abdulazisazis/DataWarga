<?php
include "boot.php";
include "koneksi.php";
?>

<div class="container border p-3">
     <div class="mb-5">
          <h3 class="text-center mb-4">Form Input Data</h3>
     </div>
     <div class="row input-group">
          <div class="col-6">
               <form class="form" action="prosesinput.php" method="post">

                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nama : </label>
                         <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example"
                              aria-describedby="emailHelp" name="nama" required>
                    </div>

                    <div class="mb-3">
                         <label for="jeniskelamin" class="form-label">Jenis Kelamin : </label>
                         <div class="d-flex">
                              <div class="form-check me-3">
                                   <input class="form-check-input" type="radio" name="jeniskelamin" id="laki-laki"
                                        value="laki-laki">
                                   <label class="form-check-label" for="laki-laki">
                                        Laki-laki
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan"
                                        value="perempuan">
                                   <label class="form-check-label" for="perempuan">
                                        Perempuan
                                   </label>
                              </div>
                         </div>
                    </div>


                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Tempat Tanggal Lahir : </label>
                         <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example"
                              aria-describedby="emailHelp" name="tempat_tanggallahir" required>
                    </div>

                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">No Kartu Keluarga : </label>
                         <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                              aria-describedby="emailHelp" name="no_kk" required>
                    </div>

                    <div class="mb-3">
                         <label for="status_perkawinan" class="form-label">Status : </label>
                         <select class="form-select form-select-sm" id="status_perkawinan" name="status_perkawinan"
                              required>
                              <option value="Menikah">Menikah</option>
                              <option value="Belum Menikah">Belum Menikah</option>
                              <option value="Bercerai">Bercerai</option>
                         </select>
                    </div>


                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Pekerjaan : </label>
                         <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                              aria-describedby="emailHelp" name="pekerjaan" required>
                    </div>

          </div>

          <div class="col-6">
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama : </label>
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                         aria-describedby="emailHelp" name="agama" required>
               </div>

               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                         aria-describedby="emailHelp" name="alamat" required>
               </div>

               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Umur : </label>
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                         aria-describedby="emailHelp" name="umur" required>
               </div>

               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pendidikan Terakhir : </label>
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1"
                         aria-describedby="emailHelp" name="pendidikan_terakhir" required>
               </div>

               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Input: </label>
                    <input type="date" class="form-control form-control-sm" id="exampleInputEmail1"
                         aria-describedby="emailHelp" name="tanggal" value="<?php echo date("Y-m-d"); ?>" required>
               </div>



               <div class="me-5">
                    <div class="me-4">
                         <div class="text-end me-5">
                              <form class="form" action="prosesinput.php" method="post" onsubmit="return submitForm()"
                                   enctype="multipart/form-data">
                                   <button type="submit" class="btn btn-primary rounded-1 mt-4 me-5">Simpan</button>
                              </form>
                         </div>
                    </div>
               </div>

               </form>
          </div>
     </div>
</div>