<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leer json</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="js/jquery3.5.1.js" type="text/javascript"></script>
        
    </head>
    <body>
        <h1>Lectura de un archivo JSON</h1>
        <button class="btn btn-success" onclick="leer();" >Leer datos de alumnos con formato JSON</button>
        <h3>Resultados JSON</h3>
        <div id="listado"></div>
        
        
        
        
         <script>
            var zona = document.getElementById("listado");
            function leer(){
                var obj = new XMLHttpRequest();
                obj.onreadystatechange = function(){
                    if (obj.readyState==4 && obj.status==200){
                        var file = JSON.parse(obj.responseText); 
                        console.log(file);
                        for (var i in file) {
                             zona.innerHTML +=  file[i].Id_sinfo+ " " + file[i].Nombres +" " +file[i].Apellidos+" "+ "<br/>";   
                        }                        
                    }                        
                }
                obj.open("GET","alumnos.json","true");
                obj.send();
            }
        </script>      
    </body>
</html>
