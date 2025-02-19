<footer class="content-footer footer bg-footer-theme">
    <hr style="border: none;
  height: 1px;
  color: #bfc3cf;
  background-color: #bfc3cf; ">
    <div class="container-xxl d-flex flex-wrap justify-content-center py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            RPGroup E-Learning V1.0 © <span style="color:#696cff">
                <script>
                document.write(new Date().getFullYear());
                </script>
            </span>
        </div>
        <!-- <div>
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

      <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
    </div> -->
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- <div class="buy-now">
  <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
</div> -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js">
</script>

<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<script>
$(document).ready(function() {
    //swal Failed
    var data = '<?php echo $this->session->flashdata('message-failed'); ?>';
    if (data != "") {
        Swal.fire({
            title: "Failed !",
            text: data,
            icon: "error"
        });
    }

    //swal Success
    var data = '<?php echo $this->session->flashdata('message-success'); ?>';
    if (data != "") {
        Swal.fire({
            title: "Yeay !",
            text: data,
            icon: "success"
        });
    }

    //swal info
    var data = '<?php echo $this->session->flashdata('message-info'); ?>';
    if (data != "") {
        Swal.fire({
            title: "Information !",
            text: data,
            icon: "info"
        });
    }
});
</script>
<script src="<?= base_url('assets/plugins'); ?>/datatables/datatables.js"></script>
<script src="<?= base_url('assets/plugins'); ?>/datatables/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('.datatable').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('.datatablenoorder').DataTable({
        "ordering": false
    });
});
</script>
<script src="<?= base_url('assets/plugins'); ?>/select2-bootstrap5-theme/js/select2.min.js"></script>
<script src="<?= base_url('assets/plugins'); ?>/select2-bootstrap5-theme/js/select2.full.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

</body>

</html>