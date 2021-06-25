<?php require RUTAAPP . '/vistas/includes/header.php'; ?>

<script>
    swal("La publicacion ha sido eliminada")
    .then((value) => {
      location.href = "<?php echo RUTAPUBLIC; ?>/publicaciones/index";
    });
</script>

<?php require RUTAAPP . '/vistas/includes/footer.php'; ?>