<?php

include "../../config/app.php";
include "../../config/database.php";

include "components/header.php";

?>

<section id="beginning">
    <!--CAROUSEL -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo $siteUrl . "resources/images/slide1.jpg"; ?>" alt="slide1">
          </div>
        </div>
      </div>
</section>

<section id="kost">
    <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Kosan Ibu Ani</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp 550.000/Bulan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="detail-image">
                          <img src="<?php echo $siteUrl . "resources/images/kosan.jpg"; ?>"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span><b> Alamat</b></span>
                        <p> Jl. Tubagus Ismail No. 83 Bandung</p>
                        <span><b> Deskripsi</b></span>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.</p>
                        <span><b> Penghuni</b></span>
                        <p> Wanita</p>
                        <span><b> Kontak</b></span>
                        <p> Hubungi Ibu Ani:
                            <br><i class="fa fa-phone"></i> 0857-5372-8493
                        </p>
                      </div>
                    </div>
                    <p></p>
                    <div class="facilities">
                      <table class="table table-bordered text-center">
                        <tr>
                          <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                          <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                          <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</i></td>
                          <td class="items"><i class="fa fa-car"> Parkir Mobil</i></td>
                        </tr>
                      </table>
                    </div>
                    <hr>
                    <div class="additional">
                        <span><h4> Fasilitas Tambahan</h4></span>
                        <ul>
                            <li> Ruang Tamu</li>
                            <li> Kulkas Bersama</li>
                            <li> Meja</li>
                            <li> Lemari</li>
                        </ul>
                    </div>
                    <hr>
                    <h4> Map Kosan</h4>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                        <div id="map"></div>

                    <script type="text/javascript">
                        // Menentukan koordinat titik tengah peta
                        var myLatlng = new google.maps.LatLng(-6.176587,106.827115);

                        // Pengaturan zoom dan titik tengah peta
                        var myOptions = {
                            zoom: 13,
                            center: myLatlng
                        };

                        // Menampilkan output pada element
                        var map = new google.maps.Map(document.getElementById("map"), myOptions);

                        // Menambahkan marker
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:"Monas"
                        });
                    </script>

                    <div class="share">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b> Bagikan</b></p>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
              <div class="box">
                  <div class="box-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Kamar</label>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="bathroom"> Kamar Mandi Dalam
                                            </label>
                                        </div>
                                      </div><!-- /.col -->
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="cupboard"> Lemari
                                          </label>
                                        </div>
                                      </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="bed"> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="table"> Meja
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
                                                <input type="checkbox" name="car_parking" value=""> Parkir Mobil
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="living_room" value=""> Ruang Tamu
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="bike_parking" value=""> Parkir Motor
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="kitchen" value=""> Dapur
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
                                    <select name="location" id="" class="form-control">
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
                                <select name="price" id="" class="form-control">
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
        </div>
    </div>
</section>


<?php

include "components/footer.php";
