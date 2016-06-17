        <script src="<?php echo $siteUrl . "resources/js/jquery-1.11.3.js"; ?>"></script>
        <script src="<?php echo $siteUrl . "resources/js/bootstrap.min.js"; ?>"></script>
        <script src="<?php echo $siteUrl . "resources/js/smooth-scroll.min.js"; ?>"></script>
        <script src="<?php echo $siteUrl . "resources/js/script.js"; ?>"></script>
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

        <?php unset($_SESSION['error']); ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2"><a href="#">Tentang E-Kosan</a></div>
                    <div class="col-xs-1"><a href="#">FAQ</a></div>
                    <div class="col-xs-7"><a href="#">Kontak</a></div>
                    <div class="col-xs-2">&copy; 2016 e-kosan.com</div>
                </div>
            </div>
        </footer>
    </body>
</html>
