 /**Empesemos**/

 var menuH = document.getElementById("menuH");
 menuH.addEventListener("click", aparecerM);

 function aparecerM() {
    var menuA = document.getElementById("menu_apa");
    menuA.classList.toggle("menuListo");
 }

 function bajar(e, destino){
     
    e.preventDefault
    $("body").animate({
         scrollTop: $(destino).offset().top
    }, 1000);

}

function bajarContacto(e){
    bajar(e, "#Contacto_form");
}

$("#ir_contact").on("click", bajarContacto);
$("#ir_contact_mobile").on("click", bajarContacto);

