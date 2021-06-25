<?php require RUTAAPP . '/vistas/includes/header.php'; ?>

<script>
    swal("Se agrego la publicacion")
    .then((value) => {
      location.href = "<?php echo RUTAPUBLIC; ?>/publicaciones/index";
    });
</script>

<?php require RUTAAPP . '/vistas/includes/footer.php'; ?>