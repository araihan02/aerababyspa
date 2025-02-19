<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url('assets/template/sneat'); ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="<?= base_url('assets/template/sneat'); ?>/assets/js/main.js"></script>

<!-- Page JS -->

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
</body>

</html>