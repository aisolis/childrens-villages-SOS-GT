<?php require RUTAAPP . '/vistas/includes/header.php'; ?>
<script>
    swal("Bienvenido")
    .then((value) => {
      location.href = "<?php echo RUTAPUBLIC; ?>/Admin/index";
    });
</script>
