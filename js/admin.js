
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
    var codUser = document.getElementById('idUser');
    if(codUser.disabled === true){
        codUser.disabled = false
    }
    var codReg = document.getElementById('idReg');
    if(codReg.disabled === true){
        codReg.disabled = false
    }
    var type = document.getElementById('tipo');
    if(type.disabled === true){
        type.disabled = false
    }
    var docu = document.getElementById('documento');
    if(docu.disabled === true){
        docu.disabled = false
    }
    var status = document.getElementById('estado');
    if(status.disabled === true){
        status.disabled = false
    }
    var name = document.getElementById('nombre');
    if(name.disabled === true){
        name.disabled = false
    }
    var last = document.getElementById('apellido');
    if(last.disabled === true){
        last.disabled = false
    }
    var user = document.getElementById('usuario');
    if(user.disabled === true){
        user.disabled = false
    }
    var datef = document.getElementById('fnacimiento');
    if(datef.disabled === true){
        datef.disabled = false
    }
    var profile = document.getElementById('perfil');
    if(profile.disabled === true){
        profile.disabled = false
    }
    var datei = document.getElementById('fingreso');
    if(datei.disabled === true){
        datei.disabled = false
    }
    var dater = document.getElementById('fretiro');
    if(dater.disabled === true){
        dater.disabled = false
    }
    var mes = document.getElementById('mesdata');
    if(mes.disabled === true){
        mes.disabled = false
    }
})