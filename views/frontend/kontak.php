<?php

include "components/header.php";

$nama = isset($_POST['nama']);
$email = isset($_POST['email']);
$subjek = isset($_POST['subjek']);
$pesan = isset($_POST['pesan']);

$to = 'demo@localhost.com';

$pesan = "From: $nama <br/>" . $pesan;

// Untuk mengirim email HTML, header tipe konten harus diatur
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Tambahan headers
$headers .= 'From: ' . $email . "\r\n";

if (mail('demo@localhost.com', $subjek, $pesan, $headers)) {
    echo 'Pesan telah terkirim';
} else {
    echo 'Server tidak dapat mengirim email';
}

?>

<div id="beginning">
    <div class="contact">
        <div class="container">
            <div class="title">
                <h3>Kontak Kami</h3>
                Anda memiliki pertanyaan? Kirimkan pesan Anda
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <form action="kontak.php" method="post">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="nama">Nama*</label>
                          <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="col-lg-6">
                          <label for="email">E-Mail*</label>
                          <input type="text" class="form-control" name="email" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="subjek">Subjek*</label>
                      <input type="text" class="form-control" name="subjek" required>
                    </div>
                    <div class="form-group">
                      <label for="pesan">Pesan*</label>
                      <textarea name="pesan" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-contact btn-flat">Kirim</button>
                  </form>
                </div>

                <div class="info">
                    <div class="col-lg-6">
                        <table>
                            <tr>
                              <td><strong>Alamat </strong></td>
                              <td>&nbsp;&nbsp;: </td>
                              <td>&nbsp;&nbsp;Jl. Sekeloa No. 62 Bandung</td>
                            </tr>
                            <tr>
                              <td><strong>No. Telp </strong></td>
                              <td>&nbsp;&nbsp;: </td>
                              <td>&nbsp;&nbsp;+62 853 2473 0091</td>
                            </tr>
                            <tr>
                              <td><strong>Facebook </strong></td>
                              <td>&nbsp;&nbsp;: </td>
                              <td>&nbsp;&nbsp;E-Kosan.com</td>
                            </tr>
                            <tr>
                              <td><strong>Twitter </strong></td>
                              <td>&nbsp;&nbsp;: </td>
                              <td>&nbsp;&nbsp;@ekosanbdg</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include "components/footer.php";

?>
