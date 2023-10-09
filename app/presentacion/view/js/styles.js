function noStyle() {
    document.styleSheets[0].disabled = true;
    document.styleSheets[1].disabled = true;
    document.styleSheets[2].disabled = true;
    document.styleSheets[3].disabled = true;
}

function reStyle(n) {
    noStyle();
    document.styleSheets[n].disabled = false;
}



const nombres = ['fulano', 'sutano', 'magano'];
function agregarNombres() { 
    // Selecciona todos los elementos con la clase 'nombres' y almacena en una constante
    const listItems = document.querySelectorAll('.nombres');//con el queryselector selecciona a los elementos de esa clase para tuneralos

    for (let i = 0; i < listItems.length; i++) {
        listItems[i].querySelector('a').textContent = nombres[i]; // Encuentra el elemento 'a' dentro de cada elemento 'listItems' y cambia su contenido de texto al nombre que le toca
    }
}


function cambioName(cambio) {
    const nombreCompleto = document.querySelector('.nombre_completo');
    
    if (cambio == 0) {
        nombreCompleto.innerHTML = nombres[0]; //con innerHTML afecta el conenido del html en este caso al h1 con la clase nombre_completo
    }
    if (cambio == 1) {
        nombreCompleto.innerHTML = nombres[1];
    }
    if (cambio == 2) {
        nombreCompleto.innerHTML = nombres[2];
    }
    if (cambio == 3) {  
        nombreCompleto.innerHTML = 'Alejandro López Rubio';
    }

    Toastify({
        text: "Nombre cambiado",
        className: "info",
        close: true,
        gravity: "bottom",
        style: {
          background: "linear-gradient(to right, #00b09b, #96c93d)",
        }
      }).showToast();
}


// se manda llamar la funcion para que jale
agregarNombres();

document.styleSheets[1].disabled = true;
// Esto deshabilita la segunda hoja de estilo al cargar la página
