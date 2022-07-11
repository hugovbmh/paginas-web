jQuery(document).ready(function($) {
    $("a").click(function(event){
        link=$(this).attr("href");
        $.ajax({
            url: link,
        })
        .done(function(html) {
            $("#page").empty().append(html);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function(){
            console.log("complete");
        });
        return false;
    });
});

function fncEnviar(){

    //Obtengo el valor de las etiquetas
    var nombre = document.getElementById("txtnombre").value;
    var apellido = document.getElementById("txtapellido").value;
    var edad = document.getElementById("txtedad").value;
    
    //En una variable Datos concateneo el valor de todas las variables
    var datos = "<strong>Nombres:</strong>" + nombre + "<br><strong>Apellido:</strong>" + apellido + "<br><strong>Edad:</strong>" + edad;

    //innerHTML permite agregar codigo HTML en una etiqueta

    document.getElementById("divMensaje").innerHTML = datos;
    
}