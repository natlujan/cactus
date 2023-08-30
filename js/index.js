function getClientes(){
    $.post("modulos/clientes/getClientes.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
 }

 $( document ).ready( function() {
    getClientes();
} )