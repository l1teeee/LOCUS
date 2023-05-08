
function validar(){

    titulo = document.getElementById('titu').value;
    descrip = document.getElementById('descr').value;

    if(titulo === null || titulo === ""){
        alert ('Completa el campo de titulo');
        return false;
    } 
    
    if (descrip === null || descrip === ""){
        alert ('Completa el campo de descripción');
        return false;
    }


}