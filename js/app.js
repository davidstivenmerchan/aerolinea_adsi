const mostrarac = document.getElementById("actividades")
const actividades = document.getElementById("acti")

const inicio = document.getElementById("inicio")
mostrarac.addEventListener('click', (e)=>{
    e.preventDefault();
    actividades.style.visibility="visible";
    inicio.style.visibility="hidden";
})
