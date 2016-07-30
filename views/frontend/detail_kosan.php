<?php

include "components/header.php";

?>

<div id="kost-detail">
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
                                <select name="harga_kosan" id="" class="form-control">
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

          <?php
            // ambil id
            (isset($_GET['id'])) ? $id = $_GET['id'] : $id = 0;

            $kost = new App\Kost;

            // ambil data berdasarkan idnya
            $kostDetail = $kost->fetchDetail($id);

          ?>

          <div class="col-md-9">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title"><?= $kostDetail->nama_kosan ?></span>
                  <h3 class="box-title navbar-right label label-danger"><?= $kostDetail->harga_sewa2 ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="detail-image">
                          <img src="<?php echo $siteUrl . "resources/images/" . $kostDetail->gambar_kosan ?>"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span><b> Alamat</b></span>
                        <p><?= $kostDetail->alamat_kosan ?></p>
                        <span><b> Deskripsi</b></span>
                        <p><?= $kostDetail->keterangan ?></p>
                        <span><b> Penghuni</b></span>
                        <p><?= $kostDetail->jenis_hunian ?></p>
                        <span><b> Kontak</b></span>
                        <p> Hubungi <?= $kostDetail->nama_pemilik ?>:
                            <br><i class="fa fa-phone"></i> <?= $kostDetail->nomor_tlp . " / " . $kostDetail->nomor_tlp2 ?>
                        </p>
                      </div>
                    </div>
                    <p></p>

                    <div class="facilities">
                      <table class="table table-bordered text-center">
                        <tr>
                        <?php
                          $fasilitas = new App\RoomFacility;
                          // ambil fasilitas berdasarkan kosan
                          $fasilitasKamar = $fasilitas->fetchDetail($id);
                          // cek semua fasilitas kamar
                          if ($fasilitasKamar->kamar_mandi_dalam == 'yes') {
                            echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                          }

                          if ($fasilitasKamar->tempat_tidur == 'yes') {
                            echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                          }

                          $fasilitas = new App\PublicFacility;
                          // ambil fasilitas berdasarkan kosan
                          $fasilitasUmum = $fasilitas->fetchDetail($id);
                          // cek semua fasilitas umum
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

                    <hr>

                    <div class="additional">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#fasilitasKamar" aria-controls="fasilitasKamar" role="tab" data-toggle="tab">Fasilitas Kamar</a></li>
                            <li role="presentation"><a href="#fasilitasUmum" aria-controls="fasilitasUmum" role="tab" data-toggle="tab">Fasilitas Umum</a></li>
                            <li role="presentation"><a href="#fasilitasTerdekat" aria-controls="fasilitasTerdekat" role="tab" data-toggle="tab">Fasilitas Terdekat</a></li>
                          </ul>
                        </div>

                        <div class="panel-body">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="fasilitasKamar">
                              <ul class="list-unstyled">
                                <?php
                                  if ($fasilitasKamar->tempat_tidur == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Tempat Tidur</li>";
                                  }

                                  if ($fasilitasKamar->kamar_mandi_dalam == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Kamar Mandi Dalam</li>";
                                  }

                                  if ($fasilitasKamar->meja == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Meja</li>";
                                  }

                                  if ($fasilitasKamar->lemari == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Lemari</li>";
                                  }

                                  if ($fasilitasKamar->ac == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> AC</li>";
                                  }

                                  if ($fasilitasKamar->tv == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> TV</li>";
                                  }

                                  if ($fasilitasKamar->tv_kabel == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> TV Kabel</li>";
                                  }

                                  if ($fasilitasKamar->kipas_angin == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Kipas Angin</li>";
                                  }

                                  if ($fasilitasKamar->air_panas == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Air Panas</li>";
                                  }

                                  if ($fasilitasKamar->telepon == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Telepon</li>";
                                  }

                                  if ($fasilitasKamar->wastafel == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Wastafel</li>";
                                  }

                                  if ($fasilitasKamar->internet == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Internet</li>";
                                  }

                                  if ($fasilitasKamar->kulkas == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Kulkas</li>";
                                  }

                                  if ($fasilitasKamar->rak_buku == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Rak Buku</li>";
                                  }
                                ?>
                              </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="fasilitasUmum">
                              <ul class="list-unstyled">
                                <?php
                                  if ($fasilitasUmum->dapur_bersama == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Dapur</li>";
                                  }

                                  if ($fasilitasUmum->ruangan_tamu == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Ruang Tamu</li>";
                                  }

                                  if ($fasilitasUmum->parkir_motor == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Parkir Motor</li>";
                                  }

                                  if ($fasilitasUmum->parkir_mobil == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Parkir Mobil</li>";
                                  }

                                  if ($fasilitasUmum->kamar_mandi_bersama == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Kamar Mandi</li>";
                                  }

                                  if ($fasilitasUmum->kantin == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Kantin</li>";
                                  }

                                  if ($fasilitasUmum->mesin_cuci == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Mesin Cuci</li>";
                                  }

                                  if ($fasilitasUmum->wifi == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> WiFi</li>";
                                  }

                                  if ($fasilitasUmum->pembantu == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Pembantu</li>";
                                  }

                                  if ($fasilitasUmum->tv_bersama == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> TV Bersama</li>";
                                  }

                                  if ($fasilitasUmum->cctv == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> CCTV</li>";
                                  }

                                  if ($fasilitasUmum->ruangan_makan == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Ruang Makan</li>";
                                  }

                                  if ($fasilitasUmum->dispenser == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Dispenser</li>";
                                  }
                                ?>
                              </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="fasilitasTerdekat">
                              <ul class="list-unstyled">
                                <?php

                                  $fasilitas = new App\NearbyFacility;
                                  // ambil fasilitas berdasarkan kosan
                                  $fasilitasTerdekat = $fasilitas->fetchDetail($id);

                                  if ($fasilitasTerdekat->warnet == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Warnet</li>";
                                  }

                                  if ($fasilitasTerdekat->warteg == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Warteg</li>";
                                  }

                                  if ($fasilitasTerdekat->balai_kesehatan == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Balai Kesehatan</li>";
                                  }

                                  if ($fasilitasTerdekat->masjid == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Masjid</li>";
                                  }

                                  if ($fasilitasTerdekat->gereja == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Gereja</li>";
                                  }

                                  if ($fasilitasTerdekat->bank == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Bank</li>";
                                  }

                                  if ($fasilitasTerdekat->indomaret == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Indomaret</li>";
                                  }

                                  if ($fasilitasTerdekat->alfamart == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Alfamart</li>";
                                  }

                                  if ($fasilitasTerdekat->circle_k == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Circle K</li>";
                                  }

                                  if ($fasilitasTerdekat->mall == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Mall</li>";
                                  }

                                  if ($fasilitasTerdekat->supermarket == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Supermarket</li>";
                                  }

                                  if ($fasilitasTerdekat->rumah_sakit == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Rumah Sakit</li>";
                                  }

                                  if ($fasilitasTerdekat->akses_transportasi == 'yes') {
                                    echo "<li><i class=\"fa fa-angle-right\"></i> Akses Transportasi</li>";
                                  }
                                ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr>
                    <h4> Map Kosan</h4>
                    <?php
                      $lokasi = new App\Location;
                      $lokasiLatLon = $lokasi->fetchDetail($id);
                    ?>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                    <div id="map"></div>

                    <script type="text/javascript">
                        // Menentukan koordinat titik tengah peta
                        var myLatlng = new google.maps.LatLng(<?= $lokasiLatLon->lat ?>, <?= $lokasiLatLon->lon ?>);

                        // Pengaturan zoom dan titik tengah peta
                        var myOptions = {
                            zoom: 12,
                            center: myLatlng
                        };

                        // Menampilkan output pada element
                        var map = new google.maps.Map(document.getElementById("map"), myOptions);

                        // Menambahkan marker
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:"Lokasi Kos"
                        });
                    </script>

                    <!--div class="share">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b> Bagikan</b></p>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                            </div>
                        </div>
                    </div-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>


<?php

include "components/footer.php";
