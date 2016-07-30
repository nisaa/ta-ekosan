<?php

include "components/header.php";

?>

<div id="beginning">
    <section id="about">
        <div class="container">
            <h3 class="about-ekosan">Tentang E-Kosan</h3>
            <hr>
            <div class="ekosan-picture">
                <img src="resources/images/about-ekosan.png" alt="about-ekosan">
                <p>
                    E-Kosan merupakan website yang bergerak di bidang jasa penyebaran informasi kosan. Saat ini E-Kosan fokus untuk menyediakan informasi kosan yang up to date untuk daerah Bandung, Jawa Barat. E-Kosan membantu pemilik kos dalam mempromosikan kosannya dan membantu pencari kos dalam mencari kosan yang sesuai dengan keinginannya. Tim kami terdiri dari tenaga-tenaga ahli di bidang IT yang merupakan lulusan dari universitas ternama di Indonesia dan berpengalaman dalam pengembangan software.
                </p>
            </div>
        </div>
    </section>

    <section id="visi-misi">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="vision">
                        <h3>Visi</h3>
                        <p> Menjadi yang terbaik di bidang pengiklanan informasi kos-kosan dan memiliki cabang di kota-kota pendidikan yang ada di Indonesia </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission">
                        <h3>Misi</h3>
                        <p>Mengutamakan informasi yang benar dan pelayanan yang baik kepada pencari kos</p>
                        <p>Mencakup semua rumah kos-kosan yang ada di Bandung</p>
                        <p>Menjadi peserta dalam event-event kampus sebagai bentuk promosi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="address">
        <div class="container">
            <h2>E-Kosan</h2>
            <i class="fa fa-map-marker"></i>
            <p class="add-location"> Jl. Sekeloa No. 62 Bandung</p>
        </div>
    </section>

    <section id="map-canvas">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
            <div id="map"></div>
            <script type="text/javascript">
                // Menentukan koordinat titik tengah peta
                var myLatlng = new google.maps.LatLng(-6.889796,107.621263);

                // Pengaturan zoom dan titik tengah peta
                var myOptions = {
                    zoom: 15,
                    center: myLatlng
                };

                // Menampilkan output pada element
                var map = new google.maps.Map(document.getElementById("map"), myOptions);

                // Menambahkan marker
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title:"E-Kosan"
                });
            </script>
    </section>

    <?php

        include "components/footer.php";

    ?>
</div>

