/*
QUEDE EN:
- Modificar los texto para SEO
- Añadir el código para compartir en fb, para el SEO de google y el favicon
- Añadir los rastreadores de google analitycs, search console y Hotjar
- Colocar los Rich Snippet
*/

/*
Corregir:
*/

/* URLs
Prueba-covid.cl
PcrEnTuEmpresa.cl
*/





//////////////////// Comportamiento de ocultarse del menu /////////////////////

/* --pocicion inicial */
let ubicacionPrincipal = window.pageYOffset;
// let $nav = document.querySelector("menuheader");
var menu = document.getElementById('menuheader'); //trae el elemento a modificar el CSS


/* --evento scroll */
window.addEventListener("scroll", function() {
    /* --muestra la ubicacion cada vez que hagas scroll */
    //console.log(window.pageYOffset);

    /* --donde nos encontramos actualmente */
    let desplazamientoActual = window.pageYOffset;

    /* --condicon para ocultar o mostrar el menu */
    if(ubicacionPrincipal >= desplazamientoActual) {
        /* --si es mayor o igual se muesta */
        menu.style.top = "0";
        console.log('Ubicacion Principal: ' + ubicacionPrincipal);
        console.log('desplazamiento: ' + desplazamientoActual);
    } else {
        /* --sino lo ocultamos añadiendo un top negativo */
        menu.style.top = "calc(-10vh)";
        console.log('Ubicacion Principal: ' + ubicacionPrincipal);
        console.log('desplazamiento: ' + desplazamientoActual);
    }

    /* --actulizamos la ubicacion principal */
    ubicacionPrincipal = desplazamientoActual;
});