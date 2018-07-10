 /**Empesemos**/
(function($) {
	 var menuH = document.getElementById("menuH");
	 menuH.addEventListener("click", aparecerM);

	 function aparecerM() {
	    var menuA = document.getElementById("menu_apa");
	    menuA.classList.toggle("menuListo");
	 }

	 function bajar(e, destino){
	     
	    e.preventDefault

	    $("html,body").animate({
	         scrollTop: $(destino).offset().top
	    }, 1000);

	}

	function bajarContacto(e){
		
	    bajar(e, "#Contacto_form");
	}

	$($(".ir_contact a")[0]).on("click", bajarContacto);
	$($(".ir_contact a")[1]).on("click", bajarContacto);

})(jQuery);