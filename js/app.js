const inicioo = document.getElementById("inicioo")
const inicio = document.getElementById("inicio")
inicioo.addEventListener('click', (e)=>{
    e.preventDefault();
    inicio.style.display="block";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})

const mostrarac = document.getElementById("actividades")
const actividades = document.getElementById("acti")
mostrarac.addEventListener('click', (e)=>{
    e.preventDefault();
    actividades.style.display="block";
    inicio.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})
const mostrarvu = document.getElementById("vuelos")
const vuelos= document.getElementById("vuelosindex")
mostrarvu.addEventListener('click', (e)=>{
    e.preventDefault();
    vuelos.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})

const mostrarsomos = document.getElementById("somos")
const somos= document.getElementById("somoos")
mostrarsomos.addEventListener('click', (e)=>{
    e.preventDefault();
    somos.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})

const mostrarservi = document.getElementById("servicios")
const servicios= document.getElementById("servicioo")
mostrarservi.addEventListener('click', (e)=>{
    e.preventDefault();
    servicios.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    viajes.style.display="none";
})

const mostrartique = document.getElementById("tiquetes")
const tiquetes= document.getElementById("tiquee")
mostrartique.addEventListener('click', (e)=>{
    e.preventDefault();
    tiquetes.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})

const mostrarvi = document.getElementById("viajes")
const viajes= document.getElementById("viaje")
mostrarvi.addEventListener('click', (e)=>{
    e.preventDefault();
    viajes.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
})

const mostrarpre = document.getElementById("precios")
const precios= document.getElementById("precioo")
mostrarpre.addEventListener('click', (e)=>{
    e.preventDefault();
    precios.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    alojamiento.style.display="none";
    somos.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
})

const mostraraloja = document.getElementById("alojamiento")
const alojamiento= document.getElementById("aloja")
mostraraloja.addEventListener('click', (e)=>{
    e.preventDefault();
    alojamiento.style.display="block";
    inicio.style.display="none";
    actividades.style.display="none";
    vuelos.style.display="none";
    precios.style.display="none";
    tiquetes.style.display="none";
    servicios.style.display="none";
    viajes.style.display="none";
    somos.style.display="none";
})