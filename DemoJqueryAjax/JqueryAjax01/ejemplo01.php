<!DOCTYPE html>
<!--
Operación con Jquery y AJAX
Asincrono JavaScript XML(formato)   -----  Web Socket
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo01</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="js/jquery3.5.1.js" type="text/javascript"></script>
        <script>
            function nuevo(){
                //javascript
                var xv1 = document.getElementById('txtV01').value;
                var xv2 = document.getElementById('txtV02').value;
                
            }
            function calcular(xnum1, xnum2){
                //jquery
                //Enviar los valores a una página PHP
                //Recibir los valores
                var param = {"num1": xnum1, "num2": xnum2};
                $.ajax({
                    data:param,
                    url:'proceso.php',
                    type:'post',
                    beforeSend: function (){
                        $('#suma').html('Procesando la suma ....');
                    },
                    success: function (data){
                        $('#suma').html(data);
                    }
                }                   
                );
                
            }    
        </script>
        <div class="container">
            <h1>PRIMER EJEMPLO DE JQUERY CON AJAX</h1>
            <table border="1" class="table table-bordered" >
                
                <tbody>
                    <tr>
                        <td>Valor 01</td>
                        <td>  <input type="text" name="txtV01" id="txtV01" value="" size="5" /> </td>
                    </tr>
                    <tr>
                        <td>Valor 02</td>
                        <td><input type="text" name="txtV02" id="txtV02" value="" size="5" /></td>
                    </tr>
                    <tr>
                        <td>Suma </td>
                        <td>
                            <div id="suma">0</div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-success" onclick="nuevo();" >Nuevo</button></td>
                        <td><button class="btn btn-primary" onclick="calcular($('#txtV01').val(),$('#txtV02').val());" >Calcular</button></td>
                    </tr>
                </tbody>
            </table>

        </div>
        
        
        <?php
            //echo 'Buen día <spam>SENATINO<&spam>';
        ?>
        
    </body>
</html>
