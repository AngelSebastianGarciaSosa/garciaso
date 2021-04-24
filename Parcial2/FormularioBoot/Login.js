const emailG = 'Sebastian'
const passwordG = '18100174'

$(document).ready(() => {
    $("#login").click(function () {
        var NombredeAlumno = $("#NombredeAlumno").val(); 
        var password = $("#password").val(); 
        if (NombredeAlumno === '' || password === '') { 
            alert("Ingresa los datos, algun campo esta vacio."); 
        } else {
            if(emailG === NombredeAlumno && password === passwordG){ 
                alert('El login es exitoso :)'); 
            }else{
                alert('Datos incorrectos'); 
            }
        }
        $("#NombredeAlumno").focus(); 
    });
});