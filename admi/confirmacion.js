function confirmacion(e){
    if (confirm("¿Estas seguro de Eliminar o editar este Vuelo?")){
        return true;
    }else{
            e.preventDefault();
    }
}
let link = document.querySelectorAll(".elem")

for (var i = 0; i< link.length;i++){
    link[i].addEventListener('click', confirmacion);
}