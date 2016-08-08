<?php

include "components/header.php";

?>

<div id="beginning" style="height: auto;">
    <div class="container">
        <div class="display-setting">
            <h4>Kosan Sekitar Kampus</h4>

            <?php

              if (count($kosts) == 0) {

            ?>
            <h5>Kosan di sekitar kampus tidak ditemukan.</h5>
            <?php
            } else {
                $i = 1;
                foreach ($kosts as $kos) {
                  if ($i == 1) {
            ?>
            <div class="row">
            <?php
            }
            ?>
                <div class="searching-address">
                    <div class="col-md-6">
                        <div class="box box-danger">
                          <div class="box box-solid">
                            <div class="box-header with-border">
                              <span class="box-title"><?= $kos->nama_kosan ?></span>
                              <h3 class="box-title navbar-right label label-danger"> <?= $kos->harga_sewa2 ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              <div class="item">
                                <div class="row">
                                  <div class="col-md-5">
                                    <div class="image kos-image">
                                      <img src="resources/images/<?= $kos->gambar_kosan ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <p><?= $kos->alamat_kosan ?></p>
                                    <span><b>Deskripsi</b></span>
                                    <br><span> <?= $kos->keterangan ?></span>
                                    <p></p>
                                    <p>
                                      <a href="detail_kosan.php?id=<?= $kos->kode_kosan?>" class="btn bg-maroon btn-flat">Lihat</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="facilities">
                              <table class="table table-bordered text-center">
                                <tr>
                                <?php
                                  $fasilitas = new App\RoomFacility;
                                  // ambil fasilitas berdasarkan kosan
                                  $fasilitasKamar = $fasilitas->fetchDetail($kos->kode_kosan);
                                  // cek semua fasilitas
                                  if ($fasilitasKamar->kamar_mandi_dalam == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                                  }

                                  if ($fasilitasKamar->tempat_tidur == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                                  }

                                  $fasilitas = new App\PublicFacility;
                                  // ambil fasilitas berdasarkan kosan
                                  $fasilitasUmum = $fasilitas->fetchDetail($kos->kode_kosan);
                                  // cek semua fasilitas
                                  if ($fasilitasUmum->parkir_motor == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-motorcycle\"> Parkir Motor</td>";
                                  }

                                  if ($fasilitasUmum->parkir_mobil == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-car\"> Parkir Mobil</td>";
                                  }
                                ?>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            <?php
            if ($i == 2) {
              $i = 1;
              ?>
              </div>
            <?php
            } else {
              $i++;
            }
          }
        } ?>
            </div>
        </div>
    </div>
</div>


<?php

include "components/footer.php";

?>
