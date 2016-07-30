<?php

include "components/header.php";

?>

<div id="forget-password">
    <div class="container">
        <div class="login-box">
            <div class="login-box-header text-center">
                Lupa Password
            </div>

            <div class="login-box-body">
                <div> Silakan masukkan email yang digunakan saat mendaftar ke E-Kosan. Kami akan mengirimkan email untuk mereset password Anda</div>
                <form action="lupa_password.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" autofocus>
                    </div>
                    <div class="form-group">
                    <label for="status">Status</label>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" value="pencari_kos" checked> Pencari Kos
                          </label>
                        </div>
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" value="pemilik_kos"> Pemilik Kos
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn bg-maroon btn-flat">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

include "components/footer.php";

?>
