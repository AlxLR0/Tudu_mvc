let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
    navlist.style.right = navlist.style.right === '0px' ? '-100%' : '0px'; 
    //La línea de código utiliza un operador ternario para verificar el valor actual de la propiedad right. Si el valor actual es '0px',
    // significa que el menú está visible, por lo que se establece el valor '-100%' para ocultarlo cambiando su posición fuera de la pantalla hacia la derecha. Si el valor actual no es '0px', 
    //significa que el menú está oculto, por lo que se establece el valor '0px' para mostrarlo moviéndolo hacia la izquierda de la pantalla.

    //asi en pocas palabras jeje, esta línea de código alterna entre ocultar y mostrar el menú vertical cambiando su posición en función de su valor actual.
};


// para el efecto scroll de scrollrevealjs.org

const sr = ScrollReveal({
    distance:'65px',
    duration: 2600,
    delay: 450,
    reset: true
})

sr.reveal('.hero-text',{delay:190, origin:'top'}); //para el texto de la pag
sr.reveal('.hero-img',{delay:490, origin:'rigth'});
sr.reveal('.icons',{delay:500, origin:'left'});
//sr.reveal('.scroll-down',{delay:500, origin:'rigth'});
