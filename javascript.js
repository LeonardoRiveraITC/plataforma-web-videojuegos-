
function tabAccion(evt, tabNombre) {
   

 
/* Declara las variables */
    

var i, tabcontenido, tablinks;

    



/* Obtiene todos los elementos de la clase tabcontenido y los esconde */
   
 
tabcontenido = document.getElementsByClassName("tabcontenido");
    

for (i = 0; i < tabcontenido.length; i++) {
        

tabcontenido[i].style.display = "none";
    
}



   

/* Obtiene todos los elementos con la clase tablinks y remueve la clase active */
    

tablinks = document.getElementsByClassName("tablinks");
   
 
for (i = 0; i < tablinks.length; i++) {
        

tablinks[i].className = tablinks[i].className.replace(" active", "");
    
}


/* Muestra el tab elegido y añade la clase active */
    

document.getElementById(tabNombre).style.display = "block";
   

 evt.currentTarget.className += "active";



document.getElementById("titulo").style.display = "none";
} 
 

