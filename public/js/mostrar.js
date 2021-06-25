$(document).ready(function(){
    $("#Mostrar25").click(function(){
        $("#Contenido25").show();
        $("#Contenido50").hide();
        $("#Contenido75").hide();
    });

    $("#Mostrar50").click(function(){
        $("#Contenido25").show();
        $("#Contenido50").show();
        $("#Contenido75").hide();
    });

    $("#Mostrar75").click(function(){
        $("#Contenido25").show();
        $("#Contenido50").show();
        $("#Contenido75").show();
    });

});