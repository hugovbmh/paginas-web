<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/script.js"></script>
    <title>Valor predio</title>

</head>
<body onload="mueveReloj()">
    <div class="header">
</div>
    <div class="container">
        <div class="container" id="practicafinal"></div>
        <button type="button" id="btnCargar">Cargar</button>

        <head>
            <h1>Valor de Predio</h1>
        </head>
		 <div style="float:right;width:50%; text-align: center;">
		<form name="form_reloj">
        <input type="text" name="reloj" size="10">
		</form>
		</div>
        <div style="float:left;width:50%; text-align: center;">
            <figure>
                <img src="img/depa.jpg" width="300px" height="500px" alt="">
            </figure>
        </div>
        <div style="float:left;width:50% ;">
            <table class="tb table table-responsive table-hover">
                <tr>
                    <td>Largo</td>
                    <td><input type="number" id="id_largo" class="form-control" ></td>
                </tr>
                <tr>
                    <td>Ancho</td>
                    <td><input type="number" id="id_an" class="form-control"></td>
                </tr>
                <tr>
                    <td>Distrito</td>
                <td>
                    <select name="" id="id_dis" class="form-control">
                       <option value="">-------</option>
                        <option value="1">Cercado de Lima</option>
                        <option value="2">La victoria </option>
                        <option value="3">Lince </option>
                        <option value="4">Jesús María</option>
                        <option value="5">Pueblo Libre</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Posición</td>
                <td>
                    <select name="" id="id_pos" class="form-control">
                        <option value="">-----</option>
                        <option value="1">Pasaje</option>
                        <option value="2">Jirón o Calle</option>
                        <option value="3">Avenida</option>
                        <option value="4">Frente al parque</option>
                    </select>
                </td>
            </tr>
                
                <tr>
                    <td>Area del terreno</td>
                    <td><input type="text" id="id_area" value ="0.0" class="form-control" readonly disabled ></td>
                </tr>
                <tr>
                    <td>Valor del terreno S/</td>
                    <td><input type="text" id="id_sol" value ="0.0" class="form-control" readonly disabled ></td>
                </tr>
                <tr>
                    <td>Valor del terreno U$.</td>
                    <td><input type="text" id="id_dol" value ="0.0" class="form-control" readonly disabled ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" class="btn btn-primary btn-block" value ="Calcular" onclick="calcular();">
                    </td>
                </tr>
            </table>
        </div>
        
        
        <div style="float:right;width:50%; text-align: center;">
            <input type="button" class="btn btn-primary" value ="  Salir  " onclick="salir();">
        </div>
    </div>
    
	
	<footer>
	<h1>Derechos Reservados 2020</h1>
	</footer>
	
    </body>
</html>