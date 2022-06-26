
function mostrar(id){
    /*let but = button.id;
    var cadena = but.split('&');
    var id = cadena[0];*/
    var x = document.getElementById(id);
    if (x.disabled === true) {
      x.disabled = false;
    } else {
      x.disabled = true;
    }
 }

document.getElementById("guardar").addEventListener('click',function habilitar(){

    var codUser = document.getElementById('idCourse');
    if(codUser.disabled === true){
        codUser.disabled = false
    }
    var codReg = document.getElementById('nombre');
    if(codReg.disabled === true){
        codReg.disabled = false
    }
    var type = document.getElementById('cantidad');
    if(type.disabled === true){
        type.disabled = false
    }

})
