$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    
    });

    

    $('#editmodal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Editar To-do Id: ' + recipient)
    modal.find('#text-id').val(recipient)
   
    });

    $('#deletemodal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Eliminar To-do Id: ' + recipient)
    modal.find('#text-id').val(recipient)
   
    });
    $(document).ready(function(){
        /// Url actual
        let url = window.location.href;

        /// Elementos de li slider slider sos calendario acordeon usuarios contacto links messenger FAQ
        const tabs = ["index", "videos", "contacto", "Slider", "sos", "calendario", "acordeon", "contacto" , "usuarios" , "links", "seo", "FAQ"];
        tabs.forEach(e => {
            /// Agregar .php y ver si lo contiene en la url
            if (url.indexOf(e) !== -1) {
                /// Agregar tab- para hacer que coincida la Id
                setActive("tab-" + e);
            }

        });

        /// Funcion que asigna la clase active
        function setActive(id) {
          $("."+id).addClass("active");
        }

    });
    $('.au-btn-edit').click(function(e){
        e.preventDefault();
        var id = $(this).attr('data-whatever');
        var action = 'infoProducto';
    
    $.ajax({
                url: 'ajaxres',
                type: 'POST',
                async: true,
                data: { action:action,
                        id:id
                      },

                success: function(response){
                    console.log(response);
                    if(response != "error"){
                        var info = JSON.parse(response);
                        $('#nametodo').val(info.nombre);
                        $('#editfecha').val(info.fecha);
                        $('#edithora').val(info.hora);
                        $('#estadoSel').val(info.estado);
                    }
                },

                error: function(error){
                    console.log(error);
                }
            });

    });


    /* SLIDER */
        $('#deletemodalimg').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar imágen Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#editmodalIMG').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar imágen Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });
        
        $('.btn-warning').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infoimg';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            console.log(response);
                            var info = JSON.parse(response);
                            $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/"+info.folder+info.src);
                            $('#rutapasadaxd').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.btn-danger').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infoimg';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                // Asignamos el atributo src a la tag de imagen
                $('#imagenedit').attr('src', e.target.result);
                $('#label').text("Preview de la Imágen ");
                var path = $('#preview').val();
                var filename = path.replace(/^.*\\/, "");
                $('#namefile').val(filename);
                $('#namefile').addClass("progress-bar bg-success progress-bar-striped progress-bar-animated ");
                $('#namefile').attr("role", "progressbar");
                $('#namefile').attr("style", "width:100%; color:white");
                $('#namefile').attr("aria-valuenow", "100");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                // Asignamos el atributo src a la tag de imagen
                $('#imagencreate').attr('src', e.target.result);
                $('#label').text("Preview de la Imágen ");
                var path = $('#preview2').val();
                var filename = path.replace(/^.*\\/, "");
                $('#namefile2').val(filename);
                $('#namefile2').addClass("progress-bar bg-success progress-bar-striped progress-bar-animated ");
                $('#namefile2').attr("role", "progressbar");
                $('#namefile2').attr("style", "width:100%; color:white");
                $('#namefile2').attr("aria-valuenow", "100");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function get_extension(filename) {
            return filename.slice((filename.lastIndexOf('.') - 1 >>> 0) + 2);
        }

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                // Asignamos el atributo src a la tag de imagen
                var path = $('#preview3').val();
                var filename = path.replace(/^.*\\/, "");
                var extencion = get_extension(path);
                if(extencion == "pdf"){
                    $('#imagencreate').attr('src', "https://soysuvoz.org.gt/public/img/PDF_file_icon.svg");
                }
                else{
                    $('#imagencreate').attr('src', e.target.result);
                    $('#label').text("Preview de la Imágen ");
                }
                $('#namefile2').val(filename);
                $('#namefile2').addClass("progress-bar bg-success progress-bar-striped progress-bar-animated ");
                $('#namefile2').attr("role", "progressbar");
                $('#namefile2').attr("style", "width:100%; color:white");
                $('#namefile2').attr("aria-valuenow", "100");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                // Asignamos el atributo src a la tag de imagen
                var path = $('#preview4').val();
                var filename = path.replace(/^.*\\/, "");
                var extencion = get_extension(path);
                if(extencion == "pdf"){
                    $('#imagenedit').attr('src', "https://soysuvoz.org.gt/public/img/PDF_file_icon.svg");
                }
                else{
                    $('#imagenedit').attr('src', e.target.result);
                    $('#label').text("Preview de la Imágen ");
                }
                $('.namefile2').val(filename);
                $('.namefile2').addClass("progress-bar bg-success progress-bar-striped progress-bar-animated ");
                $('.namefile2').attr("role", "progressbar");
                $('.namefile2').attr("style", "width:100%; color:white");
                $('.namefile2').attr("aria-valuenow", "100");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    /* SLIDER */


    $("#preview").change(function() {
    readURL(this);
    });

    $("#preview2").change(function() {
    readURL2(this);
    });
    
    $("#preview3").change(function() {
    readURL3(this);
    });

    $("#preview4").change(function() {
    readURL4(this);
    });

    $(document).ready(function(){
        $('.venobox').venobox(); 
    });


    /* video */
        $('#deletemodalvid').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar video Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#editmodalvid').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar video Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.editvid').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infovid';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/"+info.folder+info.src);
                            $('#rutapasadavid').val(info.src);
                            $('#url').val(info.Urla);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deletevid').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infovid';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });
    /*video */

     /* video */
     $('#deletemodalsos').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar video Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#editmodalsos').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar video Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.editsos').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infosos';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            console.log(response);
                            var info = JSON.parse(response);
                            $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/"+info.folder+info.src);
                            $('#rutapasadavid').val(info.src);
                            $('#nombredit').val(info.nombre);
                            $('#cargoedit').val(info.rol);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deletesos').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infosos';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });
    /*video */
    
     /* acordeon */
     $('#deletemodalacord').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar acordeón Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#pdf').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#iframePDF').attr("src",recipient)
        });

        $('#editmodalacord').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar Acordeón Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.editacord').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infoacord';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            console.log(response);
                            var info = JSON.parse(response);
                            var exten =  info.src;
                            var extencion = get_extension(exten);
                            if(extencion == "pdf"){
                                $('#imagenedit').attr('src', "https://soysuvoz.org.gt/public/img/PDF_file_icon.svg");
                            }
                            else if(extencion !== ""){
                                $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/"+info.folder+info.src);
                                $('#label').text("Preview de la Imágen ");
                            }
                            else{
                                $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/imagenes/demoimg.jpg");
                                $('#labelacord').text("Imagén demo");
                            }
                            $('#rutapasadavid').val(info.src);
                            $('#tounlink').val(info.src);
                            $('#tituloedit').val(info.titulo);
                            $('#contenidoedit').val(info.contenido);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deleteacord').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infoacord';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },
                    
                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutaaeliminar').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $("#deletearch").click(function() {
            $("#rutapasadavid").val("");
            $('#imagenedit').attr('src', "https://soysuvoz.org.gt/public/imagenes/demoimg.jpg");
            $('.namefile2').val("No se ha cargado una imagen...");
                $('.namefile2').removeClass("progress-bar bg-success progress-bar-striped progress-bar-animated ");
                $('.namefile2').removeAttr("role");
                $('.namefile2').removeAttr("style");
                $('.namefile2').removeAttr("aria-valuenow");
        });
    /*acordeon  */



    /* contacto */
    $('#deletemodalcon').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar solicitud Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.bd-example-modal-lg').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('id')
            var correo = button.data('correo') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Enviar correo a solicitud Id: ' + recipient)
            modal.find('#staticEmail').val(correo)
            });

        $('#editmodalcon').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar solicitud Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });


        

        $('.editcon').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infosol';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            console.log(response);
                            var info = JSON.parse(response);
                            $('#empresa').val(info.empresa);
                            $('#Nombre').val(info.nombre);
                            $('#celular').val(info.celular);
                            $('#correo').val(info.correo);
                            $('#estado').val(info.state);
                            
                            var tipo = info.tipo;
                            var cantidad = info.cantidad;
                            if(tipo == "Bingo"){
                                $('#combo').val("tooglein");

                                var validation = {
                                    isNumber:function(str) {
                                        var pattern = /^\d+$/;
                                        return pattern.test(str);  // returns a boolean
                                    }             
                                };
                                if(validation.isNumber(cantidad)){
                                    $('#donaciontoggle').remove();
                                    $('#tooglen').append('<select class="form-control" id="new" name="donacion"><?php for($i = 1; $i < 12; $i++){ if ($i<2){$valor = $i*35; echo "<option>".$i." inscripcion Q.".$valor."</option>";}else if($i<11){$valor = $i*35; echo "<option>".$i." inscripciones Q.".$valor."</option>";}else if($i>10){$otro="Otro"; echo "<option value=".$otro.">Otro</option>";}} ?></select>');
                                    $('#here').append('<div class="form-row mb-2" id="new2"><div class="col-md-6"><input name="donacionOtro" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Escriba la cantidad de inscripciones que desee comprar" value="" onkeypress="return soloNumeros(event)" required><div class="valid-feedback">¡Gracias!</div><div class="valid-feedback" id="emailOK">¡Gracias!</div><div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o formato incorrecto.</div><div class="col-md-6"><input type="text" name="openyoureyes" value="1" style="display:none"></div></div></div>');
                                    $('#new').val("Otro");
                                    var total = cantidad/35;
                                    $('#donaciontoggle').val(total);
                                }
                                else
                                {
                                    $('#donaciontoggle').remove();
                                    $('#tooglen').append('<select class="form-control" id="new" name="donacion"><?php for($i = 1; $i < 12; $i++){ if ($i<2){$valor = $i*35; echo "<option>".$i." inscripcion Q.".$valor."</option>";}else if($i<11){$valor = $i*35; echo "<option>".$i." inscripciones Q.".$valor."</option>";}else if($i>10){$otro="Otro"; echo "<option value=".$otro.">Otro</option>";}} ?></select>');
                                    $('#new').val(cantidad);

                                    $('#new').change(function(){           
                                        var uwu = $(this).val()        
                                        if(uwu == "Otro"){
                                            $('#here').append('<div class="form-row mb-2" id="new2"><div class="col-md-6"><input name="donacionOtro" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Escriba la cantidad de inscripciones que desee comprar" value="" onkeypress="return soloNumeros(event)" required><div class="valid-feedback">¡Gracias!</div><div class="valid-feedback" id="emailOK">¡Gracias!</div><div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o formato incorrecto.</div><div class="col-md-6"><input type="text" name="openyoureyes" value="1" style="display:none"></div></div></div>');
                                        }
                                    });
                                }
                            }
                            else if(tipo == "Ayuda Recurrente"){
                                $('#combo').val("destroyy");
                                $('#donaciontoggle').val(cantidad);
                                $('#new').remove();
                                $('#new2').remove();
                                if($('#donaciontoggle').length > 0){
                                
                                }
                                else{
                                    $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
                                }
                            }
                            else if(tipo == "Donacion Unica"){
                                $('#donaciontoggle').val(cantidad);
                                $('#combo').val("destroy");
                                $('#new').remove();
                                $('#new2').remove();
                                if($('#donaciontoggle').length > 0){
                                
                                }
                                else{
                                    $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
                                }
                            }
                            

                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });



        });

        $('.deletecon').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infosol';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });


        $('#combo').change(function(){           
    var x = 0;  
    var ciudad = $(this).val()        
    if(ciudad == "tooglein"){
      $('#donaciontoggle').remove();
      $('#tooglen').append('<select class="form-control" id="new" name="donacion"><?php for($i = 1; $i < 12; $i++){ if ($i<2){$valor = $i*35; echo "<option>".$i." inscripcion Q.".$valor."</option>";}else if($i<11){$valor = $i*35; echo "<option>".$i." inscripciones Q.".$valor."</option>";}else if($i>10){$otro="Otro"; echo "<option value=".$otro.">Otro</option>";}} ?></select>');

      $('#new').change(function(){           
      var uwu = $(this).val()        
      if(uwu == "Otro"){
        $('#here').append('<div class="form-row mb-2" id="new2"><div class="col-md-6"><input name="donacionOtro" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Escriba la cantidad de inscripciones que desee comprar" value="" onkeypress="return soloNumeros(event)" required><div class="valid-feedback">¡Gracias!</div><div class="valid-feedback" id="emailOK">¡Gracias!</div><div class="invalid-feedback" data-validate="La opcion es necesaria">Campo vacio o formato incorrecto.</div><div class="col-md-6"><input type="text" name="openyoureyes" value="1" style="display:none"></div></div></div>');
      }
      });
    }
    else if(ciudad == "destroyy"){
      $('#new').remove();
      $('#new2').remove();
      if($('#donaciontoggle').length > 0){
       
      }
      else{
           $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
      }
      
    } 
    else if(ciudad == "destroy"){
      $('#new').remove();
      $('#new2').remove();
      if($('#donaciontoggle').length > 0){
       
      }
      else{
           $('#tooglen').append('<input name="donacion" type="text" class="form-control" id="donaciontoggle" minlength="2" maxlength="4"placeholder="Cantidad a donar desde Q.30" value="" onkeypress="return soloNumeros(event)" required>');
      }
    }
    });
    /*contacto*/

    /* links */
    $('#deletemodallink').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar link del footer Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });


        $('#editmodallink').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar link del footer Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.editlink').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infofoot';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            console.log(info);
                            $('#iconoE').attr("class",info.icono);
                            $('#nombreURL').val(info.nombre);
                            $('#linkURL').val(info.url);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deletelink').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infofoot';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });            
    /*links */

    /* acordeon */
    $('#deletemodalfaq').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar FAQ Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#editmodalfaq').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar FAQ Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.editfaq').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infofaq';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            console.log(response);
                            var info = JSON.parse(response);
                            $('#preg').val(info.Pregunta);
                            $('#resp').val(info.Respuesta);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deletefaq').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infofaq';
        
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadadelete').val(info.src);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });
    /*acordeon */

    /* usuarios */
    $('#deletemodaluser').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar usuario Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('#editmodaluser').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Editar usuario Id: ' + recipient)
        modal.find('#text-id').val(recipient)
        });

        $('.edituser').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'informacionusuario';
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            $('#rutapasadauser').val(info.img);
                            $('#imagenedit').attr("src", "https://soysuvoz.org.gt/public/admin/Profile/"+info.img);
                            $('#label').text("Preview del perfil");
                            $('#user').val(info.NombreUsuario);
                            $('#nom').val(info.Nombre);
                            $('#ape').val(info.Apellido);
                            $('#correoed').val(info.Correo);
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });

        $('.deleteuser').click(function(e){
            e.preventDefault();
            var id = $(this).attr('data-whatever');
            var action = 'infouserc';
            var modal = $(this);
        $.ajax({
                    url: 'ajaxres',
                    type: 'POST',
                    async: true,
                    data: { action:action,
                            id:id
                        },

                    success: function(response){
                        if(response != "error"){
                            var info = JSON.parse(response);
                            console.log(info);
                            if(info.idn == 1){
                                $('#error').html("No te dejare hacer eso :D, mantendré tus datos seguros por el momento");
                                $('#textodel').html("No puedes realizar esta accion porque solo existe un usuario activo");
                                $('#sep').attr("disabled","true");
                                $('#sep').html("Dije No");
                                $('#close').html("Salva mis datos, por favor");
                            }
                            else{
                                console.log(info);
                                $('#sep').removeAttr("disabled");
                                
                                    var actiondel = 'informacionusuario';
                                    $.ajax({
                                                url: 'ajaxres',
                                                type: 'POST',
                                                async: true,
                                                data: { action:actiondel,
                                                        id:id
                                                    },
                            
                                                success: function(response){
                                                    if(response != "error"){
                                                        var info2 = JSON.parse(response);
                                                        $('#rutapasadadelete').val(info2.img);
                                                        $('#id-del').val(info2.id);
                                                       
                                                    }
                                                },
                            
                                                error: function(error){
                                                    console.log(error);
                                                }
                                            });
                                            
                                
                                
                            }
                            
                        }
                    },

                    error: function(error){
                        console.log(error);
                    }
                });

        });
    /*usuarios */

    $(function () {
        $('.action-destroy').on('click', function () {
            $.iconpicker.batch('.icp.iconpicker-element', 'destroy');
        });
        // Live binding of buttons
        $(document).on('click', '.action-placement', function (e) {
            $('.action-placement').removeClass('active');
            $(this).addClass('active');
            $('.icp-opts').data('iconpicker').updatePlacement($(this).text());
            e.preventDefault();
            return false;
        });
        $('.action-create').on('click', function () {
            $('.icp-auto').iconpicker();

            $('.icp-dd').iconpicker({
                //title: 'Dropdown with picker',
                //component:'.btn > i'
            });
            $('.icp-opts').iconpicker({
                title: 'With custom options',
                icons: [
                    {
                        title: "fab fa-github",
                        searchTerms: ['repository', 'code']
                    },
                    {
                        title: "fas fa-heart",
                        searchTerms: ['love']
                    },
                    {
                        title: "fab fa-html5",
                        searchTerms: ['web']
                    },
                    {
                        title: "fab fa-css3",
                        searchTerms: ['style']
                    }
                ],
                selectedCustomClass: 'label label-success',
                mustAccept: true,
                placement: 'bottomRight',
                showFooter: true,
                // note that this is ignored cause we have an accept button:
                hideOnSelect: true,
                // fontAwesome5: true,
                templates: {
                    footer: '<div class="popover-footer">' +
                    '<div style="text-align:left; font-size:12px;">Placements: \n\
    <a href="#" class=" action-placement">inline</a>\n\
    <a href="#" class=" action-placement">topLeftCorner</a>\n\
    <a href="#" class=" action-placement">topLeft</a>\n\
    <a href="#" class=" action-placement">top</a>\n\
    <a href="#" class=" action-placement">topRight</a>\n\
    <a href="#" class=" action-placement">topRightCorner</a>\n\
    <a href="#" class=" action-placement">rightTop</a>\n\
    <a href="#" class=" action-placement">right</a>\n\
    <a href="#" class=" action-placement">rightBottom</a>\n\
    <a href="#" class=" action-placement">bottomRightCorner</a>\n\
    <a href="#" class=" active action-placement">bottomRight</a>\n\
    <a href="#" class=" action-placement">bottom</a>\n\
    <a href="#" class=" action-placement">bottomLeft</a>\n\
    <a href="#" class=" action-placement">bottomLeftCorner</a>\n\
    <a href="#" class=" action-placement">leftBottom</a>\n\
    <a href="#" class=" action-placement">left</a>\n\
    <a href="#" class=" action-placement">leftTop</a>\n\
    </div><hr></div>'
                }
            }).data('iconpicker').show();
        }).trigger('click');


        // Events sample:
        // This event is only triggered when the actual input value is changed
        // by user interaction
        $('.icp').on('iconpickerSelected', function (e) {
            $('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
                e.iconpickerInstance.options.iconBaseClass + ' ' +
                e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
        });
    });
    
    $("#envi").click(function() {
        $("#inputicon").val($(".iconpicker-component").find('i').attr('class'));
    });
    $("#editi").click(function() {
        $("#inputicono").val($("#iconoE").attr('class'));
    });

    window.addEventListener("keypress", function(event){
        if (event.keyCode == 13){
            event.preventDefault();
        }
    }, false);

    var iduwu = $('#codigousuario').val();
    var actionuwu = 'user';
    $.ajax({
        url: 'ajaxres',
        type: 'POST',
        async: true,
        data: { action:actionuwu,
                id:iduwu
            },

        success: function(response){
            if(response != "error"){
                var info = JSON.parse(response);
                $('.profile').attr("src", "https://soysuvoz.org.gt/public/admin/Profile/"+info.img);
            }
        },

        error: function(error){
            console.log(error);
        }
    });
    