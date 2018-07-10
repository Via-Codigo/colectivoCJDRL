 // Busqueda de instituciones

var buscador = document.getElementById("busquedaInput");

var iniciativas = document.querySelectorAll(".matiene_alto");

var buscar = function(){
    var contenido = buscador.value.toLowerCase();

    for(var i = 0; i< iniciativas.length; i++){
        iniciativas[i].style.display= "none";
    }

    for(var i = 0; i< iniciativas.length; i++){
        if(iniciativas[i].dataset.nombre.toLowerCase().indexOf(contenido)!== -1){
            
            iniciativas[i].style.display= "block";
        }
    }

    
} 

buscador.addEventListener("keyup", buscar);