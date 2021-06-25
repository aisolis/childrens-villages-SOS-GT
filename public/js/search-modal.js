var consulta = $("#searchTable").DataTable();

$("#Busqueda").keyup(function(e){
    consulta.search($(this).val()).draw(); 
});