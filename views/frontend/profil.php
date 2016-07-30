<?php

include "components/header.php";

?>

<div id="profile">
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
                                      <option>UNPAD, ITB JATINANGOR</option>
                                      <option>Dekat Kampus Lain</option>
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

            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"><?= $_SESSION['logged_in_user']['full_name'] ?></h3>
                </div>
                <div class="panel-body">
                    <?php if(isset($_SESSION['success_message'])) { ?>
                    <div class="col-12">
                        <div class="alert alert-success">
                            <?= $_SESSION['success_message']; ?>
                        </div>
                    </div>
                    <?php } unset($_SESSION['success_message']); ?>
                    <?php if(isset($_SESSION['error']) && count($_SESSION['error']) > 0) { ?>
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <?php foreach ($_SESSION['error'] as $value) {
                                echo $value;
                            } ?>
                            <br>
                        </div>
                    </div>
                    <?php } unset($_SESSION['error']); ?>
                    <div class="row">
                        <div class="col-md-3 col-lg-3" align="center">
                            <img alt="User Pic" name="gambar" src="<?php echo $siteUrl . "resources/images/" . $_SESSION['logged_in_user']
                            ['gambar'] ?>" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                          <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?= $_SESSION['logged_in_user']['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $_SESSION['logged_in_user']['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>No. Telp</td>
                                    <td><?= $_SESSION['logged_in_user']['telp'] ?></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                  <a data-toggle="modal" href="#modalKirimPesan" type="button" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-envelope"></i> Kirim Pesan ke Admin</a>
                  <a href="edit_profil.php?action=edit&amp;<?= $_SESSION['logged_in_user']['status'] ?>&amp;id=<?= $_SESSION['logged_in_user']['user_id'] ?>" type="button" class="btn btn-sm btn-warning btn-flat"><i class="fa fa-edit"></i> Edit Profil</a>

                  <?php
                    if ($_SESSION['logged_in_user']['status'] == 'pemilik_kos') {
                  ?>
                  <span class="pull-right">
                    <a href="tambah_kosan.php" type="button" class="btn btn-sm btn-success btn-flat"><i class="fa fa-plus"></i> Tambah Kosan</a>
                  </span>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Data Kosan Anda</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                        <th>Foto Kosan</th>
                        <th>Nama Kosan</th>
                        <th>Alamat Kosan</th>
                        <th>Harga Sewa</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php
                        $kos = new App\Kost;

                        $dataKos = $kos->fetchDataKost($_SESSION['logged_in_user']['username']);

                        if (count($dataKos) == 0) {
                      ?>
                      <tr>
                        <td colspan="5" class="text-center warning"><span class="text-danger">Data tidak ditemukan</span></td>
                      </tr>
                      <?php } else {
                        foreach ($dataKos as $kos) {
                      ?>
                      <tr>
                        <td class="display-picture"><img src="<?php echo $siteUrl . "resources/images/" . $kos->gambar_kosan ?>" /></td>
                        <td><?= $kos->nama_kosan ?></td>
                        <td><?= $kos->alamat_kosan ?></td>
                        <td><?= $kos->harga_sewa2 ?></td>
                        <td>
                          <a href="edit_kosan.php?id=<?= $kos->kode_kosan ?>" class="btn btn-default btn-xs"><i class="fa fa-edit fa-fw"></i>Edit</a>
                          <button class="btn btn-danger btn-xs" onclick="hapus_kosan(<?= $kos->kode_kosan . ',\'' . $kos->nama_kosan ?>')"><i class="fa fa-trash fa-fw"></i>Hapus</button>
                        </td>
                      </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal Kirim Pesan -->
<div class="modal fade" id="modalKirimPesan" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Kirim Pesan ke Admin</h4>
      </div>
      <div class="modal-body">
        <form action="proses_tambah_pertanyaan.php" method="post">
          <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" class="form-control" name="judul" autofocus>
          </div>
          <div class="form-group">
              <label for="pertanyaan">Pertanyaan</label>
              <textarea name="pertanyaan" cols="10" rows="5" class="form-control"></textarea>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn bg-maroon btn-flat">Kirim</button>
              <button type="reset" class="btn btn-flat">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function hapus_kosan(id, nama) {
    BootstrapDialog.confirm({
        title: 'Perhatian',
        message: 'Apakah Anda yakin ingin menghapus ' + nama,
        type: BootstrapDialog.TYPE_DEFAULT,
        draggable: true, // <-- Default value is false
        btnCancelLabel: 'Batal',
        btnOKLabel: 'Hapus',
        btnOKClass: 'btn-danger',
        callback: function(result) {
            if(result) {
                window.location.href = 'proses_hapus_kosan.php?id=' + id;
            } else {
                return false;
            }
        }
    });
  }
</script>

<?php

include "components/footer.php";

?>
