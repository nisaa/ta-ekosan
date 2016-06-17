<!-- Modal Daftar -->
<div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
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
            <label for="fullname">Nama Lengkap</label>
            <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
          </div>
          <div class="form-group">
              <label for="e-mail">E-mail</label>
              <input type="email" class="form-control" name="email" id="e-mail" required>
          </div>
          <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
              <div class="row">
                <div class="col-md-6">
                  <label class="radio-inline">
                    <input type="radio" name="status" id="pencari_kos" value="pencari_kos" checked required> Pencari Kosan
                  </label>
                </div>
                <div class="col-md-6">
                  <label class="radio-inline">
                    <input type="radio" name="status" id="pemilik_kos" value="pemilik_kos" required> Pemilik Kosan
                  </label>
                </div>
              </div>
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
