<?php

include "components/header.php";

// fasilitas kamar
$fasilitasKamar['kamar_mandi_dalam'] = isset($_POST['kamar_mandi_dalam']) ? 'yes' : 'no';
$fasilitasKamar['tempat_tidur'] = isset($_POST['tempat_tidur']) ? 'yes' : 'no';
$fasilitasKamar['lemari'] = isset($_POST['lemari']) ? 'yes' : 'no';
$fasilitasKamar['meja'] = isset($_POST['meja']) ? 'yes' : 'no';

// fasilitas umum
$fasilitasUmum['dapur_bersama'] = isset($_POST['dapur_bersama']) ? 'yes' : 'no';
$fasilitasUmum['ruangan_tamu'] = isset($_POST['ruangan_tamu']) ? 'yes' : 'no';
$fasilitasUmum['parkir_motor'] = isset($_POST['parkir_motor']) ? 'yes' : 'no';
$fasilitasUmum['parkir_mobil'] = isset($_POST['parkir_mobil']) ? 'yes' : 'no';

// kategori kampus
$kategoriKampus = $_POST['kategori_kampus'];

// harga kosan
$valueHarga = $_POST['harga_kosan'];

if ($valueHarga == "1") {
    $hargaKosan['min'] = 0;
    $hargaKosan['max'] = 500000;
    $typeKosan = '/Bln';
} else if ($valueHarga == "2") {
    $hargaKosan['min'] = 500000;
    $hargaKosan['max'] = 1000000;
    $typeKosan = '/Bln';
} else if ($valueHarga == "3") {
    $hargaKosan['min'] = 1000000;
    $hargaKosan['max'] = 10000000;
    $typeKosan = '/Bln';
} else {
    $hargaKosan['min'] = 0;
    $hargaKosan['max'] = 100000000;
    $typeKosan = '/Thn';
}

?>

<div id="beginning" style="height: auto;">
    <div class="container">
        <div class="display-setting">
            <h4>Hasil pencarian</h4>

            <?php

              $cariKosan = new App\Kost;
              $filterKosan = $cariKosan->searchAll($fasilitasKamar, $fasilitasUmum, $kategoriKampus, $hargaKosan, $typeKosan);
              echo count($filterKosan) . " hasil";

              if (count($filterKosan) == 0) {

            ?>
            <h5>Hasil pencarian kosan tidak ditemukan. Silakan cari dengan kata kunci lainnya</h5>
            <?php
            } else {
                $i = 1;
              foreach ($filterKosan as $filter) {
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
                              <span class="box-title"><?= $filter->nama_kosan ?></span>
                              <h3 class="box-title navbar-right label label-danger"> <?= $filter->harga_sewa2 ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              <div class="item">
                                <div class="row">
                                  <div class="col-md-5">
                                    <div class="image kos-image">
                                      <img src="resources/images/<?= $filter->gambar_kosan ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <p><?= $filter->alamat_kosan ?></p>
                                    <span><b>Deskripsi</b></span>
                                    <br><span> <?= $filter->keterangan ?></span>
                                    <p></p>
                                    <p>
                                      <a href="detail_kosan.php?id=<?= $filter->kode_kosan?>" class="btn bg-maroon btn-flat">Lihat</a>
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
                                  $fasilitasKamar = $fasilitas->fetchDetail($filter->kode_kosan);
                                  // cek semua fasilitas
                                  if ($fasilitasKamar->kamar_mandi_dalam == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                                  }

                                  if ($fasilitasKamar->tempat_tidur == 'yes') {
                                    echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                                  }

                                  $fasilitas = new App\PublicFacility;
                                  // ambil fasilitas berdasarkan kosan
                                  $fasilitasUmum = $fasilitas->fetchDetail($filter->kode_kosan);
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
