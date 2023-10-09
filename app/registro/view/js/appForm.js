function mostrarDatos() {
    let formularioChido = document.forms['formulario']; //lo que esta entra comillas es el id del formulario
    let txt='';
    for (let elemento of formularioChido) {
        txt += elemento.value + ' ';
        
    }
    let nom= document.getElementById('exampleFormControlTextarea1');
     nom.innerHTML = txt;
    console.log(txt);
    
    //document.getElementById('valores').innerHTML = txt;   
    
}