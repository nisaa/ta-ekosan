<?php

include "components/header.php";

?>

<div id="edit-profil">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                  <div class="box-body">
                    <form action="filter_kosan.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Kamar</label>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="kamar_mandi_dalam"> Kamar Mandi Dalam
                                            </label>
                                        </div>
                                      </div><!-- /.col -->
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="lemari"> Lemari
                                          </label>
                                        </div>
                                      </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Meja
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Umum</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="parkir_mobil" value=""> Parkir Mobil
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="ruangan_tamu" value=""> Ruang Tamu
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="parkir_motor" value=""> Parkir Motor
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="dapur_bersama" value=""> Dapur
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lokasi Kampus Terdekat</label>
                                    <select name="kategori_kampus" class="form-control">
                                      <option>UNIKOM, ITHB, UNPAD, ITB</option>
                                      <option>UNISBA, UNPAS</option>
                                      <option>ITENAS, WIDYATAMA, LP3I</option>
                                      <option>UPI, UNPAS, NHI</option>
                                      <option>TELKOM UNIVERSITY</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Harga</label>
                                <select name="harga_kosan" class="form-control">
                                  <option> &lt;Rp 500.000/Bln </option>
                                  <option> Rp 500.000 - Rp 1.000.000/Bln</option>
                                  <option> &gt;Rp 1.000.000/Bln</option>
                                  <option>Pertahun</option>
                                </select>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="button">
                                    <button type="submit" class="btn bg-maroon btn-flat">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Profil</h3>
                    </div>
                    <div class="box-body">

                        <?php
                        if (!empty($_SESSION['error_message'])) {
                            ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['error_message']; ?>
                            </div>
                            <?php

                            unset($_SESSION['error_message']);
                        }
                        ?>
                        <form action="proses_edit_profil.php?id=<?= $_SESSION['logged_in_user']['user_id'] ?>" method="post" enctype="multipart/form-data">
                          <label for="gambar">Foto Profil</label>
                          <input type="file" name="gambar">
                          <div class="form-group">
                            <label for="fullname">Nama Lengkap</label>
                            <input type="text" class="form-control" name="fullname" value="<?= $_SESSION['logged_in_user']['full_name'] ?>" autofocus>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password">
                              Hanya isi kolom ini jika ingin merubah password
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="address" value="<?= $_SESSION['logged_in_user']['alamat'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" value="<?= $_SESSION['logged_in_user']['email'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="text" class="form-control" name="phone" value="<?= $_SESSION['logged_in_user']['telp'] ?>">
                          </div>
                          <div class="row">
                            <div class="col-xs-8">
                              <button type="submit" class="btn bg-maroon btn-flat">Simpan</button>
                              <a href="profil.php" type="button" class="btn btn-default btn-flat">Batal</a>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "components/footer.php";

?>
