<!DOCTYPE html>
<!--
Operación con Jquery y AJAX
Asincrono JavaScript XML(formato)   -----  Web Socket
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo04</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="js/jquery3.5.1.js" type="text/javascript"></script>
        <script>
            function nuevo(){
                //javascript
                var xv1 = document.getElementById('txtV01').value;
                var xv2 = document.getElementById('txtV02').value;
                
            }
            function calcular(xbase, xaltura){
                //jquery
                //Enviar los valores a una página PHP
                //Recibir los valores
                var param = {"Base": xbase, "Altura": xaltura};
                $.ajax({
                    data:param,
                    url:'proceso.php',
                    type:'post',
                    beforeSend: function (){
                        $('#area').html('Procesando el área ....');
                    },
                    success: function (data){
                        $('#area').html(data);
                    }
                }                   
                );
                
            }    
        </script>
        <div class="container">
            <h1>SEGUNDO EJEMPLO DE JQUERY CON AJAX</h1>
            <table border="1" class="table table-bordered" >
                
                <tbody>
                    <tr>
                        <td>Base</td>
                        <td>  <input type="text" id="txtBase" value="" size="5" /> </td>
                    </tr>
                    <tr>
                        <td>Altura</td>
                        <td><input type="text" id="txtAltura" value="" size="5" /></td>
                    </tr>
                    <tr>
                        <td>Area </td>
                        <td>
                            <div id="area">0</div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-success" onclick="nuevo();" >Nuevo</button></td>
                        <td><button class="btn btn-primary" onclick="calcular($('#txtBase').val(),$('#txtAltura').val());" >Calcular</button></td>
                    </tr>
                </tbody>
            </table>

        </div>
        
        
        <?php
            //echo 'Buen día <spam>SENATINO<&spam>';
        ?>
        
    </body>
</html>
