function validarFormulario(){
    let titulo = document.getElementById("titulo").value;
    let genero = document.getElementById("genero").value;
    let anio = document.getElementById("anio").value;
    let calificacion = document.getElementById("calificacion").value;

    if(titulo === "" || genero === "" || anio === "" || calificacion === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }

    if(calificacion < 0 || calificacion > 10){
        alert("La calificación debe estar entre 0 y 10");
        return false;
    }

    return true;
}