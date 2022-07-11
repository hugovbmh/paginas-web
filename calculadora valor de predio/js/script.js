function salir(){
    //window.open("http://www.gmail.com","Blog")
    window.close();
}

function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}

function calcular(xnum1, xnum2){
    var l = document.getElementById("id_largo").value;
    var an = document.getElementById("id_an").value;
    var precio;
    var variac;
    
    xarea =  parseFloat(l)*parseFloat(an);
    document.getElementById("id_area").value = xarea;
    
    if(document.getElementById("id_dis").value==1){precio=450;}
    else if(document.getElementById("id_dis").value==2){precio=550;}
    else if(document.getElementById("id_dis").value==3){precio=650;}
    else if(document.getElementById("id_dis").value==4){precio=670;}
    else if(document.getElementById("id_dis").value==5){precio=750;}
    else{alert("Debe ingresar numeros.")}
    
    if(document.getElementById("id_pos").value==1){variac=parseFloat(0.9);}
    else if(document.getElementById("id_pos").value==2){variac=parseFloat(1.05);}
    else if(document.getElementById("id_pos").value==3){variac=parseFloat(1.1);}
    else if(document.getElementById("id_pos").value==4){variac=parseFloat(1.18);}
    else{alert("Debe ingresar numeros.")}
    
    var soles=xarea*precio*(parseFloat(variac));
    document.getElementById("id_sol").value=soles;
    var dol= soles/3.50;
    document.getElementById("id_dol").value=dol;

    var param = {"num1": xnum1, "num2": xnum2};
    $.ajax({
        data:param,
        url:"proceso.php",
        type:"post",
        beforeSend: function(){
            $("#id_area").html("PROCESANDO......");
        },
        success: function(data){
            $("#id_area").html(data);
        }
    })
}

