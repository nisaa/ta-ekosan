        <script>
        $(function () {
            <?php if (isset($_SESSION['error']['login'])) { ?>
                $("#modalMasuk").modal("show");
            <?php
            }

            if (isset($_SESSION['error']['register'])) { ?>
                $("#modalDaftar").modal("show");
            <?php } ?>
        });
        </script>

        <!-- Modal Daftar -->
        <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Daftar</h4>
              </div>
              <div class="modal-body">
                <form action="auth.php?action=register" method="post">
                  <?php if (isset($_SESSION['error']['register'])) {?>
                    <div class="alert alert-danger">
                      <ul class="list-unstyled">
                        <?php
                        foreach ($_SESSION['error']['register'] as $value) {
                          echo "<li>" . $value . "</li>";
                        } ?>
                        <li></li>
                      </ul>
                    </div>
                  <?php } ?>
                  <div class="form-group">
                    <label for="fullname">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="fullname" autofocus>
                  </div>
                  <div class="form-group">
                      <label for="e-mail">E-mail <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                      <label for="username">Username <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                      <label for="password">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" id="pencari_kos" value="pencari_kos" checked> Pencari Kos
                          </label>
                        </div>
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" id="pemilik_kos" value="pemilik_kos"> Pemilik Kos
                          </label>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <span class="text-danger">*</span> wajib diisi
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                      <button type="submit" class="btn bg-maroon btn-flat">Daftar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <?php unset($_SESSION['error']); ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2"><a href="tentang.php">Tentang E-Kosan</a></div>
                    <div class="col-xs-1"><a href="faq.php">FAQ</a></div>
                    <div class="col-xs-6"><a href="kontak.php">Kontak</a></div>
                    <div class="col-xs-3 copyright">&copy; 2016 e-kosan.com</div>
                </div>
            </div>
        </footer>
    </body>
</html>
