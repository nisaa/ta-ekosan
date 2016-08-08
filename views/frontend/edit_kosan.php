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
                                      <option> &lt;Rp 500.000/bln </option>
                                      <option> Rp 500.000 - Rp 1.000.000/bln</option>
                                      <option> &gt;Rp 1.000.000/bln</option>
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

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                              <li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Informasi Utama</a></li>
                              <li role="presentation"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">Fasilitas</a></li>
                              <li role="presentation"><a href="#step3" id="mapTab" aria-controls="step3" role="tab" data-toggle="tab">Lokasi</a></li>
                            </ul>
                        </div>

                        <div class="panel-body">
                            <form action="proses_edit_kosan.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger">
                                  <ul class="list-unstyled">
                                    <?php
                                    foreach ($_SESSION['error'] as $value) {
                                      echo "<li>" . $value . "</li>";
                                    } ?>
                                    <li></li>
                                  </ul>
                                </div>
                              <?php } ?>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="step1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kosan</label>
                                                    <input type="text" class="form-control" name="nama_kosan" value="<?= $kos->nama_kosan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Kosan</label>
                                                    <input type="text" class="form-control" name="alamat_kosan" value="<?= $kos->alamat_kosan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Peruntukan Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pria" value="Pria" <?= ($kos->jenis_hunian == "Pria") ? "checked" : "" ?>> Pria
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="wanita" value="Wanita" <?= ($kos->jenis_hunian == "Wanita") ? "checked" : "" ?>> Wanita
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pw" value="Pria &amp; Wanita" <?= ($kos->jenis_hunian == "Pria & Wanita") ? "checked" : "" ?>> Pria &amp; Wanita
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mayoritas Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="pelajar" id="pelajar"<?= ($mPenghuni->pelajar == 'yes') ? ' checked' : ''; ?>> Pelajar
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswa" id="mahasiswa"<?= ($mPenghuni->mahasiswa == 'yes') ? ' checked' : ''; ?>> Mahasiswa
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswi" id="mahasiswi"<?= ($mPenghuni->mahasiswi == 'yes') ? ' checked' : ''; ?>> Mahasiswi
                                                          </label>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawan" id="karyawan"<?= ($mPenghuni->karyawan == 'yes') ? ' checked' : ''; ?>> Karyawan
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawati" id="karyawati"<?= ($mPenghuni->karyawati == 'yes') ? ' checked' : ''; ?>> Karyawati
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lokasi Kampus Terdekat</label>
                                                    <select name="kategori_kampus" class="form-control">
                                                      <option<?= ($kos->kategori_kampus == 'UNIKOM, ITHB, UNPAD, ITB') ? ' selected' : ''; ?>>UNIKOM, ITHB, UNPAD, ITB</option>
                                                      <option<?= ($kos->kategori_kampus == 'UNISBA, UNPAS') ? ' selected' : ''; ?>>UNISBA, UNPAS</option>
                                                      <option<?= ($kos->kategori_kampus == 'ITENAS, WIDYATAMA, LP3I') ? ' selected' : ''; ?>>ITENAS, WIDYATAMA, LP3I</option>
                                                      <option<?= ($kos->kategori_kampus == 'UPI, UNPAS, NHI') ? ' selected' : ''; ?>>UPI, UNPAS, NHI</option>
                                                      <option<?= ($kos->kategori_kampus == 'TELKOM UNIVERSITY') ? ' selected' : ''; ?>>TELKOM UNIVERSITY</option>
                                                      <option<?= ($kos->kategori_kampus == 'UNPAD, ITB JATINANGOR') ? ' selected' : ''; ?>>UNPAD, ITB JATINANGOR</option>
                                                      <option<?= ($kos->kategori_kampus == 'Dekat Kampus Lain') ? ' selected' : ''; ?>>Dekat Kampus Lain</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Sewa Utama</label>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                              <div class="input-group-addon">Rp</div>
                                                              <input type="text" name="harga_sewa" class="form-control" placeholder="Misal: 750000" value="<?= $kos->harga_kosan ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select name="type_kosan" class="form-control">
                                                              <option<?= ($kos->type_kosan == '/Bln') ? ' selected' : ''; ?>>/Bln</option>
                                                              <option<?= ($kos->type_kosan == '/Thn') ? ' selected' : ''; ?>>/Thn</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan Harga Sewa</label>
                                                    <input type="text" class="form-control" name="harga_sewa2" placeholder="Misal: Rp 750.000/Bln" value="<?= $kos->harga_sewa2 ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Pemilik</label>
                                                    <input type="text" class="form-control" name="nama_pemilik" value="<?= $kos->nama_pemilik ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Telepon Utama</label>
                                                    <input type="text" class="form-control" name="nomor_tlp" value="<?= $kos->nomor_tlp ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Telepon Kedua</label>
                                                    <input type="text" class="form-control" name="nomor_tlp2" value="<?= $kos->nomor_tlp2 ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto Kosan</label>
                                                    <input type="file" name="gambar_kosan">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi Kosan</label>
                                                    <textarea name="keterangan" cols="10" rows="5" class="form-control"><?= $kos->keterangan ?></textarea>
                                                </div>
                                                <div class="text-right">
                                                <a href="#step2" data-toggle="tab" class="btn btn-success btn-flat next-step" id="buttonFacility">Selanjutnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="step2">
                                    <!-- Fasilitas Kamar -->
                                    <div class="form-group">
                                    <label>Fasilitas Kamar</label>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kamar_mandi_dalam"<?= ($fasilitasKamar->kamar_mandi_dalam == 'yes') ? ' checked' : ''; ?>> Kamar Mandi Dalam
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="tempat_tidur"<?= ($fasilitasKamar->tempat_tidur == 'yes') ? ' checked' : ''; ?>> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="lemari"<?= ($fasilitasKamar->lemari == 'yes') ? ' checked' : ''; ?>> Lemari
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="meja"<?= ($fasilitasKamar->meja == 'yes') ? ' checked' : ''; ?>> Meja
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="ac"<?= ($fasilitasKamar->ac == 'yes') ? ' checked' : ''; ?>> AC
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="tv"<?= ($fasilitasKamar->tv == 'yes') ? ' checked' : ''; ?>> TV
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="tv_kabel"<?= ($fasilitasKamar->tv_kabel == 'yes') ? ' checked' : ''; ?>> TV Kabel
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kipas_angin"<?= ($fasilitasKamar->kipas_angin == 'yes') ? ' checked' : ''; ?>> Kipas Angin
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="air_panas"<?= ($fasilitasKamar->air_panas == 'yes') ? ' checked' : ''; ?>> Air Panas
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="telepon"<?= ($fasilitasKamar->telepon == 'yes') ? ' checked' : ''; ?>> Telepon
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="wastafel"<?= ($fasilitasKamar->wastafel == 'yes') ? ' checked' : ''; ?>> Wastafel
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="internet"<?= ($fasilitasKamar->internet == 'yes') ? ' checked' : ''; ?>> Internet
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kulkas"<?= ($fasilitasKamar->kulkas == 'yes') ? ' checked' : ''; ?>> Kulkas
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="rak_buku"<?= ($fasilitasKamar->rak_buku == 'yes') ? ' checked' : ''; ?>> Rak Buku
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Fasilitas Umum -->
                                    <div class="form-group">
                                    <label>Fasilitas Umum</label>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="dapur_bersama"<?= ($fasilitasUmum->dapur_bersama == 'yes') ? ' checked' : ''; ?>> Dapur Bersama
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="ruangan_tamu"<?= ($fasilitasUmum->ruangan_tamu == 'yes') ? ' checked' : ''; ?>> Ruangan Tamu
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="parkir_motor"<?= ($fasilitasUmum->parkir_motor == 'yes') ? ' checked' : ''; ?>> Parkir Motor
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="parkir_mobil"<?= ($fasilitasUmum->parkir_mobil == 'yes') ? ' checked' : ''; ?>> Parkir Mobil
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kamar_mandi_bersama"<?= ($fasilitasUmum->kamar_mandi_bersama == 'yes') ? ' checked' : ''; ?>> Kamar Mandi Bersama
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kulkas_bersama"<?= ($fasilitasUmum->kulkas_bersama == 'yes') ? ' checked' : ''; ?>> Kulkas Bersama
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="kantin"<?= ($fasilitasUmum->kantin == 'yes') ? ' checked' : ''; ?>> Kantin
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="mesin_cuci"<?= ($fasilitasUmum->mesin_cuci == 'yes') ? ' checked' : ''; ?>> Mesin Cuci
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="wifi"<?= ($fasilitasUmum->wifi == 'yes') ? ' checked' : ''; ?>> Wifi
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="pembantu"<?= ($fasilitasUmum->pembantu == 'yes') ? ' checked' : ''; ?>> Pembantu
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="tv_bersama"<?= ($fasilitasUmum->tv_bersama == 'yes') ? ' checked' : ''; ?>> TV Bersama
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="cctv"<?= ($fasilitasUmum->cctv == 'yes') ? ' checked' : ''; ?>> CCTV
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="ruangan_makan"<?= ($fasilitasUmum->ruangan_makan == 'yes') ? ' checked' : ''; ?>> Ruangan Makan
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="dispenser"<?= ($fasilitasUmum->dispenser == 'yes') ? ' checked' : ''; ?>> Dispenser
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Fasilitas Terdekat -->
                                    <div class="form-group">
                                    <label>Fasilitas Terdekat</label>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="warnet"<?= ($fasilitasTerdekat->warnet == 'yes') ? ' checked' : ''; ?>> Warnet
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="warteg"<?= ($fasilitasTerdekat->warteg == 'yes') ? ' checked' : ''; ?>> Warteg
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="balai_kesehatan"<?= ($fasilitasTerdekat->balai_kesehatan == 'yes') ? ' checked' : ''; ?>> Balai Kesehatan
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="masjid"<?= ($fasilitasTerdekat->masjid == 'yes') ? ' checked' : ''; ?>> Masjid
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="gereja"<?= ($fasilitasTerdekat->gereja == 'yes') ? ' checked' : ''; ?>> Gereja
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="bank"<?= ($fasilitasTerdekat->bank == 'yes') ? ' checked' : ''; ?>> Bank
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="indomaret"<?= ($fasilitasTerdekat->indomaret == 'yes') ? ' checked' : ''; ?>> Indomaret
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="alfamart"<?= ($fasilitasTerdekat->alfamart == 'yes') ? ' checked' : ''; ?>> Alfamart
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="circle_k"<?= ($fasilitasTerdekat->circle_k == 'yes') ? ' checked' : ''; ?>> Circle K
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="mall"<?= ($fasilitasTerdekat->mall == 'yes') ? ' checked' : ''; ?>> Mall
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="supermarket"<?= ($fasilitasTerdekat->supermarket == 'yes') ? ' checked' : ''; ?>> Supermarket
                                          </label>
                                        </div>
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="rumah_sakit"<?= ($fasilitasTerdekat->rumah_sakit == 'yes') ? ' checked' : ''; ?>> Rumah Sakit
                                          </label>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="akses_transportasi"<?= ($fasilitasTerdekat->akses_transportasi == 'yes') ? ' checked' : ''; ?>> Dekat Akses Kendaraan Umum
                                          </label>
                                        </div>
                                      </div>

                                      <div class="text-right">
                                        <a href="#step1" data-toggle="tab" class="btn btn-warning btn-flat prev-step" id="buttonBackGeneral">Kembali</a>
                                        <a href="#step3" data-toggle="tab" class="btn btn-success btn-flat next-step" id="buttonMapTab">Selanjutnya</a>
                                      </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="step3">

                                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                                    <div id="map"></div>


                                    <div class="row">
                                        <div class="col-md-7">
                                            <div>
                                              <span class="text-danger">Anda dapat memindahkan marker di peta sesuai dengan alamat kos</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Kosan di Map</label>
                                                <input type="text" class="form-control" name="nama_lokasi" value="<?= $lok->nama ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Kosan di Map</label>
                                                <input type="text" class="form-control" name="alamat_lokasi" value="<?= $lok->alamat ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Latitude</label>
                                                <input type="text" id="latitude" class="form-control" name="lat" value="<?= $lok->lat ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Longitude</label>
                                                <input type="text" id="longitude" class="form-control" name="lon" value="<?= $lok->lon ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <a href="#step2" class="btn btn-warning btn-flat prev-step" data-toggle="tab" id="buttonBackFacility">Kembali</a>
                                        <button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function updateMarkerPosition(latLng) {
      document.getElementById('latitude').value = [latLng.lat()]
      document.getElementById('longitude').value = [latLng.lng()]
      }
    $(function() {
      //* Fungsi untuk mendapatkan nilai latitude longitude
      var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,

      center: new google.maps.LatLng(<?= ($lok->lat + 0.05) . ', ' . ($lok->lon - 0.15) ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      //posisi awal marker
      var latLng = new google.maps.LatLng(<?= $lok->lat . ', ' . $lok->lon ?>);

      /* buat marker yang bisa di drag lalu
      panggil fungsi updateMarkerPosition(latLng)
      dan letakan posisi terakhir di id=latitude dan id=longitude
      */
      var marker = new google.maps.Marker({
      position : latLng,
      title : 'lokasi',
      map : map,
      draggable : true
      });
      updateMarkerPosition(latLng);
      google.maps.event.addListener(marker, 'drag', function() {
      // ketika marker di drag, otomatis nilai latitude dan longitude
      //menyesuaikan dengan posisi marker
      updateMarkerPosition(marker.getPosition());
      });

      $("#mapTab").on('shown.bs.tab', function() {
        google.maps.event.trigger(map, 'resize');
      });

      $("#buttonBackFacility").on('click', function() {
        $("#facilityTab").click();
      });

      $("#buttonBackGeneral").on('click', function() {
        $("#generalTab").click();
      });

      $("#buttonFacility").on('click', function() {
        $("#facilityTab").click();
      });

      $("#buttonMapTab").on('click', function() {
        $("#mapTab").click();
      })
    });
</script>

<?php

include "components/footer.php";

?>
