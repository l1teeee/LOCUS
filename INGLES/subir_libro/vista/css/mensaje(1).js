

function mensajeclick(){
    document.getElementById("mensaje").innerHTML = alert('Para desbloquear más opciones debes iniciar sesión o registrarte.')
    document.getElementById("mensaje").innerHTML =" ";
}

function mensajeLclick(){
    document.getElementById("alerta").innerHTML = alert('Para dar like debes de iniciar sesión o registrate.')
    document.getElementById("alerta").innerHTML =" ";
}

function validar(){
    var comentario;
    comentario = document.getElementById("comentarioss").value;

    if (comentario ==" " || comentario==""){
        alert ("No hay commentario, porfavor escriba uno.");
        return false;
    }else{
        
    }
}

